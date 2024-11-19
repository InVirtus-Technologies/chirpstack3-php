<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gw/gw.proto

namespace Gw;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>gw.DelayTimingInfo</code>
 */
class DelayTimingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Delay (duration).
     * The delay will be added to the gateway internal timing, provided by the context object.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration delay = 1;</code>
     */
    protected $delay = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $delay
     *           Delay (duration).
     *           The delay will be added to the gateway internal timing, provided by the context object.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gw\Gw::initOnce();
        parent::__construct($data);
    }

    /**
     * Delay (duration).
     * The delay will be added to the gateway internal timing, provided by the context object.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration delay = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getDelay()
    {
        return $this->delay;
    }

    public function hasDelay()
    {
        return isset($this->delay);
    }

    public function clearDelay()
    {
        unset($this->delay);
    }

    /**
     * Delay (duration).
     * The delay will be added to the gateway internal timing, provided by the context object.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration delay = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setDelay($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->delay = $var;

        return $this;
    }

}

