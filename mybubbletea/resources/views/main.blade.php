@extends('layouts.default')
@section('main')
<script src="https://kit.fontawesome.com/db2bf29261.js" crossorigin="anonymous"></script>
<body style="background-color: beige">
  <div class="slide-container">
    <div class="divrad" id="rad1"> </div>
    <div class="divrad" id="rad2"> </div>
    <div class="divrad" id="rad3"> </div>
    <div class="divrad" id="rad4"> </div>
  <div class="custom-slider fade">
            <div class="slide-text">
                    <h1 class="title">Bubble Tea </h1>
                    <p class="text">Bubble Tea, also known as "boba tea" or "pearl milk tea",
                        is a drink of Taiwanese origin that has gained popularity around the world.
                        This unique drink is characterized by the presence of black tapioca pearls
                        at the bottom of the glass, which give Bubble Tea its distinctive appearance.</p>
                    <div class="slide-image" style="background-image: url('images/bubble_tea3.jpg'); background-size: cover; background-repeat: no-repeat;">
                    </div>
            </div>
    </div>

  <div class="custom-slider fade">
            <div class="slide-text">
                    <h1 class="title">Main Ingredients:</h1>
                    <h2 class="h2">Tea</h2>
                    <p class="text">Tea is the base of Bubble Tea. 
                        We often use black tea, green tea, oolong tea, or even jasmine tea. 
                        Some establishments offer caffeine-free versions using fruit infusions.</p>
                    <div class="slide-image" style="background-image: url('images/tea-1132529_1920.jpg'); background-size: cover; background-repeat: no-repeat;">
                    </div>
            </div>
    </div>

    <div class="custom-slider fade">
            <div class="slide-text">
                    <h1 class="title">Main Ingredients:</h1>
                    <h2 class="h2">Milk</h2>
                    <p class="text">Milk is often added to give Bubble Tea a creamy texture. 
                        You can use regular milk, sweetened condensed milk, or alternatives like soy milk.</p>
                        <div class="slide-image" style="background-image: url('images/glass-1379822_1920.jpg'); background-size: cover; background-repeat: no-repeat;">
                    </div>
            </div>
    </div>

    <div class="custom-slider fade">
            <div class="slide-text">
                    <h1 class="title">Main Ingredients:</h1>
                    <h2 class="h2">Flavor Syrup: </h2>
                    <p class="text">Flavored syrups, such as taro, strawberry, 
                        mango, or lychee syrup, are added to give a sweet flavor to the drink.</p>
                        <div class="slide-image" style="background-image: url('images/coffee-5173388_1920.jpg'); background-size: cover; background-repeat: no-repeat;">
                    </div>
            </div>
    </div>

    <div class="custom-slider fade">
            <div class="slide-text">
                    <h1 class="title">Main Ingredients:</h1>
                    <h2 class="h2">Tapioca Pearls:</h2>
                    <p class="text">Tapioca pearls are the iconic ingredient of Bubble Tea. 
                        These small black balls, gelatinous and soft, are added to the bottom of the glass.</p>
                        <div class="slide-image" style="background-image: url('images/tapioca-3162278_1920.jpg'); background-size: cover; background-repeat: no-repeat;">
                    </div>
            </div>
    </div>

    <div class="custom-slider fade">
            <div class="slide-text">
                    <h1 class="title">Main Ingredients:</h1>
                    <h2 class="h2">Ice Cubes:</h2>
                    <p class="text">Bubble Tea is often served cold, 
                        so ice cubes are usually added to cool the drink.</p>
                        <div class="slide-image" style="background-image: url('images/ice-6215207_1920.jpg'); background-size: cover; background-repeat: no-repeat;">
                    </div>
            </div>
    </div>
    
  </div>
  <div class="slide-dot">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>
  <script>
       var slideIndex = 1;
        showSlides(slideIndex);

        var autoSlideInterval = setInterval(function() {
                 plusSlides(1);
        }, 5000);

        function plusSlides(n) {
           showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("custom-slider");
            var dots = document.getElementsByClassName("dot");

            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(function() {
                plusSlides(1);
            }, 5000);
        
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }

            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
        
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
        
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        function moveRandomlyWithinPerimeter(element, perimeter) {
            var x = Math.random() * perimeter;
            var y = Math.random() * perimeter;

            element.style.transform = "translate(" + x + "px, " + y + "px)";
        }

        var divs = document.querySelectorAll('.divrad');

        divs.forEach(function(div) {
            moveRandomlyWithinPerimeter(div, 300);
        });

        setInterval(function() {
            divs.forEach(function(div) {
                moveRandomlyWithinPerimeter(div, 300);
                moveRandomlyWithinPerimeter(div, 300);
            });
        }, 5000);
    </script>
</body>
@endsection