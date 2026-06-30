    <footer class="pb-0 pt-3 footer-content new-footer">
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-3 col-lg-12 col-md-6 d-flex flex-column lg-mb-30px sm-mb-20px order-md-1 ">
            <a href="<?php echo BASE_URL; ?>" class="footer-logo d-inline-block lg-mb-30px mb-5">
              <img src="<?php echo BASEURL; ?>images/urja/urja-logo-white.png" data-at2x="<?php echo BASEURL; ?>images/urja/urja-logo-white.png" alt="Top Steel Exporters - Bright Bar, Peeled Bar, Round Bar, Honed Tubes, HR Coil and Billets Manufacturers and Suppliers in India" title="Top Steel Exporters - Bright Bar, Peeled Bar, Round Bar, Honed Tubes, HR Coil and Billets Manufacturers and Suppliers in India">
            </a>
            <div class="mt-5">
              <h6>Follow Us</h6>

            </div>
            <div class="urja-footer-effect egeon">
              <div class="urja-footer-buttons">
                <a rel="nofollow" href="https://www.facebook.com/urjasteelsofficial" class="urja-footer-fb" title="Join us on Facebook">
                  <i class="fa-brands fa-facebook"></i>
                </a>

                <a rel="nofollow" href="https://www.instagram.com/urjasteels/" class="urja-footer-insta" title="Join us on Instagram">
                  <i class="fa-brands fa-instagram"></i>
                </a>
                <a rel="nofollow" href="https://www.linkedin.com/company/urjasteels" class="urja-footer-in" title="Join us on LinkedIn">
                  <i class="fa-brands fa-linkedin"></i>
                </a>
              </div>
            </div>

          </div>
          <div class="col-12 col-xl-3 col-lg-4 col-md-6 last-paragraph-no-margin order-lg-2 order-md-3 sm-mb-20px text-white">
            <h6>Explore More</h6>
            <ul>
              <li><a href="<?php echo BASE_URL; ?>" class="">Home</a></li>

              <li><a href="<?php echo BASEURL; ?>about-us" class="">About us</a></li>

              <li><a href="<?php echo BASEURL; ?>our-infrastructure" class="">Infrastructure</a></li>

              <li><a href="<?php echo BASEURL; ?>jobs-and-career" class="">Career</a></li>
              <li><a href="<?php echo BASEURL; ?>blog" class="">Blog</a></li>
			  <li><a href="<?php echo BASEURL; ?>contact-us" class="">Contact us</a></li>
              
            </ul>
          </div>
          <div class="col-12 col-xl-3 col-lg-4 col-md-6 last-paragraph-no-margin order-lg-2 order-md-3 sm-mb-20px">
            <h6>Products</h6>
            <ul>
              <li><a href="<?php echo BASEURL; ?>hot-rolled-coils" class="">HR Coil</a></li>
              <li><a href="<?php echo BASEURL; ?>round-bars-manufacturer-india" class="">Round Bars</a></li>
              <li><a href="<?php echo BASEURL; ?>steel-pipes-and-honed-tubes" class="">Pipes</a></li>
              <li><a href="<?php echo BASEURL; ?>bright-bars-manufacturer-india" class="">Bright Bars</a></li>
              <li><a href="<?php echo BASEURL; ?>steel-billets-manufacturers" class="">Steel Billets</a></li>

            </ul>
          </div>

          <div class="col-12 col-lg-3 col-xl-3 col-lg-4 col-md-6 order-lg-4 order-md-2 md-mb-30px sm-mb-0">
            <h6>Contact us</h6>
            <ul>
              <li><i class="bi bi-location-fill icon-footer">
                  <p style="text-decoration:underline;"> Corporate Office Address</p>
                </i><br>

                <i class="bi  bi-geo-alt-fill icon-footer"></i><a href="https://maps.app.goo.gl/PPP9E7HC6ayZyGPHA" class="">Narain and Company G.T. Road Mandi Gobindgarh, Punjab, India.</a>
              </li>
              <li><i class="bi bi-envelope-fill icon-footer"></i><a href="mailto:urjasteels19@gmail.com" class="">urjasteels19@gmail.com</a></li>
              <li> <i class="bi bi-phone-fill icon-footer"></i><a target="_blank" href="https://wa.me/919700800019" class="">+91
                  9700800019</a></li>

            </ul>

          </div>

        </div>
        <div class="row justify-content-center align-items-center pt-2">
          <div class="col-lg-12 m-auto pt-0 fs-15  text-center text-lg-center last-paragraph-no-margin text-white">
            <p>© 2026 Urja steels Design by <a href="https://www.royalways.com/" target="_blank" class="text-dark-gray fw-500 text-decoration-line-bottom text-white">Royalways</a></p>
          </div>

        </div>
      </div>

    </footer>

    <!-- end footer -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
      <a href="#" class="scroll-top" aria-label="scroll">
        <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
      </a>
    </div>
<script>
  document.addEventListener('click', function (e) {
    var btn = e.target.closest('.navbar-toggler');
    if (!btn) return;
    var nav = document.getElementById('navbarNav');
    if (!nav) return;
 
    // Only act when the menu is OPEN -> force-close it
    if (nav.classList.contains('show')) {
      e.preventDefault();
      e.stopImmediatePropagation(); // stop Bootstrap's own toggle from re-opening
      if (window.bootstrap && bootstrap.Collapse) {
        var c = bootstrap.Collapse.getInstance(nav) || new bootstrap.Collapse(nav, { toggle: false });
        c.hide();
      } else {
        nav.classList.remove('show'); // fallback if bootstrap JS isn't on window
      }
      btn.setAttribute('aria-expanded', 'false');
    }
    // when CLOSED: do nothing -> native data-bs-toggle opens it (theme overlay fires)
  }, true); // capture phase, runs before Bootstrap
</script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>js/vendors.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/js/all.min.js" integrity="sha512-6BTOlkauINO65nLhXhthZMtepgJSghyimIalb+crKRPhvhmsCdnIuGcVbR5/aQY2A+260iC1OPy1oCdB6pSSwQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    </body>

    </html>