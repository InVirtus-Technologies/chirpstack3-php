<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/multicastGroup.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.AddDeviceToMulticastGroupRequest</code>
 */
class AddDeviceToMulticastGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Multicast-group ID (string formatted UUID).
     *
     * Generated from protobuf field <code>string multicast_group_id = 1 [json_name = "multicastGroupID"];</code>
     */
    protected $multicast_group_id = '';
    /**
     * Device EUI (HEX encoded string).
     * Note that the device and the multicast-group must share the same
     * application ID.
     *
     * Generated from protobuf field <code>string dev_eui = 2 [json_name = "devEUI"];</code>
     */
    protected $dev_eui = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $multicast_group_id
     *           Multicast-group ID (string formatted UUID).
     *     @type string $dev_eui
     *           Device EUI (HEX encoded string).
     *           Note that the device and the multicast-group must share the same
     *           application ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\MulticastGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Multicast-group ID (string formatted UUID).
     *
     * Generated from protobuf field <code>string multicast_group_id = 1 [json_name = "multicastGroupID"];</code>
     * @return string
     */
    public function getMulticastGroupId()
    {
        return $this->multicast_group_id;
    }

    /**
     * Multicast-group ID (string formatted UUID).
     *
     * Generated from protobuf field <code>string multicast_group_id = 1 [json_name = "multicastGroupID"];</code>
     * @param string $var
     * @return $this
     */
    public function setMulticastGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->multicast_group_id = $var;

        return $this;
    }

    /**
     * Device EUI (HEX encoded string).
     * Note that the device and the multicast-group must share the same
     * application ID.
     *
     * Generated from protobuf field <code>string dev_eui = 2 [json_name = "devEUI"];</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * Device EUI (HEX encoded string).
     * Note that the device and the multicast-group must share the same
     * application ID.
     *
     * Generated from protobuf field <code>string dev_eui = 2 [json_name = "devEUI"];</code>
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

