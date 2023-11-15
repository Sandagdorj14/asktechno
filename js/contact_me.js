$(function() {

    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
            var name = $("input#name").val();
            var email = $("input#email").val();
            var message = $("textarea#message").val();
            var company_name = $("input#company_name").val();
            var phone_number = $("input#phone_number").val();
            var firstName = name; // For Success/Failure Message
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }
            // $.ajax({
            //     url: "http://localhost:8080/pages/send",
            //     type: "POST",
            //     data: {
            //         name: name,
            //         email: email,
            //         message: message,
            //         company_name: company_name,
            //         phone_number: phone_number
            //     },
            //     cache: false,
            //     success: function() {
            //         // Success message
            //         $('#success').html("<div class='alert alert-success'>");
            //         $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            //             .append("</button>");
            //         $('#success > .alert-success')
            //             .append("<strong>送信が完了しました。</strong>");
            //         $('#success > .alert-success')
            //             .append('</div>');

            //         //clear all fields
            //         $('#contactForm').trigger("reset");
            //     },
            //     error: function() {
            //         // Fail message
            //         $('#success').html("<div class='alert alert-danger'>");
            //         $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            //             .append("</button>");
            //         $('#success > .alert-danger').append("<strong>申し訳ありませんが " + firstName + ", サーバーでエラーが発生しました。 もう一度やり直してください！");
            //         $('#success > .alert-danger').append('</div>');
            //         //clear all fields
            //         $('#contactForm').trigger("reset");
            //     },
            // })
            const settings = {
                "async": true,
                "crossDomain": true,
                "url": "https://rapidprod-sendgrid-v1.p.rapidapi.com/mail/send",
                "method": "POST",
                "headers": {
                    "content-type": "application/json",
                    "X-RapidAPI-Key": "41a5937b9cmsh6c9f3d1fdb856abp175b58jsne255595c4367",
                    "X-RapidAPI-Host": "rapidprod-sendgrid-v1.p.rapidapi.com"
                },
                "processData": false,
                "data": {
                    "personalizations": [
                        {
                            "to": [
                                {
                                    "email": "info@ask-techno.com"
                                }
                            ],
                            "subject": "Hello, World!"
                        }
                    ],
                    "from": {
                        "email": "no-reply@ask-techno.com"
                    },
                    "content": [
                        {
                            "type": "text/plain",
                            "value": "Hello, World!"
                        }
                    ]
                }
            };
            
            $.ajax(settings).done(function (response) {
                console.log(response);
            });
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});


/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
