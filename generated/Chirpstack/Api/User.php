<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/user.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    /**
     * User ID.
     * Will be set automatically on create.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * The session timeout, in minutes.
     *
     * Generated from protobuf field <code>int32 session_ttl = 3 [json_name = "sessionTTL"];</code>
     */
    protected $session_ttl = 0;
    /**
     * Set to true to make the user a global administrator.
     *
     * Generated from protobuf field <code>bool is_admin = 4;</code>
     */
    protected $is_admin = false;
    /**
     * Set to false to disable the user.
     *
     * Generated from protobuf field <code>bool is_active = 5;</code>
     */
    protected $is_active = false;
    /**
     * E-mail of the user.
     *
     * Generated from protobuf field <code>string email = 6;</code>
     */
    protected $email = '';
    /**
     * Optional note to store with the user.
     *
     * Generated from protobuf field <code>string note = 7;</code>
     */
    protected $note = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           User ID.
     *           Will be set automatically on create.
     *     @type int $session_ttl
     *           The session timeout, in minutes.
     *     @type bool $is_admin
     *           Set to true to make the user a global administrator.
     *     @type bool $is_active
     *           Set to false to disable the user.
     *     @type string $email
     *           E-mail of the user.
     *     @type string $note
     *           Optional note to store with the user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\User::initOnce();
        parent::__construct($data);
    }

    /**
     * User ID.
     * Will be set automatically on create.
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * User ID.
     * Will be set automatically on create.
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
     * The session timeout, in minutes.
     *
     * Generated from protobuf field <code>int32 session_ttl = 3 [json_name = "sessionTTL"];</code>
     * @return int
     */
    public function getSessionTtl()
    {
        return $this->session_ttl;
    }

    /**
     * The session timeout, in minutes.
     *
     * Generated from protobuf field <code>int32 session_ttl = 3 [json_name = "sessionTTL"];</code>
     * @param int $var
     * @return $this
     */
    public function setSessionTtl($var)
    {
        GPBUtil::checkInt32($var);
        $this->session_ttl = $var;

        return $this;
    }

    /**
     * Set to true to make the user a global administrator.
     *
     * Generated from protobuf field <code>bool is_admin = 4;</code>
     * @return bool
     */
    public function getIsAdmin()
    {
        return $this->is_admin;
    }

    /**
     * Set to true to make the user a global administrator.
     *
     * Generated from protobuf field <code>bool is_admin = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAdmin($var)
    {
        GPBUtil::checkBool($var);
        $this->is_admin = $var;

        return $this;
    }

    /**
     * Set to false to disable the user.
     *
     * Generated from protobuf field <code>bool is_active = 5;</code>
     * @return bool
     */
    public function getIsActive()
    {
        return $this->is_active;
    }

    /**
     * Set to false to disable the user.
     *
     * Generated from protobuf field <code>bool is_active = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsActive($var)
    {
        GPBUtil::checkBool($var);
        $this->is_active = $var;

        return $this;
    }

    /**
     * E-mail of the user.
     *
     * Generated from protobuf field <code>string email = 6;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * E-mail of the user.
     *
     * Generated from protobuf field <code>string email = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Optional note to store with the user.
     *
     * Generated from protobuf field <code>string note = 7;</code>
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Optional note to store with the user.
     *
     * Generated from protobuf field <code>string note = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkString($var, True);
        $this->note = $var;

        return $this;
    }

}

