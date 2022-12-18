<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIAKAD UNAND</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="/images/logo.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('/css/pages/index.css')}}">
    <link rel="stylesheet" href="{{asset('/css/components/footer/Footer.css')}}">
</head>

<body>
    <div class='contain'>
        <main class='main'>
            <div>
              <div class='title'>
                <h1>SIAKAD UNAND</h1>
                <h3>Sistem Akademik Universitas Andalas</h3>
              </div>
              <div class='grid'>
                <a href="/session/login" class="text-3xl mx-2 h-12 px-6 py-1 font-semibold text-green-100 transition-colors duration-150 bg-green-600 rounded-lg focus:shadow-outline hover:bg-green-800">
                  <h2>Masuk &rarr;</h2>
                </a>
              </div>
            </div>
            <span class='flex flex-row-reverse'>
                <img src="/images/logo.png" alt="Logo Unand" width=550 height=550 class='flex flex-row-reverse'/>
            </span>
          </main>
</body>

@include('layouts.components.footer')
</html>