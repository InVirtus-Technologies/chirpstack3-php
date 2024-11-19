<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/internal.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetGatewaysSummaryResponse</code>
 */
class GetGatewaysSummaryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Active count.
     *
     * Generated from protobuf field <code>uint32 active_count = 1;</code>
     */
    protected $active_count = 0;
    /**
     * Inactive count.
     *
     * Generated from protobuf field <code>uint32 inactive_count = 2;</code>
     */
    protected $inactive_count = 0;
    /**
     * Never seen count.
     *
     * Generated from protobuf field <code>uint32 never_seen_count = 3;</code>
     */
    protected $never_seen_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $active_count
     *           Active count.
     *     @type int $inactive_count
     *           Inactive count.
     *     @type int $never_seen_count
     *           Never seen count.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Internal::initOnce();
        parent::__construct($data);
    }

    /**
     * Active count.
     *
     * Generated from protobuf field <code>uint32 active_count = 1;</code>
     * @return int
     */
    public function getActiveCount()
    {
        return $this->active_count;
    }

    /**
     * Active count.
     *
     * Generated from protobuf field <code>uint32 active_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setActiveCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->active_count = $var;

        return $this;
    }

    /**
     * Inactive count.
     *
     * Generated from protobuf field <code>uint32 inactive_count = 2;</code>
     * @return int
     */
    public function getInactiveCount()
    {
        return $this->inactive_count;
    }

    /**
     * Inactive count.
     *
     * Generated from protobuf field <code>uint32 inactive_count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setInactiveCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->inactive_count = $var;

        return $this;
    }

    /**
     * Never seen count.
     *
     * Generated from protobuf field <code>uint32 never_seen_count = 3;</code>
     * @return int
     */
    public function getNeverSeenCount()
    {
        return $this->never_seen_count;
    }

    /**
     * Never seen count.
     *
     * Generated from protobuf field <code>uint32 never_seen_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNeverSeenCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->never_seen_count = $var;

        return $this;
    }

}
