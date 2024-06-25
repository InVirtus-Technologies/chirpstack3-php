<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gw/gw.proto

namespace Chirpstack\Gateway;

use UnexpectedValueException;

/**
 * Protobuf type <code>gw.CodeRate</code>
 */
class CodeRate
{
    /**
     * Generated from protobuf enum <code>CR_UNDEFINED = 0;</code>
     */
    const CR_UNDEFINED = 0;
    /**
     * LoRa
     *
     * Generated from protobuf enum <code>CR_4_5 = 1;</code>
     */
    const CR_4_5 = 1;
    /**
     * Generated from protobuf enum <code>CR_4_6 = 2;</code>
     */
    const CR_4_6 = 2;
    /**
     * Generated from protobuf enum <code>CR_4_7 = 3;</code>
     */
    const CR_4_7 = 3;
    /**
     * Generated from protobuf enum <code>CR_4_8 = 4;</code>
     */
    const CR_4_8 = 4;
    /**
     * LR-FHSS
     *
     * Generated from protobuf enum <code>CR_3_8 = 5;</code>
     */
    const CR_3_8 = 5;
    /**
     * Generated from protobuf enum <code>CR_2_6 = 6;</code>
     */
    const CR_2_6 = 6;
    /**
     * Generated from protobuf enum <code>CR_1_4 = 7;</code>
     */
    const CR_1_4 = 7;
    /**
     * Generated from protobuf enum <code>CR_1_6 = 8;</code>
     */
    const CR_1_6 = 8;
    /**
     * Generated from protobuf enum <code>CR_5_6 = 9;</code>
     */
    const CR_5_6 = 9;
    /**
     * LoRa 2.4 gHz
     *
     * Generated from protobuf enum <code>CR_LI_4_5 = 10;</code>
     */
    const CR_LI_4_5 = 10;
    /**
     * Generated from protobuf enum <code>CR_LI_4_6 = 11;</code>
     */
    const CR_LI_4_6 = 11;
    /**
     * Generated from protobuf enum <code>CR_LI_4_8 = 12;</code>
     */
    const CR_LI_4_8 = 12;

    private static $valueToName = [
        self::CR_UNDEFINED => 'CR_UNDEFINED',
        self::CR_4_5 => 'CR_4_5',
        self::CR_4_6 => 'CR_4_6',
        self::CR_4_7 => 'CR_4_7',
        self::CR_4_8 => 'CR_4_8',
        self::CR_3_8 => 'CR_3_8',
        self::CR_2_6 => 'CR_2_6',
        self::CR_1_4 => 'CR_1_4',
        self::CR_1_6 => 'CR_1_6',
        self::CR_5_6 => 'CR_5_6',
        self::CR_LI_4_5 => 'CR_LI_4_5',
        self::CR_LI_4_6 => 'CR_LI_4_6',
        self::CR_LI_4_8 => 'CR_LI_4_8',
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
