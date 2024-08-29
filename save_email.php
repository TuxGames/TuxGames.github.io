<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura o e-mail do formulário
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Verifica se o e-mail é válido
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Define o nome do arquivo onde os e-mails serão armazenados
        $file = 'emails.txt';

        // Abre o arquivo para adicionar o e-mail
        $file_handle = fopen($file, 'a');

        // Escreve o e-mail no arquivo e adiciona uma nova linha
        fwrite($file_handle, $email . PHP_EOL);

        // Fecha o arquivo
        fclose($file_handle);

        // Exibe uma mensagem de sucesso
        echo "E-mail capturado com sucesso!";
    } else {
        // Exibe uma mensagem de erro
        echo "Por favor, insira um e-mail válido.";
    }
}
?>