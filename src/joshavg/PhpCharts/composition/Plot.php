<?php
namespace joshavg\PhpCharts\composition;

/**
 * a combination of series and a way to draw them
 *
 * @author jgizycki
 */
class Plot
{

    /**
     * the set of series this plot draws
     *
     * @var Series[]
     */
    private $series = [];

    /**
     * sets the given series at the given index.
     * series are drawn in the numerical order. no need to define the indexes
     * in strict order.
     *
     * @param int    $ix
     * @param Series $series
     * @return Plot
     * @throws \InvalidArgumentException if the index is not an int
     */
    public function setSeries($ix, Series $series)
    {
        if (! is_int($ix)) {
            throw new \InvalidArgumentException('invalid ix: '.$ix);
        }
        $this->series[$ix] = $series;

        return $this;
    }
}
