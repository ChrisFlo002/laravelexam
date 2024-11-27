<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flag Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1{
            text-align: center;
        }
        table{
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
    <h1>Flag Home</h1>
    @if (count($flags) > 0)
    <table>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
            @foreach($flags as $flag)
                <tr>
                    <td>{{ $flag->id }}</td>
                    <td>{{ $flag->image }}</td>
                    <td>
                        <a href="/edflag/{{$flag->id}}">Edit</a>
                        <a
                        href="/delflag/{{$flag->id}}"
                        onclick="return confirm('Are you sure you want to delete flag?')"
                        >Delete</a>
                    </td>
                </tr>
            @endforeach
    </table>
    @else
        <p>No flags found.</p>
    @endif
</body>
</html>
