<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.UpdateGatewayProfileRequest</code>
 */
class UpdateGatewayProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Gateway-profile object to update.
     *
     * Generated from protobuf field <code>.ns.GatewayProfile gateway_profile = 1;</code>
     */
    protected $gateway_profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ns\GatewayProfile $gateway_profile
     *           Gateway-profile object to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * Gateway-profile object to update.
     *
     * Generated from protobuf field <code>.ns.GatewayProfile gateway_profile = 1;</code>
     * @return \Ns\GatewayProfile|null
     */
    public function getGatewayProfile()
    {
        return $this->gateway_profile;
    }

    public function hasGatewayProfile()
    {
        return isset($this->gateway_profile);
    }

    public function clearGatewayProfile()
    {
        unset($this->gateway_profile);
    }

    /**
     * Gateway-profile object to update.
     *
     * Generated from protobuf field <code>.ns.GatewayProfile gateway_profile = 1;</code>
     * @param \Ns\GatewayProfile $var
     * @return $this
     */
    public function setGatewayProfile($var)
    {
        GPBUtil::checkMessage($var, \Ns\GatewayProfile::class);
        $this->gateway_profile = $var;

        return $this;
    }

}

