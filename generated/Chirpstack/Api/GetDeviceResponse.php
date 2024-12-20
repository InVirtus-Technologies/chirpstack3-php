<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/device.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetDeviceResponse</code>
 */
class GetDeviceResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Device object.
     *
     * Generated from protobuf field <code>.api.Device device = 1;</code>
     */
    protected $device = null;
    /**
     * Last seen timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_seen_at = 5 [json_name = "lastSeenAt"];</code>
     */
    protected $last_seen_at = null;
    /**
     * The device battery status
     * 0:      The end-device is connected to an external power source
     * 1..254: The battery level, 1 being at minimum and 254 being at maximum
     * 255:    The end-device was not able to measure the battery level
     * 256:    The device-status is not available.
     *
     * Generated from protobuf field <code>uint32 device_status_battery = 6;</code>
     */
    protected $device_status_battery = 0;
    /**
     * The device margin status
     * -32..32: The demodulation SNR ration in dB
     * 256:     The device-status is not available.
     *
     * Generated from protobuf field <code>int32 device_status_margin = 20;</code>
     */
    protected $device_status_margin = 0;
    /**
     * Device location.
     * This will set when the network-server was able to resolve the location
     * using the geolocation-server.
     *
     * Generated from protobuf field <code>.common.Location location = 21;</code>
     */
    protected $location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\Device $device
     *           Device object.
     *     @type \Google\Protobuf\Timestamp $last_seen_at
     *           Last seen timestamp.
     *     @type int $device_status_battery
     *           The device battery status
     *           0:      The end-device is connected to an external power source
     *           1..254: The battery level, 1 being at minimum and 254 being at maximum
     *           255:    The end-device was not able to measure the battery level
     *           256:    The device-status is not available.
     *     @type int $device_status_margin
     *           The device margin status
     *           -32..32: The demodulation SNR ration in dB
     *           256:     The device-status is not available.
     *     @type \Common\Location $location
     *           Device location.
     *           This will set when the network-server was able to resolve the location
     *           using the geolocation-server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Device object.
     *
     * Generated from protobuf field <code>.api.Device device = 1;</code>
     * @return \Api\Device|null
     */
    public function getDevice()
    {
        return $this->device;
    }

    public function hasDevice()
    {
        return isset($this->device);
    }

    public function clearDevice()
    {
        unset($this->device);
    }

    /**
     * Device object.
     *
     * Generated from protobuf field <code>.api.Device device = 1;</code>
     * @param \Api\Device $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkMessage($var, \Api\Device::class);
        $this->device = $var;

        return $this;
    }

    /**
     * Last seen timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_seen_at = 5 [json_name = "lastSeenAt"];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastSeenAt()
    {
        return $this->last_seen_at;
    }

    public function hasLastSeenAt()
    {
        return isset($this->last_seen_at);
    }

    public function clearLastSeenAt()
    {
        unset($this->last_seen_at);
    }

    /**
     * Last seen timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_seen_at = 5 [json_name = "lastSeenAt"];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastSeenAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_seen_at = $var;

        return $this;
    }

    /**
     * The device battery status
     * 0:      The end-device is connected to an external power source
     * 1..254: The battery level, 1 being at minimum and 254 being at maximum
     * 255:    The end-device was not able to measure the battery level
     * 256:    The device-status is not available.
     *
     * Generated from protobuf field <code>uint32 device_status_battery = 6;</code>
     * @return int
     */
    public function getDeviceStatusBattery()
    {
        return $this->device_status_battery;
    }

    /**
     * The device battery status
     * 0:      The end-device is connected to an external power source
     * 1..254: The battery level, 1 being at minimum and 254 being at maximum
     * 255:    The end-device was not able to measure the battery level
     * 256:    The device-status is not available.
     *
     * Generated from protobuf field <code>uint32 device_status_battery = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDeviceStatusBattery($var)
    {
        GPBUtil::checkUint32($var);
        $this->device_status_battery = $var;

        return $this;
    }

    /**
     * The device margin status
     * -32..32: The demodulation SNR ration in dB
     * 256:     The device-status is not available.
     *
     * Generated from protobuf field <code>int32 device_status_margin = 20;</code>
     * @return int
     */
    public function getDeviceStatusMargin()
    {
        return $this->device_status_margin;
    }

    /**
     * The device margin status
     * -32..32: The demodulation SNR ration in dB
     * 256:     The device-status is not available.
     *
     * Generated from protobuf field <code>int32 device_status_margin = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setDeviceStatusMargin($var)
    {
        GPBUtil::checkInt32($var);
        $this->device_status_margin = $var;

        return $this;
    }

    /**
     * Device location.
     * This will set when the network-server was able to resolve the location
     * using the geolocation-server.
     *
     * Generated from protobuf field <code>.common.Location location = 21;</code>
     * @return \Common\Location|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * Device location.
     * This will set when the network-server was able to resolve the location
     * using the geolocation-server.
     *
     * Generated from protobuf field <code>.common.Location location = 21;</code>
     * @param \Common\Location $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Common\Location::class);
        $this->location = $var;

        return $this;
    }

}

