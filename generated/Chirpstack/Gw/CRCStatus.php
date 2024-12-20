<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gw/gw.proto

namespace Gw;

use UnexpectedValueException;

/**
 * Protobuf type <code>gw.CRCStatus</code>
 */
class CRCStatus
{
    /**
     * No CRC.
     *
     * Generated from protobuf enum <code>NO_CRC = 0;</code>
     */
    const NO_CRC = 0;
    /**
     * Bad CRC.
     *
     * Generated from protobuf enum <code>BAD_CRC = 1;</code>
     */
    const BAD_CRC = 1;
    /**
     * CRC OK.
     *
     * Generated from protobuf enum <code>CRC_OK = 2;</code>
     */
    const CRC_OK = 2;

    private static $valueToName = [
        self::NO_CRC => 'NO_CRC',
        self::BAD_CRC => 'BAD_CRC',
        self::CRC_OK => 'CRC_OK',
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

