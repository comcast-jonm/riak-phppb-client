<?php
/**
 * Auto generated from riak_dt.proto at 2016-09-21 11:26:05
 *
 * Basho\Riak\Api\Pb\Message package
 */
namespace Basho\Riak\Api\Pb\Message\MapUpdate {
/**
 * FlagOp enum embedded in MapUpdate message
 */
final class FlagOp
{
    const ENABLE = 1;
    const DISABLE = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'ENABLE' => self::ENABLE,
            'DISABLE' => self::DISABLE,
        );
    }
}
}