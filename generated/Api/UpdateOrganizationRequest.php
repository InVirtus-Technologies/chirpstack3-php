<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/organization.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.UpdateOrganizationRequest</code>
 */
class UpdateOrganizationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Organization object to update.
     *
     * Generated from protobuf field <code>.api.Organization organization = 1;</code>
     */
    protected $organization = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\Organization $organization
     *           Organization object to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Organization::initOnce();
        parent::__construct($data);
    }

    /**
     * Organization object to update.
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
     * Organization object to update.
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

}

