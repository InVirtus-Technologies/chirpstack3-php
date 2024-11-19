<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/user.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.CreateUserRequest</code>
 */
class CreateUserRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * User object to create.
     *
     * Generated from protobuf field <code>.api.User user = 1;</code>
     */
    protected $user = null;
    /**
     * Password of the user.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     */
    protected $password = '';
    /**
     * Add the user to the following organizations.
     *
     * Generated from protobuf field <code>repeated .api.UserOrganization organizations = 3;</code>
     */
    private $organizations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Api\User $user
     *           User object to create.
     *     @type string $password
     *           Password of the user.
     *     @type array<\Api\UserOrganization>|\Google\Protobuf\Internal\RepeatedField $organizations
     *           Add the user to the following organizations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\User::initOnce();
        parent::__construct($data);
    }

    /**
     * User object to create.
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
     * User object to create.
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
     * Password of the user.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Password of the user.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Add the user to the following organizations.
     *
     * Generated from protobuf field <code>repeated .api.UserOrganization organizations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrganizations()
    {
        return $this->organizations;
    }

    /**
     * Add the user to the following organizations.
     *
     * Generated from protobuf field <code>repeated .api.UserOrganization organizations = 3;</code>
     * @param array<\Api\UserOrganization>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrganizations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\UserOrganization::class);
        $this->organizations = $arr;

        return $this;
    }

}
