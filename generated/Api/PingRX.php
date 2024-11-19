<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/gateway.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.PingRX</code>
 */
class PingRX extends \Google\Protobuf\Internal\Message
{
    /**
     * Gateway ID (HEX encoded).
     *
     * Generated from protobuf field <code>string gateway_id = 1 [json_name = "gatewayID"];</code>
     */
    protected $gateway_id = '';
    /**
     * RSSI.
     *
     * Generated from protobuf field <code>int32 rssi = 2;</code>
     */
    protected $rssi = 0;
    /**
     * LoRa SNR.
     *
     * Generated from protobuf field <code>double lora_snr = 3 [json_name = "loRaSNR"];</code>
     */
    protected $lora_snr = 0.0;
    /**
     * Latitude of the gateway -90.0 to 90.0.
     *
     * Generated from protobuf field <code>double latitude = 4;</code>
     */
    protected $latitude = 0.0;
    /**
     * Longitude of the gateway -180.0 to 180.0.
     *
     * Generated from protobuf field <code>double longitude = 5;</code>
     */
    protected $longitude = 0.0;
    /**
     * Altitude of the gateway in meters.
     *
     * Generated from protobuf field <code>double altitude = 6;</code>
     */
    protected $altitude = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gateway_id
     *           Gateway ID (HEX encoded).
     *     @type int $rssi
     *           RSSI.
     *     @type float $lora_snr
     *           LoRa SNR.
     *     @type float $latitude
     *           Latitude of the gateway -90.0 to 90.0.
     *     @type float $longitude
     *           Longitude of the gateway -180.0 to 180.0.
     *     @type float $altitude
     *           Altitude of the gateway in meters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Gateway ID (HEX encoded).
     *
     * Generated from protobuf field <code>string gateway_id = 1 [json_name = "gatewayID"];</code>
     * @return string
     */
    public function getGatewayId()
    {
        return $this->gateway_id;
    }

    /**
     * Gateway ID (HEX encoded).
     *
     * Generated from protobuf field <code>string gateway_id = 1 [json_name = "gatewayID"];</code>
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
     * RSSI.
     *
     * Generated from protobuf field <code>int32 rssi = 2;</code>
     * @return int
     */
    public function getRssi()
    {
        return $this->rssi;
    }

    /**
     * RSSI.
     *
     * Generated from protobuf field <code>int32 rssi = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRssi($var)
    {
        GPBUtil::checkInt32($var);
        $this->rssi = $var;

        return $this;
    }

    /**
     * LoRa SNR.
     *
     * Generated from protobuf field <code>double lora_snr = 3 [json_name = "loRaSNR"];</code>
     * @return float
     */
    public function getLoraSnr()
    {
        return $this->lora_snr;
    }

    /**
     * LoRa SNR.
     *
     * Generated from protobuf field <code>double lora_snr = 3 [json_name = "loRaSNR"];</code>
     * @param float $var
     * @return $this
     */
    public function setLoraSnr($var)
    {
        GPBUtil::checkDouble($var);
        $this->lora_snr = $var;

        return $this;
    }

    /**
     * Latitude of the gateway -90.0 to 90.0.
     *
     * Generated from protobuf field <code>double latitude = 4;</code>
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Latitude of the gateway -90.0 to 90.0.
     *
     * Generated from protobuf field <code>double latitude = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->latitude = $var;

        return $this;
    }

    /**
     * Longitude of the gateway -180.0 to 180.0.
     *
     * Generated from protobuf field <code>double longitude = 5;</code>
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Longitude of the gateway -180.0 to 180.0.
     *
     * Generated from protobuf field <code>double longitude = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->longitude = $var;

        return $this;
    }

    /**
     * Altitude of the gateway in meters.
     *
     * Generated from protobuf field <code>double altitude = 6;</code>
     * @return float
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * Altitude of the gateway in meters.
     *
     * Generated from protobuf field <code>double altitude = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setAltitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->altitude = $var;

        return $this;
    }

}
