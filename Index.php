<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/css.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
            <?php require_once 'header.php'; ?>
            <main>
            <!-- Slideshow container -->
        <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
        <div class="numbertext">1 / 5</div>
        <img src="img/gebouw/GB1.jpg" style="width:100%">
        <div class="text">Voorkant + parkeerplekken</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <img src="img/gebouw/GB2.jpg" style="width:100%">
        <div class="text">Hoofdingang (1)</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="img/gebouw/GB3.jpg" style="width:100%">
        <div class="text">Hoofdingang (2)</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="img/gebouw/GB4.jpg" style="width:100%">
        <div class="text">Inkijk aula</div>
        </div>

        <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="img/gebouw/GB5.jpg" style="width:100%">
        <div class="text">entre fietsers/voetgangers</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        </div>
        <script>
            let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        }
        </script>

            <h1>Indeling blokken</h1>
            <div class="IndelingImg"><img src="img/blokOvergang.jpg"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non blanditiis tempora consectetur, laboriosam nemo eos et voluptatem minima hic commodi enim recusandae ea quisquam. Impedit numquam dolor assumenda illo tenetur.</p>
            <h1>Versnellen</h1>
            <h1>Vakken</h1>
            <h1>Mijn rooster van het eerste jaar</h1>
            </main>
            <?php require_once 'footer.php'; ?>
    <div>
</body>
</html>