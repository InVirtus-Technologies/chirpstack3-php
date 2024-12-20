<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gw/gw.proto

namespace Gw;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ConnState contains the connection state of a gateway.
 *
 * Generated from protobuf message <code>gw.ConnState</code>
 */
class ConnState extends \Google\Protobuf\Internal\Message
{
    /**
     * Gateway ID.
     *
     * Generated from protobuf field <code>bytes gateway_id = 1 [json_name = "gatewayID"];</code>
     */
    protected $gateway_id = '';
    /**
     * Generated from protobuf field <code>.gw.ConnState.State state = 2;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gateway_id
     *           Gateway ID.
     *     @type int $state
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gw\Gw::initOnce();
        parent::__construct($data);
    }

    /**
     * Gateway ID.
     *
     * Generated from protobuf field <code>bytes gateway_id = 1 [json_name = "gatewayID"];</code>
     * @return string
     */
    public function getGatewayId()
    {
        return $this->gateway_id;
    }

    /**
     * Gateway ID.
     *
     * Generated from protobuf field <code>bytes gateway_id = 1 [json_name = "gatewayID"];</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayId($var)
    {
        GPBUtil::checkString($var, False);
        $this->gateway_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.gw.ConnState.State state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.gw.ConnState.State state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Gw\ConnState\State::class);
        $this->state = $var;

        return $this;
    }

}

