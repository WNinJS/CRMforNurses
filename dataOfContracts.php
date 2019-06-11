<!DOCTYPE html>
<html lang="en" class="h-100 w-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My Style CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title> Данные о договорах </title>
</head>
<body>
    <!-- ШАПКА -->
    <nav class="navbar navbar-expand-lg navbar w-100" style="background: white;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">&#9776;</span>
        </button>

        <div class="collapse navbar-collapse w-100 " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto d-flex justify-content-center align-items-center w-100 p-0 m-0">
                <li class="navbar-item-active text-center"> <a class="nav-link" href="dataOfNurses.php"> СИДЕЛКИ </a></li>
                <li class="navbar-item-active text-center"> <a class="nav-link" href=""> ДОГОВОРЫ </a></li>
                <li class="navbar-item-active text-center"> <a class="nav-link" href=""> ИНСТРУМЕНТ ПОДБОРА СИДЕЛОК </a></li>
                <li class="navbar-item-active text-center"> <a class="nav-link" href=""> АНАЛИТИКА </a></li>
                <li class="navbar-item-active text-center"> <a class="nav-link" href=""> МЕНЕДЖЕРЫ </a></li>
                <li class="navbar-item-active d-flex justify-content-center"> 
                    <p class="d-flex align-items-center m-0"> Имя </p>
                    <a class="nav-link" href="login.php"> 
                        <img src="images/logout.png" alt="logout" style="width: 25px; heigth: 25px; margin-left: 5px;"> 
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <br>
    <div class="container-fluid d-flex justify-content-center h-100 mx-0">
        <div class="row h-100 w-100">
            <!-- Кнопки и их описание -->
            <div class="col-12 h-100 text-center">
                <div class="d-flex flex-row justify-content-center">
                    <button class="btn btn-light-nurses-main" onclick="goToViewContracts()">
                        <script type="text/javascript">
                            function goToViewContracts() 
                            { 
                                location.href = "dataOfContractsView.php" 
                            }; 
                        </script> 
                        ПРОСМОТРЕТЬ
                    </button>
                </div>
                
                <br>

                <!-- Кнопка, вызывающее модальное окно для добавления данных о новом договоре -->
                <div class="d-flex flex-row justify-content-center">
                    <button class="btn btn-light-nurses-main" onclick="goToContractsAdd()">
                    <script type="text/javascript">
                        function goToContractsAdd()
                        {
                            location.href = "dataOfContractsAdd.php"
                        }   
                    </script>
                        ДОБАВИТЬ
                    </button>
                </div>

                <br>

                <div class="d-flex flex-row justify-content-center">
                    <button class="btn btn-light-nurses-main" onclick="goToEditContracts()">
                        <script type="text/javascript">
                            function goToEditContracts() 
                            { 
                                location.href = "dataOfContractsEdit.php" 
                            }; 
                        </script> 
                        РЕДАКТИРОВАТЬ
                    </button>
                </div>

                <br>

                <div class="d-flex flex-row justify-content-around">
                    <button class="btn btn-light-nurses-main">
                        ЗАПОЛНИТЬ ДОГОВОР
                    </button>
                </div>   
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>