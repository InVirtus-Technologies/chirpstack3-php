<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.UpdateRoutingProfileRequest</code>
 */
class UpdateRoutingProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Routing-profile object to update.
     *
     * Generated from protobuf field <code>.ns.RoutingProfile routing_profile = 1;</code>
     */
    protected $routing_profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ns\RoutingProfile $routing_profile
     *           Routing-profile object to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * Routing-profile object to update.
     *
     * Generated from protobuf field <code>.ns.RoutingProfile routing_profile = 1;</code>
     * @return \Ns\RoutingProfile|null
     */
    public function getRoutingProfile()
    {
        return $this->routing_profile;
    }

    public function hasRoutingProfile()
    {
        return isset($this->routing_profile);
    }

    public function clearRoutingProfile()
    {
        unset($this->routing_profile);
    }

    /**
     * Routing-profile object to update.
     *
     * Generated from protobuf field <code>.ns.RoutingProfile routing_profile = 1;</code>
     * @param \Ns\RoutingProfile $var
     * @return $this
     */
    public function setRoutingProfile($var)
    {
        GPBUtil::checkMessage($var, \Ns\RoutingProfile::class);
        $this->routing_profile = $var;

        return $this;
    }

}
