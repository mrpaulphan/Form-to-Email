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
            console.log(data);
        });

        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(response) {
                console.log(response);
            },
            error: function(response) {
                console.log(response, 'erro');
            }
        });

        return false;
    });




});
