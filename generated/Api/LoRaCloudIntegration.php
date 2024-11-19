<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/application.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.LoRaCloudIntegration</code>
 */
class LoRaCloudIntegration extends \Google\Protobuf\Internal\Message
{
    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1 [json_name = "applicationID"];</code>
     */
    protected $application_id = 0;
    /**
     * Geolocation enabled.
     *
     * Generated from protobuf field <code>bool geolocation = 2;</code>
     */
    protected $geolocation = false;
    /**
     * Geolocation token.
     * This token can be obtained from the LoRa Cloud console.
     *
     * Generated from protobuf field <code>string geolocation_token = 3;</code>
     */
    protected $geolocation_token = '';
    /**
     * Geolocation buffer TTL (in seconds).
     * When > 0, uplink RX meta-data will be stored in a buffer so that
     * the meta-data of multiple uplinks can be used for geolocation.
     *
     * Generated from protobuf field <code>uint32 geolocation_buffer_ttl = 4 [json_name = "geolocationBufferTTL"];</code>
     */
    protected $geolocation_buffer_ttl = 0;
    /**
     * Geolocation minimum buffer size.
     * When > 0, geolocation will only be performed when the buffer has
     * at least the given size.
     *
     * Generated from protobuf field <code>uint32 geolocation_min_buffer_size = 5;</code>
     */
    protected $geolocation_min_buffer_size = 0;
    /**
     * TDOA based geolocation is enabled.
     *
     * Generated from protobuf field <code>bool geolocation_tdoa = 6 [json_name = "geolocationTDOA"];</code>
     */
    protected $geolocation_tdoa = false;
    /**
     * RSSI based geolocation is enabled.
     *
     * Generated from protobuf field <code>bool geolocation_rssi = 7 [json_name = "geolocationRSSI"];</code>
     */
    protected $geolocation_rssi = false;
    /**
     * GNSS based geolocation is enabled (LR1110).
     *
     * Generated from protobuf field <code>bool geolocation_gnss = 8 [json_name = "geolocationGNSS"];</code>
     */
    protected $geolocation_gnss = false;
    /**
     * GNSS payload field.
     * This holds the name of the field in the decoded payload object which
     * contains the GNSS payload bytes.
     *
     * Generated from protobuf field <code>string geolocation_gnss_payload_field = 9 [json_name = "geolocationGNSSPayloadField"];</code>
     */
    protected $geolocation_gnss_payload_field = '';
    /**
     * GNSS use RX time.
     * In case this is set to true, the resolver will use the RX time of the
     * network instead of the timestamp included in the LR1110 payload.
     *
     * Generated from protobuf field <code>bool geolocation_gnss_use_rx_time = 10 [json_name = "geolocationGNSSUseRxTime"];</code>
     */
    protected $geolocation_gnss_use_rx_time = false;
    /**
     * Wifi based geolocation is enabled.
     *
     * Generated from protobuf field <code>bool geolocation_wifi = 11 [json_name = "geolocationWifi"];</code>
     */
    protected $geolocation_wifi = false;
    /**
     * Wifi payload field.
     * This holds the name of the field in the decoded payload object which
     * contains an array of objects with the following fields:
     * * macAddress - e.g. 01:23:45:67:89:ab
     * * signalStrength - e.g. -51 (optional)
     *
     * Generated from protobuf field <code>string geolocation_wifi_payload_field = 12 [json_name = "geolocationWifiPayloadField"];</code>
     */
    protected $geolocation_wifi_payload_field = '';
    /**
     * Device Application Services enabled.
     *
     * Generated from protobuf field <code>bool das = 13;</code>
     */
    protected $das = false;
    /**
     * Device Application Services token.
     * This token can be obtained from the LoRa Cloud console.
     *
     * Generated from protobuf field <code>string das_token = 14;</code>
     */
    protected $das_token = '';
    /**
     * Device Application Services modem port (FPort).
     * ChirpStack Application Server will only forward the FRMPayload to DAS
     * when the uplink FPort is equal to this value.
     *
     * Generated from protobuf field <code>uint32 das_modem_port = 15;</code>
     */
    protected $das_modem_port = 0;
    /**
     * Device Application Services GNSS port (FPort).
     * ChirpStack Application Server will forward the FRMPayload to DAS when
     * as GNSS payload when the uplink FPort is equal to this value.
     *
     * Generated from protobuf field <code>uint32 das_gnss_port = 16 [json_name = "dasGNSSPort"];</code>
     */
    protected $das_gnss_port = 0;
    /**
     * Device Application Services GNSS use RX time.
     * In case this is set to true, the DAS resolver will use the RX time of the
     * network instead of the timestamp included in the LR1110 payload.
     *
     * Generated from protobuf field <code>bool das_gnss_use_rx_time = 17 [json_name = "dasGNSSUseRxTime"];</code>
     */
    protected $das_gnss_use_rx_time = false;
    /**
     * Device Application Services streaming geoloc work-around.
     * This is a temporarily work-around for processing streaming geolocation
     * data. When enabled, stream records (expected in TLV format) are scanned
     * for GNSS data (0x06 or 0x07). If found, the ChirpStack Application Server
     * will make an additional call to the DAS API for resolving the location
     * using the detected payload.
     *
     * Generated from protobuf field <code>bool das_streaming_geoloc_workaround = 18;</code>
     */
    protected $das_streaming_geoloc_workaround = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $application_id
     *           Application ID.
     *     @type bool $geolocation
     *           Geolocation enabled.
     *     @type string $geolocation_token
     *           Geolocation token.
     *           This token can be obtained from the LoRa Cloud console.
     *     @type int $geolocation_buffer_ttl
     *           Geolocation buffer TTL (in seconds).
     *           When > 0, uplink RX meta-data will be stored in a buffer so that
     *           the meta-data of multiple uplinks can be used for geolocation.
     *     @type int $geolocation_min_buffer_size
     *           Geolocation minimum buffer size.
     *           When > 0, geolocation will only be performed when the buffer has
     *           at least the given size.
     *     @type bool $geolocation_tdoa
     *           TDOA based geolocation is enabled.
     *     @type bool $geolocation_rssi
     *           RSSI based geolocation is enabled.
     *     @type bool $geolocation_gnss
     *           GNSS based geolocation is enabled (LR1110).
     *     @type string $geolocation_gnss_payload_field
     *           GNSS payload field.
     *           This holds the name of the field in the decoded payload object which
     *           contains the GNSS payload bytes.
     *     @type bool $geolocation_gnss_use_rx_time
     *           GNSS use RX time.
     *           In case this is set to true, the resolver will use the RX time of the
     *           network instead of the timestamp included in the LR1110 payload.
     *     @type bool $geolocation_wifi
     *           Wifi based geolocation is enabled.
     *     @type string $geolocation_wifi_payload_field
     *           Wifi payload field.
     *           This holds the name of the field in the decoded payload object which
     *           contains an array of objects with the following fields:
     *           * macAddress - e.g. 01:23:45:67:89:ab
     *           * signalStrength - e.g. -51 (optional)
     *     @type bool $das
     *           Device Application Services enabled.
     *     @type string $das_token
     *           Device Application Services token.
     *           This token can be obtained from the LoRa Cloud console.
     *     @type int $das_modem_port
     *           Device Application Services modem port (FPort).
     *           ChirpStack Application Server will only forward the FRMPayload to DAS
     *           when the uplink FPort is equal to this value.
     *     @type int $das_gnss_port
     *           Device Application Services GNSS port (FPort).
     *           ChirpStack Application Server will forward the FRMPayload to DAS when
     *           as GNSS payload when the uplink FPort is equal to this value.
     *     @type bool $das_gnss_use_rx_time
     *           Device Application Services GNSS use RX time.
     *           In case this is set to true, the DAS resolver will use the RX time of the
     *           network instead of the timestamp included in the LR1110 payload.
     *     @type bool $das_streaming_geoloc_workaround
     *           Device Application Services streaming geoloc work-around.
     *           This is a temporarily work-around for processing streaming geolocation
     *           data. When enabled, stream records (expected in TLV format) are scanned
     *           for GNSS data (0x06 or 0x07). If found, the ChirpStack Application Server
     *           will make an additional call to the DAS API for resolving the location
     *           using the detected payload.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1 [json_name = "applicationID"];</code>
     * @return int|string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1 [json_name = "applicationID"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->application_id = $var;

        return $this;
    }

