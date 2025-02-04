<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CELLULOSiC DYEING SERIES - Nuchem Dye</title>
    <!-- meta tag -->
    <meta name="description" content="Welcome to Nuchem Dye" />
    <meta property="og:locale" content="en_in" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Home - Nuchem Dye" />
    <meta property="og:description" content="Welcome to Nuchem Dye" />
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
    <style>
        /* .top-header{position: inherit;} */
        .certification-section {
            display: flex;
            align-items: center;
            height: 100vh;
        }

        .certificate-col {
            margin: 60px;
            padding: 20px;
        }

        .certification-section h1 {
            font-size: 68px;
            font-weight: 500;
        }

        .certification-section .p1 {
            font-size: 19px;
            font-weight: 500;
        }

        .certification-section,
        p {
            font-size: 12px;
        }

        .footertext {
            display: flex;
            text-align: right;
            margin-left: 101px;
            padding: 5px;
            letter-spacing: 1px;
            text-align: left;
            border: 1px solid black;
            width: 86%;
            font-size: 28px;
            /* font-weight: 500; */

        }

        .certification-section h5 {
            text-align: center;
            font-size: 28px;
            color: gray;
        }

        .certification-section .inspring {
            letter-spacing: 2px;
            color: gray;
        }

        .certification-section .eco::after {
            content: '&';
            display: inline-block;
            width: 15px;
            height: 15px;
            margin-left: 10px;
        }

    </style>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>

<body>
    <main>

       

        <section class="certification-section">
            <div class="container text-center">
                <!-- <h4>MANUFACTURING FACILITIES</h4> -->
                <h1 class="head" style="text-align: center;">WE'RE PROUD OF OUR<br> REACTIVE DYES</h1>
                <div class="row certificate-col">
                    <div class="col-sm-4 ">
                        <h1>ZDHC</h1>
                        <P class="p1">Zero Discharge of<br>
                            Harzardous Chemicals</P>
                    </div>

                    <div class="col-sm-4">
                        <img src="/images/Global_Organic_Textile_Standard_logo.svg" width="140px" height="140px"
                            alt="logo">
                    </div>

                    <div class="col-sm-4">
                        <h5>OEKO-TEX ®</h5>
                        <P class="inspring">INSPIRING CONFIDENCE</P>
                        <h3 class="eco" style="color: #508296;">ECO PASSPORT</h3>
                        <h6>21.0.64039 HOHENSTEIN HTTI</h6>
                        <P>Tested and verified chemical.<br>
                            www.oeko-tex.com/ecopassport</P>
                    </div>


                </div>

                <div>
                    <p class="footertext">We are a star export house and proud to hold GOTS,OEKO-TEX and ZDHC Level
                        3<br>
                        certifications, ensuring the highest standards in sustainability,safety,and eco-<br>
                        friendly pratices.</p>

                </div>
            </div>


        </section>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/myscript.js"></script>
    <script>
        AOS.init({
            duration: 1200,
        })
    </script>
    <script>
        const swiper = new Swiper(".mySwiper", {
            loop: false,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>