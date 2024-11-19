<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/organization.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.OrganizationListItem</code>
 */
class OrganizationListItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Organization ID.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Organization name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Organization display name.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    protected $display_name = '';
    /**
     * Can the organization create and "own" Gateways?
     *
     * Generated from protobuf field <code>bool can_have_gateways = 4;</code>
     */
    protected $can_have_gateways = false;
    /**
     * Created at timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
     */
    protected $created_at = null;
    /**
     * Last update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 6;</code>
     */
    protected $updated_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           Organization ID.
     *     @type string $name
     *           Organization name.
     *     @type string $display_name
     *           Organization display name.
     *     @type bool $can_have_gateways
     *           Can the organization create and "own" Gateways?
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

    /**
     * Organization name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Organization name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Organization display name.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Organization display name.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Can the organization create and "own" Gateways?
     *
     * Generated from protobuf field <code>bool can_have_gateways = 4;</code>
     * @return bool
     */
    public function getCanHaveGateways()
    {
        return $this->can_have_gateways;
    }

    /**
     * Can the organization create and "own" Gateways?
     *
     * Generated from protobuf field <code>bool can_have_gateways = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanHaveGateways($var)
    {
        GPBUtil::checkBool($var);
        $this->can_have_gateways = $var;

        return $this;
    }

    /**
     * Created at timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp created_at = 5;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 6;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp updated_at = 6;</code>
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

