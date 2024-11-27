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
        form {
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

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1> Edit party page</h1>
    <form action="/edparty/{{$party->id}}" method="post">
        @csrf
        @method('PUT')
        <table>

            <tr>
                <td>
                    <label for="name_party">Name:</label>
                </td>
                <td>
                    <input type="text" id="name_party" name="name_party" value="{{$party->name_party}}">
                    @error('name_party')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </td>

            </tr>
            <tr>
                <td>
                    <button type="submit">Submit</button>
                </td>
                <td>
                    <button type="reset">Cancel</button>
                </td>
            </tr>

    </table>
    </form>
</body>
</html>