    /**
     * Geolocation enabled.
     *
     * Generated from protobuf field <code>bool geolocation = 2;</code>
     * @return bool
     */
    public function getGeolocation()
    {
        return $this->geolocation;
    }

    /**
     * Geolocation enabled.
     *
     * Generated from protobuf field <code>bool geolocation = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setGeolocation($var)
    {
        GPBUtil::checkBool($var);
        $this->geolocation = $var;

        return $this;
    }

    /**
     * Geolocation token.
     * This token can be obtained from the LoRa Cloud console.
     *
     * Generated from protobuf field <code>string geolocation_token = 3;</code>
     * @return string
     */
    public function getGeolocationToken()
    {
        return $this->geolocation_token;
    }

    /**
     * Geolocation token.
     * This token can be obtained from the LoRa Cloud console.
     *
     * Generated from protobuf field <code>string geolocation_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGeolocationToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->geolocation_token = $var;

        return $this;
    }

    /**
     * Geolocation buffer TTL (in seconds).
     * When > 0, uplink RX meta-data will be stored in a buffer so that
     * the meta-data of multiple uplinks can be used for geolocation.
     *
     * Generated from protobuf field <code>uint32 geolocation_buffer_ttl = 4 [json_name = "geolocationBufferTTL"];</code>
     * @return int
     */
    public function getGeolocationBufferTtl()
    {
        return $this->geolocation_buffer_ttl;
    }

