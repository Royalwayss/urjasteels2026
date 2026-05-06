<?php include 'include/header.php'; ?>


<!-- start page title -->
<section class="page-title-separate-breadcrumbs  career-banner ipad-top-space-margin">
    <div class="container position-relative">
        <div class="row justify-content-start align-items-lg-end extra-very-small-screen">
            <div class="col-lg-6 position-relative page-title-extra-large md-mb-30px sm-mb-20px z-index-9">
                <h1 class="text-white fw-600 ls-minus-4px mb-0 alt-font highlight-separator-small direction-ltr"><span
                        class="highlight-separator mb-0 pb-0" data-shadow-animation="true"
                        data-animation-delay="500">Career <span></span></span></h1>
            </div>
        </div>
    </div>
</section>


<section class="urja-contact">
    <div class="container">
        <div class="urja-contact-box position-relative">

            <!-- <img src="phone.png" class="urja-phone-img" alt="phone"> -->

            <h2>Careers Built on Trust, Quality, and Growth</h2>

            <div class="row">

                <div class="col-lg-9 m-auto">
                    <form class="urja-contact-form" id="contact-form">
                        <div class="row">

                            <div class="col-md-6">
                                <input name="first_name" type="text" class="form-control" placeholder="First Name*">
                            </div>

                            <div class="col-md-6">
                                <input name="last_name" type="text" class="form-control" placeholder="Last Name">
                            </div>

                            <div class="col-md-6">
                                <input name="email" type="email" class="form-control" placeholder="E-mail*">
                            </div>

                            <div class="col-md-6">
                                <input name="mobile" type="mobile" class="form-control" placeholder="Phone Number*">
                            </div>

                            <div class="col-md-6">
                                <input name="position_applying_for" type="text" class="form-control" placeholder="Position Applying For*">
                            </div>

                            <div class="col-md-6">
                                <input name="resume" type="file" class="form-control" > 
                            </div>

                            <div class="col-12">
                                <textarea name="message" rows="5" class="form-control" placeholder="Tell us about yourself*"></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button class="urja-submit mt-2">APPLY NOW</button>
                            </div>
                            <div class="col-12 text-center">
									<div class="form-results mt-2"></div>
							 </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>


<script src="js/jquery.validate.min.js"></script>

<script>
$(function () {
    $("#contact-form").validate({
        ignore: [],
        rules: {
            first_name: { required: true },
            email: { required: true, email: true },
            mobile: { required: true, minlength: 8, maxlength: 15 },
            position_applying_for: { required: true },
            resume: { required: true },
            message: { required: true }
        },
        messages: {
            first_name: { required: "Please enter your first name" },
            email: {
                required: "Please enter email",
                email: "Enter valid email"
            },
            mobile: {
                required: "Enter a valid mobile number",
                minlength: "Mobile number must be at least 8 digits."
            },
            message: { required: "Please enter message" }
        },

        submitHandler: function(form) {

            var formObj = $("#contact-form");
            var resultsObj = formObj.find('.form-results');
            var actionURL = 'save-jobs-and-career';

            // ✅ Create FormData (important for file upload)
            var formData = new FormData(form);

            $.ajax({
                type: 'POST',
                url: actionURL,
                data: formData,
                processData: false,  // ❗ Required
                contentType: false,  // ❗ Required
                success: function (result) {

                    if (result) {
                        result = $.parseJSON(result);
                    }

                  //  formObj[0].reset(); // reset full form

                    resultsObj.removeClass('alert-success alert-danger').hide();
                    resultsObj.addClass(result.alert).html(result.message);
                    resultsObj.removeClass('d-none').fadeIn('slow').delay(4000).fadeOut('slow');
                }
            });
        }
    });
});
</script>