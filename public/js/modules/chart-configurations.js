'use strict';

const BASE_URL = 'https://project.local/api';

const playerStatistics = await fetch(`${BASE_URL}${window.location.pathname}/statistics`)
    .then(response => response.json());

function createDataset(accumulator, playerStatistic) {
    accumulator[playerStatistic.date] = playerStatistic.played_minutes;
    return accumulator;
}

function getPlayedMinutes() {
    return playerStatistics.reduce(createDataset, {});
}

// const datafetcher = import('../modules/data-fetcher.js');

export const configurations = {
    playingTimes: {
        type: 'line',
        data: {
            datasets: [
                {
                    data: getPlayedMinutes()
                }
            ]
        },
        options: {

        }
    },
    averageGoals: {
        type: 'doughnut',
        data: {
            datasets: [

            ]
        },
        options: {

        }
    }
}
