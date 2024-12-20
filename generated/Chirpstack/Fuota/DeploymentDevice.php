<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: fuota/fuota.proto

namespace Fuota;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>fuota.DeploymentDevice</code>
 */
class DeploymentDevice extends \Google\Protobuf\Internal\Message
{
    /**
     * DevEUI.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     */
    protected $dev_eui = '';
    /**
     * McRootKey.
     *
     * Generated from protobuf field <code>bytes mc_root_key = 2;</code>
     */
    protected $mc_root_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_eui
     *           DevEUI.
     *     @type string $mc_root_key
     *           McRootKey.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Fuota\Fuota::initOnce();
        parent::__construct($data);
    }

    /**
     * DevEUI.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * DevEUI.
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
     * McRootKey.
     *
     * Generated from protobuf field <code>bytes mc_root_key = 2;</code>
     * @return string
     */
    public function getMcRootKey()
    {
        return $this->mc_root_key;
    }

    /**
     * McRootKey.
     *
     * Generated from protobuf field <code>bytes mc_root_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMcRootKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->mc_root_key = $var;

        return $this;
    }

}

