    <!-- Footer -->
    <section class="footer text-light hidden">
        <div class="container">
            <div class="row" data-aos="fade-right">
                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <h4 class="">Mirko</h4>
                    </div>
                    <p class="py-3 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi repudiandae explicabo esse maxime, impedit rem voluptatibus amet error quas.</p>
                    <div class="d-flex">
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-facebook-f fa-2x py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-twitter fa-2x py-2"></i>
                            </a>
                        </div>
                        <div class="me-3">
                            <a href="#your-link">
                                <i class="fab fa-instagram fa-2x py-2"></i>
                            </a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <h4 class="py-2">Quick Links</h4>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#about"><p class="ms-3">About</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#"><p class="ms-3">Services</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#"><p class="ms-3">Plans</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#"><p class="ms-3">Contact</p></a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div>
                        <h4 class="py-2">Useful Links</h4>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="privacy.html"><p class="ms-3">Privacy</p></a>
                            
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="terms.html"><p class="ms-3">Terms</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link"><p class="ms-3">Disclaimer</p></a>
                        </div>
                        <div class="d-flex align-items-center py-2">
                            <i class="fas fa-caret-right"></i>
                            <a href="#your-link"><p class="ms-3">FAQ</p></a>
                        </div>
                    </div>
                </div> <!-- end of col -->

                <div class="col-lg-3 py-4 py-md-5">
                    <div class="d-flex align-items-center">
                        <h4>Newsletter</h4>
                    </div>
                    <p class="py-3 para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, ab.</p>
                    <div class="d-flex align-items-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control p-2" placeholder="Enter Email" aria-label="Recipient's email">
                            <button class="btn-secondary text-light"><i class="fas fa-envelope fa-lg"></i></button>       
                        </div>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of footer -->


    <!-- Bottom -->
    <div class="bottom py-2 text-light" >
        <div class="container d-flex justify-content-between">
            <div class="hidden">
                <p>Copyright © Your name</p><br>
            </div>
            <div class="hidden">
                <i class="fab fa-cc-visa fa-lg p-1"></i>
                <i class="fab fa-cc-mastercard fa-lg p-1"></i>
                <i class="fab fa-cc-paypal fa-lg p-1"></i>
                <i class="fab fa-cc-amazon-pay fa-lg p-1"></i>
            </div>
        </div> <!-- end of container -->
    </div> <!-- end of bottom -->
 
    
    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="assets/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    
    <!-- Scripts -->
    <script src="./js/bootstrap.min.js"></script><!-- Bootstrap framework -->
    <script src="./js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="./js/swiper.min.js"></script><!-- Swiper for image and text sliders -->
    <script src="./js/aos.js"></script><!-- AOS on Animation Scroll -->
    <script src="./js/script.js"></script>  <!-- Custom scripts -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $( document ).ready(function() {
            $('.add_btn').on( "click", function() {
                $('.first-input-item').clone(true).removeClass('first-input-item').removeClass('hidden').addClass('cloned').append('<button type="button" class="closeX btn-danger">Pašalinti</button>').appendTo( ".all-inputs" );
                if($('.paslaugos_prekes_input').length >= 1) {
                    $('.remove_btn').removeClass('hidden');
                }
            });
            $(".all-inputs").on("click", ".closeX", function(e) {
                e.stopPropagation(); // this stops the click on the holder
                $(this).closest("div.cloned").remove();
            });
            $('select.tipas-select').change(function() {
                if($('select.tipas-select option:selected').attr('value') == "true") {
                    $('.pvm-pasirinkimas').removeClass('hidden');
                    $('.pvm-notice').removeClass('hidden');
                } else if($('select.tipas-select option:selected').attr('value') == "false") {
                    $('.pvm-pasirinkimas').addClass('hidden');
                    $('.pvm-notice').addClass('hidden');
                }
            });
            $('.paslaugos_prekes_input .kiekis-input, .paslaugos_prekes_input .kaina-input').on("input", function() {
                var kaina = $(this).closest('.paslaugos_prekes_input').find('.kaina-input').val();
                var kiekis = $(this).closest('.paslaugos_prekes_input').find('.kiekis-input').val();
                if(kaina && kiekis) {
                    kaina = kaina.replace(/,/g, '.');
                    var viso = kiekis * kaina;

                    if($('select.tipas-select option:selected').attr('value') == "true") {
                        var pvm = $('.pvm-pasirinkimas select option:selected').attr('value');
                        var skaiciavimas = kiekis * kaina;
                        skaiciavimas = skaiciavimas / 100;
                        skaiciavimas = skaiciavimas * pvm;
                        var viso = viso + skaiciavimas;
                    }

                    $(this).closest('.paslaugos_prekes_input').find('.viso-input').val(viso.toFixed(2));
                }
            });
            ////////
        });
    </script>

</body>
</html>