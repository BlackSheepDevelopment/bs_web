import "../sass/styles.scss";

document.addEventListener(
    "DOMContentLoaded",
    function () {
        let index = 0;
        const slides = document.querySelectorAll(".slider img");
        const totalSlides = slides.length;

        document.querySelector(".next").addEventListener("click", () => {
            index = (index + 1) % totalSlides; // Loop back to first image
            updateSliderPosition();
        });

        document.querySelector(".prev").addEventListener("click", () => {
            index = (index - 1 + totalSlides) % totalSlides; // Loop back to last image
            updateSliderPosition();
        });

        function updateSliderPosition() {
            const slider = document.querySelector(".slider");
            slider.style.transform = `translateX(-${
                index * (100 / totalSlides)
            }%)`;
        }
    },
    false
);
