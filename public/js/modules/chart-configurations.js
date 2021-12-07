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
            plugins: {
                title: {
                    display: true,
                    text: 'Playing Times',
                    font: {
                        size: '20rem'
                    }
                },
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Game Day',
                        font: {
                            weight: 'bold'
                        }
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Game Time (min)',
                        font: {
                            weight: 'bold'
                        }
                    },
                    max: 60
                }
            }
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
            plugins: {
                title: {
                    display: true,
                    text: 'Game Results',
                    font: {
                        size: '20rem'
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Game Day',
                        font: {
                            weight: 'bold'
                        }
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Goals',
                        font: {
                            weight: 'bold'
                        }
                    }
                }
            }
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
 