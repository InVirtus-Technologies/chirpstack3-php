<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integration/integration.proto

namespace Chirpstack\Integration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Device information.
 *
 * Generated from protobuf message <code>integration.DeviceInfo</code>
 */
class DeviceInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Tenant ID (UUID).
     *
     * Generated from protobuf field <code>string tenant_id = 1;</code>
     */
    protected $tenant_id = '';
    /**
     * Tenant name.
     *
     * Generated from protobuf field <code>string tenant_name = 2;</code>
     */
    protected $tenant_name = '';
    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 3;</code>
     */
    protected $application_id = '';
    /**
     * Application name.
     *
     * Generated from protobuf field <code>string application_name = 4;</code>
     */
    protected $application_name = '';
    /**
     * Device-profile ID (UUID).
     *
     * Generated from protobuf field <code>string device_profile_id = 5;</code>
     */
    protected $device_profile_id = '';
    /**
     * Device-profile name.
     *
     * Generated from protobuf field <code>string device_profile_name = 6;</code>
     */
    protected $device_profile_name = '';
    /**
     * Device name.
     *
     * Generated from protobuf field <code>string device_name = 7;</code>
     */
    protected $device_name = '';
    /**
     * Device EUI.
     *
     * Generated from protobuf field <code>string dev_eui = 8;</code>
     */
    protected $dev_eui = '';
    /**
     * Device class.
     *
     * Generated from protobuf field <code>.common.DeviceClass device_class_enabled = 10;</code>
     */
    protected $device_class_enabled = 0;
    /**
     * Device-profile and device tags.
     *
     * Generated from protobuf field <code>map<string, string> tags = 9;</code>
     */
    private $tags;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tenant_id
     *           Tenant ID (UUID).
     *     @type string $tenant_name
     *           Tenant name.
     *     @type string $application_id
     *           Application ID (UUID).
     *     @type string $application_name
     *           Application name.
     *     @type string $device_profile_id
     *           Device-profile ID (UUID).
     *     @type string $device_profile_name
     *           Device-profile name.
     *     @type string $device_name
     *           Device name.
     *     @type string $dev_eui
     *           Device EUI.
     *     @type int $device_class_enabled
     *           Device class.
     *     @type array|\Google\Protobuf\Internal\MapField $tags
     *           Device-profile and device tags.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Integration\Integration::initOnce();
        parent::__construct($data);
    }

    /**
     * Tenant ID (UUID).
     *
     * Generated from protobuf field <code>string tenant_id = 1;</code>
     * @return string
     */
    public function getTenantId()
    {
        return $this->tenant_id;
    }

    /**
     * Tenant ID (UUID).
     *
     * Generated from protobuf field <code>string tenant_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTenantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant_id = $var;

        return $this;
    }

    /**
     * Tenant name.
     *
     * Generated from protobuf field <code>string tenant_name = 2;</code>
     * @return string
     */
    public function getTenantName()
    {
        return $this->tenant_name;
    }

    /**
     * Tenant name.
     *
     * Generated from protobuf field <code>string tenant_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTenantName($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant_name = $var;

        return $this;
    }

    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 3;</code>
     * @return string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Application ID (UUID).
     *
     * Generated from protobuf field <code>string application_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->application_id = $var;

        return $this;
    }

    /**
     * Application name.
     *
     * Generated from protobuf field <code>string application_name = 4;</code>
     * @return string
     */
    public function getApplicationName()
    {
        return $this->application_name;
    }

    /**
     * Application name.
     *
     * Generated from protobuf field <code>string application_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setApplicationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->application_name = $var;

        return $this;
    }

    /**
     * Device-profile ID (UUID).
     *
     * Generated from protobuf field <code>string device_profile_id = 5;</code>
     * @return string
     */
    public function getDeviceProfileId()
    {
        return $this->device_profile_id;
    }

    /**
     * Device-profile ID (UUID).
     *
     * Generated from protobuf field <code>string device_profile_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_profile_id = $var;

        return $this;
    }

    /**
     * Device-profile name.
     *
     * Generated from protobuf field <code>string device_profile_name = 6;</code>
     * @return string
     */
    public function getDeviceProfileName()
    {
        return $this->device_profile_name;
    }

    /**
     * Device-profile name.
     *
     * Generated from protobuf field <code>string device_profile_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceProfileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_profile_name = $var;

        return $this;
    }

    /**
     * Device name.
     *
     * Generated from protobuf field <code>string device_name = 7;</code>
     * @return string
     */
    public function getDeviceName()
    {
        return $this->device_name;
    }

    /**
     * Device name.
     *
     * Generated from protobuf field <code>string device_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDeviceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_name = $var;

        return $this;
    }

    /**
     * Device EUI.
     *
     * Generated from protobuf field <code>string dev_eui = 8;</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * Device EUI.
     *
     * Generated from protobuf field <code>string dev_eui = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDevEui($var)
    {
        GPBUtil::checkString($var, True);
        $this->dev_eui = $var;

        return $this;
    }

    /**
     * Device class.
     *
     * Generated from protobuf field <code>.common.DeviceClass device_class_enabled = 10;</code>
     * @return int
     */
    public function getDeviceClassEnabled()
    {
        return $this->device_class_enabled;
    }

    /**
     * Device class.
     *
     * Generated from protobuf field <code>.common.DeviceClass device_class_enabled = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setDeviceClassEnabled($var)
    {
        GPBUtil::checkEnum($var, \Chirpstack\Common\DeviceClass::class);
        $this->device_class_enabled = $var;

        return $this;
    }

    /**
     * Device-profile and device tags.
     *
     * Generated from protobuf field <code>map<string, string> tags = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Device-profile and device tags.
     *
     * Generated from protobuf field <code>map<string, string> tags = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setTags($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;

        return $this;
    }

}

