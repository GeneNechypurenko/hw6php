<?php
$searchDir = 'sample_folder/';

$fileMask = isset($_POST['file_mask']) ? $_POST['file_mask'] : '';
$searchText = isset($_POST['search_text']) ? $_POST['search_text'] : '';

if (empty($fileMask)) {
    die("Укажите маску для поиска файлов.");
}

$filePattern = $searchDir . str_replace(['*', '?'], ['*', '?'], $fileMask);
$files = glob($filePattern);

echo "<h2>Результаты поиска:</h2>";

if (empty($files)) {
    echo "<p>Файлы не найдены по маске '$fileMask'.</p>";
} else {
    echo "<ul>";
    foreach ($files as $file) {
        echo "<li><strong>" . basename($file) . "</strong>";

        if (!empty($searchText)) {
            $fileContent = file_get_contents($file);
            $positions = [];

            $offset = 0;
            while (($pos = strpos($fileContent, $searchText, $offset)) !== false) {
                $positions[] = $pos;
                $offset = $pos + strlen($searchText);
            }
            if (!empty($positions)) {
                echo " – найден текст на позициях: " . implode(', ', $positions);
            } else {
                echo " – текст не найден в этом файле";
            }
        }
        echo "</li>";
    }
    echo "</ul>";
}
?>
