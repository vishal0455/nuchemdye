<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Nuchem Dye - vicky</title>
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
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <main>

        <?php include 'header.php'; ?>
        <div class="main-banner">
            <div class="container">
                <div class="content-box">
                    <h1 data-aos="fade-right">Innovating
                        <br>Reactive Dyes for a <br>S<span class="typeJsText" data-typetext="ustainable Future"></span>
                    </h1>
                </div>
                <div class="btn-icon-box">
                    <a class="icon" href="#">
                        <img src="images/linkedin.svg" alt="LinkedIn" style="width: 20px;">
                    </a>
                    <a class="icon" href="#">
                        <img src="images/facebook-svgrepo-com.svg" alt="Facebook" style="width: 20px;">
                    </a>
                    <a href="#" class="contact-button">CONTACT US</a>
                </div>
            </div>
        </div>
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
    <script>
        // type js plugin
        let typeJsText = document.querySelector(".typeJsText");
        let textArray = typeJsText.dataset.typetext.split("");
        let counter = -1;

        typeJsText.innerHTML = "";

        function typeJs() {
            if (counter < typeJsText.dataset.typetext.length) {
                counter++;
                typeJsText.innerHTML += typeJsText.dataset.typetext.charAt(counter);
                textArray = typeJsText.dataset.typetext.split("");
            } else {
                textArray.pop();
                typeJsText.innerHTML = textArray.join("");
                if (textArray.length == 0) {
                    counter = -1;
                }
            }
        }

        setInterval(() => {
            typeJs();
        }, 120);

    </script>
</body>

</html>