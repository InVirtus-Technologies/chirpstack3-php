<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/user.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ListUserRequest</code>
 */
class ListUserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Max number of user to return in the result-set.
     *
     * Generated from protobuf field <code>int64 limit = 1;</code>
     */
    protected $limit = 0;
    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>int64 offset = 2;</code>
     */
    protected $offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $limit
     *           Max number of user to return in the result-set.
     *     @type int|string $offset
     *           Offset in the result-set (for pagination).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\User::initOnce();
        parent::__construct($data);
    }

    /**
     * Max number of user to return in the result-set.
     *
     * Generated from protobuf field <code>int64 limit = 1;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Max number of user to return in the result-set.
     *
     * Generated from protobuf field <code>int64 limit = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>int64 offset = 2;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>int64 offset = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

}

