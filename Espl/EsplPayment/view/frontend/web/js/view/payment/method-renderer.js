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
                type: 'custompayment',
                component: 'Espl_EsplPayment/js/view/payment/method-renderer/esplpayment'
            }
        );
        return Component.extend({});
    }
  );