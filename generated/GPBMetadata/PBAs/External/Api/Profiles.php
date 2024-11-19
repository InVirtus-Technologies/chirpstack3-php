<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/profiles.proto

namespace GPBMetadata\PBAs\External\Api;

class Profiles
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
as/external/api/profiles.protoapi"�
ServiceProfile

id (	
name (	\'
organization_id (RorganizationID*
network_server_id (RnetworkServerID
ul_rate (
ul_bucket_size (\'
ul_rate_policy (2.api.RatePolicy
dl_rate (
dl_bucket_size (\'
dl_rate_policy (2.api.RatePolicy&
add_gw_metadata (RaddGWMetaData
dev_status_req_freq	 (!
report_dev_status_battery
 ( 
report_dev_status_margin (
dr_min (
dr_max (
channel_mask (

pr_allowed (

hr_allowed (

ra_allowed (
nwk_geo_loc (

target_per (R	targetPER(
min_gw_diversity (RminGWDiversity
gws_private (R
gwsPrivate"�
DeviceProfile

id (	
name (	\'
organization_id (RorganizationID*
network_server_id (RnetworkServerID
supports_class_b (
class_b_timeout (
ping_slot_period ( 
ping_slot_dr (R
pingSlotDR
ping_slot_freq (
supports_class_c (
class_c_timeout (
mac_version	 (	
reg_params_revision
 (	

rx_delay_1 (#
rx_dr_offset_1 (RrxDROffset1"
rx_datarate_2 (RrxDataRate2
	rx_freq_2 (
factory_preset_freqs (
max_eirp (RmaxEIRP
max_duty_cycle (
supports_join (
	rf_region (	/
supports_32bit_f_cnt (Rsupports32BitFCnt
payload_codec (	
payload_encoder_script (	
payload_decoder_script (	*
geoloc_buffer_ttl (RgeolocBufferTTL
geoloc_min_buffer_size (*
tags (2.api.DeviceProfile.TagsEntry2
uplink_interval (2.google.protobuf.Duration(
adr_algorithm_id (	RadrAlgorithmID+
	TagsEntry
key (	
value (	:8* 

RatePolicy
DROP 
MARKBm
!io.chirpstack.api.as.external.apiBProfilesProtoPZ7github.com/brocaar/chirpstack-api/go/v3/as/external/apibproto3'
        , true);

        static::$is_initialized = true;
    }
}

