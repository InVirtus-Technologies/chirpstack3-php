<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/internal.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GlobalSearchRequest</code>
 */
class GlobalSearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Search query.
     *
     * Generated from protobuf field <code>string search = 1;</code>
     */
    protected $search = '';
    /**
     * Max number of results to return.
     *
     * Generated from protobuf field <code>int64 limit = 2;</code>
     */
    protected $limit = 0;
    /**
     * Offset offset of the result-set (for pagination).
     *
     * Generated from protobuf field <code>int64 offset = 3;</code>
     */
    protected $offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $search
     *           Search query.
     *     @type int|string $limit
     *           Max number of results to return.
     *     @type int|string $offset
     *           Offset offset of the result-set (for pagination).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Internal::initOnce();
        parent::__construct($data);
    }

    /**
     * Search query.
     *
     * Generated from protobuf field <code>string search = 1;</code>
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Search query.
     *
     * Generated from protobuf field <code>string search = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSearch($var)
    {
        GPBUtil::checkString($var, True);
        $this->search = $var;

        return $this;
    }

    /**
     * Max number of results to return.
     *
     * Generated from protobuf field <code>int64 limit = 2;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Max number of results to return.
     *
     * Generated from protobuf field <code>int64 limit = 2;</code>
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
     * Offset offset of the result-set (for pagination).
     *
     * Generated from protobuf field <code>int64 offset = 3;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Offset offset of the result-set (for pagination).
     *
     * Generated from protobuf field <code>int64 offset = 3;</code>
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

