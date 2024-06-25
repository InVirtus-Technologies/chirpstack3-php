<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/device_profile.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.Measurement</code>
 */
class Measurement extends \Google\Protobuf\Internal\Message
{
    /**
     * Name (user defined).
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Kind.
     *
     * Generated from protobuf field <code>.api.MeasurementKind kind = 3;</code>
     */
    protected $kind = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name (user defined).
     *     @type int $kind
     *           Kind.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\DeviceProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Name (user defined).
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name (user defined).
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Kind.
     *
     * Generated from protobuf field <code>.api.MeasurementKind kind = 3;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Kind.
     *
     * Generated from protobuf field <code>.api.MeasurementKind kind = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Chirpstack\Api\MeasurementKind::class);
        $this->kind = $var;

        return $this;
    }

}

