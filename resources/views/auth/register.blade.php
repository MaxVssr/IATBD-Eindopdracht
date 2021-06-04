<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="/css/master.css" rel="stylesheet">
        <title>Registeren</title>
    </head>
    <body class="register">
        <h2><a href="/">Time2Share</a></h2>
        <form class="register-form" method="POST" action="{{ route('register') }}">
            @csrf

            <section class="register-form__section">
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" class="register-form__section__input">
            </section>

            <section class="register-form__section">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="register-form__section__input">
            </section>

            <section class="register-form__section">
                <label for="password">Wachtwoord</label>
                <input type="password" id="password" name="password" class="register-form__section__input">
            </section>

            <section class="register-form__section">
                <label for="password-confirmation">Herhaal wachtwoord</label>
                <input type="password" id="password-confirmation" name="password-confirmation" class="register-form__section__input">
            </section>

            <section class="register-form__btnSection">
                <input type="submit" value="Registreren" class="register-button">
            </section>

            <section class="register-form__btnSection">
                <a href="/login" class="login-link">Ik heb al een account</a>
            </section>
        </form>
    </body>