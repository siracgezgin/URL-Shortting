<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Kısaltma Uygulaması</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>URL Kısaltma Uygulaması</h1>
        <form id="urlForm" action="{{ url('/shorten') }}" method="POST">
            @csrf
            <input type="text" name="url" id="urlInput" placeholder="Uzun URL'yi buraya yapıştırın" required>
            <button type="submit" id="shortenButton"><i class="fas fa-cut"></i> URL Kısalt</button>
        </form>
        @if (isset($shortUrl))
            <div class="result">
                <p>Kısaltılmış URL:</p>
                <a href="{{ url($shortUrl) }}" target="_blank">{{ url($shortUrl) }}</a>
                <button id="copyButton"><i class="fas fa-copy"></i> Kopyala</button>
            </div>
        @endif
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
