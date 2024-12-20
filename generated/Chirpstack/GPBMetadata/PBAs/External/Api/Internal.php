<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: as/external/api/internal.proto

namespace GPBMetadata\PBAs\External\Api;

class Internal
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\PBAs\External\Api\User::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
as/external/api/internal.protoapigoogle/protobuf/timestamp.protogoogle/protobuf/empty.protoas/external/api/user.proto"�
APIKey

id (	
name (	
is_admin (\'
organization_id (RorganizationID%
application_id (RapplicationID"3
CreateAPIKeyRequest
api_key (2.api.APIKey"5
CreateAPIKeyResponse

id (	
	jwt_token (	"!
DeleteAPIKeyRequest

id (	"�
ListAPIKeysRequest
limit (
offset (
is_admin (\'
organization_id (RorganizationID%
application_id (RapplicationID"G
ListAPIKeysResponse
total_count (
result (2.api.APIKey"�
OrganizationLink\'
organization_id (RorganizationID
organization_name (	
is_admin (
is_device_admin (
is_gateway_admin (.

created_at (2.google.protobuf.Timestamp.

updated_at (2.google.protobuf.Timestamp"/
LoginRequest
email (	
password (	"
LoginResponse
jwt (	"X
ProfileResponse
user (2	.api.User,
organizations (2.api.OrganizationLink"D
GlobalSearchRequest
search (	
limit (
offset ("?
GlobalSearchResponse\'
result (2.api.GlobalSearchResult"�
GlobalSearchResult
kind (	
score (\'
organization_id (RorganizationID
organization_name (	%
application_id (RapplicationID
application_name (	$
device_dev_eui (	RdeviceDevEUI
device_name (	
gateway_mac	 (	R
gatewayMAC
gateway_name
 (	"_
SettingsResponse
branding (2.api.Branding*
openid_connect (2.api.OpenIDConnect"0
Branding
registration (	
footer (	"q
OpenIDConnect
enabled (
	login_url (	RloginURL
login_label (	

logout_url (	R	logoutURL"8
OpenIDConnectLoginRequest
code (	
state (	"/
OpenIDConnectLoginResponse
	jwt_token (	"C
GetDevicesSummaryRequest\'
organization_id (RorganizationID"�
GetDevicesSummaryResponse
active_count (
inactive_count (=
dr_count (2+.api.GetDevicesSummaryResponse.DrCountEntry
never_seen_count (.
DrCountEntry
key (
value (:8"D
GetGatewaysSummaryRequest\'
organization_id (RorganizationID"d
GetGatewaysSummaryResponse
active_count (
inactive_count (
never_seen_count (2�
InternalServiceN
Login.api.LoginRequest.api.LoginResponse"���"/api/internal/login:*V
Profile.google.protobuf.Empty.api.ProfileResponse"���/api/internal/profilea
GlobalSearch.api.GlobalSearchRequest.api.GlobalSearchResponse"���/api/internal/searchf
CreateAPIKey.api.CreateAPIKeyRequest.api.CreateAPIKeyResponse"!���"/api/internal/api-keys:*e
DeleteAPIKey.api.DeleteAPIKeyRequest.google.protobuf.Empty"#���*/api/internal/api-keys/{id}`
ListAPIKeys.api.ListAPIKeysRequest.api.ListAPIKeysResponse"���/api/internal/api-keysY
Settings.google.protobuf.Empty.api.SettingsResponse"���/api/internal/settingsw
OpenIDConnectLogin.api.OpenIDConnectLoginRequest.api.OpenIDConnectLoginResponse" ���/api/internal/oidc/loginy
GetDevicesSummary.api.GetDevicesSummaryRequest.api.GetDevicesSummaryResponse"%���/api/internal/devices/summary}
GetGatewaysSummary.api.GetGatewaysSummaryRequest.api.GetGatewaysSummaryResponse"&��� /api/internal/gateways/summaryBm
!io.chirpstack.api.as.external.apiBInternalProtoPZ7github.com/brocaar/chirpstack-api/go/v3/as/external/apibproto3'
        , true);

        static::$is_initialized = true;
    }
}

