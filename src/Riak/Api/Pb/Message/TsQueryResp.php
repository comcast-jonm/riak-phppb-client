<?php
/**
 * Auto generated from riak_ts.proto at 2016-09-24 09:49:42
 *
 * Basho\Riak\Api\Pb\Message package
 */

namespace Basho\Riak\Api\Pb\Message {
/**
 * TsQueryResp message
 */
class TsQueryResp extends \ProtobufMessage
{
    /* Field index constants */
    const COLUMNS = 1;
    const ROWS = 2;
    const DONE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COLUMNS => array(
            'name' => 'columns',
            'repeated' => true,
            'type' => '\Basho\Riak\Api\Pb\Message\TsColumnDescription'
        ),
        self::ROWS => array(
            'name' => 'rows',
            'repeated' => true,
            'type' => '\Basho\Riak\Api\Pb\Message\TsRow'
        ),
        self::DONE => array(
            'default' => true, 
            'name' => 'done',
            'required' => false,
            'type' => 8,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::COLUMNS] = array();
        $this->values[self::ROWS] = array();
        $this->values[self::DONE] = true;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'columns' list
     *
     * @param \Basho\Riak\Api\Pb\Message\TsColumnDescription $value Value to append
     *
     * @return null
     */
    public function appendColumns(\Basho\Riak\Api\Pb\Message\TsColumnDescription $value)
    {
        return $this->append(self::COLUMNS, $value);
    }

    /**
     * Clears 'columns' list
     *
     * @return null
     */
    public function clearColumns()
    {
        return $this->clear(self::COLUMNS);
    }

    /**
     * Returns 'columns' list
     *
     * @return \Basho\Riak\Api\Pb\Message\TsColumnDescription[]
     */
    public function getColumns()
    {
        return $this->get(self::COLUMNS);
    }

    /**
     * Returns 'columns' iterator
     *
     * @return ArrayIterator
     */
    public function getColumnsIterator()
    {
        return new \ArrayIterator($this->get(self::COLUMNS));
    }

    /**
     * Returns element from 'columns' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Basho\Riak\Api\Pb\Message\TsColumnDescription
     */
    public function getColumnsAt($offset)
    {
        return $this->get(self::COLUMNS, $offset);
    }

    /**
     * Returns count of 'columns' list
     *
     * @return int
     */
    public function getColumnsCount()
    {
        return $this->count(self::COLUMNS);
    }

    /**
     * Appends value to 'rows' list
     *
     * @param \Basho\Riak\Api\Pb\Message\TsRow $value Value to append
     *
     * @return null
     */
    public function appendRows(\Basho\Riak\Api\Pb\Message\TsRow $value)
    {
        return $this->append(self::ROWS, $value);
    }

    /**
     * Clears 'rows' list
     *
     * @return null
     */
    public function clearRows()
    {
        return $this->clear(self::ROWS);
    }

    /**
     * Returns 'rows' list
     *
     * @return \Basho\Riak\Api\Pb\Message\TsRow[]
     */
    public function getRows()
    {
        return $this->get(self::ROWS);
    }

    /**
     * Returns 'rows' iterator
     *
     * @return ArrayIterator
     */
    public function getRowsIterator()
    {
        return new \ArrayIterator($this->get(self::ROWS));
    }

    /**
     * Returns element from 'rows' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Basho\Riak\Api\Pb\Message\TsRow
     */
    public function getRowsAt($offset)
    {
        return $this->get(self::ROWS, $offset);
    }

    /**
     * Returns count of 'rows' list
     *
     * @return int
     */
    public function getRowsCount()
    {
        return $this->count(self::ROWS);
    }

    /**
     * Sets value of 'done' property
     *
     * @param bool $value Property value
     *
     * @return null
     */
    public function setDone($value)
    {
        return $this->set(self::DONE, $value);
    }

    /**
     * Returns value of 'done' property
     *
     * @return bool
     */
    public function getDone()
    {
        return $this->get(self::DONE);
    }
}
}