    /**
     * Geolocation buffer TTL (in seconds).
     * When > 0, uplink RX meta-data will be stored in a buffer so that
     * the meta-data of multiple uplinks can be used for geolocation.
     *
     * Generated from protobuf field <code>uint32 geolocation_buffer_ttl = 4 [json_name = "geolocationBufferTTL"];</code>
     * @param int $var
     * @return $this
     */
    public function setGeolocationBufferTtl($var)
    {
        GPBUtil::checkUint32($var);
        $this->geolocation_buffer_ttl = $var;

        return $this;
    }

    /**
     * Geolocation minimum buffer size.
     * When > 0, geolocation will only be performed when the buffer has
     * at least the given size.
     *
     * Generated from protobuf field <code>uint32 geolocation_min_buffer_size = 5;</code>
     * @return int
     */
    public function getGeolocationMinBufferSize()
    {
        return $this->geolocation_min_buffer_size;
    }

    /**
     * Geolocation minimum buffer size.
     * When > 0, geolocation will only be performed when the buffer has
     * at least the given size.
     *
     * Generated from protobuf field <code>uint32 geolocation_min_buffer_size = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGeolocationMinBufferSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->geolocation_min_buffer_size = $var;

        return $this;
    }

    /**
     * TDOA based geolocation is enabled.
     *
     * Generated from protobuf field <code>bool geolocation_tdoa = 6 [json_name = "geolocationTDOA"];</code>
     * @return bool
     */
    public function getGeolocationTdoa()
    {
        return $this->geolocation_tdoa;
    }

    /**
     * TDOA based geolocation is enabled.
     *
     * Generated from protobuf field <code>bool geolocation_tdoa = 6 [json_name = "geolocationTDOA"];</code>
     * @param bool $var
     * @return $this
     */
    public function setGeolocationTdoa($var)
    {
        GPBUtil::checkBool($var);
        $this->geolocation_tdoa = $var;

        return $this;
    }

    /**
     * RSSI based geolocation is enabled.
     *
     * Generated from protobuf field <code>bool geolocation_rssi = 7 [json_name = "geolocationRSSI"];</code>
     * @return bool
     */
    public function getGeolocationRssi()
    {
        return $this->geolocation_rssi;
    }

    /**
     * RSSI based geolocation is enabled.
     *
     * Generated from protobuf field <code>bool geolocation_rssi = 7 [json_name = "geolocationRSSI"];</code>
     * @param bool $var
     * @return $this
     */
    public function setGeolocationRssi($var)
    {
        GPBUtil::checkBool($var);
        $this->geolocation_rssi = $var;

        return $this;
    }

    /**
     * GNSS based geolocation is enabled (LR1110).
     *
     * Generated from protobuf field <code>bool geolocation_gnss = 8 [json_name = "geolocationGNSS"];</code>
     * @return bool
     */
    public function getGeolocationGnss()
    {
        return $this->geolocation_gnss;
    }

    /**
     * GNSS based geolocation is enabled (LR1110).
     *
     * Generated from protobuf field <code>bool geolocation_gnss = 8 [json_name = "geolocationGNSS"];</code>
     * @param bool $var
     * @return $this
     */
    public function setGeolocationGnss($var)
    {
        GPBUtil::checkBool($var);
        $this->geolocation_gnss = $var;

        return $this;
    }

