<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/budget_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Enums;

class BudgetType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/ads/googleads/v8/enums/budget_type.protogoogle.ads.googleads.v8.enums"�
BudgetTypeEnum"u

BudgetType
UNSPECIFIED 
UNKNOWN
STANDARD
HOTEL_ADS_COMMISSION
	FIXED_CPA
SMART_CAMPAIGNB�
!com.google.ads.googleads.v8.enumsBBudgetTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

