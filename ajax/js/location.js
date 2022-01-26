jQuery(document).ready(function() {



    $("#create").click(function(event) {
        event.preventDefault();

        if (!$('#full_name').val() || $('#full_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter your full name..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#nic').val() || $('#nic').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter NIC number..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#age').val() || $('#age').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter age..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#date_of_birth').val() || $('#date_of_birth').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter date of birth..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#city').val() || $('#city').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter city..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter address..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#description').val() || $('#description').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter description..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {


            //grab all form data  
            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "ajax/post-and-get/location.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(result) {
                    //remove preloarder

                    if (result.status === 'success') {

                        swal({
                            title: "success!",
                            text: "Your login has success..!!",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "user name or password is wrong..!",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });

        }
        return false;
    });

    $("#create2").click(function(event) {
        event.preventDefault();

        if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter email address..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#occasion').val() || $('#occasion').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter occasion..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter email..!",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {


            //grab all form data  
            var formData = new FormData($("form#order2")[0]);

            $.ajax({
                url: "ajax/post-and-get/order.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(result) {
                    //remove preloarder

                    if (result.status === 'success') {

                        swal({
                            title: "success!",
                            text: "Your login has success..!!",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 2000);

                    } else if (result.status === 'error') {

                        swal({
                            title: "Error!",
                            text: "user name or password is wrong..!",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });

        }
        return false;
    });

});