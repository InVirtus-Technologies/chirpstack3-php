<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/as.proto

namespace PBAs;

use UnexpectedValueException;

/**
 * Protobuf type <code>as.ErrorType</code>
 */
class ErrorType
{
    /**
     * Generic error type.
     *
     * Generated from protobuf enum <code>GENERIC = 0;</code>
     */
    const GENERIC = 0;
    /**
     * OTAA error.
     *
     * Generated from protobuf enum <code>OTAA = 1;</code>
     */
    const OTAA = 1;
    /**
     * Uplink frame-counter was reset.
     *
     * Generated from protobuf enum <code>DATA_UP_FCNT_RESET = 2;</code>
     */
    const DATA_UP_FCNT_RESET = 2;
    /**
     * Uplink MIC error.
     *
     * Generated from protobuf enum <code>DATA_UP_MIC = 3;</code>
     */
    const DATA_UP_MIC = 3;
    /**
     * Downlink payload size error.
     *
     * Generated from protobuf enum <code>DEVICE_QUEUE_ITEM_SIZE = 4;</code>
     */
    const DEVICE_QUEUE_ITEM_SIZE = 4;
    /**
     * Downlink frame-counter error.
     *
     * Generated from protobuf enum <code>DEVICE_QUEUE_ITEM_FCNT = 5;</code>
     */
    const DEVICE_QUEUE_ITEM_FCNT = 5;
    /**
     * Uplink frame-counter retransmission.
     *
     * Generated from protobuf enum <code>DATA_UP_FCNT_RETRANSMISSION = 6;</code>
     */
    const DATA_UP_FCNT_RETRANSMISSION = 6;
    /**
     * Downlink gateway error.
     *
     * Generated from protobuf enum <code>DATA_DOWN_GATEWAY = 7;</code>
     */
    const DATA_DOWN_GATEWAY = 7;

    private static $valueToName = [
        self::GENERIC => 'GENERIC',
        self::OTAA => 'OTAA',
        self::DATA_UP_FCNT_RESET => 'DATA_UP_FCNT_RESET',
        self::DATA_UP_MIC => 'DATA_UP_MIC',
        self::DEVICE_QUEUE_ITEM_SIZE => 'DEVICE_QUEUE_ITEM_SIZE',
        self::DEVICE_QUEUE_ITEM_FCNT => 'DEVICE_QUEUE_ITEM_FCNT',
        self::DATA_UP_FCNT_RETRANSMISSION => 'DATA_UP_FCNT_RETRANSMISSION',
        self::DATA_DOWN_GATEWAY => 'DATA_DOWN_GATEWAY',
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
