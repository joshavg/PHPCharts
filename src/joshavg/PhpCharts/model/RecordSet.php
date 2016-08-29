<?php
namespace joshavg\PhpCharts\model;

/**
 * set of data appliable to a diagram
 *
 * @author jgizycki
 */
class RecordSet
{

    /**
     * identificator for this record set
     *
     * @var string
     */
    private $name;

    /**
     * array of values
     *
     * @var array
     */
    private $values;

    /**
     * ctor
     *
     * @param string $name
     *            series identificator
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * adds a value to this series
     *
     * @param  numeric $value
     * @return RecordSet
     */
    public function add($value)
    {
        $this->values[] = $value;

        return $this;
    }

    /**
     *
     * @return string the series identificator
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return \Iterator
     */
    public function getValues()
    {
        return new \ArrayIterator($this->values);
    }
}
