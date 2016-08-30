<?php
namespace joshavg\PhpCharts\model;

class RecordSetTest extends \PHPUnit_Framework_TestCase
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
     * @covers \joshavg\PhpCharts\model\RecordSet::getSeries()
     *
     * @param RecordSet $set
     */
    public function testGetName(RecordSet $set)
    {
        $this->assertEquals('series', $set->getName());
    }

    /**
     * @depends provide
     *
     * @param RecordSet $set
     */
    public function testAdd(RecordSet $set)
    {
        $this->assertInstanceOf(RecordSet::class, $set->add(10));
        return $set;
    }

    /**
     * @depends testAdd
     *
     * @param RecordSet $set
     */
    public function testGetValues(RecordSet $set)
    {
        $this->assertInstanceOf(\Iterator::class, $set->getValues());

        foreach ($set->getValues() as $value) {
            $this->assertEquals(10, $value);
        }
    }
}
