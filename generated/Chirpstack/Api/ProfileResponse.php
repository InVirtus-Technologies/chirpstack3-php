<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/internal.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ProfileResponse</code>
 */
class ProfileResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * User object.
     *
     * Generated from protobuf field <code>.api.User user = 1;</code>
     */
    protected $user = null;
    /**
     * Organizations to which the user is associated.
     *
     * Generated from protobuf field <code>repeated .api.OrganizationLink organizations = 3;</code>
     */
    private $organizations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\User $user
     *           User object.
     *     @type array<\Api\OrganizationLink>|\Google\Protobuf\Internal\RepeatedField $organizations
     *           Organizations to which the user is associated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Internal::initOnce();
        parent::__construct($data);
    }

    /**
     * User object.
     *
     * Generated from protobuf field <code>.api.User user = 1;</code>
     * @return \Api\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * User object.
     *
     * Generated from protobuf field <code>.api.User user = 1;</code>
     * @param \Api\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Api\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Organizations to which the user is associated.
     *
     * Generated from protobuf field <code>repeated .api.OrganizationLink organizations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrganizations()
    {
        return $this->organizations;
    }

    /**
     * Organizations to which the user is associated.
     *
     * Generated from protobuf field <code>repeated .api.OrganizationLink organizations = 3;</code>
     * @param array<\Api\OrganizationLink>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrganizations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\OrganizationLink::class);
        $this->organizations = $arr;

        return $this;
    }

}

