<?php include 'include/header.php'; ?>
<style>
  /* ================================
   URJA PREMIUM CONTACT SECTION
================================ */
  .ne-urja-contact {
    padding: 120px 0;
    background: #0f172a;
    position: relative;
    color: #fff;
    overflow: hidden;
  }

  /* Title */
  .ne-contact-title {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 40px;
  }

  /* Contact Box */
  .ne-contact-box {
    display: flex;
    gap: 20px;
    align-items: flex-start;
    margin-bottom: 25px;
    padding: 20px;
    border-radius: 14px;
    background: rgba(255, 255, 255, 0.04);
    backdrop-filter: blur(12px);
    transition: 0.4s;
    border: 1px solid rgba(255, 255, 255, 0.05);
  }

  .ne-contact-box:hover {
    transform: translateY(-6px);
    background: rgba(255, 255, 255, 0.08);
  }

  /* Icon */
  .ne-icon {
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: linear-gradient(135deg, #ff6a00, #ff3c3c);
    font-size: 18px;
    flex-shrink: 0;
  }

  /* Form Card */
  .ne-contact-form {
    padding: 45px;
    border-radius: 18px;
    background: rgba(255, 255, 255, 0.06);
    backdrop-filter: blur(20px);
    box-shadow: 0 20px 60px rgba(0, 0, 0, .45);
    border: 1px solid rgba(255, 255, 255, 0.08);
  }

  .ne-contact-form h3 {
    font-weight: 600;
    margin-bottom: 25px;
  }

  /* Inputs */
  .ne-contact-form .form-control {
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #fff;
    padding: 12px 15px;
  }

  .ne-contact-form .form-control::placeholder {
    color: #bbb;
  }

  .ne-contact-form .form-control:focus {
    border-color: #ff6a00;
    box-shadow: none;
  }

  /* Button */
  .ne-btn {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background: linear-gradient(135deg, #ff6a00, #ff3c3c);
    color: #fff;
    font-weight: 600;
    transition: 0.3s;
  }

  .ne-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, .4);
  }

  /* ================================
   ANIMATED BACKGROUND SHAPES
================================ */
  .shape {
    position: absolute;
    border-radius: 50%;
    filter: blur(90px);
    opacity: .5;
    animation: float 10s infinite alternate;
  }

  .shape-1 {
    width: 320px;
    height: 320px;
    background: #ff6a00;
    top: -100px;
    left: -120px;
  }

  .shape-2 {
    width: 260px;
    height: 260px;
    background: #ff3c3c;
    bottom: -100px;
    right: -120px;
    animation-delay: 2s;
  }

  .shape-3 {
    width: 200px;
    height: 200px;
    background: #ff9a00;
    top: 45%;
    left: 40%;
    animation-delay: 4s;
  }

  @keyframes float {
    from {
      transform: translateY(0px);
    }

    to {
      transform: translateY(-50px);
    }
  }

  /* Responsive */
  @media(max-width:991px) {
    .ne-urja-contact {
      padding: 80px 0;
    }

    .ne-contact-form {
      margin-top: 40px;
    }
  }

  .urja-contact-form select {
    border-radius: 0;
    margin-bottom: 15px;
    border: 1px solid #ddd;
  }
</style>

<!-- start page title -->
<section class="page-title-separate-breadcrumbs  contact-banner ipad-top-space-margin">
  <div class="container position-relative">
    <div class="row justify-content-start align-items-lg-end extra-very-small-screen">
      <div class="col-lg-6 position-relative page-title-extra-large md-mb-30px sm-mb-20px z-index-9">
        <h1 class="text-white fw-600 ls-minus-4px mb-0 alt-font highlight-separator-small direction-ltr"><span class="highlight-separator mb-0 pb-0" data-shadow-animation="true" data-animation-delay="500">Contact Us<span></span></span></h1>
      </div>
    </div>
  </div>
  <?php include 'include/breadcrumb.php'; ?>
</section>

