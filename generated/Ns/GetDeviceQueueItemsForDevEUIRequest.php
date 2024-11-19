<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.GetDeviceQueueItemsForDevEUIRequest</code>
 */
class GetDeviceQueueItemsForDevEUIRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * DevEUI of the device.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     */
    protected $dev_eui = '';
    /**
     * Return only the count, not the result-set.
     *
     * Generated from protobuf field <code>bool count_only = 2;</code>
     */
    protected $count_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_eui
     *           DevEUI of the device.
     *     @type bool $count_only
     *           Return only the count, not the result-set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * DevEUI of the device.
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * DevEUI of the device.
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
     * Return only the count, not the result-set.
     *
     * Generated from protobuf field <code>bool count_only = 2;</code>
     * @return bool
     */
    public function getCountOnly()
    {
        return $this->count_only;
    }

    /**
     * Return only the count, not the result-set.
     *
     * Generated from protobuf field <code>bool count_only = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCountOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->count_only = $var;

        return $this;
    }

}