    /**
     * GNSS payload field.
     * This holds the name of the field in the decoded payload object which
     * contains the GNSS payload bytes.
     *
     * Generated from protobuf field <code>string geolocation_gnss_payload_field = 9 [json_name = "geolocationGNSSPayloadField"];</code>
     * @return string
     */
    public function getGeolocationGnssPayloadField()
    {
        return $this->geolocation_gnss_payload_field;
    }

    /**
     * GNSS payload field.
     * This holds the name of the field in the decoded payload object which
     * contains the GNSS payload bytes.
     *
     * Generated from protobuf field <code>string geolocation_gnss_payload_field = 9 [json_name = "geolocationGNSSPayloadField"];</code>
     * @param string $var
     * @return $this
     */
    public function setGeolocationGnssPayloadField($var)
    {
        GPBUtil::checkString($var, True);
        $this->geolocation_gnss_payload_field = $var;

        return $this;
    }

    /**
     * GNSS use RX time.
     * In case this is set to true, the resolver will use the RX time of the
     * network instead of the timestamp included in the LR1110 payload.
     *
     * Generated from protobuf field <code>bool geolocation_gnss_use_rx_time = 10 [json_name = "geolocationGNSSUseRxTime"];</code>
     * @return bool
     */
    public function getGeolocationGnssUseRxTime()
    {
        return $this->geolocation_gnss_use_rx_time;
    }

    /**
     * GNSS use RX time.
     * In case this is set to true, the resolver will use the RX time of the
     * network instead of the timestamp included in the LR1110 payload.
     *
     * Generated from protobuf field <code>bool geolocation_gnss_use_rx_time = 10 [json_name = "geolocationGNSSUseRxTime"];</code>
     * @param bool $var
     * @return $this
     */
    public function setGeolocationGnssUseRxTime($var)
    {
        GPBUtil::checkBool($var);
        $this->geolocation_gnss_use_rx_time = $var;

        return $this;
    }

    /**
     * Wifi based geolocation is enabled.
     *
     * Generated from protobuf field <code>bool geolocation_wifi = 11 [json_name = "geolocationWifi"];</code>
     * @return bool
     */
    public function getGeolocationWifi()
    {
        return $this->geolocation_wifi;
    }

    /**
     * Wifi based geolocation is enabled.
     *
     * Generated from protobuf field <code>bool geolocation_wifi = 11 [json_name = "geolocationWifi"];</code>
     * @param bool $var
     * @return $this
     */
    public function setGeolocationWifi($var)
    {
        GPBUtil::checkBool($var);
        $this->geolocation_wifi = $var;

        return $this;
    }

    /**
     * Wifi payload field.
     * This holds the name of the field in the decoded payload object which
     * contains an array of objects with the following fields:
     * * macAddress - e.g. 01:23:45:67:89:ab
     * * signalStrength - e.g. -51 (optional)
     *
     * Generated from protobuf field <code>string geolocation_wifi_payload_field = 12 [json_name = "geolocationWifiPayloadField"];</code>
     * @return string
     */
    public function getGeolocationWifiPayloadField()
    {
        return $this->geolocation_wifi_payload_field;
    }

    /**
     * Wifi payload field.
     * This holds the name of the field in the decoded payload object which
     * contains an array of objects with the following fields:
     * * macAddress - e.g. 01:23:45:67:89:ab
     * * signalStrength - e.g. -51 (optional)
     *
     * Generated from protobuf field <code>string geolocation_wifi_payload_field = 12 [json_name = "geolocationWifiPayloadField"];</code>
     * @param string $var
     * @return $this
     */
    public function setGeolocationWifiPayloadField($var)
    {
        GPBUtil::checkString($var, True);
        $this->geolocation_wifi_payload_field = $var;

        return $this;
    }

    /**
     * Device Application Services enabled.
     *
     * Generated from protobuf field <code>bool das = 13;</code>
     * @return bool
     */
    public function getDas()
    {
        return $this->das;
    }

