<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/deviceProfile.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.DeviceProfileListItem</code>
 */
class DeviceProfileListItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Device-profile ID (UUID string).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Device-profile name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Organization ID.
     *
     * Generated from protobuf field <code>int64 organization_id = 3 [json_name = "organizationID"];</code>
     */
    protected $organization_id = 0;
    /**
     * Network-server ID.
     *
     * Generated from protobuf field <code>int64 network_server_id = 4 [json_name = "networkServerID"];</code>
     */
    protected $network_server_id = 0;
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
     * Network-server name.
     *
     * Generated from protobuf field <code>string network_server_name = 7;</code>
     */
    protected $network_server_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Device-profile ID (UUID string).
     *     @type string $name
     *           Device-profile name.
     *     @type int|string $organization_id
     *           Organization ID.
     *     @type int|string $network_server_id
     *           Network-server ID.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Created at timestamp.
     *     @type \Google\Protobuf\Timestamp $updated_at
     *           Last update timestamp.
     *     @type string $network_server_name
     *           Network-server name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\DeviceProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Device-profile ID (UUID string).
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Device-profile ID (UUID string).
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

    /**
     * Device-profile name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Device-profile name.
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
     * Organization ID.
     *
     * Generated from protobuf field <code>int64 organization_id = 3 [json_name = "organizationID"];</code>
     * @return int|string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Organization ID.
     *
     * Generated from protobuf field <code>int64 organization_id = 3 [json_name = "organizationID"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setOrganizationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->organization_id = $var;

        return $this;
    }

    /**
     * Network-server ID.
     *
     * Generated from protobuf field <code>int64 network_server_id = 4 [json_name = "networkServerID"];</code>
     * @return int|string
     */
    public function getNetworkServerId()
    {
        return $this->network_server_id;
    }

    /**
     * Network-server ID.
     *
     * Generated from protobuf field <code>int64 network_server_id = 4 [json_name = "networkServerID"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setNetworkServerId($var)
    {
        GPBUtil::checkInt64($var);
        $this->network_server_id = $var;

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

    /**
     * Network-server name.
     *
     * Generated from protobuf field <code>string network_server_name = 7;</code>
     * @return string
     */
    public function getNetworkServerName()
    {
        return $this->network_server_name;
    }

    /**
     * Network-server name.
     *
     * Generated from protobuf field <code>string network_server_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkServerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->network_server_name = $var;

        return $this;
    }

}

