<?php
namespace MrPrompt\Tests\Silex\Cors;

use MrPrompt\Silex\Cors\Cors;
use PHPUnit_Framework_TestCase;
use Silex\Application;

/**
 * @author Thiago Paes <mrprompt@gmail.com>
 */
class CorsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Application
     */
    private $app;

    public function setUp()
    {
        parent::setUp();

        $this->app = new Application();
    }

    public function tearDown()
    {
        $this->app = null;

        parent::tearDown();
    }

    /**
     * Test registration
     *
     * @test
     */
    public function registerMustBeCreateResources()
    {
        $this->app->register(new Cors());

        $this->assertArrayHasKey(Cors::HTTP_CORS, $this->app);
    }
}
