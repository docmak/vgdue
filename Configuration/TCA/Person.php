<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_tuvgdue_domain_model_person'] = array(
	'ctrl' => $TCA['tx_tuvgdue_domain_model_person']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, first_name, last_name, email, image, telephone, mobile_phone, address, interpreter, translator, languages',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, first_name, last_name, email, image, telephone, mobile_phone, address, interpreter, translator, languages,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_tuvgdue_domain_model_person',
				'foreign_table_where' => 'AND tx_tuvgdue_domain_model_person.pid=###CURRENT_PID### AND tx_tuvgdue_domain_model_person.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'first_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tu_vgdue/Resources/Private/Language/locallang_db.xlf:tx_tuvgdue_domain_model_person.first_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'last_name' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tu_vgdue/Resources/Private/Language/locallang_db.xlf:tx_tuvgdue_domain_model_person.last_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'email' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tu_vgdue/Resources/Private/Language/locallang_db.xlf:tx_tuvgdue_domain_model_person.email',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'image' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tu_vgdue/Resources/Private/Language/locallang_db.xlf:tx_tuvgdue_domain_model_person.image',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_tuvgdue',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'telephone' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tu_vgdue/Resources/Private/Language/locallang_db.xlf:tx_tuvgdue_domain_model_person.telephone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'mobile_phone' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tu_vgdue/Resources/Private/Language/locallang_db.xlf:tx_tuvgdue_domain_model_person.mobile_phone',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'address' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tu_vgdue/Resources/Private/Language/locallang_db.xlf:tx_tuvgdue_domain_model_person.address',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'interpreter' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tu_vgdue/Resources/Private/Language/locallang_db.xlf:tx_tuvgdue_domain_model_person.interpreter',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'translator' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tu_vgdue/Resources/Private/Language/locallang_db.xlf:tx_tuvgdue_domain_model_person.translator',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'languages' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:tu_vgdue/Resources/Private/Language/locallang_db.xlf:tx_tuvgdue_domain_model_person.languages',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_tuvgdue_domain_model_language',
				'MM' => 'tx_tuvgdue_person_language_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_tuvgdue_domain_model_language',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
	),
);

?>