    /**
     * Device Application Services enabled.
     *
     * Generated from protobuf field <code>bool das = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setDas($var)
    {
        GPBUtil::checkBool($var);
        $this->das = $var;

        return $this;
    }

    /**
     * Device Application Services token.
     * This token can be obtained from the LoRa Cloud console.
     *
     * Generated from protobuf field <code>string das_token = 14;</code>
     * @return string
     */
    public function getDasToken()
    {
        return $this->das_token;
    }

    /**
     * Device Application Services token.
     * This token can be obtained from the LoRa Cloud console.
     *
     * Generated from protobuf field <code>string das_token = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setDasToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->das_token = $var;

        return $this;
    }

    /**
     * Device Application Services modem port (FPort).
     * ChirpStack Application Server will only forward the FRMPayload to DAS
     * when the uplink FPort is equal to this value.
     *
     * Generated from protobuf field <code>uint32 das_modem_port = 15;</code>
     * @return int
     */
    public function getDasModemPort()
    {
        return $this->das_modem_port;
    }

    /**
     * Device Application Services modem port (FPort).
     * ChirpStack Application Server will only forward the FRMPayload to DAS
     * when the uplink FPort is equal to this value.
     *
     * Generated from protobuf field <code>uint32 das_modem_port = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setDasModemPort($var)
    {
        GPBUtil::checkUint32($var);
        $this->das_modem_port = $var;

        return $this;
    }

    /**
     * Device Application Services GNSS port (FPort).
     * ChirpStack Application Server will forward the FRMPayload to DAS when
     * as GNSS payload when the uplink FPort is equal to this value.
     *
     * Generated from protobuf field <code>uint32 das_gnss_port = 16 [json_name = "dasGNSSPort"];</code>
     * @return int
     */
    public function getDasGnssPort()
    {
        return $this->das_gnss_port;
    }

    /**
     * Device Application Services GNSS port (FPort).
     * ChirpStack Application Server will forward the FRMPayload to DAS when
     * as GNSS payload when the uplink FPort is equal to this value.
     *
     * Generated from protobuf field <code>uint32 das_gnss_port = 16 [json_name = "dasGNSSPort"];</code>
     * @param int $var
     * @return $this
     */
    public function setDasGnssPort($var)
    {
        GPBUtil::checkUint32($var);
        $this->das_gnss_port = $var;

        return $this;
    }

    /**
     * Device Application Services GNSS use RX time.
     * In case this is set to true, the DAS resolver will use the RX time of the
     * network instead of the timestamp included in the LR1110 payload.
     *
     * Generated from protobuf field <code>bool das_gnss_use_rx_time = 17 [json_name = "dasGNSSUseRxTime"];</code>
     * @return bool
     */
    public function getDasGnssUseRxTime()
    {
        return $this->das_gnss_use_rx_time;
    }

    /**
     * Device Application Services GNSS use RX time.
     * In case this is set to true, the DAS resolver will use the RX time of the
     * network instead of the timestamp included in the LR1110 payload.
     *
     * Generated from protobuf field <code>bool das_gnss_use_rx_time = 17 [json_name = "dasGNSSUseRxTime"];</code>
     * @param bool $var
     * @return $this
     */
    public function setDasGnssUseRxTime($var)
    {
        GPBUtil::checkBool($var);
        $this->das_gnss_use_rx_time = $var;

        return $this;
    }

    /**
     * Device Application Services streaming geoloc work-around.
     * This is a temporarily work-around for processing streaming geolocation
     * data. When enabled, stream records (expected in TLV format) are scanned
     * for GNSS data (0x06 or 0x07). If found, the ChirpStack Application Server
     * will make an additional call to the DAS API for resolving the location
     * using the detected payload.
     *
     * Generated from protobuf field <code>bool das_streaming_geoloc_workaround = 18;</code>
     * @return bool
     */
    public function getDasStreamingGeolocWorkaround()
    {
        return $this->das_streaming_geoloc_workaround;
    }

    /**
     * Device Application Services streaming geoloc work-around.
     * This is a temporarily work-around for processing streaming geolocation
     * data. When enabled, stream records (expected in TLV format) are scanned
     * for GNSS data (0x06 or 0x07). If found, the ChirpStack Application Server
     * will make an additional call to the DAS API for resolving the location
     * using the detected payload.
     *
     * Generated from protobuf field <code>bool das_streaming_geoloc_workaround = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setDasStreamingGeolocWorkaround($var)
    {
        GPBUtil::checkBool($var);
        $this->das_streaming_geoloc_workaround = $var;

        return $this;
    }

}