<section class="urja-contact">
  <div class="container">
    <div class="urja-contact-box position-relative">

      <h2>Get in Touch for Reliable Steel Solutions</h2>
      <div class="row">
        <div class="col-lg-6">
          <div class="icon-with-text-style-01 mb-5">
            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
              <div class="feature-box-icon me-0 ">
                <div class="urja-contact-icon">
                  <i class="fa-solid fa-location-dot  contact-icon"></i>
                </div>
              </div>
              <div class="feature-box-content last-paragraph-no-margin">
                <span class="d-block text-white fw-600 fs-18 ls-minus-05px mb-5px">Corporate Office
                  Address</span>
                <p class="w-100 text-white">Narain and Company G.T. Road Mandi Gobindgarh, Punjab, India.</p>
              </div>
            </div>
          </div>
          <div class="icon-with-text-style-01 mb-5 ">
            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
              <div class="feature-box-icon me-0">
                <div class="urja-contact-icon">
                  <i class="fa-solid fa-location-dot  contact-icon"></i>
                </div>
              </div>
              <div class="feature-box-content last-paragraph-no-margin">
                <span class="d-block text-white fw-600 fs-18 ls-minus-05px mb-5px">Manufacturing Plant
                  Address</span>
                <p class="w-100 text-white">RP Steel Tubes , Peer Gaju Shah Road , Badinpur Khanna 141401, Punjab, India.
                </p>
              </div>
            </div>
          </div>
          <div class="icon-with-text-style-01 mb-5">
            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
              <div class="feature-box-icon me-0">
                <div class="urja-contact-icon">
                  <i class="fa-solid fa-mobile-button  contact-icon"></i>
                </div>
              </div>
              <div class="feature-box-content">
                <span class="d-block text-white fw-600 fs-18 ls-minus-05px mb-5px">Call Us</span>
                <div class="w-100 d-block">
                  <span class="d-block"><a class="text-white" target="_blank" href="https://wa.me/919700800019">+91 97008
                      00019</a></span>
                  <span class="d-block"><a class="text-white" target="_blank" href="https://wa.me/917528000019">+91 75280
                      00019</a></span>
                </div>
              </div>
            </div>
          </div>
          <div class="icon-with-text-style-01 mb-5 pb-5">
            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
              <div class="feature-box-icon me-0">
                <div class="urja-contact-icon">
                  <i class="fa-solid fa-envelope  contact-icon"></i>
                </div>
              </div>
              <div class="feature-box-content">
                <span class="d-block text-white fw-600 fs-18 ls-minus-05px mb-5px">Email Us</span>
                <div class="w-100 d-block text-white">
                  <a class="text-white" href="mailto:urjasteels19@gmail.com">urjasteels19@gmail.com</a><br />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <form class="urja-contact-form" id="contact-form">

            <input type="text" name="first_name" class="form-control" placeholder="First Name*">

            <input type="text" name="last_name" class="form-control" placeholder="Last Name">

            <input type="email" name="email" class="form-control" placeholder="E-mail*">

            <input type="number" name="mobile" id="mobile_number" class="form-control" placeholder="Mobile*">

            <input type="number" name="whatsapp_mobile" id="whatsapp_mobile_number" class="form-control" placeholder="WhatsApp Number*">
            <input type="checkbox" id="same_as_mobile" style="width:100px" placeholder="WhatsApp Number*"><span style="color:#fff">Same as Mobile</span>

            <input type="text" name="company" class="form-control" placeholder="Company Name">

            <input type="text" name="city" class="form-control" placeholder="City">
            <input type="text" name="state" class="form-control" placeholder="State">

            <?php
						$countries = [
							"Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria",
							"Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan",
							"Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia",
							"Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo (Congo-Brazzaville)", "Costa Rica",
							"Croatia", "Cuba", "Cyprus", "Czechia (Czech Republic)", "Democratic Republic of the Congo", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador",
							"Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland", "France",
							"Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau",
							"Guyana", "Haiti", "Holy See", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq",
							"Ireland", "Israel", "Italy", "Ivory Coast", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati",
							"Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania",
							"Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius",
							"Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar (formerly Burma)", "Namibia",
							"Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Korea", "North Macedonia", "Norway",
							"Oman", "Pakistan", "Palau", "Palestine State", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland",
							"Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino",
							"Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands",
							"Somalia", "South Africa", "South Korea", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland",
							"Syria", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
							"Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States of America", "Uruguay", "Uzbekistan", "Vanuatu",
							"Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
						];

						?>

            <select name="country" class="form-control">
              <option value="" disabled> Select Country*</option>
              <?php foreach($countries as $country) { ?>
              <option option="<?php echo $country; ?>" <?php if($country == 'India'){ echo 'selected'; } ?>><?php echo $country; ?></option>
              <?php } ?>
            </select>
            <?php $products = ['Round Bars', 'Bright Bars', 'HR Coil', 'Pipes', 'Steel Billets', 'Others']; ?>
            <select name="product" class="form-control">
              <option value=""> Select Product*</option>
              <?php foreach($products as $product) { ?>
              <option option="<?php echo $product; ?>"><?php echo $product; ?></option>
              <?php } ?>
            </select>

            <input type="number" name="quantity" class="form-control" placeholder="Approximate Quantity*" min="1">

            <textarea rows="5" name="message" class="form-control" placeholder="Message / Requirement*"></textarea>
            <br>

            <div class="col-md-12 contact-input mb-3 pl-0">

              <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
              <input id="hidden-grecaptcha" name="hidden-grecaptcha" type="hidden" />
            </div>
            <br>
            <button class="urja-submit mt-2">SUBMIT</button>
            <div class="form-results mt-2"></div>
          </form>

        </div>

      </div>

    </div>
  </div>
