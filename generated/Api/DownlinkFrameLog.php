<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/frameLog.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.DownlinkFrameLog</code>
 */
class DownlinkFrameLog extends \Google\Protobuf\Internal\Message
{
    /**
     * TX information of the downlink.
     *
     * Generated from protobuf field <code>.gw.DownlinkTXInfo tx_info = 1;</code>
     */
    protected $tx_info = null;
    /**
     * LoRaWAN PHYPayload.
     *
     * Generated from protobuf field <code>string phy_payload_json = 2 [json_name = "phyPayloadJSON"];</code>
     */
    protected $phy_payload_json = '';
    /**
     * Gateway ID.
     *
     * Generated from protobuf field <code>string gateway_id = 3 [json_name = "gatewayID"];</code>
     */
    protected $gateway_id = '';
    /**
     * Published at timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp published_at = 4;</code>
     */
    protected $published_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Gw\DownlinkTXInfo $tx_info
     *           TX information of the downlink.
     *     @type string $phy_payload_json
     *           LoRaWAN PHYPayload.
     *     @type string $gateway_id
     *           Gateway ID.
     *     @type \Google\Protobuf\Timestamp $published_at
     *           Published at timestamp.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\FrameLog::initOnce();
        parent::__construct($data);
    }

    /**
     * TX information of the downlink.
     *
     * Generated from protobuf field <code>.gw.DownlinkTXInfo tx_info = 1;</code>
     * @return \Gw\DownlinkTXInfo|null
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
     * TX information of the downlink.
     *
     * Generated from protobuf field <code>.gw.DownlinkTXInfo tx_info = 1;</code>
     * @param \Gw\DownlinkTXInfo $var
     * @return $this
     */
    public function setTxInfo($var)
    {
        GPBUtil::checkMessage($var, \Gw\DownlinkTXInfo::class);
        $this->tx_info = $var;

        return $this;
    }

    /**
     * LoRaWAN PHYPayload.
     *
     * Generated from protobuf field <code>string phy_payload_json = 2 [json_name = "phyPayloadJSON"];</code>
     * @return string
     */
    public function getPhyPayloadJson()
    {
        return $this->phy_payload_json;
    }

    /**
     * LoRaWAN PHYPayload.
     *
     * Generated from protobuf field <code>string phy_payload_json = 2 [json_name = "phyPayloadJSON"];</code>
     * @param string $var
     * @return $this
     */
    public function setPhyPayloadJson($var)
    {
        GPBUtil::checkString($var, True);
        $this->phy_payload_json = $var;

        return $this;
    }

    /**
     * Gateway ID.
     *
     * Generated from protobuf field <code>string gateway_id = 3 [json_name = "gatewayID"];</code>
     * @return string
     */
    public function getGatewayId()
    {
        return $this->gateway_id;
    }

    /**
     * Gateway ID.
     *
     * Generated from protobuf field <code>string gateway_id = 3 [json_name = "gatewayID"];</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayId($var)
    {
        GPBUtil::checkString($var, True);
        $this->gateway_id = $var;

        return $this;
    }

    /**
     * Published at timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp published_at = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getPublishedAt()
    {
        return $this->published_at;
    }

    public function hasPublishedAt()
    {
        return isset($this->published_at);
    }

    public function clearPublishedAt()
    {
        unset($this->published_at);
    }

    /**
     * Published at timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp published_at = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setPublishedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->published_at = $var;

        return $this;
    }

}

