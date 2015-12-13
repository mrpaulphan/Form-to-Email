$(document).ready(function() {
    $('form.ajax').on('submit', function() {
        // Current Object
        var that = $(this),
            url = that.attr('action'),
            type = that.attr('method'),
            data = {};

        // Loop through all elements that have an attribute of "name"
        that.find('[name]').each(function(index, value) {
            var that = $(this),
                name = that.attr('name'),
                value = that.val();
            // Append to data
            data[name] = value;
        });

        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(response) {

            	// If input values are empty
                if ($.trim(data.name && data.email) == "") {

                    if (data.name == "") {
                        $('.form-row-name_error').html('<p class="error">Name can not be blank</p>');
                    } else {
                        $('.form-row-name_error').html('');
                    }

                    if (data.email == "") {
                        $('.form-row-email_error').html('<p class="error">Please do not leave this field blank</p>');
                    } else {
                        $('.form-row-email_error').html('');
                    }
                } else { // Form is completed with no errors
                    $('.form-row').hide();

                    $('.error').html('Thank You for your Submission');

                };

            },
            error: function(response) {
                console.log('There was an ajax Error');
            }
        });

        return false;
    });




});
