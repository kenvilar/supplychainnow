document.addEventListener("DOMContentLoaded", function () {
  function textLimiter() {
    var elementsWithTextLimit = document.querySelectorAll("[scn-text-limit]");
    elementsWithTextLimit.forEach(function (element) {
      var numberOfLines = parseInt(element.getAttribute("scn-text-limit"));
      if (!isNaN(numberOfLines)) {
        element.style.overflow = "hidden";
        element.style.textOverflow = "ellipsis";
        element.style.display = "-webkit-box";
        element.style.webkitLineClamp = numberOfLines;
        element.style.webkitBoxOrient = "vertical";
      }
    });
  }

  function removeWPAdminBar() {
    const wpadminbar = document.querySelector("#wpadminbar");
    const offset = 50;

    window.addEventListener("scroll", () => {
      const scrollPos = window.scrollY;

      if (scrollPos > offset) {
        if (!wpadminbar.classList.contains("hidden")) {
          wpadminbar.style.display = "none";
        }
      } else {
        wpadminbar.style.display = "";
      }
    });
  }

  function customSelectFunc() {
    // Initialize required DOM elements
    const form = document.querySelector(".form");
    const selectBox = document.querySelectorAll(".select");

    // Allow the form to submit normally (do not prevent default)

    // Initialize create custom select-box function
    const customSelectBox = (select) => {
      // Get of all select options
      // Convert them from node-list to array
      const selectOptions = select.querySelectorAll("option");
      const optionsArray = Array.prototype.slice.call(selectOptions);

      // Determine initially selected option (fallback to first)
      let initialSelectedIndex = optionsArray.findIndex((opt) => opt.selected);
      if (initialSelectedIndex < 0) initialSelectedIndex = 0;

      // Create custom Select element and add class select
      const customSelect = document.createElement("div");
      customSelect.classList.add("select");
      select.insertAdjacentElement("afterend", customSelect);

      // Create element for selected option input
      const selectedOption = document.createElement("div");
      selectedOption.classList.add("select-option");
	    selectedOption.classList.add("capitalize");
      selectedOption.innerHTML = `
		<div>${optionsArray[initialSelectedIndex].textContent}</div>
		<div class="pl-4" style="display:flex;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
	  <path d="M12.4198 0.451988L13.4798 1.51299L7.70277 7.29199C7.6102 7.38514 7.50012 7.45907 7.37887 7.50952C7.25762 7.55997 7.12759 7.58594 6.99627 7.58594C6.86494 7.58594 6.73491 7.55997 6.61366 7.50952C6.49241 7.45907 6.38233 7.38514 6.28977 7.29199L0.509766 1.51299L1.56977 0.452987L6.99477 5.87699L12.4198 0.451988Z" fill="currentColor"/>
	</svg></div>
		`;
      customSelect.appendChild(selectedOption);

      // Create element for select menu
      // Add Class and append it to custom select
      const selectWrapper = document.createElement("div");
      selectWrapper.classList.add("select-wrapper");
      customSelect.appendChild(selectWrapper);
      selectedOption.addEventListener("click", () => {
        toggleSelectBox(selectWrapper);
      });

      // Create wrapper element for select items
      // Add class and append it to select-menu element
      const selectMenu = document.createElement("ul");
      selectMenu.classList.add("select-menu");
      selectWrapper.appendChild(selectMenu);

      // Loops all options and create custom option
      // Append it to the select-munu-inner element
      optionsArray.forEach((option, idx) => {
        const optionItem = document.createElement("li");
        optionItem.classList.add("select-item");
	      optionItem.classList.add("capitalize");
        optionItem.dataset.value = option.value;
        optionItem.textContent = option.textContent;
        selectMenu.appendChild(optionItem);

        optionItem.addEventListener("click", () => {
          setSelectedOption(optionItem, selectedOption, selectWrapper, select);
        });

        // Reflect initial selected state
        if (idx === initialSelectedIndex) {
          optionItem.classList.add("is-selected");
        }
      });

      // Add click event to close custom select-box if clicked outside
      // Hide the original select-box
      document.addEventListener("click", (e) => {
        isClickedOutside(e, customSelect, selectWrapper);
      });
      select.style.display = "none";
    };

    // Toggle for display and hide select-menu
    const toggleSelectBox = (selectWrapper) => {
      if (selectWrapper.offsetParent !== null) {
        selectWrapper.style.display = "none";
      } else {
        selectWrapper.style.display = "block";
      }
    };

    // Set the selected option function
    const setSelectedOption = (
      optionItem,
      selectedOption,
      selectWrapper,
      select,
    ) => {
      // Get value and label from clicked custom option
      const optionValue = optionItem.dataset.value;
      const optionLabel = optionItem.textContent;

      // Change the text on selected element
      // Change the value on Selected field
      selectedOption.innerHTML = `
		<div>${optionLabel}</div>
		<div style="display:flex;"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none">
	  <path d="M12.4198 0.451988L13.4798 1.51299L7.70277 7.29199C7.6102 7.38514 7.50012 7.45907 7.37887 7.50952C7.25762 7.55997 7.12759 7.58594 6.99627 7.58594C6.86494 7.58594 6.73491 7.55997 6.61366 7.50952C6.49241 7.45907 6.38233 7.38514 6.28977 7.29199L0.509766 1.51299L1.56977 0.452987L6.99477 5.87699L12.4198 0.451988Z" fill="currentColor"/>
	</svg></div>
		`;
      select.value = optionValue;

      // Close the select menu
      // Remove selected class from prev selected option
      // Add selected class to clicked option
      selectWrapper.style.display = "none";
      selectWrapper.querySelectorAll("li").forEach((li) => {
        if (li.classList.contains("is-selected")) {
          li.classList.remove("is-selected");
        }
      });
      optionItem.classList.add("is-selected");

      // Submit the form when a selection is made
      if (form) {
        form.submit();
      }
    };

    // Check if select-box are exist
    // Loops and create custom select-box for each select element
    if (selectBox.length > 0) {
      selectBox.forEach((select) => {
        customSelectBox(select);
      });
    }

    // Close the select if clicked outside select-menu element
    const isClickedOutside = (e, customSelect, selectWrapper) => {
      if (e.target.closest(".select") === null) {
        if (e.target !== customSelect) {
          if (selectWrapper.offsetParent !== null) {
            selectWrapper.style.display = "none";
          }
        }
      }
    };
  }

  textLimiter();
  removeWPAdminBar();
  customSelectFunc();
});
