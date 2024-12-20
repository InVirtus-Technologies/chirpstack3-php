<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.StreamFrameLogsForGatewayRequest</code>
 */
class StreamFrameLogsForGatewayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * MAC address of the gateway.
     *
     * Generated from protobuf field <code>bytes gateway_id = 1;</code>
     */
    protected $gateway_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gateway_id
     *           MAC address of the gateway.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * MAC address of the gateway.
     *
     * Generated from protobuf field <code>bytes gateway_id = 1;</code>
     * @return string
     */
    public function getGatewayId()
    {
        return $this->gateway_id;
    }

    /**
     * MAC address of the gateway.
     *
     * Generated from protobuf field <code>bytes gateway_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayId($var)
    {
        GPBUtil::checkString($var, False);
        $this->gateway_id = $var;

        return $this;
    }

}

