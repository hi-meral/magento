define([
        'jquery',
        'Magento_Payment/js/view/payment/cc-form'
    ],
    function ($, Component) {
        'use strict';

        return Component.extend({
            defaults: {
                template: 'Ecart_BhimUpi/payment/bhimupi'
            },

            context: function() {
                return this;
            },

            getCode: function() {
                return 'ecart_bhimupi';
            },

            isActive: function() {
                return true;
            }
        });
    }
);