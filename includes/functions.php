<?php 
// LOGAN HOOVER
function esc_html(string $text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
function read_csv_rows(string $path) {
    if (!is_file($path)) {
        return [];
    }
    $file = fopen($path, 'rb');
    if ($file === false) {
        return [];
    }
    while (!feof($file)) {
        $game = fgetcsv($file);
        if ($game === false) continue;
        $games[] = $game;
    }
    fclose($file);
    return $games;
}
function write_csv_rows(string $path, array $rows) {
    $filepath = fopen($path, "wb");
    if ($filepath === false) {
        echo("bad path direction");
        return False;
    }
    foreach($rows as $row) {
        fputcsv($filepath, $row);
    }
    fclose($filepath);
    return True;
}
?>