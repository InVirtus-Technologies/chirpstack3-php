<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: geo/geo.proto

namespace Geo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>geo.ResolveMultiFrameTDOARequest</code>
 */
class ResolveMultiFrameTDOARequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Device ID.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1 [json_name = "devEUI"];</code>
     */
    protected $dev_eui = '';
    /**
     * Frames meta-data.
     *
     * Generated from protobuf field <code>repeated .geo.FrameRXInfo frame_rx_info_set = 2 [json_name = "frameRXInfoSet"];</code>
     */
    private $frame_rx_info_set;
    /**
     * Device reference altitude.
     *
     * Generated from protobuf field <code>double device_reference_altitude = 3;</code>
     */
    protected $device_reference_altitude = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_eui
     *           Device ID.
     *     @type array<\Geo\FrameRXInfo>|\Google\Protobuf\Internal\RepeatedField $frame_rx_info_set
     *           Frames meta-data.
     *     @type float $device_reference_altitude
     *           Device reference altitude.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Geo\Geo::initOnce();
        parent::__construct($data);
    }

    /**
     * Device ID.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1 [json_name = "devEUI"];</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * Device ID.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1 [json_name = "devEUI"];</code>
     * @param string $var
     * @return $this
     */
    public function setDevEui($var)
    {
        GPBUtil::checkString($var, False);
        $this->dev_eui = $var;

        return $this;
    }

    /**
     * Frames meta-data.
     *
     * Generated from protobuf field <code>repeated .geo.FrameRXInfo frame_rx_info_set = 2 [json_name = "frameRXInfoSet"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFrameRxInfoSet()
    {
        return $this->frame_rx_info_set;
    }

    /**
     * Frames meta-data.
     *
     * Generated from protobuf field <code>repeated .geo.FrameRXInfo frame_rx_info_set = 2 [json_name = "frameRXInfoSet"];</code>
     * @param array<\Geo\FrameRXInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFrameRxInfoSet($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Geo\FrameRXInfo::class);
        $this->frame_rx_info_set = $arr;

        return $this;
    }

    /**
     * Device reference altitude.
     *
     * Generated from protobuf field <code>double device_reference_altitude = 3;</code>
     * @return float
     */
    public function getDeviceReferenceAltitude()
    {
        return $this->device_reference_altitude;
    }

    /**
     * Device reference altitude.
     *
     * Generated from protobuf field <code>double device_reference_altitude = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setDeviceReferenceAltitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->device_reference_altitude = $var;

        return $this;
    }

}

