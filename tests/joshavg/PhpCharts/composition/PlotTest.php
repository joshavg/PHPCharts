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
}