</section>
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3431.898367537724!2d76.28849297557778!3d30.664990274616933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39101a8cd3dc849d%3A0x2c7bf76f453ed2ba!2sNARAIN%20%26%20COMPANY!5e0!3m2!1sen!2sin!4v1773033222740!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php include 'include/footer.php'; ?>

<script src="js/jquery.validate.min.js"></script>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
  $(function() {
    $("#contact-form").validate({
      ignore: [],
      rules: {
        first_name: {
          required: true,
        },
        phone: {
          required: true,
        },
        email: {
          required: true,
          email: true
        },
        mobile: {
          required: true,
          minlength: 8,
          maxlength: 15,
        },
        country: {
          required: true,
        },
        product: {
          required: true,
        },
        quantity: {
          required: true,
        },
        message: {
          required: true,
        },
        "hidden-grecaptcha": {
          required: true,
        },
      },
      messages: {
        first_name: {
          required: "Please enter your first name",
        },
        email: {
          required: "Please enter email",
          email: "Enter valid email"
        },
        mobile: {
          required: "Enter a valid mobile number",
          minlength: "Mobile number must be at least 8 digits.",
        },
        country: {
          required: "Please select your country",
        },
        product: {
          required: "Please select the product",
        },
        quantity: {
          required: "Please select your quantity",
        },
        message: {
          required: "Please enter message",
        },
        "hidden-grecaptcha": {
          required: "reCAPTCHA is mandatory."
        }
      },
      submitHandler: function(form) {
        var formObj = $("#contact-form");
        resultsObj = formObj.find('.form-results');
        var actionURL = 'save-contact.php';
        $.ajax({
          type: 'POST',
          url: actionURL,
          data: formObj.serialize(),
          success: function(result) {
            if (typeof(result) !== 'undefined' && result !== null) {
              result = $.parseJSON(result);
            }
            formObj.find('input[type=text],input[type=email],input[type=number],textarea').each(function() {
              $(this).val('');
            });
            resultsObj.removeClass('alert-success').removeClass('alert-danger').hide();
            resultsObj.addClass(result.alert).html(result.message);
            resultsObj.removeClass('d-none').fadeIn('slow').delay(4000).fadeOut('slow');
          }
        });
      }
    });
  });

  function recaptchaCallback() {
    var response = grecaptcha.getResponse(),
      $button = jQuery(".document-btn");
    jQuery("#hidden-grecaptcha").val(response);
  }
</script>

<script>
  $(document).ready(function() {
    $('#same_as_mobile').change(function() {
      if ($(this).is(':checked')) {
        $('#whatsapp_mobile_number').val($('#mobile_number').val());
      }
    });
    $('#mobile_number').keyup(function() {
      if ($("#same_as_mobile").prop('checked')) {
        $('#whatsapp_mobile_number').val($('#mobile_number').val());
      }
    });
  });
</script>