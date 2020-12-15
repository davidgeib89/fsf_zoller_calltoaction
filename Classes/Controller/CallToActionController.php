<?php
namespace FREESIXTYFIVE\FsfZollerCalltoaction\Controller;


/***
 *
 * This file is part of the "Zoller Call to Action" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 David Geib <d.geib@freesixtyfive.de>, FREESIXTYFIVE
 *
 ***/
/**
 * CallToActionController
 */
class CallToActionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * callToActionRepository
     * 
     * @var \FREESIXTYFIVE\FsfZollerCalltoaction\Domain\Repository\CallToActionRepository
     */
    protected $callToActionRepository = null;

    /**
     * @param \FREESIXTYFIVE\FsfZollerCalltoaction\Domain\Repository\CallToActionRepository $callToActionRepository
     */
    public function injectCallToActionRepository(\FREESIXTYFIVE\FsfZollerCalltoaction\Domain\Repository\CallToActionRepository $callToActionRepository)
    {
        $this->callToActionRepository = $callToActionRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $callToActions = $this->callToActionRepository->findAll();
        $this->view->assign('callToActions', $callToActions);
    }
}
