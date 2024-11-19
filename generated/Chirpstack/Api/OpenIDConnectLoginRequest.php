<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/internal.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.OpenIDConnectLoginRequest</code>
 */
class OpenIDConnectLoginRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * OpenID Connect callback code.
     *
     * Generated from protobuf field <code>string code = 1;</code>
     */
    protected $code = '';
    /**
     * OpenID Connect callback state.
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
     *           OpenID Connect callback code.
     *     @type string $state
     *           OpenID Connect callback state.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Internal::initOnce();
        parent::__construct($data);
    }

    /**
     * OpenID Connect callback code.
     *
     * Generated from protobuf field <code>string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * OpenID Connect callback code.
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
     * OpenID Connect callback state.
     *
     * Generated from protobuf field <code>string state = 2;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * OpenID Connect callback state.
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
