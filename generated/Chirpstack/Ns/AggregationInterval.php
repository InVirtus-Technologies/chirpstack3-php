<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use UnexpectedValueException;

/**
 * Protobuf type <code>ns.AggregationInterval</code>
 */
class AggregationInterval
{
    /**
     * Generated from protobuf enum <code>SECOND = 0;</code>
     */
    const SECOND = 0;
    /**
     * Generated from protobuf enum <code>MINUTE = 1;</code>
     */
    const MINUTE = 1;
    /**
     * Generated from protobuf enum <code>HOUR = 2;</code>
     */
    const HOUR = 2;
    /**
     * Generated from protobuf enum <code>DAY = 3;</code>
     */
    const DAY = 3;
    /**
     * Generated from protobuf enum <code>WEEK = 4;</code>
     */
    const WEEK = 4;
    /**
     * Generated from protobuf enum <code>MONTH = 5;</code>
     */
    const MONTH = 5;
    /**
     * Generated from protobuf enum <code>QUARTER = 6;</code>
     */
    const QUARTER = 6;
    /**
     * Generated from protobuf enum <code>YEAR = 7;</code>
     */
    const YEAR = 7;

    private static $valueToName = [
        self::SECOND => 'SECOND',
        self::MINUTE => 'MINUTE',
        self::HOUR => 'HOUR',
        self::DAY => 'DAY',
        self::WEEK => 'WEEK',
        self::MONTH => 'MONTH',
        self::QUARTER => 'QUARTER',
        self::YEAR => 'YEAR',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
