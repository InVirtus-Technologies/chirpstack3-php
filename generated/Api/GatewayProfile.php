<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/gatewayProfile.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GatewayProfile</code>
 */
class GatewayProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Gateway-profile ID (UUID string).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Name of the gateway-profile.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Network-server ID of the gateway-profile.
     *
     * Generated from protobuf field <code>int64 network_server_id = 3 [json_name = "networkServerID"];</code>
     */
    protected $network_server_id = 0;
    /**
     * Default channels (channels specified by the LoRaWAN Regional Parameters
     * specification) enabled for this configuration.
     *
     * Generated from protobuf field <code>repeated uint32 channels = 4;</code>
     */
    private $channels;
    /**
     * Extra channels added to the channel-configuration (in case the LoRaWAN
     * region supports adding custom channels).
     *
     * Generated from protobuf field <code>repeated .api.GatewayProfileExtraChannel extra_channels = 5;</code>
     */
    private $extra_channels;
    /**
     * Stats interval.
     * This defines the (expected) stats interval which the gateways using this
     * gateway-profile are using.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration stats_interval = 6;</code>
     */
    protected $stats_interval = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Gateway-profile ID (UUID string).
     *     @type string $name
     *           Name of the gateway-profile.
     *     @type int|string $network_server_id
     *           Network-server ID of the gateway-profile.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $channels
     *           Default channels (channels specified by the LoRaWAN Regional Parameters
     *           specification) enabled for this configuration.
     *     @type array<\Api\GatewayProfileExtraChannel>|\Google\Protobuf\Internal\RepeatedField $extra_channels
     *           Extra channels added to the channel-configuration (in case the LoRaWAN
     *           region supports adding custom channels).
     *     @type \Google\Protobuf\Duration $stats_interval
     *           Stats interval.
     *           This defines the (expected) stats interval which the gateways using this
     *           gateway-profile are using.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\GatewayProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Gateway-profile ID (UUID string).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gateway-profile ID (UUID string).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Name of the gateway-profile.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the gateway-profile.
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
     * Network-server ID of the gateway-profile.
     *
     * Generated from protobuf field <code>int64 network_server_id = 3 [json_name = "networkServerID"];</code>
     * @return int|string
     */
    public function getNetworkServerId()
    {
        return $this->network_server_id;
    }

    /**
     * Network-server ID of the gateway-profile.
     *
     * Generated from protobuf field <code>int64 network_server_id = 3 [json_name = "networkServerID"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setNetworkServerId($var)
    {
        GPBUtil::checkInt64($var);
        $this->network_server_id = $var;

        return $this;
    }

    /**
     * Default channels (channels specified by the LoRaWAN Regional Parameters
     * specification) enabled for this configuration.
     *
     * Generated from protobuf field <code>repeated uint32 channels = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * Default channels (channels specified by the LoRaWAN Regional Parameters
     * specification) enabled for this configuration.
     *
     * Generated from protobuf field <code>repeated uint32 channels = 4;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT32);
        $this->channels = $arr;

        return $this;
    }

    /**
     * Extra channels added to the channel-configuration (in case the LoRaWAN
     * region supports adding custom channels).
     *
     * Generated from protobuf field <code>repeated .api.GatewayProfileExtraChannel extra_channels = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtraChannels()
    {
        return $this->extra_channels;
    }

    /**
     * Extra channels added to the channel-configuration (in case the LoRaWAN
     * region supports adding custom channels).
     *
     * Generated from protobuf field <code>repeated .api.GatewayProfileExtraChannel extra_channels = 5;</code>
     * @param array<\Api\GatewayProfileExtraChannel>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtraChannels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\GatewayProfileExtraChannel::class);
        $this->extra_channels = $arr;

        return $this;
    }

    /**
     * Stats interval.
     * This defines the (expected) stats interval which the gateways using this
     * gateway-profile are using.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration stats_interval = 6;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getStatsInterval()
    {
        return $this->stats_interval;
    }

    public function hasStatsInterval()
    {
        return isset($this->stats_interval);
    }

    public function clearStatsInterval()
    {
        unset($this->stats_interval);
    }

    /**
     * Stats interval.
     * This defines the (expected) stats interval which the gateways using this
     * gateway-profile are using.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration stats_interval = 6;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStatsInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->stats_interval = $var;

        return $this;
    }

}

