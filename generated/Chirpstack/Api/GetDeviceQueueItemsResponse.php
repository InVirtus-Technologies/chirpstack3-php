<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/device.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetDeviceQueueItemsResponse</code>
 */
class GetDeviceQueueItemsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Total number of queue items.
     *
     * Generated from protobuf field <code>uint32 total_count = 1;</code>
     */
    protected $total_count = 0;
    /**
     * Result-set.
     *
     * Generated from protobuf field <code>repeated .api.DeviceQueueItem result = 2;</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $total_count
     *           Total number of queue items.
     *     @type array<\Chirpstack\Api\DeviceQueueItem>|\Google\Protobuf\Internal\RepeatedField $result
     *           Result-set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * Total number of queue items.
     *
     * Generated from protobuf field <code>uint32 total_count = 1;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * Total number of queue items.
     *
     * Generated from protobuf field <code>uint32 total_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->total_count = $var;

        return $this;
    }

    /**
     * Result-set.
     *
     * Generated from protobuf field <code>repeated .api.DeviceQueueItem result = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Result-set.
     *
     * Generated from protobuf field <code>repeated .api.DeviceQueueItem result = 2;</code>
     * @param array<\Chirpstack\Api\DeviceQueueItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Chirpstack\Api\DeviceQueueItem::class);
        $this->result = $arr;

        return $this;
    }

}

