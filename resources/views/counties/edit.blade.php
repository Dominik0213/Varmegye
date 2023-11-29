<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vármegye szerkesztés</title>
   
  
</head>
<body style="font-family: Arial, sans-serif; margin: 20px; display: flex; flex-direction: column; align-items: center; background-color: #FCE4EC;">

<h1 style="color: #333; margin-top: 20px;">Vármegye szerkesztés</h1>

<form action="{{ route('counties.update', $county) }}" method="POST" style="margin-top: 20px;">
    @csrf
    @method('PUT')
    <label for="name" style="color: #333; margin-bottom: 10px; display: block;">Név:</label>
    <input type="text" name="name" value="{{ $county->name }}" required style="padding: 8px; margin-bottom: 10px;">
    <button type="submit" style="padding: 8px; background-color: #800080; /* Lila */ color: white; border: none; cursor: pointer;">Mentés</button>
</form>

<a href="{{ route('counties.index') }}" style="text-decoration: none; color: #333; margin-top: 10px; display: block;">Visszavonás</a>

</body>
</html>
