<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/multicastGroup.proto

namespace Api;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>api.ListMulticastGroupRequest</code>
 */
class ListMulticastGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Max number of items to return.
     *
     * Generated from protobuf field <code>int64 limit = 1;</code>
     */
    protected $limit = 0;
    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>int64 offset = 2;</code>
     */
    protected $offset = 0;
    /**
     * Organization id to filter on.
     *
     * Generated from protobuf field <code>int64 organization_id = 3 [json_name = "organizationID"];</code>
     */
    protected $organization_id = 0;
    /**
     * Device EUI (HEX encoded string) to filter on.
     *
     * Generated from protobuf field <code>string dev_eui = 4 [json_name = "devEUI"];</code>
     */
    protected $dev_eui = '';
    /**
     * Search can be used to search on the multicast-group name.
     *
     * Generated from protobuf field <code>string search = 6;</code>
     */
    protected $search = '';
    /**
     * Application ID to filter on.
     *
     * Generated from protobuf field <code>int64 application_id = 7 [json_name = "applicationID"];</code>
     */
    protected $application_id = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $limit
     *           Max number of items to return.
     *     @type int|string $offset
     *           Offset in the result-set (for pagination).
     *     @type int|string $organization_id
     *           Organization id to filter on.
     *     @type string $dev_eui
     *           Device EUI (HEX encoded string) to filter on.
     *     @type string $search
     *           Search can be used to search on the multicast-group name.
     *     @type int|string $application_id
     *           Application ID to filter on.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\PBAs\External\Api\MulticastGroup::initOnce();
        parent::__construct($data);
    }

    /**
     * Max number of items to return.
     *
     * Generated from protobuf field <code>int64 limit = 1;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Max number of items to return.
     *
     * Generated from protobuf field <code>int64 limit = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>int64 offset = 2;</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Offset in the result-set (for pagination).
     *
     * Generated from protobuf field <code>int64 offset = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Organization id to filter on.
     *
     * Generated from protobuf field <code>int64 organization_id = 3 [json_name = "organizationID"];</code>
     * @return int|string
     */
    public function getOrganizationId()
    {
        return $this->organization_id;
    }

    /**
     * Organization id to filter on.
     *
     * Generated from protobuf field <code>int64 organization_id = 3 [json_name = "organizationID"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setOrganizationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->organization_id = $var;

        return $this;
    }

    /**
     * Device EUI (HEX encoded string) to filter on.
     *
     * Generated from protobuf field <code>string dev_eui = 4 [json_name = "devEUI"];</code>
     * @return string
     */
    public function getDevEui()
    {
        return $this->dev_eui;
    }

    /**
     * Device EUI (HEX encoded string) to filter on.
     *
     * Generated from protobuf field <code>string dev_eui = 4 [json_name = "devEUI"];</code>
     * @param string $var
     * @return $this
     */
    public function setDevEui($var)
    {
        GPBUtil::checkString($var, True);
        $this->dev_eui = $var;

        return $this;
    }

    /**
     * Search can be used to search on the multicast-group name.
     *
     * Generated from protobuf field <code>string search = 6;</code>
     * @return string
     */
    public function getSearch()
    {
        return $this->search;
    }

    /**
     * Search can be used to search on the multicast-group name.
     *
     * Generated from protobuf field <code>string search = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSearch($var)
    {
        GPBUtil::checkString($var, True);
        $this->search = $var;

        return $this;
    }

    /**
     * Application ID to filter on.
     *
     * Generated from protobuf field <code>int64 application_id = 7 [json_name = "applicationID"];</code>
     * @return int|string
     */
    public function getApplicationId()
    {
        return $this->application_id;
    }

    /**
     * Application ID to filter on.
     *
     * Generated from protobuf field <code>int64 application_id = 7 [json_name = "applicationID"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setApplicationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->application_id = $var;

        return $this;
    }

}
