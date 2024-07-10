<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/common.proto

namespace Chirpstack\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>common.KeyEnvelope</code>
 */
class KeyEnvelope extends \Google\Protobuf\Internal\Message
{
    /**
     * KEK label.
     *
     * Generated from protobuf field <code>string kek_label = 1;</code>
     */
    protected $kek_label = '';
    /**
     * AES key (when the kek_label is set, this value must first be decrypted).
     *
     * Generated from protobuf field <code>bytes aes_key = 2;</code>
     */
    protected $aes_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kek_label
     *           KEK label.
     *     @type string $aes_key
     *           AES key (when the kek_label is set, this value must first be decrypted).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Common\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * KEK label.
     *
     * Generated from protobuf field <code>string kek_label = 1;</code>
     * @return string
     */
    public function getKekLabel()
    {
        return $this->kek_label;
    }

    /**
     * KEK label.
     *
     * Generated from protobuf field <code>string kek_label = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKekLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->kek_label = $var;

        return $this;
    }

    /**
     * AES key (when the kek_label is set, this value must first be decrypted).
     *
     * Generated from protobuf field <code>bytes aes_key = 2;</code>
     * @return string
     */
    public function getAesKey()
    {
        return $this->aes_key;
    }

    /**
     * AES key (when the kek_label is set, this value must first be decrypted).
     *
     * Generated from protobuf field <code>bytes aes_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAesKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->aes_key = $var;

        return $this;
    }

}

