<!DOCTYPE html>
<html>
<head>
    <title>Barangays</title>
</head>
<body>
    <h1>Barangay List</h1>
    <table border="1">
        <tr>
            <th>Name</th>
        </tr>
        @foreach (['Barangay 1', 
                   'Barangay 2', 
                   'Barangay 3', 
                   'Barangay 4', 
                   'Barangay 5'] 
                   as $brgy)
            <tr>
                <td>{{ $brgy }}</td>
            </tr>
        @endforeach
    </table>
    <p>Created by China Icawat | 2023-70490 | Block 4C</p>
</body>
</html>
