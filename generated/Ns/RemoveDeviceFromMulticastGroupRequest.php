<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.RemoveDeviceFromMulticastGroupRequest</code>
 */
class RemoveDeviceFromMulticastGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Device EUI.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     */
    protected $dev_eui = '';
    /**
     * Multicast-group ID.
     *
     * Generated from protobuf field <code>bytes multicast_group_id = 2;</code>
     */
    protected $multicast_group_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_eui
     *           Device EUI.
     *     @type string $multicast_group_id
     *           Multicast-group ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * Device EUI.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * Device EUI.
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

    /**
     * Multicast-group ID.
     *
     * Generated from protobuf field <code>bytes multicast_group_id = 2;</code>
     * @return string
     */
    public function getMulticastGroupId()
    {
        return $this->multicast_group_id;
    }

    /**
     * Multicast-group ID.
     *
     * Generated from protobuf field <code>bytes multicast_group_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMulticastGroupId($var)
    {
        GPBUtil::checkString($var, False);
        $this->multicast_group_id = $var;

        return $this;
    }

}
