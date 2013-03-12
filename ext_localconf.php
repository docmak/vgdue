<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'USCHI.' . $_EXTKEY,
	'Person',
	array(
        'Language' => 'list',
		'Person' => 'list',
	),
	// non-cacheable actions
	array(
		'Language' => '',
        'Person' => '',
	)
);

?>