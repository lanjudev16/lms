<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Repository</title>
    <link rel="shortcut icon" href={{asset('assets/images/logo.png')}} type="image/x-icon">
    <style>
.bg-color {
    background-image: url(http://127.0.0.1:8000/assets/images/4.png), linear-gradient(180deg, #111111 0%, rgba(17, 17, 17, 0) 100%);
    background-blend-mode: overlay;
    border-radius: 8px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100vh;
    overflow-y: hidden;
}
        .dflex {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    color: #d2d9d9;
    font-size: 35px;
    font-weight: 800;
}
.dflex a {
    text-decoration: none;
    color: wheat;
    font-size: 45px;
}
.dflex h2 {
    margin-bottom: 10px;
}
.dflex h2{
    text-align:center;
}
.colorStyle{
    color:green;
}
    </style>
</head>
<body class="bg-color">


    <div class="dflex">
        <h2>Welcome to our course <span class="colorStyle">repository system</span> </h2>
        <a href={{route('book')}}>Go to Dashboard</a>
    </div>
</body>
</html>