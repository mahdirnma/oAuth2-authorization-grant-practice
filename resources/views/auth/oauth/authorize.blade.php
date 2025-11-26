<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('passport.authorizations.approve')}}" method="post">
    @csrf
    <input type="hidden" name="state" value="{{$request->state ?? ''}}">
    <input type="hidden" name="client_id" value="{{$client->id ?? ''}}">
    <input type="hidden" name="auth_token" value="{{$authToken ?? ''}}">
    <button type="submit">approve</button>
</form>
<br>
<form action="{{route('passport.authorizations.deny')}}" method="post">
    @csrf
    @method('delete')
    <input type="hidden" name="state" value="{{$request->state ?? ''}}">
    <input type="hidden" name="client_id" value="{{$client->id ?? ''}}">
    <input type="hidden" name="auth_token" value="{{$authToken ?? ''}}">
    <button type="submit">deny</button>
</form>
</body>
</html>
