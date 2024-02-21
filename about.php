<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/vslogos.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Josefin+Sans:ital@1&family=Jost:wght@100&family=Merienda:wght@400;700&family=Orbitron:wght@500&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Josefin+Sans:ital@1&family=Merienda:wght@400;700&family=Orbitron:wght@500&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>V ARCHITECT</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .text-center {
            text-align: center;
        }

        .btn:hover {
            background-color: rgb(57, 57, 57);
        }

        .fixed {
            height: 50px;
            width: 160px;
            background-color: #14c14b;
            position: fixed;
            bottom: 0;
            right: -137px;
            z-index: 2;
            transition: all .9s ease;
        }

        .fixed:hover {
            transform: translateX(-137px);
        }

        nav {
            z-index: 10;
        }

        .p {
            position: relative;
            top: 30px;
        }

        .hid {
            display: none;
        }

        #ls {
            letter-spacing: 5px;
            color: #0064b6;
        }

        #span1 {
            color: #01D3D0;
            font-weight: 900;
        }

        #a1 {
            font-family: 'Josefin Sans';
            font-weight: 800;
        }

        .bi-person-fill:hover {
            color: #01D3D0;
            cursor: pointer;
        }

        .bi-person-fill {
            transition: all ease-in-out 0.2s;
        }

        #bg-flat {
            background-image: url("images/decor1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .marq {
            width: 20%;
            cursor: pointer;
            padding: 0 30px;
        }

        #marq {
            width: 20px;
        }

        @media screen and (max-width: 576px) {
            #foot {
                font-size: 2.3vw;
                text-align: center;
            }

            .btn {
                width: 100%;
            }

            #over {
                overflow-x: scroll;
                height: 270px;
                display: flex;
                flex-direction: row;
            }

            .hid {
                display: block;
            }

            #ls {
                letter-spacing: 2px;
                color: #0064b6;
            }
        }

        /* underline hovering navbar start */
        .navbar-collapse ul li a {
            position: relative;
            display: flex;
            align-items: center;
            font-size: 14px;
            margin: 5px 8px;
            padding-right: 5px;
        }

        .navbar-collapse ul li a::after {
            content: '';
            width: 0;
            height: 1.5px;
            background-color: black;
            position: absolute;
            bottom: -15px;
            transition: width 0.3s;
        }

        .navbar-collapse ul li a:hover::after,
        .navbar-collapse ul li a.active-link::after {
            width: 100%;
        }

        .nav-item a span {
            padding-right: 5px;
        }

        .lp {
            background-color: #ffffff;
        }

        .navbar {
            background-color: #ffffff;
        }

        .addtocart:hover {
            color: #6b6969;
        }

        .addtocart {
            font-size: smaller;
            color: #ffffff;
        }

        .nav-link {
            color: black;
        }

        #span1 {
            color: #000000;
            font-weight: 900;
            font-family: Arial, Helvetica, sans-serif;
        }

        #changehoverfooter {
            color: #9CA3AF;
            font-size: 23px;
        }

        #changehoverfooter:hover {
            color: #82868d;
        }

        #parachangehover {
            color: #565656;
        }

        #parachangehover:hover {
            color: #000000;
        }

        #specialfont {
            color: #000000;
            font-weight: 900;
            font-family: Arial, Helvetica, sans-serif;
        }

        .t {
            position: relative;
            font-size: 28px;
            font-weight: 600;
            top: 40px;
            font-family: sans-serif;
            color: #404040;
            letter-spacing: -1px;
        }

        /* underline hovering navbar end */
    </style>
</head>

