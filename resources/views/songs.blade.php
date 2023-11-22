<!DOCTYPE html>
<html>
<head>
    <title>Song List</title>
</head>
<body>
    <h1>Song List</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Artist</th>
        </tr>
        @foreach ($songs as $song)
        <tr>
            <td>{{ $song->getTitle() }}</td>
            <td>{{ $song->getArtist() }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
