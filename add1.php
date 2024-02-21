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
    <title>V ARCHITECT-Online-Shopping</title>
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
            background-color: #229d04;
            position: fixed;
            bottom: 0;
            right: 0;
            z-index: 1;
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
        .bg-light {
            transition: all ease-in-out 2s;
        }
        .foothover:hover {
            transform: scale(1.1);
            transition: all ease-in-out 0.2s;
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
    </style>
</head>

<body class="bg-light" data-bs-theme="dark">
    <div class="fixed rounded-pill d-flex align-items-center justify-content-evenly mb-4 mx-4 shadow d-none d-lg-block d-lg-flex">
        <a href="https://wa.me/919356562998" target="_blank" class="text-decoration-none d-flex align-items-center justify-content-between">
            <i class="bi bi-whatsapp text-white fs-3"></i>
            <a class="text-decoration-none" href="https://wa.me/919356562998" target="_blank">
                <p class="pt-3 fw-bold text-white">Chat With Us</p>
            </a>
        </a>
    </div>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark position-sticky top-0 shadow">
        <div class="container-fluid">
            <img src="images/vslogo.png" class="img-fluid ms-3" style="width: 35px;">
            <a id="a1" class="navbar-brand" href="index.php">VISHWA<span id="span1"> KARMA</span></a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Product Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class="justify-content-between align-items-center" style="position: relative; top: 8px;">
                    <p class="text-dark text-center rounded-pill p-1 px-3" style="background: #01D3D0;"><i class="bi bi-telephone-fill"></i> +91 8788276872</p>
                </div>
            </div>
        </div>
    </nav>

    <!-- Swiper -->

    <div class="container-fluid">
        <div class="row">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/2.png" class="w-100 d-block crop" />
                    </div>
                    <div class="swiper-slide" style="height: 100px;">
                        <img src="images/1.png" class="w-100 d-block crop" />
                    </div>
                    <div class="swiper-slide" style="height: 100px;">
                        <img src="images/6.png" class="w-100 d-block crop" />
                    </div>
                    <div class="swiper-slide" style="height: 100px;">
                        <img src="images/5.png" class="w-100 d-block crop" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Categories -->

    <div class="container-fluid">
        <div class="container">
            <h1 class="text-center mt-5">Series of ACP Designs</h1>
            <p class="text-center" id="ls">ALUMINIUM COMPOSITE PANEL</p> <br>
            <p class="text-center">Whatever type of ACP sheet you want, you will get it here according to your mind,
                please contact here. <br> Whatever is the material of aluminum and whatever is its measurement, according to
                each
                and every measurement, you will
                get ACP sheets here.
            </p>
        </div>
        <div class="container">
            <h3 class="p">Wooden Series</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/wood1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Burn Walnut</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/wood2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Ebony</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/wood3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Palisandro Brown</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/wood4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">California Walnut</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">American Walnut</h5>
                </div>
                <div class="card bg-light border-0 foothover hid" style="width: 190px;">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>

            <h3 class="p">Authentic Texture</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/auth1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Slate Stone Black</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/auth2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Glistening Snow</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/auth3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Terracotta Orange Brown</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/auth4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Beige Grey</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/auth5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Dark Oxide</h5>
                </div>
                <div class="card bg-light border-0 foothover hid" style="width: 190px;">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>

            <h3 class="p">Solid Series</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/solid1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Lake Blue</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/solid2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Red</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/solid3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Yellow</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/solid4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Tomato Red</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/solid5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Traffic Yellow</h5>
                </div>
                <div class="card bg-light border-0 foothover hid" style="width: 190px;">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>

            <h3 class="p">Metallic Series</h3>
            <div class="row justify-content-evenly mt-5" id="over">
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/met1.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Spotted Concrete</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/met2.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Carbon Zoom</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/met3.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Titanium Brush</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/met4.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Gold Brush</h5>
                </div>
                <div class="card bg-light border-0 foothover" style="width: 190px;">
                    <img src="images/met5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Elox Umber Brush</h5>
                </div>
                <div class="card bg-light border-0 foothover hid" style="width: 190px;">
                    <img src="images/wood5.webp" class="card img-fluid mb-3" style="height: 231px;">
                    <h5 class="card-title text-center">Wooden</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section -->

    <div class="container-fluid mt-5 bg-dark">
        <div class="row d-flex justify-content-evenly text-md-center text-white py-3">
            <div class="col-lg-3 mb-3">
                <h4>About Us</h4>
                <p>You can find many designs here and you can find different types of buildings designs.</p>
                <a href="https://wa.me/919356562998" target="_blank"><i class="bi bi-whatsapp mx-1 text-white"></i></a>
                <i class="bi bi-facebook mx-1"></i>
                <i class="bi bi-twitter-x mx-1"></i>
                <i class="bi bi-envelope mx-1"></i>
            </div>
            <div class="col-lg-3 mb-3">
                <h4>Usefull links</h4>
                <p>Home</p>
                <p>About</p>
                <p>Services</p>
                <p></p>
                <p>Contacts</p>
            </div>
            <div class="col-lg-3">
                <h4>Contacts</h4>
                <p>Maharashtra, Aurangabad-431001 Central Naka - MGM road</p>
                <p>+91 9356562998</p>
                <p>+91 8888468357</p>
            </div>
            <div class="row">
                <div class="col">
                    <p id="foot">© 2023 Vishwakarma-Architect. All Rights Reserved | Design by Suraj Vishwakarma</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>
</html>