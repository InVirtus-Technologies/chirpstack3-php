<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/as.proto

namespace PBAs;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>as.HandleDownlinkACKRequest</code>
 */
class HandleDownlinkACKRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Device EUI (8 bytes).
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     */
    protected $dev_eui = '';
    /**
     * Downlink frame-counter.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 2;</code>
     */
    protected $f_cnt = 0;
    /**
     * Frame was acknowledged?
     *
     * Generated from protobuf field <code>bool acknowledged = 3;</code>
     */
    protected $acknowledged = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_eui
     *           Device EUI (8 bytes).
     *     @type int $f_cnt
     *           Downlink frame-counter.
     *     @type bool $acknowledged
     *           Frame was acknowledged?
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\PBAs::initOnce();
        parent::__construct($data);
    }

    /**
     * Device EUI (8 bytes).
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * Device EUI (8 bytes).
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDevEui($var)
    {
        GPBUtil::checkString($var, False);
        $this->dev_eui = $var;

        return $this;
    }

    /**
     * Downlink frame-counter.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 2;</code>
     * @return int
     */
    public function getFCnt()
    {
        return $this->f_cnt;
    }

    /**
     * Downlink frame-counter.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 2;</code>
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
     * Frame was acknowledged?
     *
     * Generated from protobuf field <code>bool acknowledged = 3;</code>
     * @return bool
     */
    public function getAcknowledged()
    {
        return $this->acknowledged;
    }

    /**
     * Frame was acknowledged?
     *
     * Generated from protobuf field <code>bool acknowledged = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAcknowledged($var)
    {
        GPBUtil::checkBool($var);
        $this->acknowledged = $var;

        return $this;
    }

}
