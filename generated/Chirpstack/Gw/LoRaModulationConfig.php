<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gw/gw.proto

namespace Gw;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gw.LoRaModulationConfig</code>
 */
class LoRaModulationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Bandwidth.
     *
     * Generated from protobuf field <code>uint32 bandwidth = 1;</code>
     */
    protected $bandwidth = 0;
    /**
     * Spreading-factors.
     *
     * Generated from protobuf field <code>repeated uint32 spreading_factors = 2;</code>
     */
    private $spreading_factors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bandwidth
     *           Bandwidth.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $spreading_factors
     *           Spreading-factors.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gw\Gw::initOnce();
        parent::__construct($data);
    }

    /**
     * Bandwidth.
     *
     * Generated from protobuf field <code>uint32 bandwidth = 1;</code>
     * @return int
     */
    public function getBandwidth()
    {
        return $this->bandwidth;
    }

    /**
     * Bandwidth.
     *
     * Generated from protobuf field <code>uint32 bandwidth = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBandwidth($var)
    {
        GPBUtil::checkUint32($var);
        $this->bandwidth = $var;

        return $this;
    }

    /**
     * Spreading-factors.
     *
     * Generated from protobuf field <code>repeated uint32 spreading_factors = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpreadingFactors()
    {
        return $this->spreading_factors;
    }

    /**
     * Spreading-factors.
     *
     * Generated from protobuf field <code>repeated uint32 spreading_factors = 2;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpreadingFactors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->spreading_factors = $arr;

        return $this;
    }

}

