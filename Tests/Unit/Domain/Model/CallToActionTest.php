<?php
namespace FREESIXTYFIVE\FsfZollerCalltoaction\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class CallToActionTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerCalltoaction\Domain\Model\CallToAction
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \FREESIXTYFIVE\FsfZollerCalltoaction\Domain\Model\CallToAction();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
