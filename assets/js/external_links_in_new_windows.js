/*!
 * ExternalLinks: open external links in a new tab via window.open
 * - leaves href alone for SEO
 * - adds onclick="javascript:window.open(...); return false;" automatically
 * - no jQuery
 */
(function () {
    console.log("location.hostname", location.hostname);
    var ExternalLinks = {
        config: {
            sameSiteDomains: [location.hostname], // treat these as same site
            forceList: [], // domains, URL prefixes, RegExp, or (URL) => bool
            ignoreList: [], // same shape as forceList
            selector: "a[href]", writeOnclick: true, // auto add onclick attribute
            features: "noopener" // window.open features string
        },

        init: function (opts) {
            if (opts && typeof opts === "object") {
                for (var k in opts) this.config[k] = opts[k];
            }

            // click handler, capture phase so we win over other handlers
            document.addEventListener("click", this._onClick.bind(this), true);

            // initial pass to add onclick
            this.refresh();

            // watch for new or changed links
            if ("MutationObserver" in window) {
                var self = this;
                var mo = new MutationObserver(function (muts) {
                    for (var i = 0; i < muts.length; i++) {
                        var m = muts[i];
                        if (m.type === "childList") {
                            self._scanNodeList(m.addedNodes);
                        } else if (m.type === "attributes" && m.target && m.target.tagName === "A") {
                            self._maybeTag(m.target);
                        }
                    }
                });
                mo.observe(document.documentElement, {
                    childList: true, subtree: true, attributes: true, attributeFilter: ["href", "data-external"]
                });
            }
        },

        refresh: function () {
            var links = document.querySelectorAll(this.config.selector);
            for (var i = 0; i < links.length; i++) this._maybeTag(links[i]);
        },

        // handle user click
        _onClick: function (e) {
            if (e.defaultPrevented || e.button !== 0 || e.metaKey || e.ctrlKey || e.shiftKey || e.altKey) return;

            var a = e.target && (e.target.closest ? e.target.closest(this.config.selector) : this._closestLink(e.target));
            if (!a) return;

            var href = a.getAttribute("href") || "";
            if (!href || href.charAt(0) === "#" || a.hasAttribute("download") || a.dataset.external === "ignore") return;

            var url = this._toURL(href);
            if (!url) return;

            // if we already wrote an onclick for this link, let that run and bail to avoid double window.open
            if (this.config.writeOnclick && a.getAttribute("data-extlinks") === "1") return;

            if (!this._shouldOpenNew(url)) return;

            e.preventDefault();
            window.open(url.href, "_blank", this.config.features);
        },

        // tag a single anchor with onclick if needed
        _maybeTag: function (a) {
            if (!a || a.tagName !== "A") return;

            var href = a.getAttribute("href") || "";
            if (!href || href.charAt(0) === "#" || a.hasAttribute("download")) return;

            // honor per element opts
            if (a.dataset.external === "ignore") {
                this._clearTag(a);
                return;
            }
            var url = this._toURL(href);
            if (!url) return;

            // allow per element force
            var forced = a.dataset.external === "force" || this._matches(this.config.forceList, url);
            var should = forced || this._shouldOpenNew(url);

            if (should) {
                this._applyOnclick(a, url);
            } else {
                this._clearTag(a);
            }
        },

        _applyOnclick: function (a, url) {
            if (!this.config.writeOnclick) return;

            // dont overwrite someone elses onclick unless we wrote it before
            var ours = a.getAttribute("data-extlinks") === "1";
            if (a.hasAttribute("onclick") && !ours) return;

            var js = "javascript:window.open('" + this._escSingle(url.href) + "', '_blank', '" + this.config.features + "'); return false;";
            a.setAttribute("onclick", js);
            a.setAttribute("data-extlinks", "1"); // mark so our click handler knows to skip
            // keep rel safe if author added target later
            var rel = (a.getAttribute("rel") || "").split(/\s+/).filter(Boolean);
            if (rel.indexOf("noopener") === -1 && this.config.features.indexOf("noopener") > -1) rel.push("noopener");
            a.setAttribute("rel", rel.join(" ").trim());
        },

        _clearTag: function (a) {
            if (a.getAttribute("data-extlinks") === "1") {
                a.removeAttribute("onclick");
                a.removeAttribute("data-extlinks");
            }
        },

        _scanNodeList: function (nodes) {
            for (var i = 0; i < nodes.length; i++) {
                var n = nodes[i];
                if (!n || n.nodeType !== 1) continue; // element
                if (n.tagName === "A") this._maybeTag(n);
                var links = n.querySelectorAll ? n.querySelectorAll("a[href]") : [];
                for (var j = 0; j < links.length; j++) this._maybeTag(links[j]);
            }
        },

        _closestLink: function (el) {
            while (el && el !== document && el.nodeType === 1) {
                if (el.tagName && el.tagName.toLowerCase() === "a" && el.hasAttribute("href")) return el;
                el = el.parentNode;
            }
            return null;
        },

        _toURL: function (href) {
            try {
                return new URL(href, document.baseURI);
            } catch (err) {
                return null;
            }
        },

        _escSingle: function (s) {
            return String(s).replace(/'/g, "\\'");
        },

        _isHttp: function (url) {
            return url.protocol === "http:" || url.protocol === "https:";
        },

        _isSameSite: function (url) {
            var list = this.config.sameSiteDomains || [];
            for (var i = 0; i < list.length; i++) {
                var d = String(list[i] || "").toLowerCase();
                if (!d) continue;
                var host = url.hostname.toLowerCase();
                if (host === d || host.slice(-(d.length + 1)) === "." + d) return true;
            }
            return false;
        },

        _matches: function (rules, url) {
            for (var i = 0; i < rules.length; i++) {
                var rule = rules[i];
                if (typeof rule === "string") {
                    if (rule.indexOf("://") > -1 || rule.indexOf("//") === 0) {
                        if (url.href.indexOf(rule) === 0) return true; // URL prefix match
                    } else {
                        var host = url.hostname.toLowerCase(); // domain match
                        var dom = rule.toLowerCase();
                        if (host === dom || host.slice(-(dom.length + 1)) === "." + dom) return true;
                    }
                } else if (rule instanceof RegExp) {
                    if (rule.test(url.href)) return true;
                } else if (typeof rule === "function") {
                    try {
                        if (rule(url)) return true;
                    } catch (e) {
                    }
                }
            }
            return false;
        },

        _shouldOpenNew: function (url) {
            if (!this._isHttp(url)) return false;
            if (this._matches(this.config.ignoreList, url)) return false;
            if (this._matches(this.config.forceList, url)) return true;
            return !this._isSameSite(url);
        }
    };

    window.ExternalLinks = ExternalLinks;

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", function () {
            ExternalLinks.init();
        });
    } else {
        ExternalLinks.init();
    }
})();
