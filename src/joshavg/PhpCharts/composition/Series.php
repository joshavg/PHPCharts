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
     * this series' title
     *
     * @var string
     */
    private $title;

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

    /**
     * sets the title
     *
     * @param string $t
     * @return Series
     */
    public function setTitle($t)
    {
        $this->title = $t;

        return $this;
    }

    /**
     * returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
