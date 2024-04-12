<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>User List - Tutorial CRUD Laravel 11 @ abudata.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
 
<body>
 
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
 
            <h3>User List</h3>
 
            <!-- Notifikasi menggunakan flash session data -->
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
 
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('user.create') }}" class="btn btn-md btn-primary mb-3 float-end">New
                        User</a>
 
                    <table class="table table-success table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Create At</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                          action="{{ route('user.destroy', $user->id) }}" method="POST">
                                          <a href="{{ route('user.edit', $user->id) }}" class="btn">
                                            <i class="fas fa-pen-to-square"></i>
                                        </a>                                        
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center text-mute" colspan="4">Data user tidak tersedia</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
 
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/64ed038662.js" crossorigin="anonymous"></script>
</body>
<footer>
    <div class="container"
    style="position: absolute; bottom:0%; width:100%; text-align:center; background-color:azure">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }}) by Amelia Nurbaeti Web Programming 11
    </div>
</footer>
 
</html>