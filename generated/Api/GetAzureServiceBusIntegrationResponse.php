<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/application.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetAzureServiceBusIntegrationResponse</code>
 */
class GetAzureServiceBusIntegrationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Integration object.
     *
     * Generated from protobuf field <code>.api.AzureServiceBusIntegration integration = 1;</code>
     */
    protected $integration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\AzureServiceBusIntegration $integration
     *           Integration object.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Integration object.
     *
     * Generated from protobuf field <code>.api.AzureServiceBusIntegration integration = 1;</code>
     * @return \Api\AzureServiceBusIntegration|null
     */
    public function getIntegration()
    {
        return $this->integration;
    }

    public function hasIntegration()
    {
        return isset($this->integration);
    }

    public function clearIntegration()
    {
        unset($this->integration);
    }

    /**
     * Integration object.
     *
     * Generated from protobuf field <code>.api.AzureServiceBusIntegration integration = 1;</code>
     * @param \Api\AzureServiceBusIntegration $var
     * @return $this
     */
    public function setIntegration($var)
    {
        GPBUtil::checkMessage($var, \Api\AzureServiceBusIntegration::class);
        $this->integration = $var;

        return $this;
    }

}

