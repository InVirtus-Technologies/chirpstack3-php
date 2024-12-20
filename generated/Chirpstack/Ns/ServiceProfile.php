<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ns/profiles.proto

namespace Ns;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ns.ServiceProfile</code>
 */
class ServiceProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * Service-profile ID.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     */
    protected $id = '';
    /**
     * Token bucket filling rate, including ACKs (packet/h).
     *
     * Generated from protobuf field <code>uint32 ul_rate = 2;</code>
     */
    protected $ul_rate = 0;
    /**
     * Token bucket burst size.
     *
     * Generated from protobuf field <code>uint32 ul_bucket_size = 3;</code>
     */
    protected $ul_bucket_size = 0;
    /**
     * Drop or mark when exceeding ULRate.
     *
     * Generated from protobuf field <code>.ns.RatePolicy ul_rate_policy = 4;</code>
     */
    protected $ul_rate_policy = 0;
    /**
     * Token bucket filling rate, including ACKs (packet/h).
     *
     * Generated from protobuf field <code>uint32 dl_rate = 5;</code>
     */
    protected $dl_rate = 0;
    /**
     * Token bucket burst size.
     *
     * Generated from protobuf field <code>uint32 dl_bucket_size = 6;</code>
     */
    protected $dl_bucket_size = 0;
    /**
     * Drop or mark when exceeding DLRate.
     *
     * Generated from protobuf field <code>.ns.RatePolicy dl_rate_policy = 7;</code>
     */
    protected $dl_rate_policy = 0;
    /**
     * GW metadata (RSSI, SNR, GW geoloc., etc.) are added to the packet sent to AS.
     *
     * Generated from protobuf field <code>bool add_gw_metadata = 8;</code>
     */
    protected $add_gw_metadata = false;
    /**
     * Frequency to initiate an End-Device status request (request/day).
     *
     * Generated from protobuf field <code>uint32 dev_status_req_freq = 9;</code>
     */
    protected $dev_status_req_freq = 0;
    /**
     * Report End-Device battery level to AS.
     *
     * Generated from protobuf field <code>bool report_dev_status_battery = 10;</code>
     */
    protected $report_dev_status_battery = false;
    /**
     * Report End-Device margin to AS.
     *
     * Generated from protobuf field <code>bool report_dev_status_margin = 11;</code>
     */
    protected $report_dev_status_margin = false;
    /**
     * Minimum allowed data rate. Used for ADR.
     *
     * Generated from protobuf field <code>uint32 dr_min = 12;</code>
     */
    protected $dr_min = 0;
    /**
     * Maximum allowed data rate. Used for ADR.
     *
     * Generated from protobuf field <code>uint32 dr_max = 13;</code>
     */
    protected $dr_max = 0;
    /**
     * Channel mask. sNS does not have to obey (i.e., informative).
     *
     * Generated from protobuf field <code>bytes channel_mask = 14;</code>
     */
    protected $channel_mask = '';
    /**
     * Passive Roaming allowed.
     *
     * Generated from protobuf field <code>bool pr_allowed = 15;</code>
     */
    protected $pr_allowed = false;
    /**
     * Handover Roaming allowed.
     *
     * Generated from protobuf field <code>bool hr_allowed = 16;</code>
     */
    protected $hr_allowed = false;
    /**
     * Roaming Activation allowed.
     *
     * Generated from protobuf field <code>bool ra_allowed = 17;</code>
     */
    protected $ra_allowed = false;
    /**
     * Enable network geolocation service.
     *
     * Generated from protobuf field <code>bool nwk_geo_loc = 18;</code>
     */
    protected $nwk_geo_loc = false;
    /**
     * Target Packet Error Rate.
     *
     * Generated from protobuf field <code>uint32 target_per = 19;</code>
     */
    protected $target_per = 0;
    /**
     * Minimum number of receiving GWs (informative).
     *
     * Generated from protobuf field <code>uint32 min_gw_diversity = 20;</code>
     */
    protected $min_gw_diversity = 0;
    /**
     * Gateways under this service-profile are private.
     * This means that these gateways can only be used by devices under the
     * same service-profile.
     *
     * Generated from protobuf field <code>bool gws_private = 21;</code>
     */
    protected $gws_private = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Service-profile ID.
     *     @type int $ul_rate
     *           Token bucket filling rate, including ACKs (packet/h).
     *     @type int $ul_bucket_size
     *           Token bucket burst size.
     *     @type int $ul_rate_policy
     *           Drop or mark when exceeding ULRate.
     *     @type int $dl_rate
     *           Token bucket filling rate, including ACKs (packet/h).
     *     @type int $dl_bucket_size
     *           Token bucket burst size.
     *     @type int $dl_rate_policy
     *           Drop or mark when exceeding DLRate.
     *     @type bool $add_gw_metadata
     *           GW metadata (RSSI, SNR, GW geoloc., etc.) are added to the packet sent to AS.
     *     @type int $dev_status_req_freq
     *           Frequency to initiate an End-Device status request (request/day).
     *     @type bool $report_dev_status_battery
     *           Report End-Device battery level to AS.
     *     @type bool $report_dev_status_margin
     *           Report End-Device margin to AS.
     *     @type int $dr_min
     *           Minimum allowed data rate. Used for ADR.
     *     @type int $dr_max
     *           Maximum allowed data rate. Used for ADR.
     *     @type string $channel_mask
     *           Channel mask. sNS does not have to obey (i.e., informative).
     *     @type bool $pr_allowed
     *           Passive Roaming allowed.
     *     @type bool $hr_allowed
     *           Handover Roaming allowed.
     *     @type bool $ra_allowed
     *           Roaming Activation allowed.
     *     @type bool $nwk_geo_loc
     *           Enable network geolocation service.
     *     @type int $target_per
     *           Target Packet Error Rate.
     *     @type int $min_gw_diversity
     *           Minimum number of receiving GWs (informative).
     *     @type bool $gws_private
     *           Gateways under this service-profile are private.
     *           This means that these gateways can only be used by devices under the
     *           same service-profile.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ns\Profiles::initOnce();
        parent::__construct($data);
    }

    /**
     * Service-profile ID.
     *
     * Generated from protobuf field <code>bytes id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Service-profile ID.
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
     * Token bucket filling rate, including ACKs (packet/h).
     *
     * Generated from protobuf field <code>uint32 ul_rate = 2;</code>
     * @return int
     */
    public function getUlRate()
    {
        return $this->ul_rate;
    }

    /**
     * Token bucket filling rate, including ACKs (packet/h).
     *
     * Generated from protobuf field <code>uint32 ul_rate = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUlRate($var)
    {
        GPBUtil::checkUint32($var);
        $this->ul_rate = $var;

        return $this;
    }

    /**
     * Token bucket burst size.
     *
     * Generated from protobuf field <code>uint32 ul_bucket_size = 3;</code>
     * @return int
     */
    public function getUlBucketSize()
    {
        return $this->ul_bucket_size;
    }

    /**
     * Token bucket burst size.
     *
     * Generated from protobuf field <code>uint32 ul_bucket_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setUlBucketSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->ul_bucket_size = $var;

        return $this;
    }

    /**
     * Drop or mark when exceeding ULRate.
     *
     * Generated from protobuf field <code>.ns.RatePolicy ul_rate_policy = 4;</code>
     * @return int
     */
    public function getUlRatePolicy()
    {
        return $this->ul_rate_policy;
    }

    /**
     * Drop or mark when exceeding ULRate.
     *
     * Generated from protobuf field <code>.ns.RatePolicy ul_rate_policy = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setUlRatePolicy($var)
    {
        GPBUtil::checkEnum($var, \Ns\RatePolicy::class);
        $this->ul_rate_policy = $var;

        return $this;
    }

    /**
     * Token bucket filling rate, including ACKs (packet/h).
     *
     * Generated from protobuf field <code>uint32 dl_rate = 5;</code>
     * @return int
     */
    public function getDlRate()
    {
        return $this->dl_rate;
    }

    /**
     * Token bucket filling rate, including ACKs (packet/h).
     *
     * Generated from protobuf field <code>uint32 dl_rate = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDlRate($var)
    {
        GPBUtil::checkUint32($var);
        $this->dl_rate = $var;

        return $this;
    }

    /**
     * Token bucket burst size.
     *
     * Generated from protobuf field <code>uint32 dl_bucket_size = 6;</code>
     * @return int
     */
    public function getDlBucketSize()
    {
        return $this->dl_bucket_size;
    }

    /**
     * Token bucket burst size.
     *
     * Generated from protobuf field <code>uint32 dl_bucket_size = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setDlBucketSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->dl_bucket_size = $var;

        return $this;
    }

    /**
     * Drop or mark when exceeding DLRate.
     *
     * Generated from protobuf field <code>.ns.RatePolicy dl_rate_policy = 7;</code>
     * @return int
     */
    public function getDlRatePolicy()
    {
        return $this->dl_rate_policy;
    }

    /**
     * Drop or mark when exceeding DLRate.
     *
     * Generated from protobuf field <code>.ns.RatePolicy dl_rate_policy = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setDlRatePolicy($var)
    {
        GPBUtil::checkEnum($var, \Ns\RatePolicy::class);
        $this->dl_rate_policy = $var;

        return $this;
    }

    /**
     * GW metadata (RSSI, SNR, GW geoloc., etc.) are added to the packet sent to AS.
     *
     * Generated from protobuf field <code>bool add_gw_metadata = 8;</code>
     * @return bool
     */
    public function getAddGwMetadata()
    {
        return $this->add_gw_metadata;
    }

    /**
     * GW metadata (RSSI, SNR, GW geoloc., etc.) are added to the packet sent to AS.
     *
     * Generated from protobuf field <code>bool add_gw_metadata = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setAddGwMetadata($var)
    {
        GPBUtil::checkBool($var);
        $this->add_gw_metadata = $var;

        return $this;
    }

    /**
     * Frequency to initiate an End-Device status request (request/day).
     *
     * Generated from protobuf field <code>uint32 dev_status_req_freq = 9;</code>
     * @return int
     */
    public function getDevStatusReqFreq()
    {
        return $this->dev_status_req_freq;
    }

    /**
     * Frequency to initiate an End-Device status request (request/day).
     *
     * Generated from protobuf field <code>uint32 dev_status_req_freq = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDevStatusReqFreq($var)
    {
        GPBUtil::checkUint32($var);
        $this->dev_status_req_freq = $var;

        return $this;
    }

    /**
     * Report End-Device battery level to AS.
     *
     * Generated from protobuf field <code>bool report_dev_status_battery = 10;</code>
     * @return bool
     */
    public function getReportDevStatusBattery()
    {
        return $this->report_dev_status_battery;
    }

    /**
     * Report End-Device battery level to AS.
     *
     * Generated from protobuf field <code>bool report_dev_status_battery = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setReportDevStatusBattery($var)
    {
        GPBUtil::checkBool($var);
        $this->report_dev_status_battery = $var;

        return $this;
    }

    /**
     * Report End-Device margin to AS.
     *
     * Generated from protobuf field <code>bool report_dev_status_margin = 11;</code>
     * @return bool
     */
    public function getReportDevStatusMargin()
    {
        return $this->report_dev_status_margin;
    }

    /**
     * Report End-Device margin to AS.
     *
     * Generated from protobuf field <code>bool report_dev_status_margin = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setReportDevStatusMargin($var)
    {
        GPBUtil::checkBool($var);
        $this->report_dev_status_margin = $var;

        return $this;
    }

    /**
     * Minimum allowed data rate. Used for ADR.
     *
     * Generated from protobuf field <code>uint32 dr_min = 12;</code>
     * @return int
     */
    public function getDrMin()
    {
        return $this->dr_min;
    }

    /**
     * Minimum allowed data rate. Used for ADR.
     *
     * Generated from protobuf field <code>uint32 dr_min = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setDrMin($var)
    {
        GPBUtil::checkUint32($var);
        $this->dr_min = $var;

        return $this;
    }

    /**
     * Maximum allowed data rate. Used for ADR.
     *
     * Generated from protobuf field <code>uint32 dr_max = 13;</code>
     * @return int
     */
    public function getDrMax()
    {
        return $this->dr_max;
    }

    /**
     * Maximum allowed data rate. Used for ADR.
     *
     * Generated from protobuf field <code>uint32 dr_max = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setDrMax($var)
    {
        GPBUtil::checkUint32($var);
        $this->dr_max = $var;

        return $this;
    }

    /**
     * Channel mask. sNS does not have to obey (i.e., informative).
     *
     * Generated from protobuf field <code>bytes channel_mask = 14;</code>
     * @return string
     */
    public function getChannelMask()
    {
        return $this->channel_mask;
    }

    /**
     * Channel mask. sNS does not have to obey (i.e., informative).
     *
     * Generated from protobuf field <code>bytes channel_mask = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelMask($var)
    {
        GPBUtil::checkString($var, False);
        $this->channel_mask = $var;

        return $this;
    }

    /**
     * Passive Roaming allowed.
     *
     * Generated from protobuf field <code>bool pr_allowed = 15;</code>
     * @return bool
     */
    public function getPrAllowed()
    {
        return $this->pr_allowed;
    }

    /**
     * Passive Roaming allowed.
     *
     * Generated from protobuf field <code>bool pr_allowed = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrAllowed($var)
    {
        GPBUtil::checkBool($var);
        $this->pr_allowed = $var;

        return $this;
    }

    /**
     * Handover Roaming allowed.
     *
     * Generated from protobuf field <code>bool hr_allowed = 16;</code>
     * @return bool
     */
    public function getHrAllowed()
    {
        return $this->hr_allowed;
    }

    /**
     * Handover Roaming allowed.
     *
     * Generated from protobuf field <code>bool hr_allowed = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setHrAllowed($var)
    {
        GPBUtil::checkBool($var);
        $this->hr_allowed = $var;

        return $this;
    }

    /**
     * Roaming Activation allowed.
     *
     * Generated from protobuf field <code>bool ra_allowed = 17;</code>
     * @return bool
     */
    public function getRaAllowed()
    {
        return $this->ra_allowed;
    }

    /**
     * Roaming Activation allowed.
     *
     * Generated from protobuf field <code>bool ra_allowed = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setRaAllowed($var)
    {
        GPBUtil::checkBool($var);
        $this->ra_allowed = $var;

        return $this;
    }

    /**
     * Enable network geolocation service.
     *
     * Generated from protobuf field <code>bool nwk_geo_loc = 18;</code>
     * @return bool
     */
    public function getNwkGeoLoc()
    {
        return $this->nwk_geo_loc;
    }

    /**
     * Enable network geolocation service.
     *
     * Generated from protobuf field <code>bool nwk_geo_loc = 18;</code>
     * @param bool $var
     * @return $this
     */
    public function setNwkGeoLoc($var)
    {
        GPBUtil::checkBool($var);
        $this->nwk_geo_loc = $var;

        return $this;
    }

    /**
     * Target Packet Error Rate.
     *
     * Generated from protobuf field <code>uint32 target_per = 19;</code>
     * @return int
     */
    public function getTargetPer()
    {
        return $this->target_per;
    }

    /**
     * Target Packet Error Rate.
     *
     * Generated from protobuf field <code>uint32 target_per = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setTargetPer($var)
    {
        GPBUtil::checkUint32($var);
        $this->target_per = $var;

        return $this;
    }

    /**
     * Minimum number of receiving GWs (informative).
     *
     * Generated from protobuf field <code>uint32 min_gw_diversity = 20;</code>
     * @return int
     */
    public function getMinGwDiversity()
    {
        return $this->min_gw_diversity;
    }

    /**
     * Minimum number of receiving GWs (informative).
     *
     * Generated from protobuf field <code>uint32 min_gw_diversity = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setMinGwDiversity($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_gw_diversity = $var;

        return $this;
    }

    /**
     * Gateways under this service-profile are private.
     * This means that these gateways can only be used by devices under the
     * same service-profile.
     *
     * Generated from protobuf field <code>bool gws_private = 21;</code>
     * @return bool
     */
    public function getGwsPrivate()
    {
        return $this->gws_private;
    }

    /**
     * Gateways under this service-profile are private.
     * This means that these gateways can only be used by devices under the
     * same service-profile.
     *
     * Generated from protobuf field <code>bool gws_private = 21;</code>
     * @param bool $var
     * @return $this
     */
    public function setGwsPrivate($var)
    {
        GPBUtil::checkBool($var);
        $this->gws_private = $var;

        return $this;
    }

}

