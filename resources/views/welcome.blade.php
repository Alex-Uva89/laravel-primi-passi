<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>hello world</h1>
        <ul class="list">
            <li><a href="{{ route('uno') }}">uno</a></li>
            <li><a href="{{ route('due') }}">due</a></li>
            <li><a href="{{ route('tre') }}">tre</a></li>
            <li><a href="{{ route('quattro') }}">quattro</a></li>   
        </ul>
    </div>

    <style>

        body{
            width: 100%;
        }
        div{
            width: 80%;
            margin: 0 auto;
            text-align:center;
        }

        ul{
            list-style: none;
        }

        a{
            text-decoration: none;
            color: black;
        }

        .list{
            display: flex;
            justify-content: space-evenly;
        }
    </style>
</body>
</html>