'use strict';

document.addEventListener('DOMContentLoaded', init);

function init() {
    setPlayerOutlineColors();

    // event bindings
    document.querySelector('#player-search-bar').addEventListener('keyup', displayMatchingPlayers);
    document.querySelectorAll('.player').forEach(player => player.addEventListener('click', redirectToPlayerPage));
}

function setPlayerOutlineColors() {
    const COLORS = ['#FFC700', '#f24e1e', '#ff7262', '#a259ff', '#1abcfe', '#0acf83']

    document.querySelectorAll('.player img').forEach($player => {
        const color = COLORS[Math.floor(Math.random() * COLORS.length)];
        $player.style.outlineColor = color;
    });
}

function displayMatchingPlayers(e) {
    const searchTerm = e.currentTarget.value.toLowerCase();
    document.querySelectorAll('.player').forEach(player => {
        const firstName = player.getAttribute('data-first-name').toLocaleLowerCase();
        const lastName = player.getAttribute('data-last-name').toLocaleLowerCase();
        const fullName = firstName + ' ' + lastName;
        const reverseFullName = lastName + ' ' + firstName;
        if (firstName.match(searchTerm) || lastName.match(searchTerm) ||
            fullName.match(searchTerm) || reverseFullName.match(searchTerm)) {
            player.classList.remove('hidden');
        } else {
            player.classList.add('hidden');
        }
    });
}

function redirectToPlayerPage(e) {
    const BASE_URL = '/players';
    const uuid = e.currentTarget.getAttribute('data-uuid');
    const firstName = e.currentTarget.getAttribute('data-first-name');
    const lastName = e.currentTarget.getAttribute('data-last-name');

    const url = `${BASE_URL}/${uuid}/${firstName}-${lastName}`;

    window.location.href = url;
}
