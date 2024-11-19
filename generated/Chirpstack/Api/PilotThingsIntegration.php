<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/application.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.PilotThingsIntegration</code>
 */
class PilotThingsIntegration extends \Google\Protobuf\Internal\Message
{
    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1 [json_name = "applicationID"];</code>
     */
    protected $application_id = 0;
    /**
     * Server URL
     *
     * Generated from protobuf field <code>string server = 2;</code>
     */
    protected $server = '';
    /**
     * Authentication token
     *
     * Generated from protobuf field <code>string token = 3;</code>
     */
    protected $token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $application_id
     *           Application ID.
     *     @type string $server
     *           Server URL
     *     @type string $token
     *           Authentication token
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
     * Server URL
     *
     * Generated from protobuf field <code>string server = 2;</code>
     * @return string
     */
    public function getServer()
    {
        return $this->server;
    }

    /**
     * Server URL
     *
     * Generated from protobuf field <code>string server = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setServer($var)
    {
        GPBUtil::checkString($var, True);
        $this->server = $var;

        return $this;
    }

    /**
     * Authentication token
     *
     * Generated from protobuf field <code>string token = 3;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Authentication token
     *
     * Generated from protobuf field <code>string token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

}
