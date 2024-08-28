<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models;

use AlibabaCloud\Tea\Model;

class SearchHeaders extends Model
{
    public $commonHeaders;

    /**
     * @description token
     *
     * This parameter is required.
     * @example eyJhbGciOiJSUzI1NiIsImtpZCI6ImRpc3RyaWJ1dGlvbl9rZXlpZCJ9.eyJqdGkiOiI2cDQwZDctSDQ0dUJicEJkYTZadzdBIiwiaWF0IjoxNzI0MzE2MzM1LCJleHAiOjE3MjQzMjM1MzUsIm5iZiI6MTcyNDMxNjI3NSwiYXBwS2V5IjoiNjE3NzgxZDQxM2FmNGRlZGFiNzkifQ.XtjSM7qVbESvt7n31RtD5Pp6854IVyGMEco4aEruMDMkrXHkcdZejyecKFx3RdsCldZPgvowc5EOl44c3JJfm6DENH4M6BRBSc90eqXYcD_xVJ9FhDWzK9O6OnkvR7HX1t-qqMdikLviM1w1G0DGMLaasvZ8MPMewL8k6NnvOSGePwUhb-m5IZ14VYv7BPO2dp8Jh00qNSJQrmNiWWzJUtK_xllNr3LKQ7cIVtPgFUckvRDw9Hal5oACXSRdkZFOAGlFSjpB_BbTpe5vc-AJ8K89nRD53sIy9YyVQClV_HH7PrXxFFJgReGvNsnP1h9gf55q86IzOQBkj9vGm2zXdw
     *
     * @var string
     */
    public $xAcsAirticketAccessToken;

    /**
     * @example en_US
     *
     * @var string
     */
    public $xAcsAirticketLanguage;
    protected $_name = [
        'xAcsAirticketAccessToken' => 'xAcsAirticketAccessToken',
        'xAcsAirticketLanguage'    => 'xAcsAirticketLanguage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->xAcsAirticketAccessToken) {
            $res['xAcsAirticketAccessToken'] = $this->xAcsAirticketAccessToken;
        }
        if (null !== $this->xAcsAirticketLanguage) {
            $res['xAcsAirticketLanguage'] = $this->xAcsAirticketLanguage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['xAcsAirticketAccessToken'])) {
            $model->xAcsAirticketAccessToken = $map['xAcsAirticketAccessToken'];
        }
        if (isset($map['xAcsAirticketLanguage'])) {
            $model->xAcsAirticketLanguage = $map['xAcsAirticketLanguage'];
        }

        return $model;
    }
}
