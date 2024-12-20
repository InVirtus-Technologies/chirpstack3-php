<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/device.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.DeviceStats</code>
 */
class DeviceStats extends \Google\Protobuf\Internal\Message
{
    /**
     * Timestamp of the (aggregated) measurement.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 1;</code>
     */
    protected $timestamp = null;
    /**
     * Packets received from the device.
     *
     * Generated from protobuf field <code>uint32 rx_packets = 2;</code>
     */
    protected $rx_packets = 0;
    /**
     * Average RSSI (as reported by the gateway(s)).
     *
     * Generated from protobuf field <code>float gw_rssi = 3;</code>
     */
    protected $gw_rssi = 0.0;
    /**
     * Average SNR (as reported by the gateway(s)).
     *
     * Generated from protobuf field <code>float gw_snr = 4;</code>
     */
    protected $gw_snr = 0.0;
    /**
     * Packets received by frequency.
     *
     * Generated from protobuf field <code>map<uint32, uint32> rx_packets_per_frequency = 5;</code>
     */
    private $rx_packets_per_frequency;
    /**
     * Packets received by DR.
     *
     * Generated from protobuf field <code>map<uint32, uint32> rx_packets_per_dr = 6;</code>
     */
    private $rx_packets_per_dr;
    /**
     * Error count.
     *
     * Generated from protobuf field <code>map<string, uint32> errors = 7;</code>
     */
    private $errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $timestamp
     *           Timestamp of the (aggregated) measurement.
     *     @type int $rx_packets
     *           Packets received from the device.
     *     @type float $gw_rssi
     *           Average RSSI (as reported by the gateway(s)).
     *     @type float $gw_snr
     *           Average SNR (as reported by the gateway(s)).
     *     @type array|\Google\Protobuf\Internal\MapField $rx_packets_per_frequency
     *           Packets received by frequency.
     *     @type array|\Google\Protobuf\Internal\MapField $rx_packets_per_dr
     *           Packets received by DR.
     *     @type array|\Google\Protobuf\Internal\MapField $errors
     *           Error count.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Device::initOnce();
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
     * Packets received from the device.
     *
     * Generated from protobuf field <code>uint32 rx_packets = 2;</code>
     * @return int
     */
    public function getRxPackets()
    {
        return $this->rx_packets;
    }

    /**
     * Packets received from the device.
     *
     * Generated from protobuf field <code>uint32 rx_packets = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRxPackets($var)
    {
        GPBUtil::checkUint32($var);
        $this->rx_packets = $var;

        return $this;
    }

    /**
     * Average RSSI (as reported by the gateway(s)).
     *
     * Generated from protobuf field <code>float gw_rssi = 3;</code>
     * @return float
     */
    public function getGwRssi()
    {
        return $this->gw_rssi;
    }

    /**
     * Average RSSI (as reported by the gateway(s)).
     *
     * Generated from protobuf field <code>float gw_rssi = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setGwRssi($var)
    {
        GPBUtil::checkFloat($var);
        $this->gw_rssi = $var;

        return $this;
    }

    /**
     * Average SNR (as reported by the gateway(s)).
     *
     * Generated from protobuf field <code>float gw_snr = 4;</code>
     * @return float
     */
    public function getGwSnr()
    {
        return $this->gw_snr;
    }

    /**
     * Average SNR (as reported by the gateway(s)).
     *
     * Generated from protobuf field <code>float gw_snr = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setGwSnr($var)
    {
        GPBUtil::checkFloat($var);
        $this->gw_snr = $var;

        return $this;
    }

    /**
     * Packets received by frequency.
     *
     * Generated from protobuf field <code>map<uint32, uint32> rx_packets_per_frequency = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getRxPacketsPerFrequency()
    {
        return $this->rx_packets_per_frequency;
    }

    /**
     * Packets received by frequency.
     *
     * Generated from protobuf field <code>map<uint32, uint32> rx_packets_per_frequency = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setRxPacketsPerFrequency($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->rx_packets_per_frequency = $arr;

        return $this;
    }

    /**
     * Packets received by DR.
     *
     * Generated from protobuf field <code>map<uint32, uint32> rx_packets_per_dr = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getRxPacketsPerDr()
    {
        return $this->rx_packets_per_dr;
    }

    /**
     * Packets received by DR.
     *
     * Generated from protobuf field <code>map<uint32, uint32> rx_packets_per_dr = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setRxPacketsPerDr($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::UINT32, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->rx_packets_per_dr = $arr;

        return $this;
    }

    /**
     * Error count.
     *
     * Generated from protobuf field <code>map<string, uint32> errors = 7;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Error count.
     *
     * Generated from protobuf field <code>map<string, uint32> errors = 7;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setErrors($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->errors = $arr;

        return $this;
    }

}

