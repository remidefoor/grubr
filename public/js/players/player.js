'use strict';

document.addEventListener('DOMContentLoaded', init);

function init() {
    loadCharts();
}

function toggleFullscreen(e) {
    // TODO implement
}

function createChartElement(id) {
    const canvas = document.createElement('canvas');    
    canvas.addEventListener('click', toggleFullscreen);

    const chartContainer = document.createElement('div');
    chartContainer.id = id;
    chartContainer.appendChild(canvas);

    return chartContainer;
}

async function loadCharts() {
    const $charts = document.querySelector('#charts');

    const {configurations} = await import('../modules/chart-configurations.js');
     for (const configuration in configurations) {
        const chartElement = createChartElement(configuration);

        const canvas = chartElement.firstElementChild;
        new Chart(canvas.getContext('2d'), configurations[configuration]);

        $charts.appendChild(chartElement);
    }
}
