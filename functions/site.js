var imagePaths1 = [
    "public/img/fotos/01.jpg",
    "public/img/fotos/02.jpg",
    "public/img/fotos/03.jpg",
    "public/img/fotos/04.jpg",
    "public/img/fotos/05.jpg",
    "public/img/fotos/06.jpg",
    "public/img/fotos/07.jpg",
    "public/img/fotos/08.jpg",
    "public/img/fotos/09.jpg",
    "public/img/fotos/10.jpg"
];

var imagePaths2 = [
    "public/img/fotos/01.jpg",
    "public/img/fotos/02.jpg",
    "public/img/fotos/03.jpg",
    "public/img/fotos/04.jpg",
    "public/img/fotos/05.jpg",
    "public/img/fotos/06.jpg",
    "public/img/fotos/07.jpg",
    "public/img/fotos/08.jpg",
    "public/img/fotos/09.jpg",
    "public/img/fotos/10.jpg"
];

var currentImageIndex1 = -1;
var currentImageIndex2 = -1;

function cambiarImagen1() {
    var img1 = document.getElementById('img1');
    var newIndex1;

    do {
        newIndex1 = Math.floor(Math.random() * imagePaths1.length);
    } while (newIndex1 === currentImageIndex2);

    img1.src = imagePaths1[newIndex1];
    currentImageIndex1 = newIndex1;

    setTimeout(cambiarImagen2, 5000); 
}

function cambiarImagen2() {
    var img2 = document.getElementById('img2');
    var newIndex2;

    do {
        newIndex2 = Math.floor(Math.random() * imagePaths2.length);
    } while (newIndex2 === currentImageIndex1);

    img2.src = imagePaths2[newIndex2];
    currentImageIndex2 = newIndex2;

    setTimeout(cambiarImagen1, 10000); 
}

cambiarImagen1();

function activeTab(tab) {
    var elementos = document.getElementsByClassName("active-tab");
    for (var i = 0; i < elementos.length; i++) {
        elementos[i].classList.remove("active-tab");
    }

    var elemento = document.getElementById(tab);
    elemento.classList.add('active-tab');
}

document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Dejar de observar una vez que ha sido animado
            }
        });
    });

    const targets = document.querySelectorAll('.animate-on-scroll');
    targets.forEach(target => {
        observer.observe(target);
    });
});

window.addEventListener('load', function() {
    // Espera 3 segundos antes de mostrar el contenido (3000 milisegundos)
    setTimeout(function() {
        document.getElementById('loader').style.display = 'none';
    }, 5000);
});