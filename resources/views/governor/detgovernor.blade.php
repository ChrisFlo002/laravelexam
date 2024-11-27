<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Governor Home</title>
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
    <h1>Governors Home</h1>
    @if (count($governors) > 0)
    <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Party</th>
                <th>State</th>
                <th>Recorded</th>
                <th>Updated</th>
                <th>Action</th>
            </tr>
            @foreach($governors as $governor)
                <tr>
                    <td>{{ $governor->id }}</td>
                    <td>{{ $governor->name_governor }}</td>
                    <td>{{ $governor->gender }}</td>
                    <td>{{ $governor->party->name }}</td>
                    <td>{{ $governor->state->name }}</td>
                    <td>{{ $governor->created_at }}</td>
                    <td>{{ $governor->updated_at }}</td>
                    <td>
                        <a href="/edgovernor/{{$governor->id}}">Edit</a>
                        <a
                            href="/delgovernor/{{$governor->id}}"
                            onclick="return confirm('Are you sure you want to delete governor?')"
                        >Delete
                        </a>
                    </td>
                </tr>
    @endforeach
    </table>
    @endif
</body>
</html>
