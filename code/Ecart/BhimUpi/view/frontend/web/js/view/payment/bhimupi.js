define([
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (Component, rendererList) {
        'use strict';

        rendererList.push(
            {
                type: 'ecart_bhimupi',
                component: 'Ecart_BhimUpi/js/view/payment/method-renderer/bhimupi'
            }
        );

        /** Add view logic here if needed */
        return Component.extend({});
    });