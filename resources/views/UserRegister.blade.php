<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Accesso Autore - Il Blog di Francesco</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <form action="{{ route('register') }}" method="POST">
        {{ csrf_field() }}

        <input type="text" id="firstName" name="firstName" placeholder="firstName">
        <input type="text" id="lastName" name="lastName" placeholder="lastName">
        <input type="text" id="username" name="username" placeholder="username">
        <input type="text" id="email" name="email" placeholder="email">
        <input type="password" id="password" name="password" placeholder="password">
        <input type="submit">
    </form>
</div>
</body>
</html>