window.addEventListener('scroll', function() {
    let image = document.querySelector('.heroImgBox');
    if (window.scrollY > window.innerHeight) {
        image.classList.add('image-hidden');
    } else {
        image.classList.remove('image-hidden');
    }
});