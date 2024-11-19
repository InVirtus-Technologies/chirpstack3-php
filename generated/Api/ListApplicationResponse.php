<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/application.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ListApplicationResponse</code>
 */
class ListApplicationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Total number of applications available within the result-set.
     *
     * Generated from protobuf field <code>int64 total_count = 1;</code>
     */
    protected $total_count = 0;
    /**
     * Applications within this result-set.
     *
     * Generated from protobuf field <code>repeated .api.ApplicationListItem result = 2;</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $total_count
     *           Total number of applications available within the result-set.
     *     @type array<\Api\ApplicationListItem>|\Google\Protobuf\Internal\RepeatedField $result
     *           Applications within this result-set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Total number of applications available within the result-set.
     *
     * Generated from protobuf field <code>int64 total_count = 1;</code>
     * @return int|string
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * Total number of applications available within the result-set.
     *
     * Generated from protobuf field <code>int64 total_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_count = $var;

        return $this;
    }

    /**
     * Applications within this result-set.
     *
     * Generated from protobuf field <code>repeated .api.ApplicationListItem result = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Applications within this result-set.
     *
     * Generated from protobuf field <code>repeated .api.ApplicationListItem result = 2;</code>
     * @param array<\Api\ApplicationListItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\ApplicationListItem::class);
        $this->result = $arr;

        return $this;
    }

}

