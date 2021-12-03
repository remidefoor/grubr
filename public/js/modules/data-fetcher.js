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
