<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.GetGatewayResponse</code>
 */
class GetGatewayResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Gateway object.
     *
     * Generated from protobuf field <code>.ns.Gateway gateway = 1;</code>
     */
    protected $gateway = null;
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
     * First seen timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_seen_at = 4;</code>
     */
    protected $first_seen_at = null;
    /**
     * Last seen timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_seen_at = 5;</code>
     */
    protected $last_seen_at = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ns\Gateway $gateway
     *           Gateway object.
     *     @type \Google\Protobuf\Timestamp $created_at
     *           Created at timestamp.
     *     @type \Google\Protobuf\Timestamp $updated_at
     *           Last update timestamp.
     *     @type \Google\Protobuf\Timestamp $first_seen_at
     *           First seen timestamp.
     *     @type \Google\Protobuf\Timestamp $last_seen_at
     *           Last seen timestamp.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * Gateway object.
     *
     * Generated from protobuf field <code>.ns.Gateway gateway = 1;</code>
     * @return \Ns\Gateway|null
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    public function hasGateway()
    {
        return isset($this->gateway);
    }

    public function clearGateway()
    {
        unset($this->gateway);
    }

    /**
     * Gateway object.
     *
     * Generated from protobuf field <code>.ns.Gateway gateway = 1;</code>
     * @param \Ns\Gateway $var
     * @return $this
     */
    public function setGateway($var)
    {
        GPBUtil::checkMessage($var, \Ns\Gateway::class);
        $this->gateway = $var;

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

    /**
     * First seen timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_seen_at = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFirstSeenAt()
    {
        return $this->first_seen_at;
    }

    public function hasFirstSeenAt()
    {
        return isset($this->first_seen_at);
    }

    public function clearFirstSeenAt()
    {
        unset($this->first_seen_at);
    }

    /**
     * First seen timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_seen_at = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFirstSeenAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->first_seen_at = $var;

        return $this;
    }

    /**
     * Last seen timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_seen_at = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastSeenAt()
    {
        return $this->last_seen_at;
    }

    public function hasLastSeenAt()
    {
        return isset($this->last_seen_at);
    }

    public function clearLastSeenAt()
    {
        unset($this->last_seen_at);
    }

    /**
     * Last seen timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_seen_at = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastSeenAt($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_seen_at = $var;

        return $this;
    }

}

