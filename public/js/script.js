'use strict';

document.addEventListener('DOMContentLoaded', init);

function init() {
    document.querySelector('#hamburger-menu').addEventListener('click', toggleNav);
}

function toggleNav(e) {
    const $nav = document.querySelector('nav');
    if ($nav.style.display === "none") {
        $nav.style.display = "block";
    } else {
        $nav.style.display = "none";
    }
}
