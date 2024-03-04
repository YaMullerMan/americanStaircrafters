//  ----  ----  logic for the home page slider  ----  ----
if (window.location.pathname == "/" || window.location.pathname == "/American%20Staircrafter/") {
    var slides = document.getElementsByClassName("imgSliderSlide");
    var dots = document.getElementsByClassName("imgSliderDot");
    var slideIndex = 1;
    var interval;

    function makeDots() {
        var a = document.createDocumentFragment();
        for (i = 0; i < slides.length; i++) {
            var x = i + 1;
            var y =
                '<span class="imgSliderDot" ' +
                'onclick="dotSlide' + "(" + x + ")" +
                '"></span>';
            var b = document.createElement("span");
            b.className = "imgSliderDot";
            b.setAttribute("onclick", "dotSlide(" + x + ")");
            document.getElementsByClassName("imgSliderDotContainer")[0].appendChild(b);
        }
    }

    makeDots();
    dots[slideIndex - 1].classList.add("active");
    slides[slideIndex - 1].classList.add("activeSlide");

    function slideChange() {
        interval = setInterval(nextSlide, 100000);
    }
    slideChange();

    function slideStop() {
        clearInterval(interval);
    }

    function dotSlide(x) {
        for (i = 0; i < slides.length; i++) {
            if (slides[i].classList.contains("activeSlide")) {
                slides[i].classList.remove("activeSlide");
                dots[i].classList.remove("active");
            }
        }
        var y = x - 1;
        slides[y].classList.add("activeSlide");
        dots[y].classList.add("active");
        slideIndex = x;
    }

    function nextSlide() {
        if (slideIndex >= slides.length) {
            var x = slides.length;
            var y = x - 1;
            slides[y].classList.remove("activeSlide");
            dots[y].classList.remove("active");
            slideIndex = 1;
            slides[slideIndex - 1].classList.add("activeSlide");
            dots[slideIndex - 1].classList.add("active");
        } else {
            slides[slideIndex - 1].classList.remove("activeSlide");
            dots[slideIndex - 1].classList.remove("active");
            slideIndex++;
            slides[slideIndex - 1].classList.add("activeSlide");
            dots[slideIndex - 1].classList.add("active");
        }
    }

    function prevSlide() {
        var a = slideIndex - 1;
        if (slideIndex <= 1) {
            slides[slideIndex - 1].classList.remove("activeSlide");
            dots[slideIndex - 1].classList.remove("active");
            var x = slides.length;
            var y = x - 1;
            slides[y].classList.add("activeSlide");
            dots[y].classList.add("active");
            slideIndex = x;
        } else {
            slides[slideIndex - 1].classList.remove("activeSlide");
            dots[slideIndex - 1].classList.remove("active");
            slideIndex--;
            slides[slideIndex - 1].classList.add("activeSlide");
            dots[slideIndex - 1].classList.add("active");
        }
    }
}

let mobileMenu = document.getElementsByClassName('mobile-menu')[0]
let menuIcon = document.getElementById('nav-icon4');
// this function toggles the mobile menu display to none or block
menuIcon.addEventListener("click", () => {
    if (mobileMenu.style.display == "block") {
        mobileMenu.style.display = "none";
    } else {
        mobileMenu.style.display = "block";
    }
})

// this controls the mobile nav click functionality
// $(document).ready(function () {
//     $('#nav-icon').click(function () {
//         $('.mobile-nav').toggleClass('mobile-nav-open');
//     });
// });

if (document.querySelectorAll('.accordian_button')) {
    document.querySelectorAll('.accordian_button').forEach(button => {
        button.addEventListener('click', () => {
            const accordianContent = button.nextElementSibling;
            button.classList.toggle('accordian_button-active');
            if (button.classList.contains('accordian_button-active')) {
                accordianContent.style.maxHeight = accordianContent.scrollHeight + 'px';
            } else {
                accordianContent.style.maxHeight = 0;
            }
        });
    });
}
