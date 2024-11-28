<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home</title>
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
    <h1>User Home</h1>
    <form action="/newuser">
        <button type="submit">Add User</button>
    </form>
    @if (count($users) > 0)
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Recorded</th>
                <th>Updated</th>
                <th colspan="3">Actions</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->updated_at }}</td>
                    <td>
                        <a href="/detuser/{{ $user->id }}">Details</a>
                    </td>
                    <td>
                        <a href="/eduser/{{ $user->id }}">Edit</a>
                    </td>
                    <td>
                        <a href="/deluser/{{ $user->id }}"
                            onclick="return confirm('Are you sure you want to delete elector?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
</body>

</html>
