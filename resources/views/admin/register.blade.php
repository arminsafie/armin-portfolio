
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("img/admin/css/boot.min.css") }}">
    <link rel="stylesheet" href="{{ asset("img/admin/css/main.css") }}">
    <script src="{{ asset("img/admin/js/bootstrap.bundle.min.js") }}}" defer></script>
    <title>Document</title>
</head>
<body class="container-fluid text-dark-blue-form">
<div class="row vh-100 d-flex justify-content-center align-items-center p-3 ">
    <div class="col-md-4 shadow round-m p-4 ">
        <div class="row justify-content-around mb-4" >
            <div class="col-md-5 ">
                <img src="{{ asset("img/admin/images/logo.png") }}" class="w-100 round-m" alt="">
            </div>
        </div>
        {{ html()->form('POST',route('register.action'))->class('d-flex flex-column gap-3')->open() }}
        <div class="d-flex align-items-center  justify-content-between gap-3">
            <label class="text-white">name:</label>
            <input type="text" name="" class="w-100 border-0 bg-eee rounded p-2 " id="">
        </div>
        <div class="d-flex align-items-center justify-content-between gap-3">
            <label class="text-white">email:</label>
            {{ html()->text('email')->class('w-100 border-0 bg-eee rounded p-2') }}
        </div>
        <div class="d-flex align-items-center justify-content-between gap-3">
            <label class="text-white">password:</label>
            <input type="password" name="" class="w-100 border-0 bg-eee rounded p-2 " id="">
        </div>

        <button type="submit" class="btn btn-primary ">Login</button>
        {{ html()->form()->close() }}
    </div>
</div>
</body>
</html>
