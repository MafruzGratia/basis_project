$(document).on('click', '.pagination a', function(event) {
    event.preventDefault();
    var pageUrl = $(this).attr('href');

    $.ajax({
        url: pageUrl,
        type: "GET",
        success: function(data) {
            $('#employee_data').html(data);
        }
        ,error: function(error) {
            console.error('Error fetching data: ', error);
        }
    });
});



