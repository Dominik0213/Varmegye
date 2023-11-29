<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vármegye hozzáadás</title>
  

</head>
<body style="font-family: Arial, sans-serif; margin: 20px; display: flex; flex-direction: column; align-items: center; background-color: #FCE4EC;">


<h1 style="color: #333; margin-top: 20px;">Vármegye hozzáadás</h1>

<form action="{{ route('counties.store') }}" method="POST" style="margin-top: 20px; display: flex; flex-direction: row; align-items: center;">
    @csrf
    <label for="name" style="color: #333; margin-right: 10px;">Név:</label>
    <input type="text" name="name" required style="padding: 8px; margin-right: 10px;">
    <button type="submit" style="padding: 8px; background-color: #800080; /* Lila */ color: white; border: none; cursor: pointer;">Mentés</button>
</form>

<a href="{{ route('counties.index') }}" style="text-decoration: none; color: #333; margin-top: 10px; display: block;">Visszavonás</a>

</body>
</html>
