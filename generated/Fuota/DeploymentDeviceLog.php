<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fuota/fuota.proto

namespace Fuota;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>fuota.DeploymentDeviceLog</code>
 */
class DeploymentDeviceLog extends \Google\Protobuf\Internal\Message
{
    /**
     * Created at.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 1;</code>
     */
    protected $created_at = null;
    /**
     * FPort.
     *
     * Generated from protobuf field <code>uint32 f_port = 2;</code>
     */
    protected $f_port = 0;
    /**
     * Command.
     *
     * Generated from protobuf field <code>string command = 3;</code>
     */
    protected $command = '';
    /**
     * Fields.
     *
     * Generated from protobuf field <code>map<string, string> fields = 4;</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Created at.
     *     @type int $f_port
     *           FPort.
     *     @type string $command
     *           Command.
     *     @type array|\Google\Protobuf\Internal\MapField $fields
     *           Fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Fuota\Fuota::initOnce();
        parent::__construct($data);
    }

    /**
     * Created at.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function hasCreatedAt()
    {
        return isset($this->created_at);
    }

    public function clearCreatedAt()
    {
        unset($this->created_at);
    }

    /**
     * Created at.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created_at = $var;

        return $this;
    }

    /**
     * FPort.
     *
     * Generated from protobuf field <code>uint32 f_port = 2;</code>
     * @return int
     */
    public function getFPort()
    {
        return $this->f_port;
    }

    /**
     * FPort.
     *
     * Generated from protobuf field <code>uint32 f_port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFPort($var)
    {
        GPBUtil::checkUint32($var);
        $this->f_port = $var;

        return $this;
    }

    /**
     * Command.
     *
     * Generated from protobuf field <code>string command = 3;</code>
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Command.
     *
     * Generated from protobuf field <code>string command = 3;</code>
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
     * Fields.
     *
     * Generated from protobuf field <code>map<string, string> fields = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Fields.
     *
     * Generated from protobuf field <code>map<string, string> fields = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fields = $arr;

        return $this;
    }

}
