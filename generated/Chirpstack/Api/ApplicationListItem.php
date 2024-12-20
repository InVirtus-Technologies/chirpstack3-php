<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/application.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ApplicationListItem</code>
 */
class ApplicationListItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Name of the application.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Description of the application.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';
    /**
     * ID of the organization to which the application belongs.
     *
     * Generated from protobuf field <code>int64 organization_id = 4 [json_name = "organizationID"];</code>
     */
    protected $organization_id = 0;
    /**
     * ID of the service profile.
     *
     * Generated from protobuf field <code>string service_profile_id = 5 [json_name = "serviceProfileID"];</code>
     */
    protected $service_profile_id = '';
    /**
     * Service-profile name.
     *
     * Generated from protobuf field <code>string service_profile_name = 6;</code>
     */
    protected $service_profile_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           Application ID.
     *     @type string $name
     *           Name of the application.
     *     @type string $description
     *           Description of the application.
     *     @type int|string $organization_id
     *           ID of the organization to which the application belongs.
     *     @type string $service_profile_id
     *           ID of the service profile.
     *     @type string $service_profile_name
     *           Service-profile name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Application ID.
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
     * Name of the application.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the application.
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
     * Description of the application.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the application.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * ID of the organization to which the application belongs.
     *
     * Generated from protobuf field <code>int64 organization_id = 4 [json_name = "organizationID"];</code>
     * @return int|string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * ID of the organization to which the application belongs.
     *
     * Generated from protobuf field <code>int64 organization_id = 4 [json_name = "organizationID"];</code>
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
     * ID of the service profile.
     *
     * Generated from protobuf field <code>string service_profile_id = 5 [json_name = "serviceProfileID"];</code>
     * @return string
     */
    public function getServiceProfileId()
    {
        return $this->service_profile_id;
    }

    /**
     * ID of the service profile.
     *
     * Generated from protobuf field <code>string service_profile_id = 5 [json_name = "serviceProfileID"];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_profile_id = $var;

        return $this;
    }

    /**
     * Service-profile name.
     *
     * Generated from protobuf field <code>string service_profile_name = 6;</code>
     * @return string
     */
    public function getServiceProfileName()
    {
        return $this->service_profile_name;
    }

    /**
     * Service-profile name.
     *
     * Generated from protobuf field <code>string service_profile_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceProfileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_profile_name = $var;

        return $this;
    }

}

