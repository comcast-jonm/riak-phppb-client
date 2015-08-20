<?php
/**
 * Auto generated from riak_yokozuna.proto at 2015-08-20 00:06:02
 *
 * riak.api.pb.messages package
 */

namespace Riak\Api\Pb\Messages {
/**
 * RpbYokozunaIndexGetResp message
 */
class RpbYokozunaIndexGetResp extends \ProtobufMessage
{
    /* Field index constants */
    const INDEX = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::INDEX => array(
            'name' => 'index',
            'repeated' => true,
            'type' => '\Riak\Api\Pb\Messages\RpbYokozunaIndex'
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
        $this->values[self::INDEX] = array();
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
     * Appends value to 'index' list
     *
     * @param \Riak\Api\Pb\Messages\RpbYokozunaIndex $value Value to append
     *
     * @return null
     */
    public function appendIndex(\Riak\Api\Pb\Messages\RpbYokozunaIndex $value)
    {
        return $this->append(self::INDEX, $value);
    }

    /**
     * Clears 'index' list
     *
     * @return null
     */
    public function clearIndex()
    {
        return $this->clear(self::INDEX);
    }

    /**
     * Returns 'index' list
     *
     * @return \Riak\Api\Pb\Messages\RpbYokozunaIndex[]
     */
    public function getIndex()
    {
        return $this->get(self::INDEX);
    }

    /**
     * Returns 'index' iterator
     *
     * @return ArrayIterator
     */
    public function getIndexIterator()
    {
        return new \ArrayIterator($this->get(self::INDEX));
    }

    /**
     * Returns element from 'index' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Riak\Api\Pb\Messages\RpbYokozunaIndex
     */
    public function getIndexAt($offset)
    {
        return $this->get(self::INDEX, $offset);
    }

    /**
     * Returns count of 'index' list
     *
     * @return int
     */
    public function getIndexCount()
    {
        return $this->count(self::INDEX);
    }
}
}