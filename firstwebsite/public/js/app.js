$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

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

$(document).on('click', 'a.nav-link[href="/show_form"]', function(e) {
    e.preventDefault();
    var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
    registerModal.show();
});

// AJAX for modal registration form
$(document).ready(function() {
    $('#registrationFormModal').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: "/register-ajax",
            method: "POST",
            data: $(this).serialize(),
            success: function(response) {
                let msg = response.message ? response.message : 'Registration successful!';
                $('#messageModal').html('<div class="alert alert-success">'+msg+'</div>');
                var alertDiv = document.createElement('div');
                alertDiv.className = 'alert alert-success alert-dismissible fade show';
                alertDiv.role = 'alert';
                alertDiv.innerHTML = msg +
                    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                document.body.appendChild(alertDiv);
                setTimeout(function() {
                    var alert = bootstrap.Alert.getOrCreateInstance(alertDiv);
                    alert.close();
                }, 2500);
                $('#registrationFormModal')[0].reset();
            },
            error: function(xhr) {
                let errors = xhr.responseJSON.errors;
                let errorHtml = '<div class="alert alert-danger"><ul>';
                $.each(errors, function(key, value) {
                    errorHtml += '<li>'+value[0]+'</li>';
                });
                errorHtml += '</ul></div>';
                $('#messageModal').html(errorHtml);
            }
        });
    });
});

// Registration form AJAX for register.blade.php
$(document).ready(function() {
    $('#registrationFormPage').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: window.registerAjaxUrl,
            method: "POST",
            data: $(this).serialize(),
            success: function(response) {
                let msg = response.message ? response.message : 'Registration successful!';
                $('#messagePage').html('<div class="alert alert-success">'+msg+'</div>');
                $('#registrationFormPage')[0].reset();
            },
            error: function(xhr) {
                let errors = xhr.responseJSON.errors;
                let errorHtml = '<div class="alert alert-danger"><ul>';
                $.each(errors, function(key, value) {
                    errorHtml += '<li>'+value[0]+'</li>';
                });
                errorHtml += '</ul></div>';
                $('#messagePage').html(errorHtml);
            }
        });
    });
});

