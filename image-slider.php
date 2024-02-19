<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/5ad1518180.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/image-slider.css">

</head>

<body>
    <div class="container">
        <nav class="upper-logo">
            <figure class="logo">
                <img src="images/info logo.png" alt="logo">
            </figure>
            <div class="name">
                <div class="informatics">Informatics</div>
                <div class="college">COLLEGE</div>
            </div>
        </nav>
        <div class="box">
            <h3 class="category-text">Production Number</h3>
            <div class="wrapper-container">
                <div class="wrapper">
                    <div class="slider-container">
                        <div class="slider">
                            <figure class="img-container">
                                <img src="images/dog.jpg" alt="">
                            </figure>
                            <button class="prev" onclick="prevSlide()">
                                <i class="fa-solid fa-angle-left"></i> <!-- Use "fas" instead of "fa-solid" for Font Awesome 6+ -->
                            </button>
                            <button class="next" onclick="nextSlide()">
                                <i class="fa-solid fa-angle-right"></i> <!-- Use "fas" instead of "fa-solid" for Font Awesome 6+ -->
                            </button>
                        </div>
                    </div>
                    <div class="form">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Candidate No.</th>
                                    <th>Candidate Name</th>
                                    <th>Poise and Bearing (30%)</th>
                                    <th>Fitness (30%)</th>
                                    <th>Uniqueness and Style (40%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>John Denver</td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                    <td><input type="number"></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>