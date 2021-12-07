'use strict';

const COLORS = {
    YELLOW: '#FFC700',
    RED: '#f24e1e',
    CORAL: '#ff7262',
    PURPLE: '#a259ff',
    BLUE: '#1abcfe',
    GREEN: '#0acf83'
}

const datafetcher = await import('../modules/data-fetcher.js');

export const configurations = {
    playingTimes: {
        type: 'line',
        data: {
            datasets: [
                {
                    label: 'Game Time',
                    data: datafetcher.getPlayedMinutes(),
                    backgroundColor: COLORS.CORAL
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
                    label: 'Team Goals',
                    stack: 'team',
                    data: datafetcher.getTeamGoalsWithoutPersonalGoals(),
                    backgroundColor: COLORS.RED
                },
                {
                    label: 'Personal Goals',
                    stack: 'team',
                    data: datafetcher.getPersonalGoals(),
                    backgroundColor: COLORS.YELLOW
                },
                {
                    label: 'Opponent Goals',
                    stack: 'opponent',
                    data: datafetcher.getOpponentGoals(),
                    backgroundColor: COLORS.PURPLE
                }
            ]
        },
        options: {

        }
    },
    personalGoalsRatio: {
        type: 'doughnut',
        data: {
            labels: Object.keys(datafetcher.getPersonalGoalsRatio()),
            datasets: [
                {
                    data: Object.values(datafetcher.getPersonalGoalsRatio()),
                    backgroundColor: [COLORS.GREEN, COLORS.BLUE]
                }
            ]
        },
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Personal Goals Ratio',
                    font: {
                        size: '20rem'
                    }
                }
            }
        }
    }
}
 