<?php

add_action( "after_setup_theme", function () {
	$dir = __DIR__;
	if ( is_dir( $dir ) ) {
		$files = [];

		$iterator = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $dir, FilesystemIterator::SKIP_DOTS ) );

		foreach ( $iterator as $fileInfo ) {
			if ( $fileInfo->isFile() && strtolower( $fileInfo->getExtension() ) === "php" ) {
				$path = $fileInfo->getPathname();

				// Avoid requiring this index file again
				if ( realpath( $path ) === __FILE__ ) {
					continue;
				}

				$files[] = $path;
			}
		}

		// Deterministic load order
		natcasesort( $files );

		foreach ( $files as $file ) {
			require_once $file;
		}
	}
} );
