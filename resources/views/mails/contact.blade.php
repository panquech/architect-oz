<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <h3>Datos del cliente</h3>
    <hr>
    <p><strong>Nombre:</strong> {{ $data['first_name'] }}</p>
    @if ($data['last_name'])
        <p><strong>Apellido:</strong> {{ $data['last_name'] }}</p>
    @endif
    <p><strong>Estado:</strong> {{ $data['state'] }}</p>
    <p><strong>Ciudad:</strong> {{ $data['city'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Número Telefónico:</strong> {{ $data['phone-number'] }}</p>
    <p><strong>Mensaje:</strong> {{ $data['message'] }}</p>
    
</body>
</html>
