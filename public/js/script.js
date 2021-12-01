'use strict';

document.addEventListener('DOMContentLoaded', init);

function init() {
    document.querySelector('#hamburger-menu').addEventListener('click', toggleNav);
}

function toggleNav(e) {
    document.querySelector('nav').classList.toggle('visible');
}
