<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    // Add the FlexForm
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['fsfzollercalltoaction_zollercalltoaction'] = 'recursive,select_key,pages';
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fsfzollercalltoaction_zollercalltoaction'] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
        'fsfzollercalltoaction_zollercalltoaction',
        'FILE:EXT:fsf_zoller_calltoaction/Configuration/FlexForms/flexform.xml'
    );
});
