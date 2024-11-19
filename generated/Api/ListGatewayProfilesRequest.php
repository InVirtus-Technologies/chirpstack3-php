<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/gatewayProfile.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ListGatewayProfilesRequest</code>
 */
class ListGatewayProfilesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Max number of items to return.
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
     * Network-server ID to filter on (optional).
     *
     * Generated from protobuf field <code>int64 network_server_id = 3 [json_name = "networkServerID"];</code>
     */
    protected $network_server_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $limit
     *           Max number of items to return.
     *     @type int|string $offset
     *           Offset in the result-set (for pagination).
     *     @type int|string $network_server_id
     *           Network-server ID to filter on (optional).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\GatewayProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Max number of items to return.
     *
     * Generated from protobuf field <code>int64 limit = 1;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Max number of items to return.
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

    /**
     * Network-server ID to filter on (optional).
     *
     * Generated from protobuf field <code>int64 network_server_id = 3 [json_name = "networkServerID"];</code>
     * @return int|string
     */
    public function getNetworkServerId()
    {
        return $this->network_server_id;
    }

    /**
     * Network-server ID to filter on (optional).
     *
     * Generated from protobuf field <code>int64 network_server_id = 3 [json_name = "networkServerID"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setNetworkServerId($var)
    {
        GPBUtil::checkInt64($var);
        $this->network_server_id = $var;

        return $this;
    }

}

