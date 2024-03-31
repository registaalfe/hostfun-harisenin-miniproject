<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Image-Slider</title>
    @vite('resources/css/coba.css')

</head>

<body>

    <div class="container">
        <span class="slider" id="slider1"></span>
        <span class="slider" id="slider2"></span>
        <span class="slider" id="slider3"></span>


        <div class="imgContainer">

            <div class="slide_div" id="slide_1">
                <img src="/img/img-slider1.png" alt="" class="img" id="img1">
                <a href="#slider1" class="button" id="button1"></a>
            </div>
            <div class="slide_div" id="slide_2">
                <img src="/img/img-slider2.png" alt="" class="img" id="img2">
                <a href="#slider2" class="button" id="button2"></a>
            </div>
            <div class="slide_div" id="slide_3">
                <img src="/img/img-slider3.png" alt="" class="img" id="img3">
                <a href="#slider3" class="button" id="button3"></a>
            </div>


        </div>

    </div>

</body>

</html>