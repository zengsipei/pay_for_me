<?php

namespace Zengsipei\Pay\Alipay\Request;

/**
 * 收银员通过收银台或商户后台调用支付宝接口，生成二维码后，展示给用户，由用户扫描二维码完成订单支付。
 * 修改路由策略到 R
 * @package Zengsipei\Pay\Alipay\Request
 */
class AlipayTradePrecreateRequest extends AlipayBaseRequest
{
    public function getApiMethodName()
    {
        return 'alipay.trade.precreate';
    }
}
