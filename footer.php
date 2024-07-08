<!-- NEWSLETTER -->
<div id="newsletter" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Suscríbete a <strong>L3X TECNOSHOP</strong></p>
                    <!-- Formulario de suscripción -->
                    <form action="subscribe.php" method="POST">
                        <input class="input" type="email" name="email" placeholder="Ingresa Tu Correo" required />
                        <button class="newsletter-btn" type="submit">
                            <i class="fa fa-envelope"></i> Suscribirse
                        </button>
                    </form>
                    <!-- Manejo del mensaje de confirmación o error -->
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
                        // Procesar la suscripción aquí
                        $email = $_POST['email'];
                        
                        // Incluir lógica para enviar el correo en subscribe.php
                        // Asumiendo que subscribe.php maneja el envío del correo y devuelve un mensaje de éxito o error
                        $resultado_envio = include('subscribe.php');
                        
                        if ($resultado_envio === true) {
                            // Envío exitoso
                            echo '<div class="alert alert-success" role="alert">Gracias por suscribirte a L3X TECNOSHOP. Revisa tu correo electrónico para confirmar la suscripción.</div>';
                        } else {
                            // Error en el envío
                            echo '<div class="alert alert-danger" role="alert">Hubo un problema al intentar suscribirte. Por favor, inténtalo de nuevo más tarde.</div>';
                        }
                    }
                    ?>
                    <!-- Redes sociales -->
                    <ul class="newsletter-follow">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /NEWSLETTER -->

<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Sobre Nosotros</h3>
                        <p>
                            Tienda Online Panameña Dedicada a la Venta de los Mejores y Mas Novedosos Productos de Tecnologia.
                        </p>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>Ciudad de Panamá</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>275-7687</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>L3x-Tienda@outlook.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Categorias</h3>
                        <ul class="footer-links">
                            <li><a href="#">Destacados</a></li>
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Smartphones</a></li>
                            <li><a href="#">Camaras</a></li>
                            <li><a href="#">Accesorios</a></li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Información</h3>
                        <ul class="footer-links">
                            <li><a href="#">Sobre Nosotros</a></li>
                            <li><a href="#">Contactanos</a></li>
                            <li><a href="#">Ordenes y Devoluciones</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Servicios</h3>
                        <ul class="footer-links">
                            <li><a href="#">Mi Cuenta</a></li>
                            <li><a href="#">Ver Carrito</a></li>
                            <li><a href="#">Hacer Orden</a></li>
                            <li><a href="#">Ayuda</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-payments">
                        <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                    </ul>
                    <span class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        Todos los Derechos Reservados | L3X
                        <i class="fa fa-heart-o" aria-hidden="true"></i> by
                        <a href="https://colorlib.com" target="_blank">TECNOSHOP</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </span>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->



