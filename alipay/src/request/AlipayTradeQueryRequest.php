<?php

namespace Zengsipei\Pay\Alipay\Request;

/**
 * 统一收单线下交易查询
 * 修改路由策略到 R
 * @package Zengsipei\Pay\Alipay\Request
 */
class AlipayTradeQueryRequest extends AlipayBaseRequest
{
    public function getApiMethodName()
    {
        return 'alipay.trade.query';
    }
}
