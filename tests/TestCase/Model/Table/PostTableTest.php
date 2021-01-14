<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PostTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PostTable Test Case
 */
class PostTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PostTable
     */
    protected $Post;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Post',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Post') ? [] : ['className' => PostTable::class];
        $this->Post = $this->getTableLocator()->get('Post', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Post);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
