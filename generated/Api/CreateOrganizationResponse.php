<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/organization.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.CreateOrganizationResponse</code>
 */
class CreateOrganizationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Organization ID.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           Organization ID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Organization::initOnce();
        parent::__construct($data);
    }

    /**
     * Organization ID.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Organization ID.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

}

