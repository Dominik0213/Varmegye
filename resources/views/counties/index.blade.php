<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vármegyék</title>
  
</head>
<body style="font-family: Arial, sans-serif; margin: 20px; display: flex; flex-direction: column; align-items: center; background-color: #FCE4EC;">

<h1 style="color: #333; margin-top: 20px;">Vármegyék</h1>

<div style="display: flex; justify-content: space-between; align-items: center; width: 50%;">
    <a href="{{ route('counties.create') }}" style="display: inline-block; padding: 10px 15px; background-color: #800080; /* Lila */ color: white; text-decoration: none; margin-bottom: 10px;">Vármegye hozzáadás</a>

    <form action="{{ route('counties.filter') }}" method="GET" style="display: flex; align-items: center;">
        <input type="text" name="filter" placeholder="Szűrés vármegye szerint" style="padding: 8px; margin-right: 10px;">
        <button type="submit" style="padding: 8px; background-color: #800080; /* Lila */ color: white; border: none; cursor: pointer;">Szűrő</button>
    </form>
</div>

<ul style="list-style-type: none; padding: 0; width: 50%;">
    @foreach ($counties as $county)
        <li style="margin-bottom: 10px; border: 1px solid #ddd; padding: 10px; background-color: #f9f9f9; display: flex; justify-content: space-between; align-items: center;">
            {{ $county->name }}
            <a href="{{ route('counties.edit', $county) }}" style="margin-left: 10px; text-decoration: none; color: #3498db;">Szerkesztés</a>
            <form action="{{ route('counties.destroy', $county) }}" method="POST" style="display: inline-block; margin-left: 10px;">
                @csrf
                @method('DELETE')
                <button type="submit" style="background-color: #800080; /* Lila */ color: white; border: none; padding: 5px 10px; cursor: pointer;">Törlés</button>
            </form>
        </li>
    @endforeach
</ul>

</body>
</html>
