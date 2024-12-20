<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: nc/nc.proto

namespace Nc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>nc.HandleUplinkMACCommandRequest</code>
 */
class HandleUplinkMACCommandRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Device EUI (8 bytes).
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     */
    protected $dev_eui = '';
    /**
     * Command identifier (specified by the LoRaWAN specs).
     *
     * Generated from protobuf field <code>uint32 cid = 2;</code>
     */
    protected $cid = 0;
    /**
     * MAC-command payload(s).
     *
     * Generated from protobuf field <code>repeated bytes commands = 6;</code>
     */
    private $commands;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_eui
     *           Device EUI (8 bytes).
     *     @type int $cid
     *           Command identifier (specified by the LoRaWAN specs).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $commands
     *           MAC-command payload(s).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Nc\Nc::initOnce();
        parent::__construct($data);
    }

    /**
     * Device EUI (8 bytes).
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * Device EUI (8 bytes).
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDevEui($var)
    {
        GPBUtil::checkString($var, False);
        $this->dev_eui = $var;

        return $this;
    }

    /**
     * Command identifier (specified by the LoRaWAN specs).
     *
     * Generated from protobuf field <code>uint32 cid = 2;</code>
     * @return int
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Command identifier (specified by the LoRaWAN specs).
     *
     * Generated from protobuf field <code>uint32 cid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCid($var)
    {
        GPBUtil::checkUint32($var);
        $this->cid = $var;

        return $this;
    }

    /**
     * MAC-command payload(s).
     *
     * Generated from protobuf field <code>repeated bytes commands = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommands()
    {
        return $this->commands;
    }

    /**
     * MAC-command payload(s).
     *
     * Generated from protobuf field <code>repeated bytes commands = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->commands = $arr;

        return $this;
    }

}

