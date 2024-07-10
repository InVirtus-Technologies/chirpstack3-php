<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/internal.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ListRegionsResponse</code>
 */
class ListRegionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Configured regions.
     *
     * Generated from protobuf field <code>repeated .api.RegionListItem regions = 1;</code>
     */
    private $regions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Chirpstack\Api\RegionListItem>|\Google\Protobuf\Internal\RepeatedField $regions
     *           Configured regions.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Internal::initOnce();
        parent::__construct($data);
    }

    /**
     * Configured regions.
     *
     * Generated from protobuf field <code>repeated .api.RegionListItem regions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Configured regions.
     *
     * Generated from protobuf field <code>repeated .api.RegionListItem regions = 1;</code>
     * @param array<\Chirpstack\Api\RegionListItem>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Chirpstack\Api\RegionListItem::class);
        $this->regions = $arr;

        return $this;
    }

}

