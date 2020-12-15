<?php
namespace FREESIXTYFIVE\FsfZollerCalltoaction\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class CallToActionControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerCalltoaction\Controller\CallToActionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerCalltoaction\Controller\CallToActionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCallToActionsFromRepositoryAndAssignsThemToView()
    {

        $allCallToActions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $callToActionRepository = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerCalltoaction\Domain\Repository\CallToActionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $callToActionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCallToActions));
        $this->inject($this->subject, 'callToActionRepository', $callToActionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('callToActions', $allCallToActions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
