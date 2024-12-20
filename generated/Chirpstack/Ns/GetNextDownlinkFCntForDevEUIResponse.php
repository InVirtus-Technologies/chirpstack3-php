<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.GetNextDownlinkFCntForDevEUIResponse</code>
 */
class GetNextDownlinkFCntForDevEUIResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The frame-counter to use.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 1;</code>
     */
    protected $f_cnt = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $f_cnt
     *           The frame-counter to use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * The frame-counter to use.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 1;</code>
     * @return int
     */
    public function getFCnt()
    {
        return $this->f_cnt;
    }

    /**
     * The frame-counter to use.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFCnt($var)
    {
        GPBUtil::checkUint32($var);
        $this->f_cnt = $var;

        return $this;
    }

}

