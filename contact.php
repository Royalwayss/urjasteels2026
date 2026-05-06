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
</style>

<!-- start page title -->
<section class="page-title-separate-breadcrumbs  contact-banner ipad-top-space-margin">
    <div class="container position-relative">
        <div class="row justify-content-start align-items-lg-end extra-very-small-screen">
            <div class="col-lg-6 position-relative page-title-extra-large md-mb-30px sm-mb-20px z-index-9">
                <h1 class="text-white fw-600 ls-minus-4px mb-0 alt-font highlight-separator-small direction-ltr"><span
                        class="highlight-separator mb-0 pb-0" data-shadow-animation="true"
                        data-animation-delay="500">Contact Us<span></span></span></h1>
            </div>
        </div>
    </div>
</section>
<!-- end header -->

<!-- end page title -->
<!-- start section -->
<!-- <section class="overflow-hidden">
    <div class="container">
        <div class="row justify-content-center align-items-center mb-9 sm-mb-45px">
            <div class="col-xxl-5 col-lg-6 md-mb-50px"
                data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <span class="fs-15 text-uppercase text-base-color fw-600 mb-15px d-block ls-1px ">Get in touch with
                    us</span>
                <h4 class="fw-700 text-dark-gray ls-minus-1px mb-50px sm-mb-35px urja-text">Get In Touch
                </h4>
             
                <div class="icon-with-text-style-01 mb-10 md-mb-35px">
                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <div class="urja-contact-icon">
                                <i class="fa-solid fa-location-dot  contact-icon"></i>
                            </div>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-block text-dark-gray fw-600 fs-18 ls-minus-05px mb-5px">Corporate Office
                                Address</span>
                            <p class="w-100">Narain and Company G.T. Road Mandi Gobindgarh Punjab.</p>
                        </div>
                    </div>
                </div>
                <div class="icon-with-text-style-01 mb-10 md-mb-35px">
                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <div class="urja-contact-icon">
                                <i class="fa-solid fa-location-dot  contact-icon"></i>
                            </div>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="d-block text-dark-gray fw-600 fs-18 ls-minus-05px mb-5px">Manufacturing Plant
                                Address</span>
                            <p class="w-100">RP Steel Tubes , Peer Gaju Shah Road , Badinpur Khanna Punjab, India
                                141401.</p>
                        </div>
                    </div>
                </div>
            
                <div class="icon-with-text-style-01 mb-10 md-mb-35px">
                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <div class="urja-contact-icon">
                                <i class="fa-solid fa-mobile-button  contact-icon"></i>
                            </div>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block text-dark-gray fw-600 fs-18 ls-minus-05px mb-5px">Call Us</span>
                            <div class="w-100 d-block">
                                <span class="d-block"><a class="text-dark" href="tel:+91 9700800019">+91 97008
                                        00019</a></span>
                                <span class="d-block"><a class="text-dark" href="tel:+91 7528000019">+91 75280
                                        00019</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="icon-with-text-style-01">
                    <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
                        <div class="feature-box-icon me-25px">
                            <div class="urja-contact-icon">
                                <i class="fa-solid fa-envelope  contact-icon"></i>
                            </div>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block text-dark-gray fw-600 fs-18 ls-minus-05px mb-5px">Email Us</span>
                            <div class="w-100 d-block">
                                <a href="mailto:urjasteels@gmail.com">urjasteels@gmail.com</a><br />
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="col-lg-6 offset-xxl-1"
                data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div
                    class=" contact-form-style-03 position-relative border-radius-10px bg-white p-14 lg-p-10 box-shadow-double-large overflow-hidden last-paragraph-no-margin">
                    <h4 class="fw-700 text-dark-gray mb-30px sm-mb-20px fancy-text-style-4 ls-minus-2px">Drop Us A
                        <span class=""
                            data-fancy-text='{ "effect": "rotate", "string": ["Message!", "Message!", "Message!"] }'></span>
                    </h4>
                    <form action="email-templates/contact-form.php" method="post">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon text-dark-gray"><i class="bi bi-person icon-extra-medium"></i></span>
                            <input
                                class="ps-0 border-radius-0px medium-gray bg-transparent border-color-extra-medium-gray form-control required"
                                type="text" name="name" placeholder="Enter your name*" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon text-dark-gray"><i
                                    class="bi bi-envelope icon-extra-medium"></i></span>
                            <input
                                class="ps-0 border-radius-0px medium-gray bg-transparent border-color-extra-medium-gray form-control required"
                                type="email" name="email" placeholder="Enter your email*" />
                        </div>
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon text-dark-gray"><i class="bi bi-phone icon-extra-medium"></i></span>
                            <input
                                class="ps-0 border-radius-0px medium-gray bg-transparent border-color-extra-medium-gray form-control required"
                                type="text" name="phone" placeholder="Enter your phone number*" />
                        </div>
                        <div class="position-relative z-index-1 form-group form-textarea mt-15px mb-0">
                            <textarea
                                class="ps-0 border-radius-0px medium-gray bg-transparent border-color-extra-medium-gray form-control"
                                name="comment" placeholder="Enter your message" rows="3"></textarea>
                            <span class="form-icon text-dark-gray"><i
                                    class="bi bi-chat-square-dots icon-extra-medium"></i></span>
                            <input type="hidden" name="redirect" value="">
                            <button
                                class="btn btn-large btn-dark-gray btn-round-edge btn-box-shadow mb-20px mt-25px submit w-100"
                                type="submit">Send message</button>
                            <p class="fs-13 lh-22 w-100">I understand that my data will be hold securely in
                                accordance with the <a class="text-decoration-line-bottom text-dark-gray fw-500"
                                    href="#">privacy policy.</a></p>
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                    <div class="position-absolute bottom-0px right-minus-30px fs-350 lh-100 fw-900 urja-text">&lt;
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-md-auto text-center text-md-end sm-mb-20px"
                data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <h6 class="text-dark-gray fw-600 mb-0 ls-minus-1px">Connect with social media </h6>
            </div>
            <div class="col-2 d-none d-lg-inline-block"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <span class="w-100 h-1px bg-dark-gray opacity-2 d-flex mx-auto"></span>
            </div>
            <div class="col-md-auto elements-social social-icon-style-04 text-center text-md-start ps-lg-0"
                data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <ul class="large-icon dark">
                    <li class="m-0"><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                                class="fa-brands fa-facebook-f"></i><span></span></a></li>
                    <li class="m-0"><a class="twitter" href="http://www.twitter.com" target="_blank"><i
                                class="fa-brands fa-twitter"></i><span></span></a></li>
                    <li class="m-0"><a class="instagram" href="http://www.instagram.com" target="_blank"><i
                                class="fa-brands fa-instagram"></i><span></span></a></li>
                    <li class="m-0"><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i
                                class="fa-brands fa-linkedin-in"></i><span></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</section> -->
