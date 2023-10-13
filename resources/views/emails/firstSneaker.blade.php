<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        /* Styles CSS inline pour une meilleure compatibilité avec les clients de messagerie */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            background-color: #121826;
            color: #ffffff;
            padding: 20px;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        .footer {
            background-color: #121826;
            padding: 10px;
            text-align: center;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Félicitations, {{ $user->name }}!</h1>
        </div>

        <div class="content">
            <p>Votre première Sneaker a été ajoutée avec succès ! N'hésitez pas à en ajouter d'autres !</p>
            <p>Merci d'utiliser notre application.</p>
        </div>

        <div class="footer">
            <p>Cordialement,<br>Votre équipe SkShare</p>
        </div>
    </div>
</body>
</html>
