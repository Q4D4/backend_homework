<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3 | David Kadaria</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        main {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <header>
        <a href="{{ route('fullname') }}">Fullname</a>
        <a href="{{ route('age') }}">Age</a>
        <a href="{{ route('hobby') }}">Hobby</a>
        <a href="{{ route('city') }}">City</a>
        <a href="{{ route('country') }}">Country</a>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>