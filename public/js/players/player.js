'use strict';

import {configurations} from '../modules/chart-configurations.js';

document.addEventListener('DOMContentLoaded', init);

function init() {
    loadCharts();
}

function toggleFullscreen(e) {
    // TODO implement
}

function createCanvasElement(id) {
    const canvas = document.createElement('canvas');
    canvas.id = id;

    canvas.addEventListener('click', toggleFullscreen);

    return canvas;
}

function loadCharts() {
    const $charts = document.querySelector('#charts');

    for (const configuration in configurations) {
        const canvas = createCanvasElement(configuration);

        $charts.appendChild(canvas);
    }
}
