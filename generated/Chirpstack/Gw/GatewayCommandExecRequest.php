<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gw/gw.proto

namespace Gw;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gw.GatewayCommandExecRequest</code>
 */
class GatewayCommandExecRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Gateway ID.
     *
     * Generated from protobuf field <code>bytes gateway_id = 1 [json_name = "gatewayID"];</code>
     */
    protected $gateway_id = '';
    /**
     * Command to execute.
     * This command must be pre-configured in the LoRa Gateway Bridge configuration.
     *
     * Generated from protobuf field <code>string command = 2;</code>
     */
    protected $command = '';
    /**
     * Execution request ID (UUID).
     * The same token will be returned when the execution of the command has
     * completed.
     *
     * Generated from protobuf field <code>bytes ExecId = 3 [json_name = "execID"];</code>
     */
    protected $ExecId = '';
    /**
     * Standard input.
     *
     * Generated from protobuf field <code>bytes stdin = 4;</code>
     */
    protected $stdin = '';
    /**
     * Environment variables.
     *
     * Generated from protobuf field <code>map<string, string> environment = 5;</code>
     */
    private $environment;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gateway_id
     *           Gateway ID.
     *     @type string $command
     *           Command to execute.
     *           This command must be pre-configured in the LoRa Gateway Bridge configuration.
     *     @type string $ExecId
     *           Execution request ID (UUID).
     *           The same token will be returned when the execution of the command has
     *           completed.
     *     @type string $stdin
     *           Standard input.
     *     @type array|\Google\Protobuf\Internal\MapField $environment
     *           Environment variables.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gw\Gw::initOnce();
        parent::__construct($data);
    }

    /**
     * Gateway ID.
     *
     * Generated from protobuf field <code>bytes gateway_id = 1 [json_name = "gatewayID"];</code>
     * @return string
     */
    public function getGatewayId()
    {
        return $this->gateway_id;
    }

    /**
     * Gateway ID.
     *
     * Generated from protobuf field <code>bytes gateway_id = 1 [json_name = "gatewayID"];</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayId($var)
    {
        GPBUtil::checkString($var, False);
        $this->gateway_id = $var;

        return $this;
    }

    /**
     * Command to execute.
     * This command must be pre-configured in the LoRa Gateway Bridge configuration.
     *
     * Generated from protobuf field <code>string command = 2;</code>
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Command to execute.
     * This command must be pre-configured in the LoRa Gateway Bridge configuration.
     *
     * Generated from protobuf field <code>string command = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCommand($var)
    {
        GPBUtil::checkString($var, True);
        $this->command = $var;

        return $this;
    }

    /**
     * Execution request ID (UUID).
     * The same token will be returned when the execution of the command has
     * completed.
     *
     * Generated from protobuf field <code>bytes ExecId = 3 [json_name = "execID"];</code>
     * @return string
     */
    public function getExecId()
    {
        return $this->ExecId;
    }

    /**
     * Execution request ID (UUID).
     * The same token will be returned when the execution of the command has
     * completed.
     *
     * Generated from protobuf field <code>bytes ExecId = 3 [json_name = "execID"];</code>
     * @param string $var
     * @return $this
     */
    public function setExecId($var)
    {
        GPBUtil::checkString($var, False);
        $this->ExecId = $var;

        return $this;
    }

    /**
     * Standard input.
     *
     * Generated from protobuf field <code>bytes stdin = 4;</code>
     * @return string
     */
    public function getStdin()
    {
        return $this->stdin;
    }

    /**
     * Standard input.
     *
     * Generated from protobuf field <code>bytes stdin = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStdin($var)
    {
        GPBUtil::checkString($var, False);
        $this->stdin = $var;

        return $this;
    }

    /**
     * Environment variables.
     *
     * Generated from protobuf field <code>map<string, string> environment = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Environment variables.
     *
     * Generated from protobuf field <code>map<string, string> environment = 5;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->environment = $arr;

        return $this;
    }

}

