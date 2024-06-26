<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <link rel="stylesheet" href="Style.css">
    <link rel="icon" href="Imagens/logo.png">
    <script src="Script.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AngoDoc</title>
</head>

<body>
    <div id="overlay" class="transition" class="hiden">
        <header>
            <nav>
                <a href="index.php">
                    <p style="font-size: 30px; color: beige;">Ango<span style="color: rgb(248, 214, 129);">Doc</span>
                    </p>
                </a>
                <ul>
                    <a href="index.php"><li>Home</li></a>
                   <a href="#selectBI"><li>Documentos</li></a>
                    <a href="#mapa">  <li>Agentes Certificados</li></a>
                </ul>
                <a onclick="showOptions(formCadastro)" href="cadastro.php"><img src="Imagens/adicionar-usuario.png" alt="" width="30px" height="30px"></a>
            </nav>
        </header>
       
    </div>
    <hr>
    <div id="formCadastro" style="display: none;">
        <p>Escolha o perfil de login</p>
        <a href="cadastroAgente.php">Agente certificado</a>
        <a href="cadastroAdmin.php">Administrador</a>
    </div>
    <section>
        <div id="initialFrase">
            <h1 style="font-size: 45px;">Solicite os seus documentos</h1>
            <p style="font-size: 30px;">Agora é possível solicitar os seus documentos online!</p>
            <button><a href="#selectBI">Solicitar agora</a> </button>
        </div>
        <div class="img">
            <img src="Imagens/undraw_Learning_re_32qv.png" alt="">
        </div>
    </section>
    <section class="documentTipe">
        <a href="BI.php">
            <div class="selectDocument" id="selectBI">
                <h2>Bilhete de identidade</h2>
                <p class="textDocumentTipe"><b> Solicite um novo Bilhete de identidade ou actualize, de uma forma simples e rápido. Somos a melhor solução para si e para a sua família.</b></p>
                <p style="font-size: 20px; color: beige; margin: 25px;">Ango<span style="color: rgb(248, 214, 129);">Doc</span>

            </div>
        </a>
        <a href="passaporte.php">
            <div class="selectDocument" id="selectPass">
                <h2>Passaporte</h2>
                <p class="textDocumentTipe"><b> Solicite um novo Passaporte ou actualize,  de uma forma simples e rápido. Somos a melhor solução para si e para a sua família.</b></p>
                <p style="font-size: 20px; color: beige; margin: 25px;">Ango<span style="color: rgb(248, 214, 129);">Doc</span>

            </div>
        </a>
        <a href="certidao.php">
            <div class="selectDocument" id="selectCert">
                <h2>Certidão de Óbito</h2>
                <p class="textDocumentTipe"><b> Solicite a emissão de uma certidão de óbito,  de uma forma simples e rápido. Somos a melhor solução para si e para a sua família.</b></p>
                <p style="font-size: 20px; color: beige; margin: 25px;">Ango<span style="color: rgb(248, 214, 129);">Doc</span>
            </div>
        </a>
    </section> <br> <br>
    <section class="container-map" id="mapa">
        <div class="map-descrition">
            <h2> Lojas mais próximas de si</h2>
            <span> Luanda</span>
            <p> Localiza os Agentes mais próximos de si e faça o seu agendamento. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus quia error, expedita quae quaerat sunt magnam sit rem molestiae labore placeat, velit a at. 
                Quae debitis totam aspernatur qui atque!</p>
        </div>
        <div class="map">
            <img src="Imagens/mapa.png" alt="">
        </div>
    </section><br> <br> <br>
    <section class="fala-connosco">
        <div>
            <h2>Fale Conosco</h2>
            <p>Temos prazer em ouvir você! Se tiver dúvidas, sugestões ou comentários, entre em contato conosco. Nossa equipe está disponível para ajudar a resolver qualquer questão que você possa ter. Utilize o formulário ao lado. 
                Estamos aqui para garantir que você tenha a melhor experiência possível. Fale conosco e permita-nos ajudar você!</p>
        </div>
        <div>
            <form action="Controller/mensagem.php">
                <input type="text" placeholder="Fale conosco" name="texto">
                <button> Enviar</button>
            </form>
        </div>
    </section>
    <section class="footer">
        <img src="Imagens/SME.jpg" alt="">
            <img src="Imagens/Migracao.png" alt="" id="Migracao">

    </section>
</body>

</html>