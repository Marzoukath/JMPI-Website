<?php
// debug.php - À placer dans le dossier public/

echo "<h1>Debug Laravel Render</h1>";

echo "<h2>Informations serveur</h2>";
echo "Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo "Script Name: " . $_SERVER['SCRIPT_NAME'] . "<br>";
echo "Request URI: " . $_SERVER['REQUEST_URI'] . "<br>";
echo "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "<br>";

echo "<h2>Fichiers dans public/</h2>";
$files = scandir('/var/www/html/public');
foreach($files as $file) {
    if($file !== '.' && $file !== '..') {
        echo $file . "<br>";
    }
}

echo "<h2>Test d'inclusion de Laravel</h2>";
if(file_exists('/var/www/html/public/index.php')) {
    echo "✅ index.php existe<br>";
} else {
    echo "❌ index.php n'existe pas<br>";
}

if(file_exists('/var/www/html/vendor/autoload.php')) {
    echo "✅ autoload.php existe<br>";
} else {
    echo "❌ autoload.php n'existe pas<br>";
}

echo "<h2>Variables d'environnement</h2>";
echo "APP_ENV: " . ($_ENV['APP_ENV'] ?? 'non défini') . "<br>";
echo "APP_DEBUG: " . ($_ENV['APP_DEBUG'] ?? 'non défini') . "<br>";

?>