<!-- end section -->
<!-- start section -->
<!-- <section class="bg-very-light-gray p-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <div id="map" class="map h-650px sm-h-450px"
                    data-map-options='{ "lat": -37.805688, "lng": 144.962312, "style": "Silver", "marker": { "type": "image", "class": "marker01", "src": "images/marker03.png", "width": "57px", "height": "76px" }, "popup": { "defaultOpen": false, "html": "<div class=infowindow><strong class=\"mb-3 d-inline-block alt-font\">Crafto Marketing</strong><p class=\"alt-font\">16122 Collins street, Melbourne, Australia</p></div><div class=\"google-maps-link alt-font\"> <a aria-label=\"View larger map\" target=\"_blank\" jstcache=\"31\" href=\"https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449\" jsaction=\"mouseup:placeCard.largerMap\">VIEW LARGER MAP</a></div>" } }'>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- end section -->
<!-- start footer -->

<section class="urja-contact">
    <div class="container">
        <div class="urja-contact-box position-relative">
            <!-- <img src="phone.png" class="urja-phone-img" alt="phone"> -->
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
                            <p class="w-100 text-white">RP Steel Tubes , Peer Gaju Shah Road , Badinpur Khanna  141401, Punjab, India.
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
                                <span class="d-block"><a class="text-white" href="tel:+91 9700800019">+91 97008
                                        00019</a></span>
                                <span class="d-block"><a class="text-white" href="tel:+91 7528000019">+91 75280
                                        00019</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icon-with-text-style-01 mb-5 pb-5" >
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
						
                        <input type="number" name="mobile" class="form-control" placeholder="Mobile*">

                        <textarea rows="5" name="message" class="form-control" placeholder="Message*"></textarea>
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

<script>
$(function () {
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
			   maxlength:15,
            },
            message: {
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
			message: {
                required: "Please enter message",
            },
			
            
        },
        submitHandler: function(form) {
            
			var formObj = $("#contact-form");
			  resultsObj = formObj.find('.form-results');
			var actionURL = 'save-contact-us';
			$.ajax({
                type: 'POST',
                url: actionURL,
                data: formObj.serialize(),
                success: function (result) {
                    if (typeof (result) !== 'undefined' && result !== null) {
                            result = $.parseJSON(result);
                        } 
                        
                        formObj.find('input[type=text],input[type=email],input[type=number],textarea').each(function () {
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


</script>