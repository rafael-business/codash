<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/smart_campaign_setting.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Resources;

class SmartCampaignSetting
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v9/resources/smart_campaign_setting.proto!google.ads.googleads.v9.resourcesgoogle/api/resource.protogoogle/api/annotations.proto"�
SmartCampaignSettingL
resource_name (	B5�A�A/
-googleads.googleapis.com/SmartCampaignSetting;
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignY
phone_number (2C.google.ads.googleads.v9.resources.SmartCampaignSetting.PhoneNumber
	final_url (	!
advertising_language_code (	
business_name (	H 
business_location_id (H e
PhoneNumber
phone_number (	H �
country_code (	H�B
_phone_numberB
_country_code:o�Al
-googleads.googleapis.com/SmartCampaignSetting;customers/{customer_id}/smartCampaignSettings/{campaign_id}B
business_settingB�
%com.google.ads.googleads.v9.resourcesBSmartCampaignSettingProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

