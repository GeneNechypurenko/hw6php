<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Поиск файлов</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light" style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
<div class="container mt-5">
    <div class="card p-4 shadow" style="max-width: 500px; margin: 0 auto;">
        <h2 class="text-center">Поиск файлов</h2>
        <form action="search.php" method="post" class="mt-3">
            <div class="mb-3">
                <label for="file_mask" class="form-label">Маска файлов (например, *.txt):</label>
                <input type="text" name="file_mask" id="file_mask" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="search_text" class="form-label">Текст для поиска:</label>
                <input type="text" name="search_text" id="search_text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary w-100">Искать</button>
        </form>
    </div>
</div>
</body>
</html>
