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
     * @dataProvider  dataProvider_for_calcPoint
     */
    public function calcPoint(int $expected , int $amount)
    {
        $result = CalculatePointService::calcPoint($amount);
        $this->assertSame($expected,$result);
    }

    public function dataProvider_for_calcPoint(): array
    {
        return [
            '購入金額が0' => [0,0],
            '購入金額が999' => [0,999],
            '購入金額が1000' => [10,1000],
            '購入金額が10000' => [200,10000]
        ];
    }


}
