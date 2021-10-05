$(document).ready(function () {
    $("form").submit(function (event) {
        $(".form-group").removeClass("has-error");
        $(".help-block").remove();
        var formData = {
            name: $("#name").val(),
            price: $("#price").val(),
            status_id: $("#status_id").val(),
            external_id: $("#external_id").val(),
        };

        var token = $("#api_token").val();

        $.ajax({
            type: "POST",
            url: "api/products",
            headers: {
                "Authorization": 'Bearer ' + token,
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            dataType: "json",
            encode: true,
        }).done(function (data) {
            console.log(data);
            if (!data.success) {
                if (data.name) {
                    $("#name-group").addClass("has-error");
                    $("#name-group").append(
                        '<div class="help-block" style="background-color: red">' + data.name + "</div>"
                    );
                }

                if (data.price) {
                    $("#price-group").addClass("has-error");
                    $("#price-group").append(
                        '<div class="help-block" style="background-color: red">' + data.price + "</div>"
                    );
                }

                if (data.status_id) {
                    $("#status-id-group").addClass("has-error");
                    $("#status-id-group").append(
                        '<div class="help-block" style="background-color: red">' + data.status_id + "</div>"
                    );
                }

                if (data.external_id) {
                    $("#external-id-group").addClass("has-error");
                    $("#external-id-group").append(
                        '<div class="help-block" style="background-color: red">' + data.external_id + "</div>"
                    );
                }
            } else {
                $("form").html(
                    '<div class="alert alert-success">' + "New product have been added!" + "</div>"
                );
            }

        }).fail(function (data) {
            $("form").html(
                '<div class="alert alert-danger">Could not reach server, please try again later.</div>'
            );
        });


        event.preventDefault();
    });
})
