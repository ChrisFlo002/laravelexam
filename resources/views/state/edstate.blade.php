<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Edit</title>
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
    <div class="container">
        <h1>Edit state page</h1>
        <form method="POST" action="/admin/edstate/{{$state->id}}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <table>
                <tr>
                    <td>
                        <label for="nom_etat">State Code:</label>
                    </td>
                    <td>
                    <input type="text" id="code" name="code" placeholder="Enter state name" required value="{{$state->code}}">
                    @error('code')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nom_etat">State Name:</label>
                    </td>
                    <td>
                    <input type="text" id="name" name="name" placeholder="Enter state name" required value="{{$state->name}}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pib">GDP (PIB):</label>
                    </td>
                    <td>
                        <input type="number" step="0.01" id="pib" name="pib" placeholder="Enter GDP value" value="{{$state->pib}}">
                        @error('pib')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="population">Population:</label>
                    </td>
                    <td>
                        <input type="number" id="population" name="population" placeholder="Enter population" value="{{$state->population}}" >
                        @error('population')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="superficie">Area (Superficie):</label>
                    </td>
                    <td>
                        <input type="number" id="area" name="area" placeholder="Enter area size" value="{{$state->area}}">
                        @error('area')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4><img src="{{ Storage::url($state->flag->path)}}" alt="" height="50px"></h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        Choose new flag image:
                    </td>
                    <td>
                        <input type="file" id="flag" name="flag"  accept="image/png,image/jpeg">
                        @error('flag')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn primary">Save</button>
                    </td>
                    <td>
                        <button type="reset" class="btn primary">Cancel</button>

                    </td>
                </tr>
            </table>

        </form>
    </div>
</body>
</html>
