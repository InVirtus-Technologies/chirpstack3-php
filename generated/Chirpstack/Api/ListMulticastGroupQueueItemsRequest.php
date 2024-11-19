<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/multicastGroup.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ListMulticastGroupQueueItemsRequest</code>
 */
class ListMulticastGroupQueueItemsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Multicast-group ID (string formatted UUID).
     *
     * Generated from protobuf field <code>string multicast_group_id = 1 [json_name = "multicastGroupID"];</code>
     */
    protected $multicast_group_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $multicast_group_id
     *           Multicast-group ID (string formatted UUID).
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

}
