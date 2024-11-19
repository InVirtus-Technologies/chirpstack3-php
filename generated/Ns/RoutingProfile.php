<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/profiles.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.RoutingProfile</code>
 */
class RoutingProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the routing profile.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     */
    protected $id = '';
    /**
     * Application-server ID.
     *
     * Generated from protobuf field <code>string as_id = 2;</code>
     */
    protected $as_id = '';
    /**
     * CA certificate for connecting to the AS.
     *
     * Generated from protobuf field <code>string ca_cert = 3;</code>
     */
    protected $ca_cert = '';
    /**
     * TLS certificate for connecting to the AS.
     *
     * Generated from protobuf field <code>string tls_cert = 4;</code>
     */
    protected $tls_cert = '';
    /**
     * TLS key for connecting to the AS.
     * Note: when retrieving the routing-profile, the tls_key is not returned
     * for security reasons. When updating the routing-profile, an empty tls_key
     * does not clear the certificate, unless the tls_cert is also left blank.
     *
     * Generated from protobuf field <code>string tls_key = 5;</code>
     */
    protected $tls_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           ID of the routing profile.
     *     @type string $as_id
     *           Application-server ID.
     *     @type string $ca_cert
     *           CA certificate for connecting to the AS.
     *     @type string $tls_cert
     *           TLS certificate for connecting to the AS.
     *     @type string $tls_key
     *           TLS key for connecting to the AS.
     *           Note: when retrieving the routing-profile, the tls_key is not returned
     *           for security reasons. When updating the routing-profile, an empty tls_key
     *           does not clear the certificate, unless the tls_cert is also left blank.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Profiles::initOnce();
        parent::__construct($data);
    }

    /**
     * ID of the routing profile.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * ID of the routing profile.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, False);
        $this->id = $var;

        return $this;
    }

    /**
     * Application-server ID.
     *
     * Generated from protobuf field <code>string as_id = 2;</code>
     * @return string
     */
    public function getAsId()
    {
        return $this->as_id;
    }

    /**
     * Application-server ID.
     *
     * Generated from protobuf field <code>string as_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAsId($var)
    {
        GPBUtil::checkString($var, True);
        $this->as_id = $var;

        return $this;
    }

    /**
     * CA certificate for connecting to the AS.
     *
     * Generated from protobuf field <code>string ca_cert = 3;</code>
     * @return string
     */
    public function getCaCert()
    {
        return $this->ca_cert;
    }

    /**
     * CA certificate for connecting to the AS.
     *
     * Generated from protobuf field <code>string ca_cert = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCaCert($var)
    {
        GPBUtil::checkString($var, True);
        $this->ca_cert = $var;

        return $this;
    }

    /**
     * TLS certificate for connecting to the AS.
     *
     * Generated from protobuf field <code>string tls_cert = 4;</code>
     * @return string
     */
    public function getTlsCert()
    {
        return $this->tls_cert;
    }

    /**
     * TLS certificate for connecting to the AS.
     *
     * Generated from protobuf field <code>string tls_cert = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTlsCert($var)
    {
        GPBUtil::checkString($var, True);
        $this->tls_cert = $var;

        return $this;
    }

    /**
     * TLS key for connecting to the AS.
     * Note: when retrieving the routing-profile, the tls_key is not returned
     * for security reasons. When updating the routing-profile, an empty tls_key
     * does not clear the certificate, unless the tls_cert is also left blank.
     *
     * Generated from protobuf field <code>string tls_key = 5;</code>
     * @return string
     */
    public function getTlsKey()
    {
        return $this->tls_key;
    }

    /**
     * TLS key for connecting to the AS.
     * Note: when retrieving the routing-profile, the tls_key is not returned
     * for security reasons. When updating the routing-profile, an empty tls_key
     * does not clear the certificate, unless the tls_cert is also left blank.
     *
     * Generated from protobuf field <code>string tls_key = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTlsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->tls_key = $var;

        return $this;
    }

}

