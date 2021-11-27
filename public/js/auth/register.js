'use strict';

const WIDTH = 320;
let height = 0;

let streaming = false;

document.addEventListener('DOMContentLoaded', init);

function init() {
    // event bindings
    document.querySelector('#file-input').addEventListener('click', uploadFile);

    document.querySelector('#use-camera').addEventListener('click', startStreaming);
    document.querySelector('#video-input').addEventListener('canplay', displayStream, false);
    document.querySelector('#take-picture').addEventListener('click', takePicture, false);
    document.querySelector('#take-new-picture').addEventListener('click', takeNewPicture);
}

function uploadFile(e) {
    displayVisibleProfilePictureElements([
        document.querySelector('#output'),
        document.querySelector('#use-camera')
    ]);
}

function clearPicture() {
    const $canvas = document.querySelector('#canvas');

    const context = $canvas.getContext('2d');
    context.fillStyle = '#AAA';
    context.fillRect(0, 0, $canvas.width, $canvas.height);

    const data = $canvas.toDataURL('image/png');
    document.querySelector('output').setAttribute('src', data);
}

function startStreaming(e) {
    e.preventDefault();

    if (!streaming) {
        navigator.mediaDevices.getUserMedia({ video: true, audio: false })
        .then(stream => {
            const $videoInput = document.querySelector('#video-input');
            $videoInput.srcObject = stream;
            $videoInput.play();
        });

        clearPicture();
    } else {
        displayVisibleProfilePictureElements([
            document.querySelector('#video-input'),
            document.querySelector('#take-picture')
        ]);
    }
}

function displayVisibleProfilePictureElements(visibleElements) {
    const $profilePictureContainer = document.querySelector('#profile-picture');
    for (const childElement of $profilePictureContainer) {
        if (childElement.id !== 'canvas' && childElement.id != 'file-input') {
            childElement.classList.add('hidden');
        }
    }

    for (const visibleElement of visibleElements) {
        visibleElement.classList.remove('hidden');
    }
}

function displayStream(e) {
    if (!streaming) {
        $videoInput = document.querySelector('#video-input');
        $canvas = document.querySelector('#canvas');

        displayVisibleProfilePictureElements([
            $videoInput,
            document.querySelector('#take-picture')
        ]);

        height = $videoInput.videoHeight / ($videoInput.videoWidth / WIDTH);

        $videoInput.setAttribute('width', WIDTH);
        $videoInput.setAttribute('height', height);
        $canvas.setAttribute('width', WIDTH);
        $canvas.setAttribute('height', height);

        streaming = true;
    }
}

function takePicture(e) {
    e.preventDefault();

    const $canvas = document.querySelector('#canvas');
    const $output = document.querySelector('#output');

    const context = $canvas.getContext('2d');
    if (WIDTH && height) {
        $canvas.width = WIDTH;
        $canvas.height = height;
        context.drawImage(document.querySelector('#video-input'), 0, 0, WIDTH, height);

        const data = $canvas.toDataURL('image/png');
        $output.setAttribute('src', data);

        displayVisibleProfilePictureElements([
            $output,
            document.querySelector('#take-new-picture')
        ]);
    } else {
        clearPicture();
    }
}

function takeNewPicture(e) {
    clearPicture();

    displayVisibleProfilePictureElements([
        document.querySelector('#video-input'),
        document.querySelector('#take-picture')
    ]);
}
