<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.GatewayStats</code>
 */
class GatewayStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Timestamp of the (aggregated) measurement.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     */
    protected $timestamp = null;
    /**
     * Packets received by the gateway.
     *
     * Generated from protobuf field <code>int32 rx_packets_received = 2;</code>
     */
    protected $rx_packets_received = 0;
    /**
     * Packets received by the gateway that passed the CRC check.
     *
     * Generated from protobuf field <code>int32 rx_packets_received_ok = 3;</code>
     */
    protected $rx_packets_received_ok = 0;
    /**
     * Packets received by the gateway for transmission.
     *
     * Generated from protobuf field <code>int32 tx_packets_received = 4;</code>
     */
    protected $tx_packets_received = 0;
    /**
     * Packets transmitted by the gateway.
     *
     * Generated from protobuf field <code>int32 tx_packets_emitted = 5;</code>
     */
    protected $tx_packets_emitted = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $timestamp
     *           Timestamp of the (aggregated) measurement.
     *     @type int $rx_packets_received
     *           Packets received by the gateway.
     *     @type int $rx_packets_received_ok
     *           Packets received by the gateway that passed the CRC check.
     *     @type int $tx_packets_received
     *           Packets received by the gateway for transmission.
     *     @type int $tx_packets_emitted
     *           Packets transmitted by the gateway.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * Timestamp of the (aggregated) measurement.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }

    public function clearTimestamp()
    {
        unset($this->timestamp);
    }

    /**
     * Timestamp of the (aggregated) measurement.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Packets received by the gateway.
     *
     * Generated from protobuf field <code>int32 rx_packets_received = 2;</code>
     * @return int
     */
    public function getRxPacketsReceived()
    {
        return $this->rx_packets_received;
    }

    /**
     * Packets received by the gateway.
     *
     * Generated from protobuf field <code>int32 rx_packets_received = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRxPacketsReceived($var)
    {
        GPBUtil::checkInt32($var);
        $this->rx_packets_received = $var;

        return $this;
    }

    /**
     * Packets received by the gateway that passed the CRC check.
     *
     * Generated from protobuf field <code>int32 rx_packets_received_ok = 3;</code>
     * @return int
     */
    public function getRxPacketsReceivedOk()
    {
        return $this->rx_packets_received_ok;
    }

    /**
     * Packets received by the gateway that passed the CRC check.
     *
     * Generated from protobuf field <code>int32 rx_packets_received_ok = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRxPacketsReceivedOk($var)
    {
        GPBUtil::checkInt32($var);
        $this->rx_packets_received_ok = $var;

        return $this;
    }

    /**
     * Packets received by the gateway for transmission.
     *
     * Generated from protobuf field <code>int32 tx_packets_received = 4;</code>
     * @return int
     */
    public function getTxPacketsReceived()
    {
        return $this->tx_packets_received;
    }

    /**
     * Packets received by the gateway for transmission.
     *
     * Generated from protobuf field <code>int32 tx_packets_received = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTxPacketsReceived($var)
    {
        GPBUtil::checkInt32($var);
        $this->tx_packets_received = $var;

        return $this;
    }

    /**
     * Packets transmitted by the gateway.
     *
     * Generated from protobuf field <code>int32 tx_packets_emitted = 5;</code>
     * @return int
     */
    public function getTxPacketsEmitted()
    {
        return $this->tx_packets_emitted;
    }

    /**
     * Packets transmitted by the gateway.
     *
     * Generated from protobuf field <code>int32 tx_packets_emitted = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTxPacketsEmitted($var)
    {
        GPBUtil::checkInt32($var);
        $this->tx_packets_emitted = $var;

        return $this;
    }

}

