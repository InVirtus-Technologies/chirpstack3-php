<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/device.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetDeviceNextFCntDownResponse</code>
 */
class GetDeviceNextFCntDownResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * FCntDown.
     *
     * Generated from protobuf field <code>uint32 f_cnt_down = 1;</code>
     */
    protected $f_cnt_down = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $f_cnt_down
     *           FCntDown.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Device::initOnce();
        parent::__construct($data);
    }

    /**
     * FCntDown.
     *
     * Generated from protobuf field <code>uint32 f_cnt_down = 1;</code>
     * @return int
     */
    public function getFCntDown()
    {
        return $this->f_cnt_down;
    }

    /**
     * FCntDown.
     *
     * Generated from protobuf field <code>uint32 f_cnt_down = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFCntDown($var)
    {
        GPBUtil::checkUint32($var);
        $this->f_cnt_down = $var;

        return $this;
    }

}

