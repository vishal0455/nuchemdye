<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovative Textile Dyes | Cellulosic, Printing & Custom Solutions</title>
    <!-- meta tag -->
    <meta name="description" content="Explore NuChem’s advanced dye solutions, from cellulosic dyeing & printing to dischargeable dyes & custom formulations for vibrant, long-lasting textiles." />
    <meta property="og:locale" content="en_in" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Innovative Textile Dyes | Cellulosic, Printing & Custom Solutions" />
    <meta property="og:description" content="Explore NuChem’s advanced dye solutions, from cellulosic dyeing & printing to dischargeable dyes & custom formulations for vibrant, long-lasting textiles." />
    <meta property="og:site_name" content="Nuchem Dye" />
    <meta property="og:image" content="images/favicon.png" />
    <meta property="og:image:width" content="512" />
    <meta property="og:image:height" content="512" />
    <meta property="og:image:type" content="image/png" />
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="icon" href="images/favicon.png" sizes="500*500" />
    <!-- meta tag -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <style>
        .product-section {
            height: 100vh;
        }

        .product-box-img {
            background: url(images/products-page/p-img.webp) no-repeat top;
            background-size: cover;
            height: 100vh;
        }

        .container-fluid {
            padding: 0;
        }

        .product-row {
            width: 100%;
        }

        .product-section a {
            display: block;
        }

        .product-section h2 {
            background: rgba(255, 255, 255, 0.7);
            padding: 20px 40px;
            text-align: center;
            display: inline-block;
            border-radius: 10px;
            font-size: 55px;
            font-weight: 500;

        }

        .product-section .col-product {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .col-product a {
            color: black;
            padding: 15px 60px;
            border: 1px solid black;
            border-radius: 20px;
            margin: 20px 0;
            letter-spacing: 2px;
            text-align: center;
            font-weight: 600;
            font-size: 20px;

        }

        @media (min-width: 1700px) {

            .col-product a {
                font-size: 25px;
                width: 350px;
                text-align: center;
                font-weight: 600;
            }

            .product-section h2 {
                font-size: 50px;
                font-weight: 500;
                text-transform: uppercase;
                padding: 20px 40px;
            }


        }

        @media (max-width: 768px) {
            .product-row {
                width: auto;
            }
            .product-box-img{height: auto; padding: 80px 0;}

            .product-section{height: auto;}
        }
    </style>
</head>

<body>
    <main>

        <?php include 'header.php'; ?>

        <section class="product-section" style="overflow: hidden;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="product-box-img col-product">
                            <h2 data-aos="zoom-in">Product <br>Series</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="col-product">
                            <div>
                                <a href="cellulosic-dyeing-series.php" data-aos="flip-down">CELLULOSIC<br>
                                    DYEING SERIES</a>
                                <a href="cellulosic-printing-series.php" data-aos="flip-down">CELLULOSIC<br>
                                    PRINTING SERIES</a>
                                <a href="dischargeable-dyes-series.php" data-aos="flip-down">DISCHARGEABLE<br>
                                    DYES SERIES</a>
                                <a href="customised-solution.php" data-aos="flip-down">CUSTOMISED<br>
                                    SOLUTIONS FOR<br>
                                    DYEING</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script src="js/myscript.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        })
    </script>
</body>

</html>