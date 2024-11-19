<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/networkServer.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.GetADRAlgorithmsResponse</code>
 */
class GetADRAlgorithmsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .api.ADRAlgorithm adr_algorithms = 1;</code>
     */
    private $adr_algorithms;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Api\ADRAlgorithm>|\Google\Protobuf\Internal\RepeatedField $adr_algorithms
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\NetworkServer::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .api.ADRAlgorithm adr_algorithms = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdrAlgorithms()
    {
        return $this->adr_algorithms;
    }

    /**
     * Generated from protobuf field <code>repeated .api.ADRAlgorithm adr_algorithms = 1;</code>
     * @param array<\Api\ADRAlgorithm>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdrAlgorithms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Api\ADRAlgorithm::class);
        $this->adr_algorithms = $arr;

        return $this;
    }

}
