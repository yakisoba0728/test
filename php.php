<?php
$directory = __DIR__; // 현재 실행 중인 파일의 디렉토리 경로

if (is_dir($directory)) {
    if ($handle = opendir($directory)) {
        echo "<h2>파일 목록:</h2>";
        echo "<ul>";

        while (false !== ($entry = readdir($handle))) {
            // 현재 디렉토리(.)와 부모 디렉토리(..)는 제외합니다.
            if ($entry != "." && $entry != "..") {
                echo "<li>$entry</li>";
            }
        }

        echo "</ul>";
        closedir($handle);
    } else {
        echo "디렉토리를 열 수 없습니다.";
    }
} else {
    echo "유효한 디렉토리가 아닙니다.";
}
?>
