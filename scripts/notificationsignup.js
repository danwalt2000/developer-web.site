function NotificationSignUp() {
    var a = $("#fieldEmail").val(), b = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
        c = b.test(a);
    c ? $.ajax({
        type: "post", url: "./notificationSignUp.php", data: {email: a}, success: function (a) {
            $("#commentform").hide(), $("#fieldEmail").val(""), $("#subForm").slideToggle(), $(".fine-print").css("color", "white"), $(".fine-print").text(a)
        }, error: function (a, b, c) {
            $(".fine-print").css("color", "red"), $(".fine-print").text("Your email was not valid. Try again.")
        }
    }) : ($(".fine-print").css("color", "red"), $(".fine-print").text("Your email was not valid. Try again."))
}