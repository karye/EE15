$(document).ready(function() {

    var user = document.getElementById("user");
    var password = document.getElementById("password");

    $('#logga_in').on('click', function(event) {
        if ($(this).closest('form')[0].checkValidity()) {
            event.preventDefault();

            console.log("valid");

            $.ajax({
                url: "login.php",
                method: "POST",
                data: {
                    anamn: user.value,
                    losen: password.value
                },
                success: function (data) {
                    if (data == "Ja") {
                        $("#fel").text("Rätt inloggning");
                        window.location = "min_sida.php";
                    } else {
                       $("#fel").text("Fel inloggning");
                    }
                }
            });
        }

    });
});
