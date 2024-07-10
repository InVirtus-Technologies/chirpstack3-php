<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/multicast_group.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.FlushMulticastGroupQueueRequest</code>
 */
class FlushMulticastGroupQueueRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Multicast group ID.
     *
     * Generated from protobuf field <code>string multicast_group_id = 1;</code>
     */
    protected $multicast_group_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $multicast_group_id
     *           Multicast group ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\MulticastGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Multicast group ID.
     *
     * Generated from protobuf field <code>string multicast_group_id = 1;</code>
     * @return string
     */
    public function getMulticastGroupId()
    {
        return $this->multicast_group_id;
    }

    /**
     * Multicast group ID.
     *
     * Generated from protobuf field <code>string multicast_group_id = 1;</code>
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

