<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: stream/backend_interfaces.proto

namespace GPBMetadata\Chirpstack\Stream;

class BackendInterfaces
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
stream/backend_interfaces.protostream"�
BackendInterfacesRequest
	sender_id (	
receiver_id (	(
time (2.google.protobuf.Timestamp
transaction_id (
message_type (	
result_code (	
request_body (	
request_error (	
response_body	 (	B�
io.chirpstack.api.streamBBackendInterfacesProtoPZ1github.com/chirpstack/chirpstack/api/go/v4/stream�Chirpstack.Stream�Chirpstack\\Stream�GPBMetadata\\Chirpstack\\Streambproto3'
        , true);

        static::$is_initialized = true;
    }
}

