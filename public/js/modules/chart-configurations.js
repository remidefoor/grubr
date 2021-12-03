'use strict';

const datafetcher = await import('../modules/data-fetcher.js');

export const configurations = {
    playingTimes: {
        type: 'line',
        data: {
            datasets: [
                {
                    label: 'Game Time',
                    data: datafetcher.getPlayedMinutes()
                }
            ]
        },
        options: {

        }
    },
    gameResults: {
        type: 'bar',
        data: {
            datasets: [
                {
                    label: 'Personal Goals',
                    stack: 'team',
                    data: datafetcher.getPersonalGoals()
                },
                {
                    label: 'Team Goals',
                    stack: 'team',
                    data: datafetcher.getTeamGoalsWithoutPersonalGoals()
                },
                {
                    label: 'Opponent Goals',
                    stack: 'opponent',
                    data: datafetcher.getOpponentGoals()
                }
            ]
        },
        options: {

        }
    }
}
