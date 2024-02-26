// jQuery making sure the DOM is loaded
$(document).ready(function(){

    // Custom validation rules
    jQuery.validator.addMethod("only9charactors", function(value, element) {
        return this.optional(element) || (parseFloat(value.length) === 9);
    }, "Must be 9 digits");
    
    // Custom validation messages
    $.validator.messages.required = 'Required';
    $.validator.messages.equalTo = 'Account numbers must match';
    
    // Validate form --Replace ACHform with actual form id
    $('#ACHform').validate( {
  
      // Custom error placement
      errorPlacement: function(error, element) {
        if (element.attr("name") == "paymentauthorization" )
          error.insertAfter(".authorize");
        else
          error.insertAfter(element);
      },
  
      // Validation Rules
      rules: {
        // Other Amount textbox dependant on radial select
        otheramountvalue: {
          required: '#otheramount:checked',
          number: true,
          max: $('#ctl00_ContentPlaceHolderBody_lblRemainingAmount').val()
          
  
        },
        // Name of Payee
        name: {
          minlength: 2,
          required: true
        },
        // Email Address
        email: {
          required: true,
          email: true
        },
        // Account Number
        accountnumber: {
          number: true,
          rangelength: [4, 16],
          required: true
        },
        // Confirm Account Number
        accountnumberconfirm: {
          number: true,
          rangelength: [4, 16],
          equalTo: ".accountnumber",
          required: true
        },
        // Routing Number
        routingnumber: {
          number: true,
          required: true,
          only9charactors: true
        },
        // Terms and Conditions Agree checkbox
        paymentauthorization: {
          required: true
        }
      },
    
      // Setting for when validation triggers rules
      highlight: function(element) {
        $(element).closest('.textrow').removeClass('successborder').addClass('errorborder');
      },
  
      // Setting for when validation passes
      success: function(element) {
        element
        .text('OK!').addClass('valid')
        .closest('.textrow').removeClass('errorborder').addClass('successborder');
      }
    }); // end form.validate
  }); // end document.ready