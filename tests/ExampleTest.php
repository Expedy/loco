<?php

namespace Expedy\Loco\Tests;

use Orchestra\Testbench\TestCase;
use Expedy\Loco\LocoServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LocoServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
