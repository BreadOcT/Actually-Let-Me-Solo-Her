
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Monitoring Bimbingan Belajar</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav>
    <div class="container" style="text-align: center;">
        <h1>Selamat Datang Di Gaku!(versi laravel sederhana wkwk)</h1>
        <a href="{{ route('login') }}" style="color: black;">Login Siswa</a><br>
        <a href="{{route('admin.login.form')}}" style="color: black;">Login Admin</a><br>
    </div>
</nav>
</body>
</html>