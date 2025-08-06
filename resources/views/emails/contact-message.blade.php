<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <h2>Nouveau message depuis le site de la FETOC</h2>
    <p>Vous avez reçu un nouveau message de contact.</p>
    <hr>
    <p><strong>Nom :</strong> {{ $data['name'] }}</p>
    <p><strong>Email :</strong> {{ $data['email'] }}</p>
    <p><strong>Sujet :</strong> {{ $data['subject'] }}</p>
    <hr>
    <h3>Message :</h3>
    <div style="background-color: #f4f4f4; padding: 15px; border-radius: 5px;">
        <p>{{ nl2br(e($data['message'])) }}</p>
    </div>
</body>
</html>