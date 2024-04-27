import AdminModule from './AdminModule.js';
const admin_mdoule=new AdminModule();
$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        e.preventDefault();

        var email = $('#email').val();
        var password = $('#password').val();

        $.ajax({
            url: '/admin/login',
            type: 'POST',
            data:{
                email:email,
                password:password
            },
            success: function(data) {
                // console.log('Success:', data);
                // alert("Login successful! Welcome " + data.user.name);
                console.log(data);
                window.location.href="/admin/dashboard";
                // Redirect to a new page or update the DOM here.
            },
            error: function(response) {
                console.log('Error:', response);
                alert("Login failed: " + response.responseJSON.message);
            }
        });
    });
   console.log(admin_mdoule.login());
});
