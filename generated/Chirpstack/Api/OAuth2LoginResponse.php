<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/internal.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.OAuth2LoginResponse</code>
 */
class OAuth2LoginResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Token to use for authentication.
     *
     * Generated from protobuf field <code>string token = 1;</code>
     */
    protected $token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $token
     *           Token to use for authentication.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Internal::initOnce();
        parent::__construct($data);
    }

    /**
     * Token to use for authentication.
     *
     * Generated from protobuf field <code>string token = 1;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Token to use for authentication.
     *
     * Generated from protobuf field <code>string token = 1;</code>
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

