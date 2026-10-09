<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

```
<title>Laravel P9 - {{ $nama }}</title>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: #f1f5f9;
        color: #1e293b;
    }

    .container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }

    .card {
        width: 100%;
        max-width: 700px;
        background: white;
        padding: 40px;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    h1 {
        margin-top: 0;
        color: #2563eb;
    }

    .info {
        margin: 25px 0;
        padding: 20px;
        background: #eff6ff;
        border-radius: 10px;
    }

    .info p {
        margin: 10px 0;
    }

    .menu {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 25px;
    }

    .menu a {
        text-decoration: none;
        background: #2563eb;
        color: white;
        padding: 10px 16px;
        border-radius: 8px;
    }

    .menu a:hover {
        background: #1d4ed8;
    }
</style>
```

</head>

<body>

<div class="container">

```
<div class="card">

    <h1>Selamat Datang di Laravel P9 👋</h1>

    <p>
        Halo, <strong>{{ $nama }}</strong>!
    </p>

    <p>
        Ini adalah halaman utama project Laravel untuk
        <strong>Tugas Pertemuan 9</strong>.
    </p>

    <div class="info">
        <p>
            <strong>Nama:</strong>
            {{ $nama }}
        </p>

        <p>
            <strong>Mata Kuliah:</strong>
            {{ $matakuliah }}
        </p>

        <p>
            <strong>Semester:</strong>
            {{ $semester }}
        </p>
    </div>

    <p>
        Project ini menggunakan konsep dasar Laravel seperti
        Routing, Blade View, Controller, Model, dan Migration.
    </p>

    <div class="menu">
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="/hello/{{ urlencode($nama) }}">Hello</a>
    </div>

</div>
```

</div>

</body>
</html>
