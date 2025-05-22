<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $details['subject'] ?? 'Sample Email' }}</title>
</head>
<body>
    <h2>{{ $details['subject'] ?? 'Sample Email' }}</h2>
    <p>{{ $details['body'] ?? 'This is a sample email content.' }}</p>
</body>
</html>