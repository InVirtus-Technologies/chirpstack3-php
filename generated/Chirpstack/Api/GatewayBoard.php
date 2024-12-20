<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/gateway.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GatewayBoard</code>
 */
class GatewayBoard extends \Google\Protobuf\Internal\Message
{
    /**
     * FPGA ID of the gateway (HEX encoded) (optional).
     *
     * Generated from protobuf field <code>string fpga_id = 1 [json_name = "fpgaID"];</code>
     */
    protected $fpga_id = '';
    /**
     * Fine-timestamp AES decryption key (HEX encoded) (optional).
     *
     * Generated from protobuf field <code>string fine_timestamp_key = 2;</code>
     */
    protected $fine_timestamp_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fpga_id
     *           FPGA ID of the gateway (HEX encoded) (optional).
     *     @type string $fine_timestamp_key
     *           Fine-timestamp AES decryption key (HEX encoded) (optional).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Gateway::initOnce();
        parent::__construct($data);
    }

    /**
     * FPGA ID of the gateway (HEX encoded) (optional).
     *
     * Generated from protobuf field <code>string fpga_id = 1 [json_name = "fpgaID"];</code>
     * @return string
     */
    public function getFpgaId()
    {
        return $this->fpga_id;
    }

    /**
     * FPGA ID of the gateway (HEX encoded) (optional).
     *
     * Generated from protobuf field <code>string fpga_id = 1 [json_name = "fpgaID"];</code>
     * @param string $var
     * @return $this
     */
    public function setFpgaId($var)
    {
        GPBUtil::checkString($var, True);
        $this->fpga_id = $var;

        return $this;
    }

    /**
     * Fine-timestamp AES decryption key (HEX encoded) (optional).
     *
     * Generated from protobuf field <code>string fine_timestamp_key = 2;</code>
     * @return string
     */
    public function getFineTimestampKey()
    {
        return $this->fine_timestamp_key;
    }

    /**
     * Fine-timestamp AES decryption key (HEX encoded) (optional).
     *
     * Generated from protobuf field <code>string fine_timestamp_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFineTimestampKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->fine_timestamp_key = $var;

        return $this;
    }

}

