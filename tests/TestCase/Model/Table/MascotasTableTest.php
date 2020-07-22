<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MascotasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MascotasTable Test Case
 */
class MascotasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MascotasTable
     */
    protected $Mascotas;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Mascotas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mascotas') ? [] : ['className' => MascotasTable::class];
        $this->Mascotas = TableRegistry::getTableLocator()->get('Mascotas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Mascotas);

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
