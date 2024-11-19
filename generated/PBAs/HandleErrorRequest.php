<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/as.proto

namespace PBAs;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>as.HandleErrorRequest</code>
 */
class HandleErrorRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Device EUI (8 bytes).
     *
     * Generated from protobuf field <code>bytes dev_eui = 1;</code>
     */
    protected $dev_eui = '';
    /**
     * Type of the error.
     *
     * Generated from protobuf field <code>.as.ErrorType type = 3;</code>
     */
    protected $type = 0;
    /**
     * Error string describing the error.
     *
     * Generated from protobuf field <code>string error = 4;</code>
     */
    protected $error = '';
    /**
     * Frame-counter (if applicable) related to the error.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 5;</code>
     */
    protected $f_cnt = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_eui
     *           Device EUI (8 bytes).
     *     @type int $type
     *           Type of the error.
     *     @type string $error
     *           Error string describing the error.
     *     @type int $f_cnt
     *           Frame-counter (if applicable) related to the error.
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
     * Type of the error.
     *
     * Generated from protobuf field <code>.as.ErrorType type = 3;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the error.
     *
     * Generated from protobuf field <code>.as.ErrorType type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \PBAs\ErrorType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Error string describing the error.
     *
     * Generated from protobuf field <code>string error = 4;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Error string describing the error.
     *
     * Generated from protobuf field <code>string error = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

    /**
     * Frame-counter (if applicable) related to the error.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 5;</code>
     * @return int
     */
    public function getFCnt()
    {
        return $this->f_cnt;
    }

    /**
     * Frame-counter (if applicable) related to the error.
     *
     * Generated from protobuf field <code>uint32 f_cnt = 5;</code>
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

