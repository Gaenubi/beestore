<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form  method="POST"action="/beestore/public/login">
    @csrf
        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="Email">email</label>
        <input type="text" id="email" name="email">
        </div> 

        <div class="flex flex-col px-5 py-7">
        <label class="font-bold" for="password">Password</label>
        <input type="text" value="" name="password">
        </div>

        <div class="mt-5">
        <input class="bg-orange-900 px-2 font-bold py-2 border border-black-200 rounded" value="Signin" type="submit">
        </div>
    </form>
</body>
</html>