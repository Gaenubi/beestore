<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form  method="post" action="/beestore/public/register">
    @csrf
        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="first_name">First Name</label>
        <input required type="text" id="first_name" name="first_name">
        </div> 

        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="last_name">Last Name</label>
        <input required type="text" id="last_name" name="last_name">
        </div> 
        
        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="Email">email</label>
        <input required type="text" id="email" name="email">
        </div> 

        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="password">Password</label>
        <input required type="password" value="" id="password" name="password">
        </div>

        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="password_confirmation">Confirm Password</label>
        <input required type="password" value="" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="mt-5">
        <input class="bg-orange-900 px-2 font-bold py-2 border border-black-200 rounded" value="Signup" type="submit">
        </div>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as  $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
</body>
</html>