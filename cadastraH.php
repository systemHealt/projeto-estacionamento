<?php

include('conectar_db.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="teste.css">
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">24/7 Parking</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="vagasA.php">
                    <i class="uil uil-parking-circle"></i>
                    <span class="link-name">Vagas</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Atendimento</span>
                </a></li>
                <li><a href="cadastrar.php">
                    <i class="uil uil-user-circle"></i>
                    <span class="link-name">Cadastro Cliente</span>
                </a></li>
                <li><a href="pagamento.php">
                <i class="fa-regular fa-credit-card"></i>
                    <span class="link-name">Pagamento</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-info-circle"></i>
                    <span class="link-name">Suporte</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="index.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Sair</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Modo Escuro</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Pesquisar...">
            </div>
        </div>
        <div class="container">
            <form action="#">
                <div class="form first">
                    <div class="details personal">
                        <span class="title">Informações Pessoais do cliente</span>
    
                        <div class="fields">
                            <div class="input-field">
                                <label>Nome Completo</label>
                                <input type="text" placeholder="Informe o nome completo" required>
                            </div>
    
                            <div class="input-field">
                                <label>Data de Nascimento</label>
                                <input type="date" placeholder="Insira a data de nascimento" required>
                            </div>
    
                            <div class="input-field">
                                <label>Email</label>
                                <input type="text" placeholder="Informe seu e-mail" required>
                            </div>
    
                            <div class="input-field">
                                <label>Número de telefone</label>
                                <input type="tel" placeholder="Informe seu telefone" required>
                            </div>
    
                            <div class="input-field">
                                <label>Sexo</label>
                                <select required>
                                    <option disabled selected>Selecione o seu sexo</option>
                                    <option>Masculino</option>
                                    <option>Feminino</option>
                                </select>
                            </div>
    
                            <div class="input-field">
                                <label>Nº do CPF</label>
                                <input type="text" placeholder="Informe o seu CPF" required>
                            </div>
                        </div>
                    </div>
                    
                    <div class="fields">
                            <div class="input-field">
                                <label>Categoria</label>
                                <select required name="cat">
                                    <option disabled selected>Seleciona sua categoria</option>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                </select>
                            </div>
                            <div class="input-field">
                                <label>Marca do veiculo </label>
                                <input type="text" placeholder="Digite a Marca do veiculo" required name="marca">
                            </div>

                            <div class="input-field">
                                <label>Nº da Placa</label>
                                <input type="text" placeholder="Nº da Placa" required name="nump">
                            </div>

                            <div class="input-field">
                                <label>Modelo</label>
                                <input type="text" placeholder="Insira o modelo do veiculo" required name="mod">
                            </div>
                            <div class="input-field">
                                <label>Porte</label>
                                <input type="text" placeholder="Insira o modelo do veiculo" required name="mod">
                            </div>

                            <div class="input-field">
                                <label>Cor</label>
                                <input type="text" placeholder="Cor do Veiculo" required name="cor">
                            </div>
                        </div>
                        <button class="nextBtn">
                            <span class="btnText">Cadastrar</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <script src="script.js"></script>
    <script src="dash.js"></script>
</body>
</html>