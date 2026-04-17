<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livewire CRUD App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @livewireStyles
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Livewire App</a>
    </div>
</nav>

<!-- Main Container -->
<div class="container mt-4">

    <div class="card shadow-sm">
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>

</div>

<!-- Footer -->
<footer class="text-center mt-5 mb-3 text-muted">
    <small>Built with Laravel + Livewire + Bootstrap</small>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@livewireScripts

</body>
</html>