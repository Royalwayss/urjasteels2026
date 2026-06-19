
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
        var actionURL = 'save-contact.php?page=product';
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