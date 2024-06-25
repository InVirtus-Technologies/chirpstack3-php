<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/device_profile_template.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.DeleteDeviceProfileTemplateRequest</code>
 */
class DeleteDeviceProfileTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID.
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
     *           ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\DeviceProfileTemplate::initOnce();
        parent::__construct($data);
    }

    /**
     * ID.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID.
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

