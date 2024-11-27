<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presidential elector Home</title>
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
    <h1>Electors Home</h1>
    @if (count($electors) > 0)
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
        @foreach($electors as $elector)
        <tr>
            <td>{{ $elector->id }}</td>
            <td>{{ $elector->name_elector }}</td>
            <td>{{ $elector->gender }}</td>
            <td>{{ $elector->party->name }}</td>
            <td>{{ $elector->state->name }}</td>
            <td>{{ $elector->created_at }}</td>
            <td>{{ $elector->updated_at }}</td>
            <td>
                <a href="/edelector/{{$elector->id}}">Edit</a>
                <a
                href="/delelector/{{$elector->id}}"
                onclick="return confirm('Are you sure you want to delete elector?')"
                >Delete</a>
            </td>
        </tr>
    @endforeach
    </table>
    @endif
</body>
</html>
