<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/internal.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.Branding</code>
 */
class Branding extends \Google\Protobuf\Internal\Message
{
    /**
     * Registration html.
     *
     * Generated from protobuf field <code>string registration = 1;</code>
     */
    protected $registration = '';
    /**
     * Footer html.
     *
     * Generated from protobuf field <code>string footer = 2;</code>
     */
    protected $footer = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $registration
     *           Registration html.
     *     @type string $footer
     *           Footer html.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Internal::initOnce();
        parent::__construct($data);
    }

    /**
     * Registration html.
     *
     * Generated from protobuf field <code>string registration = 1;</code>
     * @return string
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * Registration html.
     *
     * Generated from protobuf field <code>string registration = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRegistration($var)
    {
        GPBUtil::checkString($var, True);
        $this->registration = $var;

        return $this;
    }

    /**
     * Footer html.
     *
     * Generated from protobuf field <code>string footer = 2;</code>
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * Footer html.
     *
     * Generated from protobuf field <code>string footer = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFooter($var)
    {
        GPBUtil::checkString($var, True);
        $this->footer = $var;

        return $this;
    }

}

