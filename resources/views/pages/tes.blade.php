<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Pengetesan</title>
</head>

<body>
    <h1>ini adalah halaman Pengetesan</h1>
    <hr>
    <div class="card card-primary">
        <h4>Save</h4>
        <!-- form start -->
        <form role="form" action="/tes/save" method="post">
            <!-- ini format post data dari laravel -->
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label><br>
                    <input type="text" name="judul" required>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label><br>
                    <input type="text" name="description" required>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right btn-lg">Submit</button>
            </div>
            {{-- /.footer --}}
        </form>
    </div>
    <hr>
    <div class="card card-primary">
        <h4>Change</h4>
        <!-- form start -->
        <form role="form" action="/tes/change" method="post">
            <!-- ini format post data dari laravel -->
            <input type="hidden" name="_token" value="{{csrf_token()}}">


            <div class="card-body">
                <label for="exampleInputEmail1">pilih judul</label><br>
                <select name="id">
                  @foreach ($tit as $title)
                    <option value="{{$title->id}}">{{$title->title}}</option>
                  @endforeach
                </select>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label><br>
                    <input type="text" name="judul" required>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right btn-lg">Submit</button>
            </div>
            {{-- /.footer --}}
        </form>
    </div>
    <hr>
    @foreach ($par as $par)
      <li>{{$par->title}}</li>
    @endforeach

    <hr>

</body>

</html>
