<?php
namespace joshavg\PhpCharts\composition;

use joshavg\PhpCharts\model\RecordSet;

/**
 * represents a series of a plot
 *
 * @author jgizycki
 */
class Series
{

    /**
     * data that shall be displayed
     *
     * @var RecordSet
     */
    private $recordset;

    /**
     * sets the recordset that shall be displayed
     *
     * @param RecordSet $rec
     * @return Series
     */
    public function setRecordSet(RecordSet $rec)
    {
        $this->recordset = $rec;

        return $this;
    }

    /**
     * returns the data that shall be displayed
     *
     * @return RecordSet
     */
    public function getRecordSet()
    {
        return $this->recordset;
    }
}
