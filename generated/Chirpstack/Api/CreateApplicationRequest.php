<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: api/application.proto

namespace Chirpstack\Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.CreateApplicationRequest</code>
 */
class CreateApplicationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Application object to create.
     *
     * Generated from protobuf field <code>.api.Application application = 1;</code>
     */
    protected $application = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Chirpstack\Api\Application $application
     *           Application object to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Chirpstack\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Application object to create.
     *
     * Generated from protobuf field <code>.api.Application application = 1;</code>
     * @return \Chirpstack\Api\Application|null
     */
    public function getApplication()
    {
        return $this->application;
    }

    public function hasApplication()
    {
        return isset($this->application);
    }

    public function clearApplication()
    {
        unset($this->application);
    }

    /**
     * Application object to create.
     *
     * Generated from protobuf field <code>.api.Application application = 1;</code>
     * @param \Chirpstack\Api\Application $var
     * @return $this
     */
    public function setApplication($var)
    {
        GPBUtil::checkMessage($var, \Chirpstack\Api\Application::class);
        $this->application = $var;

        return $this;
    }

}
