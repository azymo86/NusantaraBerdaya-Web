<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Pengetesan</title>
</head>

<body>
    <h1>ini adalah halaman Pengetesan</h1>
    <hr>
    <p>

        <div class="card card-primary">
          <h4>Create Data</h4>
            <!-- form start -->
            <form role="form" action="/tes/save" method="post">
                <!-- ini format post data dari laravel -->
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul</label><br>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label><br>
                        <input type="text" name="description" class="form-control" required>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-block btn-primary float-right btn-lg">Submit</button>
                </div>
                {{-- /.footer --}}
            </form>
        </div>

        <hr>
        @foreach ($par as $par)
        <li>
            {{$par->title}}
        </li>
        @endforeach

    </p>

</body>

</html>
