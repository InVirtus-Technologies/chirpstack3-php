<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/ns.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.GetRandomDevAddrResponse</code>
 */
class GetRandomDevAddrResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Random device address (DevAddr).
     * Note that this includes the NetID prefix of the network-server.
     *
     * Generated from protobuf field <code>bytes dev_addr = 1;</code>
     */
    protected $dev_addr = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dev_addr
     *           Random device address (DevAddr).
     *           Note that this includes the NetID prefix of the network-server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Ns::initOnce();
        parent::__construct($data);
    }

    /**
     * Random device address (DevAddr).
     * Note that this includes the NetID prefix of the network-server.
     *
     * Generated from protobuf field <code>bytes dev_addr = 1;</code>
     * @return string
     */
    public function getDevAddr()
    {
        return $this->dev_addr;
    }

    /**
     * Random device address (DevAddr).
     * Note that this includes the NetID prefix of the network-server.
     *
     * Generated from protobuf field <code>bytes dev_addr = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDevAddr($var)
    {
        GPBUtil::checkString($var, False);
        $this->dev_addr = $var;

        return $this;
    }

}

