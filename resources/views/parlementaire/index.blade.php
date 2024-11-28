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

        h1 {
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
    <h1>Parliament Home</h1>
    <form action="/newparle">
        <button type="submit" style="align: center; background-color: blue; color:white;">Add Parliament</button>
    </form>
    @if (count($parlementaires) > 0)
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
                <th colspan="3">Action</th>
            </tr>
            @foreach ($parlementaires as $parle)
                <tr>
                    <td>{{ $parle->id }}</td>
                    <td>{{ $parle->name }}</td>
                    <td>{{ $parle->age }}</td>
                    <td>{{ $parle->gender }}</td>
                    <td>{{ $parle->party->name_party }}</td>
                    <td>{{ $parle->state->name }}</td>
                    <td>{{ $parle->created_at }}</td>
                    <td>{{ $parle->updated_at }}</td>
                    <td>
                        <a href="/detparle/{{ $parle->id }}">Details
                        </a>
                    </td>
                    <td>
                        <a href="/edparle/{{ $parle->id }}">Edit</a>
                    </td>
                    <td>
                        <a href="/delparle/{{ $parle->id }}"
                            onclick="return confirm('Are you sure you want to delete parliament?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</body>

</html>
