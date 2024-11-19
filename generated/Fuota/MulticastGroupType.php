<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fuota/fuota.proto

namespace Fuota;

use UnexpectedValueException;

/**
 * Protobuf type <code>fuota.MulticastGroupType</code>
 */
class MulticastGroupType
{
    /**
     * Class-B.
     *
     * Generated from protobuf enum <code>CLASS_B = 0;</code>
     */
    const CLASS_B = 0;
    /**
     * Class-C.
     *
     * Generated from protobuf enum <code>CLASS_C = 1;</code>
     */
    const CLASS_C = 1;

    private static $valueToName = [
        self::CLASS_B => 'CLASS_B',
        self::CLASS_C => 'CLASS_C',
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
