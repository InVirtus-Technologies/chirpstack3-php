<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/as.proto

namespace GPBMetadata\PBAs;

class PBAs
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Common\Common::initOnce();
        \GPBMetadata\Gw\Gw::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
as/as.protoasgoogle/protobuf/timestamp.protocommon/common.protogw/gw.proto"S
DeviceActivationContext
dev_addr (&
	app_s_key (2.common.KeyEnvelope"�
HandleUplinkDataRequest
dev_eui (
join_eui (
f_cnt (
f_port (
adr (

dr (!
tx_info (2.gw.UplinkTXInfo!
rx_info (2.gw.UplinkRXInfo
data	 (>
device_activation_context
 (2.as.DeviceActivationContext
confirmed_uplink ("�
HandleProprietaryUplinkRequest
mac_payload (
mic (!
tx_info (2.gw.UplinkTXInfo!
rx_info (2.gw.UplinkRXInfo"`
HandleErrorRequest
dev_eui (
type (2.as.ErrorType
error (	
f_cnt ("P
HandleDownlinkACKRequest
dev_eui (
f_cnt (
acknowledged ("�
SetDeviceStatusRequest
dev_eui (
battery (
margin (
external_power_source (!
battery_level_unavailable (
battery_level ("c
SetDeviceLocationRequest
dev_eui ("
location (2.common.Location

uplink_ids ("�
HandleGatewayStatsRequest

gateway_id (
stats_id ((
time (2.google.protobuf.Timestamp"
location (2.common.Location
rx_packets_received (
rx_packets_received_ok (
tx_packets_received (
tx_packets_emitted (=
metadata	 (2+.as.HandleGatewayStatsRequest.MetadataEntryZ
tx_packets_per_frequency
 (28.as.HandleGatewayStatsRequest.TxPacketsPerFrequencyEntryZ
rx_packets_per_frequency (28.as.HandleGatewayStatsRequest.RxPacketsPerFrequencyEntryL
tx_packets_per_dr (21.as.HandleGatewayStatsRequest.TxPacketsPerDrEntryL
rx_packets_per_dr (21.as.HandleGatewayStatsRequest.RxPacketsPerDrEntryT
tx_packets_per_status (25.as.HandleGatewayStatsRequest.TxPacketsPerStatusEntry/
MetadataEntry
key (	
value (	:8<
TxPacketsPerFrequencyEntry
key (
value (:8<
RxPacketsPerFrequencyEntry
key (
value (:85
TxPacketsPerDrEntry
key (
value (:85
RxPacketsPerDrEntry
key (
value (:89
TxPacketsPerStatusEntry
key (	
value (:8"m
HandleTxAckRequest
dev_eui (
f_cnt (

gateway_id (#
tx_info (2.gw.DownlinkTXInfo"�
 ReEncryptDeviceQueueItemsRequest
dev_eui (
dev_addr (
f_cnt_start (+
items (2.as.ReEncryptDeviceQueueItem"R
!ReEncryptDeviceQueueItemsResponse-
items (2.as.ReEncryptedDeviceQueueItem"a
ReEncryptDeviceQueueItem
frm_payload (
f_cnt (
f_port (
	confirmed ("c
ReEncryptedDeviceQueueItem
frm_payload (
f_cnt (
f_port (
	confirmed (*
RXWindow
RX1 
RX2*�
	ErrorType
GENERIC 
OTAA
DATA_UP_FCNT_RESET
DATA_UP_MIC
DEVICE_QUEUE_ITEM_SIZE
DEVICE_QUEUE_ITEM_FCNT
DATA_UP_FCNT_RETRANSMISSION
DATA_DOWN_GATEWAY2�
ApplicationServerServiceI
HandleUplinkData.as.HandleUplinkDataRequest.google.protobuf.Empty" W
HandleProprietaryUplink".as.HandleProprietaryUplinkRequest.google.protobuf.Empty" ?
HandleError.as.HandleErrorRequest.google.protobuf.Empty" K
HandleDownlinkACK.as.HandleDownlinkACKRequest.google.protobuf.Empty" M
HandleGatewayStats.as.HandleGatewayStatsRequest.google.protobuf.Empty" ?
HandleTxAck.as.HandleTxAckRequest.google.protobuf.Empty" G
SetDeviceStatus.as.SetDeviceStatusRequest.google.protobuf.Empty" K
SetDeviceLocation.as.SetDeviceLocationRequest.google.protobuf.Empty" j
ReEncryptDeviceQueueItems$.as.ReEncryptDeviceQueueItemsRequest%.as.ReEncryptDeviceQueueItemsResponse" B\\
io.chirpstack.api.asBApplicationServerProtoPZ*github.com/brocaar/chirpstack-api/go/v3/asbproto3'
        , true);

        static::$is_initialized = true;
    }
}

