<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Chirpstack\Common;

use UnexpectedValueException;

/**
 * Protobuf type <code>common.RegParamsRevision</code>
 */
class RegParamsRevision
{
    /**
     * Generated from protobuf enum <code>A = 0;</code>
     */
    const A = 0;
    /**
     * Generated from protobuf enum <code>B = 1;</code>
     */
    const B = 1;
    /**
     * Generated from protobuf enum <code>RP002_1_0_0 = 2;</code>
     */
    const RP002_1_0_0 = 2;
    /**
     * Generated from protobuf enum <code>RP002_1_0_1 = 3;</code>
     */
    const RP002_1_0_1 = 3;
    /**
     * Generated from protobuf enum <code>RP002_1_0_2 = 4;</code>
     */
    const RP002_1_0_2 = 4;
    /**
     * Generated from protobuf enum <code>RP002_1_0_3 = 5;</code>
     */
    const RP002_1_0_3 = 5;
    /**
     * Generated from protobuf enum <code>RP002_1_0_4 = 6;</code>
     */
    const RP002_1_0_4 = 6;

    private static $valueToName = [
        self::A => 'A',
        self::B => 'B',
        self::RP002_1_0_0 => 'RP002_1_0_0',
        self::RP002_1_0_1 => 'RP002_1_0_1',
        self::RP002_1_0_2 => 'RP002_1_0_2',
        self::RP002_1_0_3 => 'RP002_1_0_3',
        self::RP002_1_0_4 => 'RP002_1_0_4',
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

