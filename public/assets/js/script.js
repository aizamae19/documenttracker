document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll(".slide");
            let currentSlide = 0;

         function showSlide(index) {
            slides.forEach((slide, i) => {
               if (i === index) {
                  slide.style.display = "block";
               } else {
                  slide.style.display = "none";
               }
            });
         }

         function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
         }

         function prevSlide() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
         }

         slides.forEach((slide, i) => {
            if (i !== 0) {
               slide.style.display = "none";
            }
         });

         const next = document.querySelector('.next');
         const prev = document.querySelector('.previous');
         const addNew = document.querySelector('.add-new'); // Assuming you have an "Add New" button

         next.addEventListener('click', nextSlide);
         prev.addEventListener('click', prevSlide);
});