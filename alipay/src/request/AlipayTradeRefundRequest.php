<?php

namespace Zengsipei\Pay\Alipay\Request;

/**
 * 统一收单交易退款接口
 * @package Zengsipei\Pay\Alipay\Request
 */
class AlipayTradeRefundRequest extends AlipayBaseRequest
{
    public function getApiMethodName()
    {
        return 'alipay.trade.refund';
    }
}
