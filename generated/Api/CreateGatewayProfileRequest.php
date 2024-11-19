<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/gatewayProfile.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.CreateGatewayProfileRequest</code>
 */
class CreateGatewayProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Gateway-profile object to create.
     *
     * Generated from protobuf field <code>.api.GatewayProfile gateway_profile = 1;</code>
     */
    protected $gateway_profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\GatewayProfile $gateway_profile
     *           Gateway-profile object to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\GatewayProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Gateway-profile object to create.
     *
     * Generated from protobuf field <code>.api.GatewayProfile gateway_profile = 1;</code>
     * @return \Api\GatewayProfile|null
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
     * Gateway-profile object to create.
     *
     * Generated from protobuf field <code>.api.GatewayProfile gateway_profile = 1;</code>
     * @param \Api\GatewayProfile $var
     * @return $this
     */
    public function setGatewayProfile($var)
    {
        GPBUtil::checkMessage($var, \Api\GatewayProfile::class);
        $this->gateway_profile = $var;

        return $this;
    }

}
