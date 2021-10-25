<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class QueryIncomeTrendShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $originSiteUserId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userSite;

    /**
     * @var string
     */
    public $mediaNameShrink;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $adSlotId;

    /**
     * @var string
     */
    public $adSlotName;

    /**
     * @var string
     */
    public $adSlotType;

    /**
     * @var int
     */
    public $slot;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $dimension;

    /**
     * @var string
     */
    public $slotDimension;

    /**
     * @var string
     */
    public $environment;

    /**
     * @var string
     */
    public $queryType;
    protected $_name = [
        'business'         => 'Business',
        'appName'          => 'AppName',
        'originSiteUserId' => 'OriginSiteUserId',
        'tenantId'         => 'TenantId',
        'userId'           => 'UserId',
        'userSite'         => 'UserSite',
        'mediaNameShrink'  => 'MediaName',
        'startTime'        => 'StartTime',
        'endTime'          => 'EndTime',
        'mediaId'          => 'MediaId',
        'adSlotId'         => 'AdSlotId',
        'adSlotName'       => 'AdSlotName',
        'adSlotType'       => 'AdSlotType',
        'slot'             => 'Slot',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'dimension'        => 'Dimension',
        'slotDimension'    => 'SlotDimension',
        'environment'      => 'Environment',
        'queryType'        => 'QueryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->originSiteUserId) {
            $res['OriginSiteUserId'] = $this->originSiteUserId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userSite) {
            $res['UserSite'] = $this->userSite;
        }
        if (null !== $this->mediaNameShrink) {
            $res['MediaName'] = $this->mediaNameShrink;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->adSlotId) {
            $res['AdSlotId'] = $this->adSlotId;
        }
        if (null !== $this->adSlotName) {
            $res['AdSlotName'] = $this->adSlotName;
        }
        if (null !== $this->adSlotType) {
            $res['AdSlotType'] = $this->adSlotType;
        }
        if (null !== $this->slot) {
            $res['Slot'] = $this->slot;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->dimension) {
            $res['Dimension'] = $this->dimension;
        }
        if (null !== $this->slotDimension) {
            $res['SlotDimension'] = $this->slotDimension;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIncomeTrendShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['OriginSiteUserId'])) {
            $model->originSiteUserId = $map['OriginSiteUserId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserSite'])) {
            $model->userSite = $map['UserSite'];
        }
        if (isset($map['MediaName'])) {
            $model->mediaNameShrink = $map['MediaName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['AdSlotId'])) {
            $model->adSlotId = $map['AdSlotId'];
        }
        if (isset($map['AdSlotName'])) {
            $model->adSlotName = $map['AdSlotName'];
        }
        if (isset($map['AdSlotType'])) {
            $model->adSlotType = $map['AdSlotType'];
        }
        if (isset($map['Slot'])) {
            $model->slot = $map['Slot'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Dimension'])) {
            $model->dimension = $map['Dimension'];
        }
        if (isset($map['SlotDimension'])) {
            $model->slotDimension = $map['SlotDimension'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }

        return $model;
    }
}
