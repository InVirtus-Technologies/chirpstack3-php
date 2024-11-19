<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/organization.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetOrganizationResponse</code>
 */
class GetOrganizationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Organization object.
     *
     * Generated from protobuf field <code>.api.Organization organization = 1;</code>
     */
    protected $organization = null;
    /**
     * Created at timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
     */
    protected $created_at = null;
    /**
     * Last update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 3;</code>
     */
    protected $updated_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\Organization $organization
     *           Organization object.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Created at timestamp.
     *     @type \Google\Protobuf\Timestamp $updated_at
     *           Last update timestamp.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Organization::initOnce();
        parent::__construct($data);
    }

    /**
     * Organization object.
     *
     * Generated from protobuf field <code>.api.Organization organization = 1;</code>
     * @return \Api\Organization|null
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    public function hasOrganization()
    {
        return isset($this->organization);
    }

    public function clearOrganization()
    {
        unset($this->organization);
    }

    /**
     * Organization object.
     *
     * Generated from protobuf field <code>.api.Organization organization = 1;</code>
     * @param \Api\Organization $var
     * @return $this
     */
    public function setOrganization($var)
    {
        GPBUtil::checkMessage($var, \Api\Organization::class);
        $this->organization = $var;

        return $this;
    }

    /**
     * Created at timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
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
     * Created at timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 2;</code>
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
     * Last update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function hasUpdatedAt()
    {
        return isset($this->updated_at);
    }

    public function clearUpdatedAt()
    {
        unset($this->updated_at);
    }

    /**
     * Last update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->updated_at = $var;

        return $this;
    }

}

