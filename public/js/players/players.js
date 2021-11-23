'use strict';

document.addEventListener('DOMContentLoaded', init);

function init() {
    setPlayerOutlineColors();
}

function setPlayerOutlineColors() {
    const COLORS = ['#FFC700', '#f24e1e', '#ff7262', '#a259ff', '#1abcfe', '#0acf83']

    document.querySelectorAll('.player img').forEach($player => {
        const color = COLORS[Math.floor(Math.random() * COLORS.length)];
        $player.style.outlineColor = color;
    });
}
