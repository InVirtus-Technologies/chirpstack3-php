<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/multicastGroup.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.CreateMulticastGroupRequest</code>
 */
class CreateMulticastGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Multicast-group object to create.
     *
     * Generated from protobuf field <code>.api.MulticastGroup multicast_group = 1;</code>
     */
    protected $multicast_group = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\MulticastGroup $multicast_group
     *           Multicast-group object to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\MulticastGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Multicast-group object to create.
     *
     * Generated from protobuf field <code>.api.MulticastGroup multicast_group = 1;</code>
     * @return \Api\MulticastGroup|null
     */
    public function getMulticastGroup()
    {
        return $this->multicast_group;
    }

    public function hasMulticastGroup()
    {
        return isset($this->multicast_group);
    }

    public function clearMulticastGroup()
    {
        unset($this->multicast_group);
    }

    /**
     * Multicast-group object to create.
     *
     * Generated from protobuf field <code>.api.MulticastGroup multicast_group = 1;</code>
     * @param \Api\MulticastGroup $var
     * @return $this
     */
    public function setMulticastGroup($var)
    {
        GPBUtil::checkMessage($var, \Api\MulticastGroup::class);
        $this->multicast_group = $var;

        return $this;
    }

}

