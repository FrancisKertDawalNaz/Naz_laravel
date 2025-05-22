import "./bootstrap";
$("#registrationForm").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
        url: "{{ route('register.ajax') }}",
        method: "POST",
        data: $(this).serialize(),
        success: function (response) {
            $("#message").html(
                '<div class="alert alert-success">' +
                    response.message +
                    "</div>"
            );
            $("#registrationForm")[0].reset();
        },
        error: function (xhr) {
            let errors = xhr.responseJSON.errors;
            let errorHtml = '<div class="alert alert-danger"><ul>';
            $.each(errors, function (key, value) {
                errorHtml += "<li>" + value[0] + "</li>";
            });
            errorHtml += "</ul></div>";
            $("#message").html(errorHtml);
        },
    });
});
