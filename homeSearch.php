<?php
include_once('./model/search.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Catálogo Bibliográfico da UFC</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-572-designer.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>

<body id="inicio">
    <div class="loader">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="34px" height="40px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.8s" repeatCount="indefinite" />
            </rect>
            <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.8s" repeatCount="indefinite" />
            </rect>
            <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.8s" repeatCount="indefinite" />
            </rect>
        </svg>
    </div>
    <header id="#top">

        <nav class="main-navigation navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="./"><img src="assets/images/logo-memorial.png" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php/">Justificativa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#objetivo">Objetivo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#organizacao">Como foi Organizado</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#agradecimento">Agradecimentos</a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <div class="main-banner change-name">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-text">
                        <h6>Universidade Federal do Ceará</h6>
                        <h2><em>Catálogo</em> Bibliográfico</h2>
                        <div class="white-button">
                            <a href="#justificativa">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="search-form" name="gs" method="GET" action="./homeSearch.php" type="submit" role="search" action="#">
                        <div class="row">
                            <div class="col-lg-3">
                                <fieldset>
                                    <label for="searchTitle" class="form-label">Pesquisar por Assunto</label>
                                    <input type="text" name="assunto" class="searchText" placeholder="Título, Resumo, Autor ou Palavra-chave" autocomplete="on" value="<?php if($assunto!="Título, Resumo, Autor ou Palavra-Chave"){echo $assunto;} ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <label for="chooseCategory" class="form-label">Tipologia</label>
                                    <select name="tipologia" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                                        <option value="" <?php if ($tipologia == "") echo "selected" ?>>Escolha a categoria</option>
                                        <option value="Artigo" <?php if ($tipologia == "'Artigo'") echo "selected" ?>>Artigo</option>
                                        <option value="Dissertação" <?php if ($tipologia == "'Dissertação'") echo "selected" ?>>Dissertação</option>
                                        <option type="checkbox" name="option1" value="Livro" <?php if ($tipologia == "'Livro'") { echo "selected"; } ?>>Livro</option>
                                        <option value="TCC" <?php if ($tipologia == "'TCC'") echo "selected" ?>>TCC</option>
                                        <option value="Tese" <?php if ($tipologia == "'Tese'") echo "selected" ?>>Tese</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <label for="chooseprice" class="form-label">Área do Conhecimento</label>
                                    <select name="area" class="form-select" aria-label="Default select example" id="chooseCategory" onChange="this.form.click()">
                                        <option value="" selected <?php if ($area == "") echo "selected" ?>>Escolha a Área</option>
                                        <option value="Ciências Agrárias" <?php if ($area == "agrarias") echo "selected" ?>>Ciências Agrárias</option>
                                        <option value="Ciências Biológicas" <?php if ($area == "biologicas") echo "selected" ?>>Ciências Biológicas</option>
                                        <option value="Ciências da Saúde" <?php if ($area == "saude") echo "selected" ?>>Ciências da Saúde</option>
                                        <option value="Ciências Exatas e da Terra" <?php if ($area == "exatas") echo "selected" ?>>Ciências Exatas e da Terra</option>
                                        <option value="Ciências Humanas" <?php if ($area == "humanas") echo "selected" ?>>Ciências Humanas</option>
                                        <option value="Ciências Sociais Aplicadas" <?php if ($area == "sociais") echo "selected" ?>>Ciências Sociais Aplicadas</option>
                                        <option value="Engenharias" <?php if ($area == "engenharias") echo "selected" ?>>Engenharias</option>
                                        <option value="Letras" <?php if ($area == "letras") echo "selected" ?>>Linguística, Letras e Artes</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset>
                                    <label for="chooseplan" class="form-label">Ano</label>
                                    <input type="text" name="ano" class="searchText" placeholder="Digite o ano desejado" autocomplete="on" value="<?php echo $ano ?>">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button class="main-button">Nova Pesquisa</button>
                                </fieldset>
                            </div>
                        </div>


                        <div class="row">
                            <h2>Resultados</h2>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Área do Conhecimento</th>
                                    <th scope="col">Área Especifica</th>
                                    <th scope="col">Tipologia</th>
                                    <th scope="col">Autor</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Ano</th>
                                    <th scope="col">Resumo</th>
                                    <!--<th scope="col">Palavra-Chave</th>-->
                                    <th scope="col">Link</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
    $valormax=count($return);
    for($i=0;$i<$valormax;$i++){
?>
                                <tr>
                                    <th scope="row">
                                        <?php
                                            echo $i+1;
                                        ?>
                                    </th>
                                    <td>
                                        <?php
                                            echo $return[$i][0];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $return[$i][1];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $return[$i][2];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $return[$i][3];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $return[$i][4];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                            echo $return[$i][5];
                        
                                        ?>
                                    </td>
                                    <td title='<?php echo $return[$i][6];?>'>
                                        <?php
                                            echo substr($return[$i][6], 0, 350)."...";
                                        ?>
                                    </td>
                                    <!--<td>
                                        <?php
                                            //echo $return[$i][7];
                                        ?>
                                    </td>-->
                                    <td>
                                        <?php
                                            echo $return[$i][10];
                                        ?>
                                    </td>
                                </tr>
<?php
    }
?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer id="agradecimento">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-widget">
                        <img src="assets/images/logo-rosa.png" alt="designer template by TemplateMo">
                        <p>Memorial da UFC</p>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-2">
                    <div class="location-widget">
                        <h4>Agradecimentos</h4>
                        <p>
                            Elaine Cristina Carneiro da Silva
                            <br> Renata Freitas Fernandes
                            <br> Ana Camila Abreu do Nascimento
                            <br> Cinthia Layla Abreu do Nascimento
                            <br> Daniela da Silva
                        </p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="customer-care">
                        <h4>Contato</h4>
                        <ul class="info">
                            <li><a href="#">(85)3366-7414</a></li>
                            <li><a href="#">(85)3366-7913</a></li>
                            <li><a href="#">memorial@ufc.br</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="follow-us">
                        <h4>Follow Us</h4>
                        <ul class="social-links">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                    Instagram
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                    </svg>
                                    Linkedin
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="sub-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Copyright © 2022 Memorial da UFC. All Rights Reserved.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <a href="#top" class="scroll-to-top">
                                    Go to Top
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-up" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        setTimeout(function() {
            $('.loader').fadeToggle();
        }, 1500);
    </script>

</body>

</html>