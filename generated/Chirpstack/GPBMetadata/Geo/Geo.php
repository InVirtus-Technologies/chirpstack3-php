<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: geo/geo.proto

namespace GPBMetadata\Geo;

class Geo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Gw\Gw::initOnce();
        \GPBMetadata\Common\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
geo/geo.protogeocommon/common.proto"3
ResolveResult"
location (2.common.Location"0
FrameRXInfo!
rx_info (2.gw.UplinkRXInfo"�
ResolveTDOARequest
dev_eui (RdevEUI4
frame_rx_info (2.geo.FrameRXInfoRframeRXInfo!
device_reference_altitude ("�
ResolveMultiFrameTDOARequest
dev_eui (RdevEUI;
frame_rx_info_set (2.geo.FrameRXInfoRframeRXInfoSet!
device_reference_altitude ("9
ResolveTDOAResponse"
result (2.geo.ResolveResult"C
ResolveMultiFrameTDOAResponse"
result (2.geo.ResolveResult2�
GeolocationServerServiceB
ResolveTDOA.geo.ResolveTDOARequest.geo.ResolveTDOAResponse" `
ResolveMultiFrameTDOA!.geo.ResolveMultiFrameTDOARequest".geo.ResolveMultiFrameTDOAResponse" B^
io.chirpstack.api.geoBGeolocationServerProtoPZ+github.com/brocaar/chirpstack-api/go/v3/geobproto3'
        , true);

        static::$is_initialized = true;
    }
}

