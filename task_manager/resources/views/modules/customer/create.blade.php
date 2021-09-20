<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</head>
<body>
<form method="post" action="{{route('add')}}">
    @csrf
    <div class="container">
        <div class="justify-content-center" style="text-align: center; align-items: center">
            <div class="form-group">
                <label>Họ và Tên</label>
                <input type="text" class="form-control" name="userName">
            </div>
        </div>
        <div class="justify-content-center" style="text-align: center; align-items: center">
            <div class="form-group">
                <label for="exampleInputEmail1">Số Điện Thoại</label>
                <input type="number" class="form-control" name="phone">
            </div>
        </div>
        <div class="justify-content-center" style="text-align: center; align-items: center">
            <div class="form-group">
                <label for="exampleInputEmail1">Nhập Email</label>
                <input type="email" class="form-control" name="email">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('index')}}" class="btn btn-danger">Back</a>
    </div>
</form>
</body>
</html>
