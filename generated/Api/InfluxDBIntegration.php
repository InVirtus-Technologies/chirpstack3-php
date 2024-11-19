<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/application.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.InfluxDBIntegration</code>
 */
class InfluxDBIntegration extends \Google\Protobuf\Internal\Message
{
    /**
     * Application ID.
     *
     * Generated from protobuf field <code>int64 application_id = 1 [json_name = "applicationID"];</code>
     */
    protected $application_id = 0;
    /**
     * InfluxDB API write endpoint (e.g. http://localhost:8086/write).
     *
     * Generated from protobuf field <code>string endpoint = 2;</code>
     */
    protected $endpoint = '';
    /**
     * InfluxDB database name. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string db = 3;</code>
     */
    protected $db = '';
    /**
     * InfluxDB username. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string username = 4;</code>
     */
    protected $username = '';
    /**
     * InfluxDB password. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string password = 5;</code>
     */
    protected $password = '';
    /**
     * InfluxDB retention policy name. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string retention_policy_name = 6;</code>
     */
    protected $retention_policy_name = '';
    /**
     * InfluxDB timestamp precision (InfluxDB v1).
     *
     * Generated from protobuf field <code>.api.InfluxDBPrecision precision = 7;</code>
     */
    protected $precision = 0;
    /**
     * InfluxDB version.
     *
     * Generated from protobuf field <code>.api.InfluxDBVersion version = 8;</code>
     */
    protected $version = 0;
    /**
     * Token. (InfluxDB v2)
     *
     * Generated from protobuf field <code>string token = 9;</code>
     */
    protected $token = '';
    /**
     * Organization. (InfluxDB v2)
     *
     * Generated from protobuf field <code>string organization = 10;</code>
     */
    protected $organization = '';
    /**
     * Bucket. (InfluxDB v2)
     *
     * Generated from protobuf field <code>string bucket = 11;</code>
     */
    protected $bucket = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $application_id
     *           Application ID.
     *     @type string $endpoint
     *           InfluxDB API write endpoint (e.g. http://localhost:8086/write).
     *     @type string $db
     *           InfluxDB database name. (InfluxDB v1)
     *     @type string $username
     *           InfluxDB username. (InfluxDB v1)
     *     @type string $password
     *           InfluxDB password. (InfluxDB v1)
     *     @type string $retention_policy_name
     *           InfluxDB retention policy name. (InfluxDB v1)
     *     @type int $precision
     *           InfluxDB timestamp precision (InfluxDB v1).
     *     @type int $version
     *           InfluxDB version.
     *     @type string $token
     *           Token. (InfluxDB v2)
     *     @type string $organization
     *           Organization. (InfluxDB v2)
     *     @type string $bucket
     *           Bucket. (InfluxDB v2)
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
     * InfluxDB API write endpoint (e.g. http://localhost:8086/write).
     *
     * Generated from protobuf field <code>string endpoint = 2;</code>
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * InfluxDB API write endpoint (e.g. http://localhost:8086/write).
     *
     * Generated from protobuf field <code>string endpoint = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * InfluxDB database name. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string db = 3;</code>
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * InfluxDB database name. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string db = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDb($var)
    {
        GPBUtil::checkString($var, True);
        $this->db = $var;

        return $this;
    }

    /**
     * InfluxDB username. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string username = 4;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * InfluxDB username. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string username = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * InfluxDB password. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string password = 5;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * InfluxDB password. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string password = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * InfluxDB retention policy name. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string retention_policy_name = 6;</code>
     * @return string
     */
    public function getRetentionPolicyName()
    {
        return $this->retention_policy_name;
    }

    /**
     * InfluxDB retention policy name. (InfluxDB v1)
     *
     * Generated from protobuf field <code>string retention_policy_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRetentionPolicyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->retention_policy_name = $var;

        return $this;
    }

    /**
     * InfluxDB timestamp precision (InfluxDB v1).
     *
     * Generated from protobuf field <code>.api.InfluxDBPrecision precision = 7;</code>
     * @return int
     */
    public function getPrecision()
    {
        return $this->precision;
    }

    /**
     * InfluxDB timestamp precision (InfluxDB v1).
     *
     * Generated from protobuf field <code>.api.InfluxDBPrecision precision = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setPrecision($var)
    {
        GPBUtil::checkEnum($var, \Api\InfluxDBPrecision::class);
        $this->precision = $var;

        return $this;
    }

    /**
     * InfluxDB version.
     *
     * Generated from protobuf field <code>.api.InfluxDBVersion version = 8;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * InfluxDB version.
     *
     * Generated from protobuf field <code>.api.InfluxDBVersion version = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkEnum($var, \Api\InfluxDBVersion::class);
        $this->version = $var;

        return $this;
    }

    /**
     * Token. (InfluxDB v2)
     *
     * Generated from protobuf field <code>string token = 9;</code>
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Token. (InfluxDB v2)
     *
     * Generated from protobuf field <code>string token = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->token = $var;

        return $this;
    }

    /**
     * Organization. (InfluxDB v2)
     *
     * Generated from protobuf field <code>string organization = 10;</code>
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Organization. (InfluxDB v2)
     *
     * Generated from protobuf field <code>string organization = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setOrganization($var)
    {
        GPBUtil::checkString($var, True);
        $this->organization = $var;

        return $this;
    }

    /**
     * Bucket. (InfluxDB v2)
     *
     * Generated from protobuf field <code>string bucket = 11;</code>
     * @return string
     */
    public function getBucket()
    {
        return $this->bucket;
    }

    /**
     * Bucket. (InfluxDB v2)
     *
     * Generated from protobuf field <code>string bucket = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket = $var;

        return $this;
    }

}
