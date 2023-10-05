let slider = Array.from(document.querySelectorAll(".campaign-container"));


slider.map(slide => {
    slide.addEventListener('mousedown', (e) => {
        isDown = true;
        slide.classList.add('active');
        startX = e.pageX - slide.offsetLeft;
        scrollLeft = slide.scrollLeft;
    });
    slide.addEventListener('mouseleave', () => {
        isDown = false;
        slide.classList.remove('active');
    });
    slide.addEventListener('mouseup', () => {
        isDown = false;
        slide.classList.remove('active');
    });
    slide.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        let x = e.pageX - slide.offsetLeft;
        let walk = (x - startX) * 1;
        slide.scrollLeft = scrollLeft - walk;
    });
});


$(document).ready(function () {
    var modalShown = false;

    $(".avatar").click(function () {
        if (!modalShown) {
            $(".modal-user").removeClass("d-none");
            modalShown = true;
        } else {
            $(".modal-user").addClass("d-none");
            modalShown = false;
        }
    });
});
