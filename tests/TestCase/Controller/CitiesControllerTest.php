<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CitiesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CitiesController Test Case
 */
class CitiesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cities',
        'app.countries',
        'app.subcontinents',
        'app.continents',
        'app.projects',
        'app.users',
        'app.genres',
        'app.organization_types',
        'app.project_stages',
        'app.categories',
        'app.categories_projects'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
