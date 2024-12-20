<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/multicastGroup.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.MulticastGroup</code>
 */
class MulticastGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * ID (string formatted UUID).
     * This will be generated automatically on create.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Multicast-group name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Multicast address (HEX encoded DevAddr).
     *
     * Generated from protobuf field <code>string mc_addr = 3;</code>
     */
    protected $mc_addr = '';
    /**
     * Multicast network session key (HEX encoded AES128 key).
     *
     * Generated from protobuf field <code>string mc_nwk_s_key = 4;</code>
     */
    protected $mc_nwk_s_key = '';
    /**
     * Multicast application session key (HEX encoded AES128 key).
     *
     * Generated from protobuf field <code>string mc_app_s_key = 5;</code>
     */
    protected $mc_app_s_key = '';
    /**
     * Frame-counter.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 6;</code>
     */
    protected $f_cnt = 0;
    /**
     * Multicast type.
     *
     * Generated from protobuf field <code>.api.MulticastGroupType group_type = 7;</code>
     */
    protected $group_type = 0;
    /**
     * Data-rate.
     *
     * Generated from protobuf field <code>uint32 dr = 8;</code>
     */
    protected $dr = 0;
    /**
     * Frequency (Hz).
     *
     * Generated from protobuf field <code>uint32 frequency = 9;</code>
     */
    protected $frequency = 0;
    /**
     * Ping-slot period.
     * Mandatory for Class-B multicast groups.
     *
     * Generated from protobuf field <code>uint32 ping_slot_period = 10;</code>
     */
    protected $ping_slot_period = 0;
    /**
     * Application ID.
     * After creation, this can not be updated.
     *
     * Generated from protobuf field <code>int64 application_id = 12 [json_name = "applicationID"];</code>
     */
    protected $application_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           ID (string formatted UUID).
     *           This will be generated automatically on create.
     *     @type string $name
     *           Multicast-group name.
     *     @type string $mc_addr
     *           Multicast address (HEX encoded DevAddr).
     *     @type string $mc_nwk_s_key
     *           Multicast network session key (HEX encoded AES128 key).
     *     @type string $mc_app_s_key
     *           Multicast application session key (HEX encoded AES128 key).
     *     @type int $f_cnt
     *           Frame-counter.
     *     @type int $group_type
     *           Multicast type.
     *     @type int $dr
     *           Data-rate.
     *     @type int $frequency
     *           Frequency (Hz).
     *     @type int $ping_slot_period
     *           Ping-slot period.
     *           Mandatory for Class-B multicast groups.
     *     @type int|string $application_id
     *           Application ID.
     *           After creation, this can not be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\MulticastGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * ID (string formatted UUID).
     * This will be generated automatically on create.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID (string formatted UUID).
     * This will be generated automatically on create.
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
     * Multicast-group name.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Multicast-group name.
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
     * Multicast address (HEX encoded DevAddr).
     *
     * Generated from protobuf field <code>string mc_addr = 3;</code>
     * @return string
     */
    public function getMcAddr()
    {
        return $this->mc_addr;
    }

    /**
     * Multicast address (HEX encoded DevAddr).
     *
     * Generated from protobuf field <code>string mc_addr = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMcAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->mc_addr = $var;

        return $this;
    }

    /**
     * Multicast network session key (HEX encoded AES128 key).
     *
     * Generated from protobuf field <code>string mc_nwk_s_key = 4;</code>
     * @return string
     */
    public function getMcNwkSKey()
    {
        return $this->mc_nwk_s_key;
    }

    /**
     * Multicast network session key (HEX encoded AES128 key).
     *
     * Generated from protobuf field <code>string mc_nwk_s_key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMcNwkSKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->mc_nwk_s_key = $var;

        return $this;
    }

    /**
     * Multicast application session key (HEX encoded AES128 key).
     *
     * Generated from protobuf field <code>string mc_app_s_key = 5;</code>
     * @return string
     */
    public function getMcAppSKey()
    {
        return $this->mc_app_s_key;
    }

    /**
     * Multicast application session key (HEX encoded AES128 key).
     *
     * Generated from protobuf field <code>string mc_app_s_key = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMcAppSKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->mc_app_s_key = $var;

        return $this;
    }

    /**
     * Frame-counter.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 6;</code>
     * @return int
     */
    public function getFCnt()
    {
        return $this->f_cnt;
    }

    /**
     * Frame-counter.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setFCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->f_cnt = $var;

        return $this;
    }

    /**
     * Multicast type.
     *
     * Generated from protobuf field <code>.api.MulticastGroupType group_type = 7;</code>
     * @return int
     */
    public function getGroupType()
    {
        return $this->group_type;
    }

    /**
     * Multicast type.
     *
     * Generated from protobuf field <code>.api.MulticastGroupType group_type = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGroupType($var)
    {
        GPBUtil::checkEnum($var, \Api\MulticastGroupType::class);
        $this->group_type = $var;

        return $this;
    }

    /**
     * Data-rate.
     *
     * Generated from protobuf field <code>uint32 dr = 8;</code>
     * @return int
     */
    public function getDr()
    {
        return $this->dr;
    }

    /**
     * Data-rate.
     *
     * Generated from protobuf field <code>uint32 dr = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setDr($var)
    {
        GPBUtil::checkUint32($var);
        $this->dr = $var;

        return $this;
    }

    /**
     * Frequency (Hz).
     *
     * Generated from protobuf field <code>uint32 frequency = 9;</code>
     * @return int
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Frequency (Hz).
     *
     * Generated from protobuf field <code>uint32 frequency = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setFrequency($var)
    {
        GPBUtil::checkUint32($var);
        $this->frequency = $var;

        return $this;
    }

    /**
     * Ping-slot period.
     * Mandatory for Class-B multicast groups.
     *
     * Generated from protobuf field <code>uint32 ping_slot_period = 10;</code>
     * @return int
     */
    public function getPingSlotPeriod()
    {
        return $this->ping_slot_period;
    }

    /**
     * Ping-slot period.
     * Mandatory for Class-B multicast groups.
     *
     * Generated from protobuf field <code>uint32 ping_slot_period = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setPingSlotPeriod($var)
    {
        GPBUtil::checkUint32($var);
        $this->ping_slot_period = $var;

        return $this;
    }

    /**
     * Application ID.
     * After creation, this can not be updated.
     *
     * Generated from protobuf field <code>int64 application_id = 12 [json_name = "applicationID"];</code>
     * @return int|string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Application ID.
     * After creation, this can not be updated.
     *
     * Generated from protobuf field <code>int64 application_id = 12 [json_name = "applicationID"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->application_id = $var;

        return $this;
    }

}

