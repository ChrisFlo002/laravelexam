<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
        }
        table {
            width: 30%;
            margin: 0 auto;
            padding: 0px;
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
    <h1>Party Home</h1>
    @if (count($parties) > 0)
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach($parties as $party)
        <tr>
            <td>{{ $party->id }}</td>
            <td>{{ $party->name_party }}</td>
            <td>
                <a href="/edparty/{{$party->id}}">Edit</a>
                <a
                href="/delparty/{{$party->id}}"
                onclick="return confirm('Are you sure you want to delete senator?')"
                >Delete</a>
            </td>
        </tr>
    @endforeach
    </table>
    @endif
</body>
</html>
