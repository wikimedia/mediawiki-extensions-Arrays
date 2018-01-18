<?php

/**
 * Initialization file for the 'Arrays' (former 'ArrayExtension') extension.
 *
 * Documentation: https://www.mediawiki.org/wiki/Extension:Arrays
 * Support:       https://www.mediawiki.org/wiki/Extension_talk:Arrays
 * Source code:   https://gerrit.wikimedia.org/r/p/mediawiki/extensions/Arrays
 *
 * @file
 * @ingroup Arrays
 *
 * @license MIT
 * @version: 2.2.0
 *
 * @author Li Ding < lidingpku@gmail.com >
 * @author Jie Bao
 * @author Daniel Werner < danweetz@web.de > (since version 1.3)
 */
if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'Arrays' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['Arrays'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for the Arrays extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the Arrays extension requires MediaWiki 1.30+' );
}
