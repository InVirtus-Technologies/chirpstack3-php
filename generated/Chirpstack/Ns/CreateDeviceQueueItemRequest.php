<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.CreateDeviceQueueItemRequest</code>
 */
class CreateDeviceQueueItemRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ns.DeviceQueueItem item = 1;</code>
     */
    protected $item = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ns\DeviceQueueItem $item
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ns.DeviceQueueItem item = 1;</code>
     * @return \Ns\DeviceQueueItem|null
     */
    public function getItem()
    {
        return $this->item;
    }

    public function hasItem()
    {
        return isset($this->item);
    }

    public function clearItem()
    {
        unset($this->item);
    }

    /**
     * Generated from protobuf field <code>.ns.DeviceQueueItem item = 1;</code>
     * @param \Ns\DeviceQueueItem $var
     * @return $this
     */
    public function setItem($var)
    {
        GPBUtil::checkMessage($var, \Ns\DeviceQueueItem::class);
        $this->item = $var;

        return $this;
    }

}
