<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/serviceProfile.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetServiceProfileResponse</code>
 */
class GetServiceProfileResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Service-profile object.
     *
     * Generated from protobuf field <code>.api.ServiceProfile service_profile = 1;</code>
     */
    protected $service_profile = null;
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
     *     @type \Api\ServiceProfile $service_profile
     *           Service-profile object.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Created at timestamp.
     *     @type \Google\Protobuf\Timestamp $updated_at
     *           Last update timestamp.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\ServiceProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Service-profile object.
     *
     * Generated from protobuf field <code>.api.ServiceProfile service_profile = 1;</code>
     * @return \Api\ServiceProfile|null
     */
    public function getServiceProfile()
    {
        return $this->service_profile;
    }

    public function hasServiceProfile()
    {
        return isset($this->service_profile);
    }

    public function clearServiceProfile()
    {
        unset($this->service_profile);
    }

    /**
     * Service-profile object.
     *
     * Generated from protobuf field <code>.api.ServiceProfile service_profile = 1;</code>
     * @param \Api\ServiceProfile $var
     * @return $this
     */
    public function setServiceProfile($var)
    {
        GPBUtil::checkMessage($var, \Api\ServiceProfile::class);
        $this->service_profile = $var;

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

