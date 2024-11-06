function PlayAudio() {
    document.getElementById("Music").play();
}

function TransitionSound(event) {
    var lateDiv = document.querySelector('.late');
    if (!lateDiv.contains(event.relatedTarget)) {
        document.getElementById("Transition").play();
    }
}

function TransitionSoundOut(event) {
    var lateDiv = document.querySelector('.late');
    if (!lateDiv.contains(event.relatedTarget)) {
        document.getElementById("TransitionOut").play();
    }
}

function HideOptions() {
    var puto = document.getElementById('options');
        if (puto.style.display === 'block') {
            puto.style.display = 'none';
        } else {
            puto.style.display = 'none';
        }
}

function toggleOptions() {
    var options = document.getElementById('options');
        if (options.style.display === 'none') {
            options.style.display = 'block';
        } else {
            options.style.display = 'block';
        }
}

document.addEventListener("DOMContentLoaded", function () {
    var toggleButton = document.getElementById("Example");

    toggleButton.addEventListener("click", function () {
        this.classList.toggle("activeN");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var toggleButton = document.getElementById("Car");

    toggleButton.addEventListener("click", function () {
        this.classList.toggle("activeN");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var toggleButton = document.getElementById("Objective");

    toggleButton.addEventListener("click", function () {
        this.classList.toggle("activeN");
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var toggleButton = document.getElementById("main");

    toggleButton.addEventListener("click", function () {
        this.classList.toggle("activeN");
    });
});

function HideOptionsMenú() {
    var pedritofeliz = document.getElementById('LateralBar');
        if (pedritofeliz.style.left === '0%') {
            pedritofeliz.style.left = '-22%';
        } else {

        }
}

function Menú() {
    var options = document.getElementById('LateralBar');
        if (options.style.left === '-22%') {
            options.style.left = '0%';
        } else {
            options.style.left = '0%';
        }
}

document.querySelector('a').addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = this.href;
});