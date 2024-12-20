<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/multicastGroup.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ListMulticastGroupQueueItemsResponse</code>
 */
class ListMulticastGroupQueueItemsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .api.MulticastQueueItem multicast_queue_items = 1;</code>
     */
    private $multicast_queue_items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Api\MulticastQueueItem>|\Google\Protobuf\Internal\RepeatedField $multicast_queue_items
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\MulticastGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .api.MulticastQueueItem multicast_queue_items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMulticastQueueItems()
    {
        return $this->multicast_queue_items;
    }

    /**
     * Generated from protobuf field <code>repeated .api.MulticastQueueItem multicast_queue_items = 1;</code>
     * @param array<\Api\MulticastQueueItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMulticastQueueItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\MulticastQueueItem::class);
        $this->multicast_queue_items = $arr;

        return $this;
    }

}

