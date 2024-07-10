<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/tenant.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetTenantUserResponse</code>
 */
class GetTenantUserResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Tenant user object.
     *
     * Generated from protobuf field <code>.api.TenantUser tenant_user = 1;</code>
     */
    protected $tenant_user = null;
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
     *     @type \Chirpstack\Api\TenantUser $tenant_user
     *           Tenant user object.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Created at timestamp.
     *     @type \Google\Protobuf\Timestamp $updated_at
     *           Last update timestamp.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Tenant::initOnce();
        parent::__construct($data);
    }

    /**
     * Tenant user object.
     *
     * Generated from protobuf field <code>.api.TenantUser tenant_user = 1;</code>
     * @return \Chirpstack\Api\TenantUser|null
     */
    public function getTenantUser()
    {
        return $this->tenant_user;
    }

    public function hasTenantUser()
    {
        return isset($this->tenant_user);
    }

    public function clearTenantUser()
    {
        unset($this->tenant_user);
    }

    /**
     * Tenant user object.
     *
     * Generated from protobuf field <code>.api.TenantUser tenant_user = 1;</code>
     * @param \Chirpstack\Api\TenantUser $var
     * @return $this
     */
    public function setTenantUser($var)
    {
        GPBUtil::checkMessage($var, \Chirpstack\Api\TenantUser::class);
        $this->tenant_user = $var;

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

