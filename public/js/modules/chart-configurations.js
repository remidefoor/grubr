'use strict';

const datafetcher = await import('../modules/data-fetcher.js');

export const configurations = {
    playingTimes: {
        type: 'line',
        data: {
            datasets: [
                {
                    label: "Game Time",
                    data: datafetcher.getPlayedMinutes()
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
                {
                    label: "Personal Goals",
                    stack: "team"
                },
                {
                    label: "Team Goals",
                    stack: "team"
                },
                {
                    label: "Opponent Goals",
                    stack: "opponent"
                }
            ]
        },
        options: {

        }
    }
}
