<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/device.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.DeactivateDeviceRequest</code>
 */
class DeactivateDeviceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Device EUI (HEX encoded).
     *
     * Generated from protobuf field <code>string dev_eui = 1 [json_name = "devEUI"];</code>
     */
    protected $dev_eui = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_eui
     *           Device EUI (HEX encoded).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Device EUI (HEX encoded).
     *
     * Generated from protobuf field <code>string dev_eui = 1 [json_name = "devEUI"];</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * Device EUI (HEX encoded).
     *
     * Generated from protobuf field <code>string dev_eui = 1 [json_name = "devEUI"];</code>
     * @param string $var
     * @return $this
     */
    public function setDevEui($var)
    {
        GPBUtil::checkString($var, True);
        $this->dev_eui = $var;

        return $this;
    }

}

