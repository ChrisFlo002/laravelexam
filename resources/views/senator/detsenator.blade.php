<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senator Home</title>
    <style>
          body {
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
        }
        table {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <h1>Senator Home</h1>
    @if (count($senators) > 0)
    <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Party</th>
                <th>State</th>
                <th>Recorded</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            @foreach($senators as $senator)
                <tr>
                    <td>{{ $senator->id }}</td>
                    <td>{{ $senator->name }}</td>
                    <td>{{ $senator->age }}</td>
                    <td>{{ $senator->gender }}</td>
                    <td>{{ $senator->party->name }}</td>
                    <td>{{ $senator->state->name }}</td>
                    <td>{{ $senator->created_at }}</td>
                    <td>{{ $senator->updated_at }}</td>
                    <td>
                        <a href="/edsenator/{{$senator->id}}">Edit</a>
                        <a
                        href="/delsenator/{{$senator->id}}"
                        onclick="return confirm('Are you sure you want to delete senator?')"
                        >Delete</a>
                    </td>
                </tr>
            @endforeach
    </table>
    @endif
</body>
</html>
