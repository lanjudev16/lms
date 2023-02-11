<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-color{
            background-image:url({{asset('assets/images/Frame.png')}});
        }
    </style>
</head>
<body class="bg-color">
<a class="nav-link" aria-current="page" href={{route('book')}}>
                                <span data-feather="home"></span>
                                Manage BOOK
                            </a>
</body>
</html>