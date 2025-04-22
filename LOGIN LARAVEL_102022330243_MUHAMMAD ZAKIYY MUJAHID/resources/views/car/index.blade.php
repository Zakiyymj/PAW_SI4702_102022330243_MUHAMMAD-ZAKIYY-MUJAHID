<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mobil</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f3f3f3;
        }
    </style>
</head>
<body>
    <h1>Daftar Mobil</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Brand</th>
                <th>Series</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $index => $car)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->series }}</td>
                    <td>{{ $car->year }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <ul>
        <li>
            <button type="submit" name="register">Log Out</button>
        </li>
    </ul>  
</body>
</html>
