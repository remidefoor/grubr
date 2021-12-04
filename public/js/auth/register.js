'use strict';

let streaming = false;

document.addEventListener('DOMContentLoaded', init);

function init() {
    // event bindings
    document.querySelector('#file-input').addEventListener('click', selectFile);
    document.querySelector('#use-camera').addEventListener('click', initVideoStream);
    document.querySelector('#take-picture').addEventListener('click', displayVideoFrame);
    document.querySelector('#take-new-picture').addEventListener('click', displayVideoStream);
}

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

function stopVideoStream() {
    const stream = document.querySelector('#video-input').srcObject;
    stream.getTracks().forEach(track => track.stop());
    streaming = false;
}

function selectFile(e) {
    if (streaming) {
        stopVideoStream();
        updateProfilePictureSetup(
            document.querySelector('#output'),
            document.querySelector('#use-camera')
        );
    }
}

function uploadFile(e) {
    
}

function initVideoStream(e) {
    e.preventDefault();

    if (!streaming && 'mediaDevices' in navigator) {
        const constraints = { video: true };

        navigator.mediaDevices.getUserMedia(constraints)
            .then(stream => {
                const $videoInput = document.querySelector('#video-input');
                $videoInput.srcObject = stream;
                $videoInput.play();
                streaming = true;

                updateProfilePictureSetup($videoInput, document.querySelector('#take-picture'));
            });
    }
}

function displayVideoFrame(e) {
    e.preventDefault();

    if (streaming) {
        const $videoInput = document.querySelector('#video-input');
        const $canvas = document.querySelector('canvas');
        const context = $canvas.getContext('2d');
        const $output = document.querySelector('#output');

        context.clearRect(0, 0, $canvas.width, $canvas.height);
        context.drawImage($videoInput, 0, 0);

        $output.src = $canvas.toDataURL();

        updateProfilePictureSetup($output, document.querySelector('#take-new-picture'));
    }
}

function displayVideoStream(e) {
    e.preventDefault();

    if (streaming) {
        updateProfilePictureSetup(
            document.querySelector('#video-input'),
            document.querySelector('#take-picture')
        );
    }
}
