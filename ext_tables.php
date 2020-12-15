<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FREESIXTYFIVE.FsfZollerCalltoaction',
            'Zollercalltoaction',
            'Zoller Call to Action'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fsf_zoller_calltoaction', 'Configuration/TypoScript', 'Zoller Call to Action');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fsfzollercalltoaction_domain_model_calltoaction', 'EXT:fsf_zoller_calltoaction/Resources/Private/Language/locallang_csh_tx_fsfzollercalltoaction_domain_model_calltoaction.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fsfzollercalltoaction_domain_model_calltoaction');

    }
);
