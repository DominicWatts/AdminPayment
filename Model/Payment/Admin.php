<?php

namespace Xigen\AdminPayment\Model\Payment;

/**
 * Admin Payment class
 */
class Admin extends \Magento\Payment\Model\Method\AbstractMethod
{
    const PAYMENT_METHOD_AMDIN_CODE = 'admin';

    /**
     * Payment method code
     * @var string
     */
    protected $_code = self::PAYMENT_METHOD_AMDIN_CODE;

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;
   
    /**
     * Payment Method feature
     * @var bool
     */
    protected $_canUseCheckout = false;
}
