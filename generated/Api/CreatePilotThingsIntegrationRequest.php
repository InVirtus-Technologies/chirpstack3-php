<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/application.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.CreatePilotThingsIntegrationRequest</code>
 */
class CreatePilotThingsIntegrationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Integration object to create.
     *
     * Generated from protobuf field <code>.api.PilotThingsIntegration integration = 1;</code>
     */
    protected $integration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\PilotThingsIntegration $integration
     *           Integration object to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Integration object to create.
     *
     * Generated from protobuf field <code>.api.PilotThingsIntegration integration = 1;</code>
     * @return \Api\PilotThingsIntegration|null
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
     * Integration object to create.
     *
     * Generated from protobuf field <code>.api.PilotThingsIntegration integration = 1;</code>
     * @param \Api\PilotThingsIntegration $var
     * @return $this
     */
    public function setIntegration($var)
    {
        GPBUtil::checkMessage($var, \Api\PilotThingsIntegration::class);
        $this->integration = $var;

        return $this;
    }

}

