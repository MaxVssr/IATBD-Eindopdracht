<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="/css/master.css" rel="stylesheet">
        <title>Wachtwoord Vergeten</title>
    </head>
    <body class="forgot-password">

        <h2><a href="/">Time2Share</a></h2>
        <form class="forgot-password-form" method="POST" action="{{ route('password.email') }}">
            @csrf

            <section class="forgot-password-form__section">
                <h3>Wachtwoord vergeten?</h3>
                <p>Vul je email adres in, daarna krijg je een mail in die mailbox waarmee je jouw wachtwoord kan resetten.</p>
            </section>

            <section class="forgot-password-form__section">
                <label for="email">Email</label>
                <input class="forgot-password-form__section__input" name="email" id="email" type="email">
            </section>

            <section class="forgot-password-form__btnSection">
                <input class="forgot-password-form__btnSection__pw-forgotBtn" type="submit" value="Reset wachtwoord">
            </section>
        </form>

    </body>
</html>