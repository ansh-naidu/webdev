<!DOCTYPE html>
<html>
<head>
    <title>Available Vegetables</title>
    <style>
        /* Some basic styling for the table */
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Available Vegetables</h1>
    <table>
        <thead>
            <tr>
                <th>Veggie Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vegetables as $veggie)
                <tr>
                    <td>{{ $veggie }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
