<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Imagens/logo.png">
    <link rel="stylesheet" href="StyleForm.css">
    <script src="Script.js" defer></script>
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <a href="index.php">
                <p style="font-size: 30px; color: beige;">Ango<span style="color: rgb(248, 214, 129);">Doc</span>
                </p>
            </a>
            <ul>
                <a href="index.php"><li>Home</li></a>
            </ul>
        </nav>
    </header>
    <section class="form">
        <h2>Certidão de Óbito</h2>
        <h4>Insira os dados do malogrado</h4>
        <div  class="container-form">
            <img src="Imagens/undraw_Completed_m9ci.png" alt="">
            <form action="Controller/submitCert.php" class="form-certidao" method="post">
                <label for="#"> Insira o Nome completo</label>
                <input type="text" placeholder="Nome" name="nome">
                <label for="dataNasc">Data do Nascimento</label>
                <input type="date" placeholder="Data do nascimentpo" id="dataNasc" name="dataNasc">
                <label for="dataFale">Data do falecimento</label>
                <input type="date" placeholder="Data do falecimento" id="dataFale" name="dataFalecimento">
                <label for="#">Nome Do Hospital</label>
                <input type="text" placeholder="Hospital em que faleceu" name="hospital">
                <label for="#"> Nome do Cemitério</label>
                <input type="text" placeholder="Cemitério" name="cemiterio">
                <div class="genero" class="naturalidade">
                        <label for="genero">Género</label>
                        <input type="radio" name="genero" value="masculino">Masculino
                        <input type="radio" name="genero" value="feminino">Feminino
                </div>
                <div class=" Naturalidade">
                    <label for="Naturalidade"> Natural de:</label>
                    <select id="Natural" name="naturalidade" required>
                         <option value="Bengo" id="option"> Bengo</option>
                         <option value="Benguela" id="option"> Benguela</option>
                         <option value="Bie" id="option"> Bié</option>
                         <option value="Cabinda" id="option"> Cabinda</option>
                         <option value="CuandoCubango" id="option"> Cuando Cubango</option>
                         <option value="CuanzaNorte" id="option"> Cuanza Norte</option>
                         <option value="CuanzaSul" id="option"> Cuanza Sul</option>
                         <option value="Cunene" id="option"> Cunene</option>
                         <option value="Huambo" id="option"> Huambo</option>
                         <option value="Huila" id="option"> Huíla</option>
                         <option value="Luanda" id="option"> Luanda</option>
                         <option value="LundaNorte" id="option"> Lunda Norte</option>
                         <option value="LundaSul" id="option"> Lunda Sul</option>
                         <option value="Malanje" id="option"> Malanje</option>
                         <option value="Moxico" id="option"> Moxico</option>
                         <option value="Namibe" id="option"> Namibe</option>
                         <option value="Uige" id="option"> Uíge</option>
                         <option value="Zaire" id="option"> Zaire</option>
                    </select>
                 </div>
                <input type="text" placeholder="Número da cédula Pessoal" name="cedula">
                 <button>Submeter</button>
            </form>
        </div>
        
    </section>
    <section class="fala-connosco">
        <div>
            <h2>Fale Conosco</h2>
            <p>Temos prazer em ouvir você! Se tiver dúvidas, sugestões ou comentários, entre em contato conosco. Nossa equipe está disponível para ajudar a resolver qualquer questão que você possa ter. Utilize o formulário ao lado. 
                Estamos aqui para garantir que você tenha a melhor experiência possível. Fale conosco e permita-nos ajudar você!</p>
        </div>
        <div>
            <input type="text" placeholder=" Fale Conosco">
            <button> Enviar</button>
        </div>
    </section>
    <section class=" footer">
        <img src="Imagens/SME.jpg" alt="">
            <img src="Imagens/Migracao.png" alt="" id="Migracao">
    </section>
</body>
</html>