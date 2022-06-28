<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create new Offer </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>


    </style>
</head>
  <body>




      <main class="container">
        <div class="card" style="text-align:center ;">
          <div class="card-header">
            LARAVEL
        </div>
        <div class="card-body">


        @csrf

        <form method="POST" >

        <h1 class="shadow p-3 mb-5 bg-body rounded" style="text-align:left ;"> Create new offer </h1>

        <div class="shadow p-3 mb-2 bg-body rounded" style="text-align:left ;"> Offer Name </div>
        <input type="text" name="name" class="form-control mb-2">

        <div class="shadow p-3 mb-2 bg-body rounded" style="text-align:left ;"> Offer price </div>
        <input type="text" name="price" class="form-control mb-2">

        <div class="shadow p-3 mb-2 bg-body rounded" style="text-align:left ;"> Offer qty </div>
        <input type="text" name="qty" class="form-control mb-2">

        <div class="shadow p-3 mb-2 bg-body rounded mb-2" style="text-align:left ;"> Offer detils </div>
        <input type="text" name="detils" class="form-control">
        <a type="submit" href="{{url('offers\store')}}" class="btn btn-outline-primary mt-4 w-100" name="submit">save offer</a>

    </form>
        </div>
        </div>

    </main>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
