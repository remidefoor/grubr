'use strict';

let streaming = false;
let cropper;

document.addEventListener('DOMContentLoaded', init);

function init() {
    addImgCropper();

    // event bindings
    const $fileInput = document.querySelector('#file-input');
    $fileInput.addEventListener('click', selectFile);
    $fileInput.addEventListener('change', uploadFile);
    document.querySelector('#use-camera').addEventListener('click', initVideoStream);
    document.querySelector('#video-input').addEventListener('canplay', setVideoStream);
    document.querySelector('#take-picture').addEventListener('click', displayVideoFrame);
    document.querySelector('#take-new-picture').addEventListener('click', displayVideoStream);
}

function addImgCropper() {
    const $output = document.querySelector('#output');
    cropper = new Cropper($output, { aspectRatio: 1 });
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
    const $videoInput = document.querySelector('#video-input');
    const stream = $videoInput.srcObject;
    stream.getTracks().forEach(track => track.stop());
    $videoInput.srcObject = null;
    streaming = false;
}

function selectFile(e) {
    if (streaming) {
        stopVideoStream();
        updateProfilePictureSetup(
            document.querySelector('#output-wrapper'),
            document.querySelector('#use-camera')
        );
    }
}

function uploadFile(e) {
    if (e.target.files.length > 0) {
        const src = URL.createObjectURL(e.target.files[0]);
        cropper.replace(src);

    }
}

function setVideoStream(e) {
    if (!streaming) {
        const $videoInput = document.querySelector('#video-input');
        const $canvas = document.querySelector('canvas');
    
        $canvas.width = $videoInput.videoWidth;
        $canvas.height = $videoInput.videoHeight;
    
        updateProfilePictureSetup($videoInput, document.querySelector('#take-picture'));
        streaming = true;
    }
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
            });
    }
}

function displayVideoFrame(e) {
    e.preventDefault();

    if (streaming) {
        const $videoInput = document.querySelector('#video-input');
        const $canvas = document.querySelector('canvas');
        const context = $canvas.getContext('2d');

        context.clearRect(0, 0, $canvas.width, $canvas.height);
        context.drawImage($videoInput, 0, 0);

        cropper.replace($canvas.toDataURL());

        updateProfilePictureSetup(
            document.querySelector('#output-wrapper'),
            document.querySelector('#take-new-picture')
        );
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
