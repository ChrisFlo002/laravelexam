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
        <h1>Edit presidential elector page</h1>
        <form method="POST" action="/edelector/{{$elector->id}}">
            @csrf
            @method("PUT")
            <table>
                <tr>
                    <td>
                        <label for="nom">Full name:</label>
                    </td>
                    <td>
                    <input type="text" id="name_elector" name="name_elector" placeholder="Enter elector name" required value="{{$elector->name_elector}}">
                    @error('name_elector')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="genre">Gender:</label>
                    </td>
                    <td>
                        <select id="gender" name="gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        @error('gender')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="etat">State:</label>
                    </td>
                    <td>
                        <select id="state_id" name="state_id">
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                           </select>
                           @error('state_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="superficie">Party:</label>
                    </td>
                    <td>
                        <select id="party_id" name="party_id" >
                            @foreach ($parties as $party)
                                <option value="{{ $party->id }}">{{ $party->name_party}}</option>
                            @endforeach
                        </select>
                        @error('party_id')
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
