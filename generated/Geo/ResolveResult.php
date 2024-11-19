<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: geo/geo.proto

namespace Geo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>geo.ResolveResult</code>
 */
class ResolveResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Resolved location.
     *
     * Generated from protobuf field <code>.common.Location location = 1;</code>
     */
    protected $location = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Common\Location $location
     *           Resolved location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Geo\Geo::initOnce();
        parent::__construct($data);
    }

    /**
     * Resolved location.
     *
     * Generated from protobuf field <code>.common.Location location = 1;</code>
     * @return \Common\Location|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    public function hasLocation()
    {
        return isset($this->location);
    }

    public function clearLocation()
    {
        unset($this->location);
    }

    /**
     * Resolved location.
     *
     * Generated from protobuf field <code>.common.Location location = 1;</code>
     * @param \Common\Location $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Common\Location::class);
        $this->location = $var;

        return $this;
    }

}
