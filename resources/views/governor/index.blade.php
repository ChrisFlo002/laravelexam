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
    <h1>Informations</h1>
    @if ($infos->count() > 0)
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Party</th>
                <th>State</th>
                <th>Recorded</th>
                <th>Updated</th>
            </tr>
            @foreach ($infos as $info)
                <tr>
                    <td>{{ $info->id }}</td>
                    <td>{{  $info->name ?? $info->name_elector}}</td>
                    <td>{{ $info->gender }}</td>
                    <td>{{ $info->party->name_party }}</td>
                    <td>{{ $info->state->name }}</td>
                    <td>{{ $info->created_at }}</td>
                    <td>{{ $info->updated_at }}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>