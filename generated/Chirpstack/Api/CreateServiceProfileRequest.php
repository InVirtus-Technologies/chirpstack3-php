<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/serviceProfile.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.CreateServiceProfileRequest</code>
 */
class CreateServiceProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Service-profile object to create.
     *
     * Generated from protobuf field <code>.api.ServiceProfile service_profile = 1;</code>
     */
    protected $service_profile = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\ServiceProfile $service_profile
     *           Service-profile object to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\ServiceProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Service-profile object to create.
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
     * Service-profile object to create.
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

}
