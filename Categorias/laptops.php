<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Laptops</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/Slider.css" />
    <style>
        .navbar-custom {
            background-color: #FF0000;
            /* Rojo puro */
        }
    </style>
</head>

<body>

    <body class="bg-dark text-black"></body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/index.php">L3X - TECNOSHOP</a>
            <!-- Enlace de Inicio con subrayado -->
            <a class="navbar-brand ms-3 underline" href="/index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <style>
        .underline {
            text-decoration: underline;
        }
    </style>
    <!-- Header-->
    <header class="main swiper mySwiper">
        <div class="wrapper swiper-wrapper">
            <div class="slide swiper-slide">
                <img src="/Categorias/Slider1.jpg" alt="" class="image" />
                <div class="image-data">
                    <span class="text">Enterate de Algo Nuevo</span>
                    <h2>
                        ¿Te Suena Software de Datos? <br />
                        Si es asi Tenemos una Breve Reseña para ti!
                    </h2>
                    <a href="https://sistemase-commerce.blogspot.com/2024/06/software-de-base-de-datos.html" class="button">Saber Más</a>
                </div>
            </div>
            <div class="slide swiper-slide">
                <img src="/Categorias/Slider2.webp" alt="" class="image" />
                <div class="image-data">
                    <span class="text">Enterate de Algo Nuevo</span>
                    <h2>
                        Pagos en la Web <br />
                        ¿Como Funciona el Pago Electronico?
                    </h2>
                    <a href="https://sistemase-commerce.blogspot.com/p/introduccion-al-pago-electronico.html" class="button">Saber Más</a>
                </div>
            </div>
            <div class="slide swiper-slide">
                <img src="/Categorias/Slider3.jpg" alt="" class="image" />
                <div class="image-data">
                    <span class="text">Enterate de Algo Nuevo</span>
                    <h2>
                        ¿Quieres conocer sobre Nuestro Modelo de Negocio? <br />
                        En nuestro Blog hay una explicación detallada!
                    </h2>
                    <a href="https://sistemase-commerce.blogspot.com/2024/06/modelos-de-negocios.html" class="button">Saber Mas</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
    </header>

    <!-- Section title with red background -->
    <div class="text-center py-3" style="background-color: #0f0a0a;">
        <h2 style="color: #ffffff; font-family: 'Roboto Condensed', sans-serif;">Categoria: Laptops</h2>
    </div>


    <!-- Section -->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-3"> <!-- Ajuste del margen superior para acercar el título a las secciones -->
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="/img/victus1.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Laptop Victus</h5>
                                <!-- Product price-->
                                $980.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/productos/laptopvictus.php">Mas Detalles</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/productos/img/macbook1.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">APPLE MACBOOK AIR </h5>

                                $949.95
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/productos/laptopmacbook.php">Mas Detalles</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/productos/img/acer1.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Laptop Acer</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$629.95</span>
                                $490.95
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/productos/laptopacer.php">Mas Detalles</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="/productos/img/laptopdell1.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Laptop Dell</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $1999.99

                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/productos/laptopdell.php">Mas Detalles</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/productos/img/asus2.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Asus TUF</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$989.98</span>
                                $849.98
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/productos/laptopasus.php">Mas Detalles</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="/productos/img/ideapad4.png" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">IdeaPad Gaming3</h5>
                                <!-- Product price-->
                                $1,390.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/productos/laptopideapadg3.php">Mas Detalles</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="/productos/img/lenovo1.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Laptop Lenovo</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$995.96</span>
                                $899.99
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/productos/laptoplenovo.php">Mas Detalles</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="/productos/img/hp1.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Laptop HP</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $429.95

                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="/productos/laptophp.php">Mas Detalles</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-light">
        <div class="container">
            <p class="m-0 text-center text-dark">Copyright &copy; L3x TecnoShop</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>