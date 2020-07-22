<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VeterinariosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VeterinariosTable Test Case
 */
class VeterinariosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VeterinariosTable
     */
    protected $Veterinarios;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Veterinarios',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Veterinarios') ? [] : ['className' => VeterinariosTable::class];
        $this->Veterinarios = TableRegistry::getTableLocator()->get('Veterinarios', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Veterinarios);

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
}
