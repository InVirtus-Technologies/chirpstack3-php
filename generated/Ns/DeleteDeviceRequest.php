<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.DeleteDeviceRequest</code>
 */
class DeleteDeviceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * DevEUI.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     */
    protected $dev_eui = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_eui
     *           DevEUI.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * DevEUI.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * DevEUI.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDevEui($var)
    {
        GPBUtil::checkString($var, False);
        $this->dev_eui = $var;

        return $this;
    }

}

