<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certified Sustainable Reactive Dyes | GOTS & OEKO-TEX</title>
    <!-- meta tag -->
    <meta name="description" content="We are proud to hold GOTS, OEKO-TEX, and ZDHC Level 3 certifications, ensuring sustainable, eco-friendly, and safe reactive dye solutions." />
    <meta property="og:locale" content="en_in" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Certified Sustainable Reactive Dyes | GOTS & OEKO-TEX" />
    <meta property="og:description" content="We are proud to hold GOTS, OEKO-TEX, and ZDHC Level 3 certifications, ensuring sustainable, eco-friendly, and safe reactive dye solutions." />
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
        .certification-section {
            display: flex;
            align-items: center;
            text-align: center;
            height: 100vh;

        }

        .certification-section h2 {
            font-size: 45px;
            font-weight: 500;
            color: #000;
            padding-bottom: 50px;
        }

        .certification-section h3 {
            font-size: 55px;
            font-weight: 500;
            color: #000;
            /* padding-bottom: 30px; */
        }

        .footertext {
            letter-spacing: 1px;
            text-align: left;
            border: 1px solid black;
            margin-top: 60px;
            font-size: 22px;
            padding: 15px;
            border-radius: 10px;
        }

        .symbol h3::after {
            content: '✔ ';
            /* background: url("images/Global_Organic_Textile_Standard_logo.svg" ) no-repeat center;  */
            width: 40px;
            height: 40px;
            position: absolute;
            /* top: 50%; */
        }

        .certification-section h5 {
            font-size: 35px;
            color: #737873;
        }

        @media (min-width: 1700px) {

            .certification-section h2 {
                font-size: 65px;
                font-weight: 500;
                color: #000;
                padding-bottom: 70px;
            }

            .footertext {
                letter-spacing: 1px;
                text-align: left;
                border: 1px solid black;
                margin-top: 70px;
                font-size: 30px;
                padding: 15px;
            }

        }

        @media (max-width: 767px) {

            .certification-section {
                height: auto;
                display: inherit;
                padding: 80px 0 60px;
            }

            .certification-section h2 {
                font-size: 30px !important;
                padding-bottom: 30px;
            }

            .certification-section h3 {
                font-size: 35px;
            }

            .global-img-certi {
                margin: 20px 0;
            }

            .certification-section h5 {
                font-size: 28px;
            }

            .footertext {
                margin-top: 40px;
                font-size: 17px;
            }

        }
    </style>
</head>

<body>
    <main>

        <?php include 'header.php'; ?>

        <section class="certification-section" style="overflow: hidden;">
            <div class="container">
                <div class="heading">
                    <h2 class="head" style="text-align: center;" data-aos="zoom-in">WE'RE PROUD OF OUR<br> REACTIVE DYES</h2>
                </div>
                <div class="row">
                    <div class="col-sm-4" style="margin: 0 auto;" data-aos="fade-right">
                        <h3>Ø ZDHC</h3>
                        <P>Zero Discharge of<br>
                            Harzardous Chemicals</P>
                    </div>
                    <div class="col-sm-4" data-aos="flip-down">
                        <img src="images/certifications-page/Global-Organic.svg" width="150px" height="150px"
                            alt="logo" class="global-img-certi">
                    </div>
                    <div class="col-sm-4 symbol" data-aos="fade-left">
                        <h5>OEKO-TEX<sup>®</sup></h5>
                        <P>INSPIRING CONFIDENCE</P>
                        <h4>ECO PASSPORT</h4>
                        <h6>21.0.64039 HOHENSTEIN HTTI</h6>
                        <P>Tested and verified chemical.<br>
                            www.oeko-tex.com/ecopassport</P>

                    </div>
                </div>
                <p class="footertext" data-aos="zoom-in">We are a star export house and proud to hold GOTS,OEKO-TEX and ZDHC Level 3 certifications, ensuring the highest standards in sustainability,safety,and eco-friendly pratices.</p>
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