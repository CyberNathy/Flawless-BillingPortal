<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmailSubscriberTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmailSubscriberTable Test Case
 */
class EmailSubscriberTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmailSubscriberTable
     */
    protected $EmailSubscriber;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.EmailSubscriber',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('EmailSubscriber') ? [] : ['className' => EmailSubscriberTable::class];
        $this->EmailSubscriber = $this->getTableLocator()->get('EmailSubscriber', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->EmailSubscriber);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmailSubscriberTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
