$(document).ready(function() {
    $('#employeeForm').submit(function(e) {
        e.preventDefault();

        let name = $("#employeeName").val();
        let email = $("#employeeEmail").val();
        let password = $("#employeePassword").val();

        $.ajax({
            url: "/employee-register",
            type: "POST",

            data:{
                name:name,
                email:email,
                password:password
            },
            success: function(data) {
                if (data.status === 200) {
                    alert("registration Successful!");
                    location.reload(true);
                    // window.location.href = "/employee/login";
                } else {
                    if (data.message) {
                        var alert_message="";
                        data.message.forEach(message => {
                            alert_message+=message;
                        });
                        Swal.fire({
                            title: "Error",
                            text: alert_message,
                            icon: "error"
                          });
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error("Error:", error);
            }
        });
    });

});
