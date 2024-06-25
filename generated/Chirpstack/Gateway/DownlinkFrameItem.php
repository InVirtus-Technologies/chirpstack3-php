<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gw/gw.proto

namespace Chirpstack\Gateway;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gw.DownlinkFrameItem</code>
 */
class DownlinkFrameItem extends \Google\Protobuf\Internal\Message
{
    /**
     * PHYPayload.
     *
     * Generated from protobuf field <code>bytes phy_payload = 1;</code>
     */
    protected $phy_payload = '';
    /**
     * TX meta-data (deprecated).
     *
     * Generated from protobuf field <code>.gw.DownlinkTxInfoLegacy tx_info_legacy = 2;</code>
     */
    protected $tx_info_legacy = null;
    /**
     * Tx meta-data.
     *
     * Generated from protobuf field <code>.gw.DownlinkTxInfo tx_info = 3;</code>
     */
    protected $tx_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $phy_payload
     *           PHYPayload.
     *     @type \Chirpstack\Gateway\DownlinkTxInfoLegacy $tx_info_legacy
     *           TX meta-data (deprecated).
     *     @type \Chirpstack\Gateway\DownlinkTxInfo $tx_info
     *           Tx meta-data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Gateway\Gw::initOnce();
        parent::__construct($data);
    }

    /**
     * PHYPayload.
     *
     * Generated from protobuf field <code>bytes phy_payload = 1;</code>
     * @return string
     */
    public function getPhyPayload()
    {
        return $this->phy_payload;
    }

    /**
     * PHYPayload.
     *
     * Generated from protobuf field <code>bytes phy_payload = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPhyPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->phy_payload = $var;

        return $this;
    }

    /**
     * TX meta-data (deprecated).
     *
     * Generated from protobuf field <code>.gw.DownlinkTxInfoLegacy tx_info_legacy = 2;</code>
     * @return \Chirpstack\Gateway\DownlinkTxInfoLegacy|null
     */
    public function getTxInfoLegacy()
    {
        return $this->tx_info_legacy;
    }

    public function hasTxInfoLegacy()
    {
        return isset($this->tx_info_legacy);
    }

    public function clearTxInfoLegacy()
    {
        unset($this->tx_info_legacy);
    }

    /**
     * TX meta-data (deprecated).
     *
     * Generated from protobuf field <code>.gw.DownlinkTxInfoLegacy tx_info_legacy = 2;</code>
     * @param \Chirpstack\Gateway\DownlinkTxInfoLegacy $var
     * @return $this
     */
    public function setTxInfoLegacy($var)
    {
        GPBUtil::checkMessage($var, \Chirpstack\Gateway\DownlinkTxInfoLegacy::class);
        $this->tx_info_legacy = $var;

        return $this;
    }

    /**
     * Tx meta-data.
     *
     * Generated from protobuf field <code>.gw.DownlinkTxInfo tx_info = 3;</code>
     * @return \Chirpstack\Gateway\DownlinkTxInfo|null
     */
    public function getTxInfo()
    {
        return $this->tx_info;
    }

    public function hasTxInfo()
    {
        return isset($this->tx_info);
    }

    public function clearTxInfo()
    {
        unset($this->tx_info);
    }

    /**
     * Tx meta-data.
     *
     * Generated from protobuf field <code>.gw.DownlinkTxInfo tx_info = 3;</code>
     * @param \Chirpstack\Gateway\DownlinkTxInfo $var
     * @return $this
     */
    public function setTxInfo($var)
    {
        GPBUtil::checkMessage($var, \Chirpstack\Gateway\DownlinkTxInfo::class);
        $this->tx_info = $var;

        return $this;
    }

}

