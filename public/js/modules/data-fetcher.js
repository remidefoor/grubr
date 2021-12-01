'use stict';

const BASE_URL = 'https://project.local/api';

const resp = await fetch(`${BASE_URL}${window.location.pathname}/statistics`);
const playerStatistics = await resp.json();

export function getPlayerStatistics() {
    return playerStatistics;
}

export function getPlayedMinutes() {
    return playerStatistics.reduce((acc, statistic) => {
        acc[statistic.date] = statistic.played_minutes;
        return acc;
    }, {});
}
