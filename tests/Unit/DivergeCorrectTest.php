<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Diverge;

class DivergeCorrectTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $service = new Diverge();
        $this->assertTrue($service->diffPrice(110, 100) === true);
    }
}
