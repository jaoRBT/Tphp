<?php
// Captura a URL
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Quebra a URL em partes
$url_parts = explode('/', $url);

// Verifica qual página carregar
$page = $url_parts[0] ?? '';

switch ($page) {
    case 'paginas':
        if (isset($url_parts[1])) {
            $subpage = $url_parts[1];
            if ($subpage === 'contato') {
                include 'contato.php';
            } else {
                echo 'Página não encontrada';
            }
        } else {
            echo 'Página não especificada';
        }
        break;
    default:
        echo 'Bem-vindo à página inicial';
        break;
}
?>
