<!DOCTYPE html>
<html>
<head>
    <title>Barangays in Catanduanes</title>
</head>
<body>
    <h1>Barangays in Catanduanes</h1>
    <p>Prepared by: China M. Icawat</p>

    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Municipality</th>
            <th>Population</th>
        </tr>

        @foreach ($brgys as $brgy)
            <tr>
                <td>{{ $brgy['name'] }}</td>
                <td>{{ $brgy['municipality'] }}</td>
                <td>{{ $brgy['population'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>