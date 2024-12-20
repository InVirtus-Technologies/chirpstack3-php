<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: geo/geo.proto

namespace Geo;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>geo.ResolveTDOAResponse</code>
 */
class ResolveTDOAResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Resolve result.
     *
     * Generated from protobuf field <code>.geo.ResolveResult result = 1;</code>
     */
    protected $result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Geo\ResolveResult $result
     *           Resolve result.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Geo\Geo::initOnce();
        parent::__construct($data);
    }

    /**
     * Resolve result.
     *
     * Generated from protobuf field <code>.geo.ResolveResult result = 1;</code>
     * @return \Geo\ResolveResult|null
     */
    public function getResult()
    {
        return $this->result;
    }

    public function hasResult()
    {
        return isset($this->result);
    }

    public function clearResult()
    {
        unset($this->result);
    }

    /**
     * Resolve result.
     *
     * Generated from protobuf field <code>.geo.ResolveResult result = 1;</code>
     * @param \Geo\ResolveResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Geo\ResolveResult::class);
        $this->result = $var;

        return $this;
    }

}

