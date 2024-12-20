<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/gateway.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetGatewayRequest</code>
 */
class GetGatewayRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Gateway ID (HEX encoded).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Gateway ID (HEX encoded).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * Gateway ID (HEX encoded).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gateway ID (HEX encoded).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

