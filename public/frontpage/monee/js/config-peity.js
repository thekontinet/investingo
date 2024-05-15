/* --------------------------------------------------------------------------
 * File        : config-peity.js
 * Author      : indonez
 * Author URI  : http://www.indonez.com
 *
 * Indonez Copyright 2020 All Rights Reserved.
 * -------------------------------------------------------------------------- */

    'use strict';

    const MoneeLineChart = {
        theme_plugin: function() {
            const element = document.querySelectorAll('.monee-line-chart');
            element.forEach(chart => {
                peity(chart, 'line', {
                    delimiter: ',',
                    fill: '#e7f0fb',
                    max: null,
                    min: 40,
                    stroke: '#4184dd',
                    strokeWidth: 2,
                    width: '100%',
                    height: '100'
                })
            })
        },
        theme_init: function() {
            MoneeLineChart.theme_plugin();
        }
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        MoneeLineChart.theme_init();
    });