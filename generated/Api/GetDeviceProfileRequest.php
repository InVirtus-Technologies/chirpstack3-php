<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/deviceProfile.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetDeviceProfileRequest</code>
 */
class GetDeviceProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Device-profile ID (UUID string).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Device-profile ID (UUID string).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\DeviceProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Device-profile ID (UUID string).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Device-profile ID (UUID string).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

