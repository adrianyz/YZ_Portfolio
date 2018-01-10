(function () {
    var showboard = document.querySelector('.lightbox'),
        close = document.querySelector('.lightboxOut'),
        portfolioWrap = document.querySelectorAll('.lightboxWrap'),
        image = document.querySelector('.lightboxImg'),
        content = document.querySelector('.lightboxDesc');


    function lightbox() {
        showboard.classList.toggle('close_showboard');
        noScroll.classList.toggle('no-scroll');
    }

    function showInfo() {
        let objectIndex = portfolioData[this.id];

        image.src = objectIndex.image;
        image.alt = objectIndex.alt;
        content.innerHTML = objectIndex.content;
    }

    portfolio.forEach(function (portfolioItem) {
        portfolioItem.addEventListener('click', lightbox, false);
    });
    portfolioWrap.forEach(function (portfolioItem) {
        portfolioItem.addEventListener('click', showInfo, false);
    });
    close.addEventListener('click', lightbox, false);
})();
