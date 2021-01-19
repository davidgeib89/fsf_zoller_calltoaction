<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FREESIXTYFIVE.FsfZollerCalltoaction',
            'Zollercalltoaction',
            [
                'CallToAction' => 'list'
            ],
            // non-cacheable actions
            [
                'CallToAction' => ''
            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.plugins {
                    elements {
                        zollercalltoaction {
                            iconIdentifier = fsf_zoller_calltoaction-plugin-zollercalltoaction
                            title = Call to Action
                            description = LLL:EXT:fsf_zoller_calltoaction/Resources/Private/Language/locallang_db.xlf:tx_fsf_zoller_calltoaction_zollercalltoaction.description
                            tt_content_defValues {
                                CType = list
                                list_type = fsfzollercalltoaction_zollercalltoaction
                            }
                        }
                    }
                    show = *
                }
           }'
        );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'fsf_zoller_calltoaction-plugin-zollercalltoaction',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:fsf_zoller_calltoaction/Resources/Public/Icons/zoller_z.svg']
			);
		
    }
);
