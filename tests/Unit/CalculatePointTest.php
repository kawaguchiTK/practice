<?php

namespace Tests\Unit;

use App\Services\CalculatePointService;
use PHPUnit\Framework\TestCase;

class CalculatePointTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    /**
     * @test
     */
    public function calcPoint_0()
    {
        $result = CalculatePointService::calcPoint(0);
        $this->assertSame(0,$result);
    }

    /**
     * @test
     */
    public function calcPoint_10()
    {
        $result = CalculatePointService::calcPoint(1000);
        $this->assertSame(10, $result);
    }

    /**
     * @test
     */
    public function calcPoint_200()
    {
        $result = CalculatePointService::calcPoint(10000);
        $this->assertSame(200, $result);
    }

}
