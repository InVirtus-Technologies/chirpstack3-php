<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/application.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.HTTPIntegration</code>
 */
class HTTPIntegration extends \Google\Protobuf\Internal\Message
{
    /**
     * The id of the application.
     *
     * Generated from protobuf field <code>int64 application_id = 1 [json_name = "applicationID"];</code>
     */
    protected $application_id = 0;
    /**
     * The headers to use when making HTTP callbacks.
     *
     * Generated from protobuf field <code>repeated .api.HTTPIntegrationHeader headers = 2;</code>
     */
    private $headers;
    /**
     * The URL to call for uplink data.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string uplink_data_url = 3 [json_name = "uplinkDataURL"];</code>
     */
    protected $uplink_data_url = '';
    /**
     * The URL to call for join notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string join_notification_url = 4 [json_name = "joinNotificationURL"];</code>
     */
    protected $join_notification_url = '';
    /**
     * The URL to call for ACK notifications (for confirmed downlink data).
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string ack_notification_url = 5 [json_name = "ackNotificationURL"];</code>
     */
    protected $ack_notification_url = '';
    /**
     * The URL to call for error notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string error_notification_url = 6 [json_name = "errorNotificationURL"];</code>
     */
    protected $error_notification_url = '';
    /**
     * The URL to call for device-status notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string status_notification_url = 7 [json_name = "statusNotificationURL"];</code>
     */
    protected $status_notification_url = '';
    /**
     * The URL to call for location notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string location_notification_url = 8 [json_name = "locationNotificationURL"];</code>
     */
    protected $location_notification_url = '';
    /**
     * The URL to call for tx ack notifications (downlink acknowledged by gateway for transmission).
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string tx_ack_notification_url = 9 [json_name = "txAckNotificationURL"];</code>
     */
    protected $tx_ack_notification_url = '';
    /**
     * The URL to call for integration notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string integration_notification_url = 10 [json_name = "integrationNotificationURL"];</code>
     */
    protected $integration_notification_url = '';
    /**
     * Marshaler.
     * This defines the marshaler that is used to encode the event payload.
     *
     * Generated from protobuf field <code>.api.Marshaler marshaler = 11;</code>
     */
    protected $marshaler = 0;
    /**
     * Event endpoint URL.
     * The HTTP integration will POST all events to this enpoint. The request
     * will contain a query parameters "event" containing the type of the
     * event.
     *
     * Generated from protobuf field <code>string event_endpoint_url = 12 [json_name = "eventEndpointURL"];</code>
     */
    protected $event_endpoint_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $application_id
     *           The id of the application.
     *     @type array<\Api\HTTPIntegrationHeader>|\Google\Protobuf\Internal\RepeatedField $headers
     *           The headers to use when making HTTP callbacks.
     *     @type string $uplink_data_url
     *           The URL to call for uplink data.
     *           Deprecated: use event_endpoint_url.
     *     @type string $join_notification_url
     *           The URL to call for join notifications.
     *           Deprecated: use event_endpoint_url.
     *     @type string $ack_notification_url
     *           The URL to call for ACK notifications (for confirmed downlink data).
     *           Deprecated: use event_endpoint_url.
     *     @type string $error_notification_url
     *           The URL to call for error notifications.
     *           Deprecated: use event_endpoint_url.
     *     @type string $status_notification_url
     *           The URL to call for device-status notifications.
     *           Deprecated: use event_endpoint_url.
     *     @type string $location_notification_url
     *           The URL to call for location notifications.
     *           Deprecated: use event_endpoint_url.
     *     @type string $tx_ack_notification_url
     *           The URL to call for tx ack notifications (downlink acknowledged by gateway for transmission).
     *           Deprecated: use event_endpoint_url.
     *     @type string $integration_notification_url
     *           The URL to call for integration notifications.
     *           Deprecated: use event_endpoint_url.
     *     @type int $marshaler
     *           Marshaler.
     *           This defines the marshaler that is used to encode the event payload.
     *     @type string $event_endpoint_url
     *           Event endpoint URL.
     *           The HTTP integration will POST all events to this enpoint. The request
     *           will contain a query parameters "event" containing the type of the
     *           event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * The id of the application.
     *
     * Generated from protobuf field <code>int64 application_id = 1 [json_name = "applicationID"];</code>
     * @return int|string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * The id of the application.
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
     * The headers to use when making HTTP callbacks.
     *
     * Generated from protobuf field <code>repeated .api.HTTPIntegrationHeader headers = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * The headers to use when making HTTP callbacks.
     *
     * Generated from protobuf field <code>repeated .api.HTTPIntegrationHeader headers = 2;</code>
     * @param array<\Api\HTTPIntegrationHeader>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\HTTPIntegrationHeader::class);
        $this->headers = $arr;

        return $this;
    }

    /**
     * The URL to call for uplink data.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string uplink_data_url = 3 [json_name = "uplinkDataURL"];</code>
     * @return string
     */
    public function getUplinkDataUrl()
    {
        return $this->uplink_data_url;
    }

    /**
     * The URL to call for uplink data.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string uplink_data_url = 3 [json_name = "uplinkDataURL"];</code>
     * @param string $var
     * @return $this
     */
    public function setUplinkDataUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->uplink_data_url = $var;

        return $this;
    }

    /**
     * The URL to call for join notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string join_notification_url = 4 [json_name = "joinNotificationURL"];</code>
     * @return string
     */
    public function getJoinNotificationUrl()
    {
        return $this->join_notification_url;
    }

    /**
     * The URL to call for join notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string join_notification_url = 4 [json_name = "joinNotificationURL"];</code>
     * @param string $var
     * @return $this
     */
    public function setJoinNotificationUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->join_notification_url = $var;

        return $this;
    }

    /**
     * The URL to call for ACK notifications (for confirmed downlink data).
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string ack_notification_url = 5 [json_name = "ackNotificationURL"];</code>
     * @return string
     */
    public function getAckNotificationUrl()
    {
        return $this->ack_notification_url;
    }

    /**
     * The URL to call for ACK notifications (for confirmed downlink data).
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string ack_notification_url = 5 [json_name = "ackNotificationURL"];</code>
     * @param string $var
     * @return $this
     */
    public function setAckNotificationUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->ack_notification_url = $var;

        return $this;
    }

    /**
     * The URL to call for error notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string error_notification_url = 6 [json_name = "errorNotificationURL"];</code>
     * @return string
     */
    public function getErrorNotificationUrl()
    {
        return $this->error_notification_url;
    }

    /**
     * The URL to call for error notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string error_notification_url = 6 [json_name = "errorNotificationURL"];</code>
     * @param string $var
     * @return $this
     */
    public function setErrorNotificationUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_notification_url = $var;

        return $this;
    }

    /**
     * The URL to call for device-status notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string status_notification_url = 7 [json_name = "statusNotificationURL"];</code>
     * @return string
     */
    public function getStatusNotificationUrl()
    {
        return $this->status_notification_url;
    }

    /**
     * The URL to call for device-status notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string status_notification_url = 7 [json_name = "statusNotificationURL"];</code>
     * @param string $var
     * @return $this
     */
    public function setStatusNotificationUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->status_notification_url = $var;

        return $this;
    }

    /**
     * The URL to call for location notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string location_notification_url = 8 [json_name = "locationNotificationURL"];</code>
     * @return string
     */
    public function getLocationNotificationUrl()
    {
        return $this->location_notification_url;
    }

    /**
     * The URL to call for location notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string location_notification_url = 8 [json_name = "locationNotificationURL"];</code>
     * @param string $var
     * @return $this
     */
    public function setLocationNotificationUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_notification_url = $var;

        return $this;
    }

    /**
     * The URL to call for tx ack notifications (downlink acknowledged by gateway for transmission).
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string tx_ack_notification_url = 9 [json_name = "txAckNotificationURL"];</code>
     * @return string
     */
    public function getTxAckNotificationUrl()
    {
        return $this->tx_ack_notification_url;
    }

    /**
     * The URL to call for tx ack notifications (downlink acknowledged by gateway for transmission).
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string tx_ack_notification_url = 9 [json_name = "txAckNotificationURL"];</code>
     * @param string $var
     * @return $this
     */
    public function setTxAckNotificationUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->tx_ack_notification_url = $var;

        return $this;
    }

    /**
     * The URL to call for integration notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string integration_notification_url = 10 [json_name = "integrationNotificationURL"];</code>
     * @return string
     */
    public function getIntegrationNotificationUrl()
    {
        return $this->integration_notification_url;
    }

    /**
     * The URL to call for integration notifications.
     * Deprecated: use event_endpoint_url.
     *
     * Generated from protobuf field <code>string integration_notification_url = 10 [json_name = "integrationNotificationURL"];</code>
     * @param string $var
     * @return $this
     */
    public function setIntegrationNotificationUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->integration_notification_url = $var;

        return $this;
    }

    /**
     * Marshaler.
     * This defines the marshaler that is used to encode the event payload.
     *
     * Generated from protobuf field <code>.api.Marshaler marshaler = 11;</code>
     * @return int
     */
    public function getMarshaler()
    {
        return $this->marshaler;
    }

    /**
     * Marshaler.
     * This defines the marshaler that is used to encode the event payload.
     *
     * Generated from protobuf field <code>.api.Marshaler marshaler = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setMarshaler($var)
    {
        GPBUtil::checkEnum($var, \Api\Marshaler::class);
        $this->marshaler = $var;

        return $this;
    }

    /**
     * Event endpoint URL.
     * The HTTP integration will POST all events to this enpoint. The request
     * will contain a query parameters "event" containing the type of the
     * event.
     *
     * Generated from protobuf field <code>string event_endpoint_url = 12 [json_name = "eventEndpointURL"];</code>
     * @return string
     */
    public function getEventEndpointUrl()
    {
        return $this->event_endpoint_url;
    }

    /**
     * Event endpoint URL.
     * The HTTP integration will POST all events to this enpoint. The request
     * will contain a query parameters "event" containing the type of the
     * event.
     *
     * Generated from protobuf field <code>string event_endpoint_url = 12 [json_name = "eventEndpointURL"];</code>
     * @param string $var
     * @return $this
     */
    public function setEventEndpointUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_endpoint_url = $var;

        return $this;
    }

}

