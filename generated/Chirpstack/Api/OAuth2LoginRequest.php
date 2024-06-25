<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/internal.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.OAuth2LoginRequest</code>
 */
class OAuth2LoginRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * OAuth2 callback code.
     *
     * Generated from protobuf field <code>string code = 1;</code>
     */
    protected $code = '';
    /**
     * OAuth2 callback state.
     *
     * Generated from protobuf field <code>string state = 2;</code>
     */
    protected $state = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *           OAuth2 callback code.
     *     @type string $state
     *           OAuth2 callback state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Internal::initOnce();
        parent::__construct($data);
    }

    /**
     * OAuth2 callback code.
     *
     * Generated from protobuf field <code>string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * OAuth2 callback code.
     *
     * Generated from protobuf field <code>string code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * OAuth2 callback state.
     *
     * Generated from protobuf field <code>string state = 2;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * OAuth2 callback state.
     *
     * Generated from protobuf field <code>string state = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

}