<body class="bg-white" data-bs-theme="dark">
    <div class="fixed rounded-pill d-flex align-items-center justify-content-evenly mb-4 mx-4 shadow d-none d-lg-block d-lg-flex">
        <a href="https://wa.me/919356562998" target="_blank" class="text-decoration-none d-flex align-items-center justify-content-between">
            <i class="bi bi-whatsapp text-white fs-3"></i>
            <a class="text-decoration-none" href="https://wa.me/919356562998" target="_blank">
                <p class="pt-3 fw-bold text-white">Chat With Us</p>
            </a>
        </a>
    </div>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg text-dark position-sticky top-0" style="padding: 12px;">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3" style="align-items: center;
                     display: flex; justify-content:center;">
                        <img src="images/vslogo.png" class="img-fluid ms-3" style="width: 35px;">
                        <a id="a1" class="navbar-brand" href="index.php"><span id="span1">VISHWAKARMA</span></a>
                    </div>
                    <div style="width: fit-content;" class="col-lg-3 collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center">
                            <li class="nav-item">
                                <a class="nav-link text-dark" aria-current="page" href="index.php"><span><i class="fa-solid fa-house"></i></span>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active-link text-dark" href="about.php"><span><i class="fa-solid fa-circle-info"></i></span>About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="services.php"><span><i class="fa-solid fa-screwdriver-wrench"></i></span>Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="product.php"><span><i class="fa-solid fa-cart-shopping"></i></span>Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="contact.php"><span><i class="fa-solid fa-square-phone"></i></span>Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="justify-content-center align-items-center col-lg-3 d-flex">
                        <p class="text-white text-center rounded-pill p-1 px-3" style="background: #000000; margin:0;"><i class="bi bi-telephone-fill"></i> +91 8788276872</p>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- About section -->

    <div class="container-fluid">
        <div class="row justify-content-evenly mt-5">
            <div class="col-lg-5">
                <h1 class="text-center">ABOUT US</h1>
                <p class="text-center">A eurobond is an international bond that is denominated in a currency not native to the country where it is issued. They are also called external bonds.[1] They are usually categorised according to the currency in which they are issued: eurodollar, euroyen, and so on. The name became somewhat misleading with the advent of the euro currency in 1999; eurobonds were created in the 1960s, before the euro existed, and thus the etymology is to "European bonds" rather than "bonds denominated in the Euro currency".</p>
            </div>
            <div class="col-lg-5 shadow py-3 col-md-10 col-sm-10">
                <!-- <img src="images/1.png" class="img-fluid" alt=""> -->
                <iframe class="center" width="100%" height="315" src="https://www.youtube.com/embed/PrrDjlHcLkA?si=1W0k39drlIILlvzW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- accordion -->

    <div class="container mt-5">
        <h1>FAQ Solution?</h1>
        <div class="accordion mt-4" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        This is ACP water proof or not?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, this is acp panel water proof because, using in this heavy materials by <strong>Vishwakarma company.</strong>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        In this website we can buy sheet?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Yes, you can buy acp <code>sheet and aluminium,silicon,crew,ebro-tape etc.</code>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Give me your feedback?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        User feedback, I answer your feedback in comment section box. <br>
                        Carefully read my faqs? <br>
                        Terms and conditions. <br>
                        Because all terms and conditions be apply and read carefully and issues please contact us.
                        <a href="https://wa.me/919356562998" target="_blank"><i class="bi bi-whatsapp mx-1 text-success"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- brands companies -->

    <div class="container-fluid">
        <div class="container">
            <h1 class="text-center mt-2">Branding</h1>
            <div class="row mb-5">
                <div class="col-12">
                    <marquee behavior="scroll">
                        <img src="images/eurobond.png" class="img-fluid marq">
                        <img src="images/aludecor.png" class="img-fluid marq">
                        <img src="images/alstrong.jpeg" class="img-fluid marq">
                        <img src="images/starss.png" class="img-fluid marq">
                        <img src="images/eurobond.png" class="img-fluid marq">
                        <img src="images/aludecor.png" class="img-fluid marq">
                        <img src="images/alstrong.jpeg" class="img-fluid marq">
                        <img src="images/starss.png" class="img-fluid marq">
                    </marquee>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section -->

    <footer class="text-center text-lg-start bg-body-tertiary text-muted" style="margin-top: 100px;">


        <section class="">
            <div class="container text-center text-md-start mt-5 border" style="border-radius: 10px;">

                <div class="row mt-3">

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            <img style="width: 50px;" class="img-fluid" src="images/vslogo.png" alt=""><span id="span1">Vishwakarma</span>
                        </h6>
                        <p>
                            VISHWANIRMAAN PVT LTD this is the 'materail ACP' Providing electronic commerce company
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a style="text-decoration: none;" href="#" class="text-reset">Wooden Series</a>
                        </p>
                        <p>
                            <a style="text-decoration: none;" href="#!" class="text-reset">Silicon</a>
                        </p>
                        <p>
                            <a style="text-decoration: none;" href="#!" class="text-reset">Aluminium</a>
                        </p>
                        <p>
                            <a style="text-decoration: none;" href="#!" class="text-reset">Glass</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                        <h6 class="text-uppercase fw-bold mb-3">
                            Useful links
                        </h6>
                        <p class="m-0">
                            <a class="nav-link active-link text-reset" aria-current="page" href="index.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-house"></i>
                                    </span">
                                    <span>Home</span>
                            </a>
                        </p>
                        <p class="m-0">
                            <a class="nav-link text-reset" href="services.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                    </span">
                                    <span>Services</span>
                            </a>
                        </p>
                        <p class="m-0">
                            <a class="nav-link text-reset" href="product.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    </span">
                                    <span>Product</span>
                            </a>
                        </p>
                        <p class="m-0">
                            <a class="nav-link text-reset" href="contact.php">
                                <span class="d-block">
                                    <i class="fa-solid fa-square-phone"></i>
                                    </span">
                                    <span>Contact</span>
                            </a>
                        </p>
                        <p class="m-0">
                            <a class="nav-link text-reset" href="mycart.php">
                                <span class="d-block">
                                    <i class="bi bi-cart-check-fill text-reset"></i>
                                    </span">
                                    <span>Cart</span>
                            </a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i>Central Naka Rd Indira Nagar, M G M, Aurangabad, Maharashtra</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            suraj.vishwakarma5708@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 91 88884 68357</p>
                        <p><i class="fas fa-print me-3"></i> + 91 93565 62998</p>
                    </div>

                </div>

                <div class="text-center mb-4">
                    <a class="text-reset me-4" href="https://wa.me/919356562998" target="_blank"><i class="bi bi-whatsapp mx-1"></i></a>

                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <!-- <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a> -->
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>

            </div>

        </section>

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(255, 255, 255, 0.85); font-size:small;">
            © 2024 Copyright: Vishwakarma-Architect. All Rights Reserved | Design by Suraj Vishwakarma
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Vishwamaterial.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

</html>