<?php


//reg lindo
//meu código PHP vem aqui
//LOOSER
//SOMOS UM CADAVER ADIADO (FERNANDO PESSOA)

$pg = isset($_GET['pg']);

if ($pg) {
    //verdadeiro
    switch ($_GET['pg']) {

        case 'contato':
            //incluir a página contato
            include_once './paginas/includes/header.php';
            include_once './paginas/contato.php';
            include_once './paginas/includes/footer.php';

            break;

        case 'inicio':
            //incluir a página inicio
            include_once './paginas/includes/header.php';
            include_once './paginas/inicio.php';
            include_once './paginas/includes/footer.php';

            break;

        case 'produtos':
            //incluir a página produtos
            include_once './paginas/includes/header.php';
            include_once './paginas/produtos.php';
            include_once './paginas/includes/footer.php';
            break;

        case 'serviços':
            //incluir a página serviços
            include_once './paginas/includes/header.php';
            include_once './paginas/serviços.php';
            include_once './paginas/includes/footer.php';
            break;

        case 'sobre':
            //incluir a página sobre
            include_once './paginas/includes/header.php';
            include_once './paginas/sobre.php';
            include_once './paginas/includes/footer.php';
            break;

        case 'login':
            //incluir a página login
            include_once './paginas/login.php';
            break;
        
        case 'login1':
            //incluir a página login
            include_once './paginas/login1.php';
            break;
        
        case 'login2':
            //incluir a página login
            include_once './paginas/login2.php';
            break;
        
        case 'login3':
            //incluir a página login
            include_once './paginas/login3.php';
            break;

        
        default:
            //Página de Erro.
            echo 'Página não encontrada <br> Digite direito, que aqui não é tradutor';
            break;
        //fim do switch
    }
} else {
    //incluir a página contato
    include_once './paginas/includes/header.php';
    include_once './paginas/inicio.php';
    include_once './paginas/includes/footer.php';
}
