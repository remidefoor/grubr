'use strict';

document.addEventListener('DOMContentLoaded', init);

function init() {
    // event bindings
    document.querySelector('#file-input').addEventListener('click', uploadFile);
    document.querySelector('#use-camera').addEventListener('click', initVideoStream);
}

/* function displayProfilePicture() {
    const WIDTH = 400;
    const HEIGHT = WIDTH;

    const $canvas = document.querySelector('#output canvas');
    const context = $canvas.getContext('2d');

    const $currentProfilePicture = document.querySelector('#current-profile-picture');
    $canvas.width = WIDTH;
    $canvas.height = HEIGHT;
    $currentProfilePicture.onload = () => context.drawImage($currentProfilePicture, 0, 0, WIDTH, HEIGHT);
} */

function updateProfilePictureSetup(visibleElem1, visibleElem2) {
    const $profilePictureElems = document.querySelector('#profile-picture').children;
    for (let i = 0; i < $profilePictureElems.length; i++) {
        if ($profilePictureElems[i].id !== 'profile-picture-controls') {
            $profilePictureElems[i].classList.add('hidden');
        }
    }

    const $profilePictureControls = document.querySelector('#profile-picture-controls').children;
    for (let i = 0; i < $profilePictureControls.length; i++) {
        if ($profilePictureControls[i].id !== 'file-input') {
            $profilePictureControls[i].classList.add('hidden');
        }
    }

    visibleElem1.classList.remove('hidden');
    visibleElem2.classList.remove('hidden');
}

function uploadFile(e) {
    
}

function initVideoStream(e) {
    e.preventDefault();

    if ('mediaDevices' in navigator) {
        const constraints = { video: true };

        navigator.mediaDevices.getUserMedia(constraints)
            .then(stream => {
                const $videoInput = document.querySelector('#video-input');
                $videoInput.srcObject = stream;
                $videoInput.play();

                const $takePicture = document.querySelector('#take-picture');

                $takePicture.addEventListener('click', displayVideoFrame);
                document.querySelector('#take-new-picture').addEventListener('click', displayVideoStream);

                updateProfilePictureSetup($videoInput, $takePicture);
            });
    }
}

function displayVideoFrame(e) {
    e.preventDefault();

    const $videoInput = document.querySelector('#video-input');
    const $canvas = document.querySelector('canvas');
    const context = $canvas.getContext('2d');
    const $output = document.querySelector('#output');

    context.clearRect(0, 0, $canvas.width, $canvas.height);
    context.drawImage($videoInput, 0, 0);

    $output.src = $canvas.toDataURL();

    updateProfilePictureSetup($output, document.querySelector('#take-new-picture'));
}

function displayVideoStream(e) {
    e.preventDefault();

    updateProfilePictureSetup(
        document.querySelector('#video-input'),
        document.querySelector('#take-picture')
    );
}
