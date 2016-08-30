<?php
namespace joshavg\PhpCharts\composition;

use joshavg\PhpCharts\model\RecordSet;
use PHPUnit\Framework\TestCase;

class SeriesTest extends TestCase
{

    /**
     * @test
     *
     * @return \joshavg\PhpCharts\model\RecordSet
     */
    public function provide()
    {
        return new RecordSet('series');
    }

    /**
     * @depends provide
     *
     * @param RecordSet $rec
     */
    public function testRecordSetApi(RecordSet $rec)
    {
        $series = new Series();

        $this->assertInstanceOf(Series::class, $series->setRecordSet($rec));
        $this->assertEquals('series', $series->getRecordSet()
            ->getName());
    }
}
