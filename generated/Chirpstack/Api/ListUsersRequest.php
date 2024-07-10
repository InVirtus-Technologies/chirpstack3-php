<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/user.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ListUsersRequest</code>
 */
class ListUsersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Max number of tenants to return in the result-set.
     *
     * Generated from protobuf field <code>uint32 limit = 1;</code>
     */
    protected $limit = 0;
    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>uint32 offset = 2;</code>
     */
    protected $offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $limit
     *           Max number of tenants to return in the result-set.
     *     @type int $offset
     *           Offset in the result-set (for pagination).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Max number of tenants to return in the result-set.
     *
     * Generated from protobuf field <code>uint32 limit = 1;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Max number of tenants to return in the result-set.
     *
     * Generated from protobuf field <code>uint32 limit = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkUint32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>uint32 offset = 2;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>uint32 offset = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkUint32($var);
        $this->offset = $var;

        return $this;
    }

}

