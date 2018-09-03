$(document).ready(function() {
    var today = moment().toObject();
    //setting the target date to countdown to
    var targetDate = moment([2018, 8, 20, 9, 59]); // September 20, 2018
    var difference = targetDate.diff(today, "seconds");
    //FlipClock instantiation
    var clock = $(".countdown-clock").FlipClock(difference, {
        clockFace: "DailyCounter",
        countdown: true
    });

    var cleave = new Cleave("#phone", {
        phone: true,
        phoneRegionCode: "CA",
        delimiter: "-",
        blocks: [3, 3, 4]
    });
    //check to see if alert is clicked or close button
    //if alert is clicked, scroll down to the form to retry submission
    //else, close the alert
    $("#form-danger").click(function(e) {
        if (e.target.id == "form-danger") {
            document.querySelector(".contact").scrollIntoView({
                behavior: "smooth"
            });
        }
    });
    $("#form-danger").click(function(e) {
        if (e.target.id == "form-danger") {
            document.querySelector(".contest").scrollIntoView({
                behavior: "smooth"
            });
        }
    });
    (function() {
        "use strict";
        window.addEventListener(
            "load",
            function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName("needs-validation");
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(
                    form
                ) {
                    form.addEventListener(
                        "submit",
                        function(event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add("was-validated");
                        },
                        false
                    );
                });
            },
            false
        );
    })();
    $(".custom-file-input").on("change", function(e) {
        $(this)
            .next(".custom-file-label")
            .html(e.target.files[0].name);
    });
    // $("div.alert")
    //     .not(".alert-important")
    //     .delay(8000)
    //     .fadeOut(350);
});
