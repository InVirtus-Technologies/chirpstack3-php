<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/gateway.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetGatewayStatsResponse</code>
 */
class GetGatewayStatsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .api.GatewayStats result = 1;</code>
     */
    private $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Api\GatewayStats>|\Google\Protobuf\Internal\RepeatedField $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .api.GatewayStats result = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>repeated .api.GatewayStats result = 1;</code>
     * @param array<\Api\GatewayStats>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResult($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\GatewayStats::class);
        $this->result = $arr;

        return $this;
    }

}
