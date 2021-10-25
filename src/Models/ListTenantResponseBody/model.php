<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models\ListTenantResponseBody;

use AlibabaCloud\Tea\Model;

class model extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $settleInfo;

    /**
     * @var string
     */
    public $tenantDescription;

    /**
     * @var int
     */
    public $version;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $business;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $modifyTime;
    protected $_name = [
        'status'            => 'Status',
        'settleInfo'        => 'SettleInfo',
        'tenantDescription' => 'TenantDescription',
        'version'           => 'Version',
        'tenantName'        => 'TenantName',
        'createTime'        => 'CreateTime',
        'business'          => 'Business',
        'bizId'             => 'BizId',
        'extInfo'           => 'ExtInfo',
        'tenantId'          => 'TenantId',
        'modifyTime'        => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->settleInfo) {
            $res['SettleInfo'] = $this->settleInfo;
        }
        if (null !== $this->tenantDescription) {
            $res['TenantDescription'] = $this->tenantDescription;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->business) {
            $res['Business'] = $this->business;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SettleInfo'])) {
            $model->settleInfo = $map['SettleInfo'];
        }
        if (isset($map['TenantDescription'])) {
            $model->tenantDescription = $map['TenantDescription'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Business'])) {
            $model->business = $map['Business'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
