<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Nowa wiadomość z formularza kontaktowego</title>
</head>
<body>
    <h2>Nowa wiadomość z formularza kontaktowego</h2>

    <p><strong>Imię i nazwisko:</strong> {{ $name }}</p>
    <p><strong>E-mail:</strong> {{ $email }}</p>
    @if($phone)
        <p><strong>Telefon:</strong> {{ $phone }}</p>
    @endif

    <p><strong>Wiadomość:</strong></p>
    <p>{!! nl2br(e($messageText)) !!}</p>
</body>
</html>

