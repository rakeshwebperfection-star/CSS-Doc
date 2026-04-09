<?php
header("Content-Type: application/json");

function scanFiles($dir) {
    $result = [];

    foreach (scandir($dir) as $file) {
        if ($file === '.' || $file === '..') continue;

        $path = $dir . '/' . $file;

        if (is_dir($path)) {
            $result = array_merge($result, scanFiles($path));
        } else {
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            if ($ext === 'html' || $ext === 'php') {
                $html = file_get_contents($path);

                preg_match("/<title>(.*?)<\/title>/i", $html, $match);
                $title = $match[1] ?? basename($path);

                $content = strtolower(strip_tags($html));
                $content = preg_replace('/\s+/', ' ', $content);

                $result[] = [
                    "title" => $title,
                    "url" => $path,
                    "content" => substr($content, 0, 5000) // limit size 🔥
                ];
            }
        }
    }

    return $result;
}

echo json_encode(scanFiles("."));
?>