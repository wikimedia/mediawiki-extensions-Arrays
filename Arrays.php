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
 * @version: 2.1.0
 *
 * @author Li Ding < lidingpku@gmail.com >
 * @author Jie Bao
 * @author Daniel Werner < danweetz@web.de > (since version 1.3)
 */

if ( ! defined( 'MEDIAWIKI' ) ) {
	die();
};

require_once __DIR__ . '/ExtArrays.php';

$wgExtensionCredits['parserhook'][] = [
	'path'           => __FILE__,
	'name'           => 'Arrays',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:Arrays',
	'author'         => [
		'Li Ding',
		'Jie Bao',
		'[https://www.mediawiki.org/wiki/User:Danwe Daniel Werner]'
	],
	'descriptionmsg' => 'arrays-desc',
	'license-name'   => 'MIT',
	'version'        => ExtArrays::VERSION
];

// Internationalization
$wgMessagesDirs['Arrays'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['ArraysMagic'] = ExtArrays::getDir() . '/Arrays.i18n.magic.php';

// hooks registration:
$wgHooks['ParserFirstCallInit'][] = 'ExtArrays::init';
$wgHooks['ParserClearState'   ][] = 'ExtArrays::onParserClearState';

// parser tests registration:
$wgParserTestFiles[] = ExtArrays::getDir() . '/tests/parser/arrayParserTests.txt';
$wgParserTestFiles[] = ExtArrays::getDir() . '/tests/parser/arrayLoopsInteractionParserTests.txt';

// Include the settings file:
require_once ExtArrays::getDir() . '/Arrays.settings.php';
