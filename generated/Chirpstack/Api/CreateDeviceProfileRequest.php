<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/deviceProfile.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.CreateDeviceProfileRequest</code>
 */
class CreateDeviceProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Device-profile object to create.
     *
     * Generated from protobuf field <code>.api.DeviceProfile device_profile = 1;</code>
     */
    protected $device_profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\DeviceProfile $device_profile
     *           Device-profile object to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\DeviceProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Device-profile object to create.
     *
     * Generated from protobuf field <code>.api.DeviceProfile device_profile = 1;</code>
     * @return \Api\DeviceProfile|null
     */
    public function getDeviceProfile()
    {
        return $this->device_profile;
    }

    public function hasDeviceProfile()
    {
        return isset($this->device_profile);
    }

    public function clearDeviceProfile()
    {
        unset($this->device_profile);
    }

    /**
     * Device-profile object to create.
     *
     * Generated from protobuf field <code>.api.DeviceProfile device_profile = 1;</code>
     * @param \Api\DeviceProfile $var
     * @return $this
     */
    public function setDeviceProfile($var)
    {
        GPBUtil::checkMessage($var, \Api\DeviceProfile::class);
        $this->device_profile = $var;

        return $this;
    }

}

