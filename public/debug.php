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

echo "<h2>Test Laravel direct</h2>";
try {
    // Inclure Laravel manuellement
    require_once '/var/www/html/vendor/autoload.php';
    $app = require_once '/var/www/html/bootstrap/app.php';
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    
    echo "✅ Laravel peut être chargé<br>";
    
    // Simuler une requête vers /events
    $request = Illuminate\Http\Request::create('/events', 'GET');
    $response = $kernel->handle($request);
    
    echo "Status: " . $response->getStatusCode() . "<br>";
    if($response->getStatusCode() === 200) {
        echo "✅ Route /events existe dans Laravel<br>";
    } else {
        echo "❌ Route /events n'existe pas ou erreur<br>";
    }
    
} catch(Exception $e) {
    echo "❌ Erreur Laravel: " . $e->getMessage() . "<br>";
}

echo "<h2>Configuration Nginx active</h2>";
$nginxConfig = file_get_contents('/etc/nginx/sites-available/default');
if($nginxConfig) {
    echo "<pre style='background: #f5f5f5; padding: 10px; font-size: 12px; max-height: 300px; overflow-y: scroll;'>";
    echo htmlspecialchars(substr($nginxConfig, 0, 1000));
    echo "...</pre>";
} else {
    echo "❌ Impossible de lire la configuration nginx<br>";
}

echo "<h2>Test direct des URLs</h2>";
// Tester les redirections nginx
$urls_to_test = ['/test', '/events', '/formulaire'];
foreach($urls_to_test as $url) {
    $headers = get_headers("http://localhost$url", 1);
    echo "URL $url: " . ($headers[0] ?? 'Erreur') . "<br>";
}

echo "<h2>Test de redirection nginx</h2>";
echo "Si vous voyez cette page via /debug.php, alors nginx traite les fichiers .php<br>";
echo "Si /test ou /events ne fonctionnent pas, c'est que nginx ne redirige pas vers index.php<br><br>";

// Test simple de redirection
if(isset($_SERVER['REQUEST_URI'])) {
    $uri = $_SERVER['REQUEST_URI'];
    echo "URI actuelle: $uri<br>";
    
    if($uri === '/debug.php') {
        echo "✅ Accès direct à un fichier PHP fonctionne<br>";
    } else {
        echo "🔄 Cette requête a été redirigée par nginx vers debug.php<br>";
    }
}

echo "<h2>Test Laravel via index.php direct</h2>";
// Forcer l'accès à index.php avec query string
$indexUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . "/index.php?test=1";
echo "<a href='$indexUrl' target='_blank'>Tester index.php?test=1</a><br><br>";

?>