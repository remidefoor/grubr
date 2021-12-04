'use stict';

const BASE_URL = 'https://project.local/api';

const resp = await fetch(`${BASE_URL}${window.location.pathname}/statistics`);
const playerStatistics = await resp.json();

export function getPlayerStatistics() {
    return playerStatistics;
}


function mapPropertyToDate(property) {
    return playerStatistics.reduce((acc, statistic) => {
        acc[statistic['date']] = statistic[property];
        return acc;
    }, {});
}

function getPropertyAvg(property) {
    const sum = playerStatistics.reduce((acc, stat) => {
        return acc + stat[property];
    }, 0);

    return Math.round(sum / playerStatistics.length);
}


export function getPlayedMinutes() {
    return mapPropertyToDate('played_minutes');
}

export function getPersonalGoals() {
    return mapPropertyToDate('personal_goals');
}

export function getTeamGoals() {
    return mapPropertyToDate('team_goals');
}

export function getTeamGoalsWithoutPersonalGoals() {
    return playerStatistics.reduce((acc, statistic) => {
        acc[statistic.date] = statistic.team_goals - statistic.personal_goals;
        return acc;
    }, {});
}

export function getOpponentGoals() {
    return mapPropertyToDate('opponent_goals');
}

export function getAvgPersonalGoals() {
    return getPropertyAvg('personal_goals');
}

export function getAvgSevenMeterThrows() {
    return getPropertyAvg('seven_meter_throws');
}

export function getAvgPersonalGoalsWithoutSevenMeterThrows() {
    return getAvgPersonalGoals() - getAvgSevenMeterThrows();
}

export function getPersonalGoalsRatio() {
    return {
        'Regular Goals (avg)': getAvgPersonalGoalsWithoutSevenMeterThrows(),
        'Seven Meter Throws (avg)': getAvgSevenMeterThrows()
    }
}
