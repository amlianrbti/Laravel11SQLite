<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Slicing</title>
    </head>
    <body style="background-color: aqua">
            <div class="container m-5"><br>
              <div class="card text-center">
                <div class="card-header">
                  WELCOME TO SQL Lite Laravel 11
                </div>
                <div class="card-body">
                  <h5 class="card-title">From: Tutorial CRUD Laravel 11 SQL Lite</h5>
                  <p class="card-text">Dari tutorial hasil yang akan di dapatkan adalah: <br>
                    Tampilan Index, Create, Edit, dan Delete</p>
                    <a href="https://elearning.smapluspgri.sch.id/mod/book/view.php?id=613&chapterid=365">Tutorial ada di sini</>
                </div>
              </div>
            </div>

            <footer>
                <div class="container"
                style="position: absolute; bottom:0%; width:100%; text-align:center; background-color:azure">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) by Amelia Nurbaeti Web Programming 11
                </div>
            </footer>
           
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
