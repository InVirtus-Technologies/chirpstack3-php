<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/application.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.AWSSNSIntegration</code>
 */
class AWSSNSIntegration extends \Google\Protobuf\Internal\Message
{
    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1 [json_name = "applicationID"];</code>
     */
    protected $application_id = 0;
    /**
     * Marshaler.
     * This defines the marshaler that is used to encode the event payload.
     *
     * Generated from protobuf field <code>.api.Marshaler marshaler = 2;</code>
     */
    protected $marshaler = 0;
    /**
     * AWS region.
     *
     * Generated from protobuf field <code>string region = 3;</code>
     */
    protected $region = '';
    /**
     * AWS Access Key ID.
     *
     * Generated from protobuf field <code>string access_key_id = 4 [json_name = "accessKeyID"];</code>
     */
    protected $access_key_id = '';
    /**
     * AWS Secret Access Key.
     *
     * Generated from protobuf field <code>string secret_access_key = 5;</code>
     */
    protected $secret_access_key = '';
    /**
     * Topic ARN.
     *
     * Generated from protobuf field <code>string topic_arn = 6 [json_name = "topicARN"];</code>
     */
    protected $topic_arn = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $application_id
     *           Application ID.
     *     @type int $marshaler
     *           Marshaler.
     *           This defines the marshaler that is used to encode the event payload.
     *     @type string $region
     *           AWS region.
     *     @type string $access_key_id
     *           AWS Access Key ID.
     *     @type string $secret_access_key
     *           AWS Secret Access Key.
     *     @type string $topic_arn
     *           Topic ARN.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1 [json_name = "applicationID"];</code>
     * @return int|string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1 [json_name = "applicationID"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->application_id = $var;

        return $this;
    }

    /**
     * Marshaler.
     * This defines the marshaler that is used to encode the event payload.
     *
     * Generated from protobuf field <code>.api.Marshaler marshaler = 2;</code>
     * @return int
     */
    public function getMarshaler()
    {
        return $this->marshaler;
    }

    /**
     * Marshaler.
     * This defines the marshaler that is used to encode the event payload.
     *
     * Generated from protobuf field <code>.api.Marshaler marshaler = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMarshaler($var)
    {
        GPBUtil::checkEnum($var, \Api\Marshaler::class);
        $this->marshaler = $var;

        return $this;
    }

    /**
     * AWS region.
     *
     * Generated from protobuf field <code>string region = 3;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * AWS region.
     *
     * Generated from protobuf field <code>string region = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * AWS Access Key ID.
     *
     * Generated from protobuf field <code>string access_key_id = 4 [json_name = "accessKeyID"];</code>
     * @return string
     */
    public function getAccessKeyId()
    {
        return $this->access_key_id;
    }

    /**
     * AWS Access Key ID.
     *
     * Generated from protobuf field <code>string access_key_id = 4 [json_name = "accessKeyID"];</code>
     * @param string $var
     * @return $this
     */
    public function setAccessKeyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->access_key_id = $var;

        return $this;
    }

    /**
     * AWS Secret Access Key.
     *
     * Generated from protobuf field <code>string secret_access_key = 5;</code>
     * @return string
     */
    public function getSecretAccessKey()
    {
        return $this->secret_access_key;
    }

    /**
     * AWS Secret Access Key.
     *
     * Generated from protobuf field <code>string secret_access_key = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setSecretAccessKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_access_key = $var;

        return $this;
    }

    /**
     * Topic ARN.
     *
     * Generated from protobuf field <code>string topic_arn = 6 [json_name = "topicARN"];</code>
     * @return string
     */
    public function getTopicArn()
    {
        return $this->topic_arn;
    }

    /**
     * Topic ARN.
     *
     * Generated from protobuf field <code>string topic_arn = 6 [json_name = "topicARN"];</code>
     * @param string $var
     * @return $this
     */
    public function setTopicArn($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic_arn = $var;

        return $this;
    }

}
