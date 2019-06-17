define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'admin',
                component: 'Xigen_AdminPayment/js/view/payment/method-renderer/admin-method'
            }
        );
        return Component.extend({});
    }
);