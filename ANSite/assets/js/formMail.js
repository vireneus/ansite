$("#sendMail").on("click", function () {
    // Получаем значения полей формы
    var name = $("#name").val().trim();
    var email = $("#email").val().trim();
    var subject = $("#subject").val().trim();
    var message = $("#message").val().trim();

    // Проверяем заполненность полей и выводим сообщение об ошибке, если не все поля заполнены
    if (name == "") {
        $("#errorMess").text("Введите Имя!");
        return false;
    }
    else if (email == "") {
        $("#errorMess").text("Введите Email!");
        return false;
    }
    else if (subject == "") {
        $("#errorMess").text("Введите Тему письма!");
        return false;
    }
    else if (message.length < 5) {
        $("#errorMess").text("Введите Сообщение не менее 5 символов!");
        return false;
    }

    // Очищаем сообщение об ошибке
    $("#errorMess").text("");

    $.ajax({
        url: 'assets/php/mail.php',
        type: 'POST',
        cache: false,
        data: { 'name': name, 'email': email, 'subject': subject, 'message': message },
        dataType: 'html',
        beforeSend: function () {
            // Блокируем кнопку отправки на время выполнения запроса
            $("#sendMail").prop("disabled", true);
        },
        success: function (data) {
            // Выводим сообщение об успешной или неудачной отправке письма
            if (!data)
                alert("Были ошибки, сообщение не отправлено!");
            else
                alert("Сообщение успешно отправлено!");
            // Очищаем поля формы
            $("#mainform").trigger("reset");
            // Разблокируем кнопку отправки
            $("#sendMail").prop("disabled", false);
        }
    });

});
