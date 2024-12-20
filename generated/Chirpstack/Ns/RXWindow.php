<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use UnexpectedValueException;

/**
 * Protobuf type <code>ns.RXWindow</code>
 */
class RXWindow
{
    /**
     * Receive window 1
     *
     * Generated from protobuf enum <code>RX1 = 0;</code>
     */
    const RX1 = 0;
    /**
     * Receive window 2
     *
     * Generated from protobuf enum <code>RX2 = 1;</code>
     */
    const RX2 = 1;

    private static $valueToName = [
        self::RX1 => 'RX1',
        self::RX2 => 'RX2',
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

