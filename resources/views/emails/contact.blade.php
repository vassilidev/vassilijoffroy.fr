<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouvelle demande de contact</title>
</head>
<body>
<h2>Vous avez reçu une nouvelle demande de contact</h2>

<p><strong>Nom :</strong> {{ $data['name'] }}</p>
<p><strong>Téléphone :</strong> {{ $data['phone'] }}</p>
<p><strong>Ville :</strong> {{ $data['city'] }}</p>
<p><strong>Service :</strong> {{ $data['service'] ?? 'Non précisé' }}</p>
<p><strong>Problème :</strong><br>{{ nl2br(e($data['problem'])) }}</p>
<p><strong>Urgence :</strong> {{ ucfirst($data['urgency']) }}</p>
</body>
</html>
