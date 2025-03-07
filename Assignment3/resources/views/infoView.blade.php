<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <style>
       
        .form-container {
            max-width: 600px;
            margin: 50px auto; 
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Personal Information</h1>
        <hr>

        @if(session('success'))
            <p style="color: green; text-align: center;">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach 
            </ul>
        @endif

        <form action="{{ route('form.submit') }}" method="post">
            @csrf
            <table class="w-full">
                <tbody>
                    <tr>
                        <td><label for="firstname">First Name</label></td>
                        <td><input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" required maxlength="50"></td>
                    </tr>
                    @error('firstname')
                        <tr>
                            <td></td>
                            <td style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="lastname">Last Name</label></td>
                        <td><input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" required maxlength="50"></td>
                    </tr>
                    @error('lastname')
                        <tr>
                            <td></td>
                            <td style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label>Sex</label></td>
                        <td>
                            <div>
                                <input type="radio" name="Sex" value="male" id="male" {{ old('Sex') == 'male' ? 'checked' : '' }} required>
                                <label for="male">Male</label>
                                <input type="radio" name="Sex" value="female" id="female" {{ old('Sex') == 'female' ? 'checked' : '' }}>
                                <label for="female">Female</label>
                            </div>
                        </td>
                    </tr>
                    @error('Sex')
                        <tr>
                            <td></td>
                            <td style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Mobilephone">Mobile Phone</label></td>
                        <td><input type="tel" name="Mobilephone" id="Mobilephone" value="{{ old('Mobilephone') }}" required pattern="09[0-9]{2}-[0-9]{3}-[0-9]{4}" placeholder="e.g., 0989-123-4567"></td>
                    </tr>
                    @error('Mobilephone')
                        <tr>
                            <td></td>
                            <td style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Telephone-Number">Tel No.</label></td>
                        <td><input type="tel" name="Telephone-Number" id="Telephone-Number" value="{{ old('Telephone-Number') }}" required pattern="[0-9]+"></td>
                    </tr>
                    @error('Telephone-Number')
                        <tr>
                            <td></td>
                            <td style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Birthdate">Birth date</label></td>
                        <td><input type="date" name="Birthdate" id="Birthdate" value="{{ old('Birthdate') }}" required></td>
                    </tr>
                    @error('Birthdate')
                        <tr>
                            <td></td>
                            <td style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Address">Address</label></td>
                        <td><input type="text" name="Address" id="Address" value="{{ old('Address') }}" required maxlength="100"></td>
                    </tr>
                    @error('Address')
                        <tr>
                            <td></td>
                            <td style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td><input type="email" name="Email" id="Email" value="{{ old('Email') }}" required maxlength="100"></td>
                    </tr>
                    @error('Email')
                        <tr>
                            <td></td>
                            <td style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror

                    <tr>
                        <td><label for="Website">Website</label></td>
                        <td><input type="url" name="Website" id="Website" value="{{ old('Website') }}" required></td>
                    </tr>
                    @error('Website')
                        <tr>
                            <td></td>
                            <td style="color: red;">{{ $message }}</td>
                        </tr>
                    @enderror
                </tbody>
            </table>

            <div style="margin-top: 20px; text-align: center;">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>