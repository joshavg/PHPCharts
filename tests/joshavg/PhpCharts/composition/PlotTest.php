<?php
namespace joshavg\PhpCharts\composition;

use PHPUnit\Framework\TestCase;

class PlotTest extends TestCase
{

    public function testSetSeriesInvalidIndex()
    {
        $this->expectException(\InvalidArgumentException::class);

        $plot = new Plot();
        $plot->setSeries('bla', new Series());
    }

    public function testSetSeries()
    {
        $plot = new Plot();
        $this->assertInstanceOf(Plot::class, $plot->setSeries(5, new Series()));
        $this->assertEquals(1, count($plot->getSeries()));
        $this->assertArrayHasKey(5, $plot->getSeries());
    }
}
