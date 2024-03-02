<?php

namespace Php\SimplePhpCrud\Core;

class Web
{

    public function index()
    {
        if (session_status() == PHP_SESSION_ACTIVE)
            session_destroy();
        $this->ReturnView('view/index.html', ['teste' => 'teste']);
    }

    /**
    * @param String $view passar o diretorio da view dentro da pasta Public
    * @param array $data Array associativo de chaves e valor para transferir como dados para a tela, chave sera a variavel criada na tela.
    */
    public static function ReturnView(String $view, array $data = null)
    {
        $loader = new \Twig\Loader\FilesystemLoader('public/');
        $twig = new \Twig\Environment($loader, [
            'auto_reload' => true,
            'debug' => false,
        ]);

        try {
            echo $twig->render($view, $data);
        } catch (\Twig\Error\LoaderError $e) {
            echo 'Twig/LoaderError: ' . $e->getMessage();
        } catch (\Twig\Error\RuntimeError $e) {
            echo 'Twig/RuntimeError: ' . $e->getMessage();
        } catch (\Twig\Error\SyntaxError $e) {
            echo 'Twig/SyntaxError: ' . $e->getMessage();
        }
    }
}