<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gw/gw.proto

namespace Chirpstack\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gw.LoraModulationInfo</code>
 */
class LoraModulationInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Bandwidth.
     *
     * Generated from protobuf field <code>uint32 bandwidth = 1;</code>
     */
    protected $bandwidth = 0;
    /**
     * Speading-factor.
     *
     * Generated from protobuf field <code>uint32 spreading_factor = 2;</code>
     */
    protected $spreading_factor = 0;
    /**
     * Code-rate.
     *
     * Generated from protobuf field <code>string code_rate_legacy = 3;</code>
     */
    protected $code_rate_legacy = '';
    /**
     * Code-rate.
     *
     * Generated from protobuf field <code>.gw.CodeRate code_rate = 5;</code>
     */
    protected $code_rate = 0;
    /**
     * Polarization inversion.
     *
     * Generated from protobuf field <code>bool polarization_inversion = 4;</code>
     */
    protected $polarization_inversion = false;
    /**
     * Preamble length (for TX).
     *
     * Generated from protobuf field <code>uint32 preamble = 6;</code>
     */
    protected $preamble = 0;
    /**
     *  No CRC (for TX).
     * If true, do not send a CRC in the packet.
     *
     * Generated from protobuf field <code>bool no_crc = 7;</code>
     */
    protected $no_crc = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bandwidth
     *           Bandwidth.
     *     @type int $spreading_factor
     *           Speading-factor.
     *     @type string $code_rate_legacy
     *           Code-rate.
     *     @type int $code_rate
     *           Code-rate.
     *     @type bool $polarization_inversion
     *           Polarization inversion.
     *     @type int $preamble
     *           Preamble length (for TX).
     *     @type bool $no_crc
     *            No CRC (for TX).
     *           If true, do not send a CRC in the packet.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Gateway\Gw::initOnce();
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
     * Speading-factor.
     *
     * Generated from protobuf field <code>uint32 spreading_factor = 2;</code>
     * @return int
     */
    public function getSpreadingFactor()
    {
        return $this->spreading_factor;
    }

    /**
     * Speading-factor.
     *
     * Generated from protobuf field <code>uint32 spreading_factor = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSpreadingFactor($var)
    {
        GPBUtil::checkUint32($var);
        $this->spreading_factor = $var;

        return $this;
    }

    /**
     * Code-rate.
     *
     * Generated from protobuf field <code>string code_rate_legacy = 3;</code>
     * @return string
     */
    public function getCodeRateLegacy()
    {
        return $this->code_rate_legacy;
    }

    /**
     * Code-rate.
     *
     * Generated from protobuf field <code>string code_rate_legacy = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCodeRateLegacy($var)
    {
        GPBUtil::checkString($var, True);
        $this->code_rate_legacy = $var;

        return $this;
    }

    /**
     * Code-rate.
     *
     * Generated from protobuf field <code>.gw.CodeRate code_rate = 5;</code>
     * @return int
     */
    public function getCodeRate()
    {
        return $this->code_rate;
    }

    /**
     * Code-rate.
     *
     * Generated from protobuf field <code>.gw.CodeRate code_rate = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCodeRate($var)
    {
        GPBUtil::checkEnum($var, \Chirpstack\Gateway\CodeRate::class);
        $this->code_rate = $var;

        return $this;
    }

    /**
     * Polarization inversion.
     *
     * Generated from protobuf field <code>bool polarization_inversion = 4;</code>
     * @return bool
     */
    public function getPolarizationInversion()
    {
        return $this->polarization_inversion;
    }

    /**
     * Polarization inversion.
     *
     * Generated from protobuf field <code>bool polarization_inversion = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setPolarizationInversion($var)
    {
        GPBUtil::checkBool($var);
        $this->polarization_inversion = $var;

        return $this;
    }

    /**
     * Preamble length (for TX).
     *
     * Generated from protobuf field <code>uint32 preamble = 6;</code>
     * @return int
     */
    public function getPreamble()
    {
        return $this->preamble;
    }

    /**
     * Preamble length (for TX).
     *
     * Generated from protobuf field <code>uint32 preamble = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setPreamble($var)
    {
        GPBUtil::checkUint32($var);
        $this->preamble = $var;

        return $this;
    }

    /**
     *  No CRC (for TX).
     * If true, do not send a CRC in the packet.
     *
     * Generated from protobuf field <code>bool no_crc = 7;</code>
     * @return bool
     */
    public function getNoCrc()
    {
        return $this->no_crc;
    }

    /**
     *  No CRC (for TX).
     * If true, do not send a CRC in the packet.
     *
     * Generated from protobuf field <code>bool no_crc = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoCrc($var)
    {
        GPBUtil::checkBool($var);
        $this->no_crc = $var;

        return $this;
    }

}

