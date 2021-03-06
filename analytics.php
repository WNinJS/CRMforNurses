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

    <title> Аналитика </title>
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
                <li class="navbar-item-active text-center"> <a class="nav-link" href="dataOfContracts.php"> ДОГОВОРЫ </a></li>
                <li class="navbar-item-active text-center"> <a class="nav-link" href="selectToolNurses.php"> ИНСТРУМЕНТ ПОДБОРА СИДЕЛОК </a></li>
                <li class="navbar-item-active text-center"> <a class="nav-link linkActive" href="analytics.php"> АНАЛИТИКА </a></li>
                <li class="navbar-item-active text-center"> <a class="nav-link" href="dataOfManagers.php"> МЕНЕДЖЕРЫ </a></li>
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
            <div class="col-12 h-100 text-center d-flex flex-column align-items-center">
                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main" data-toggle="modal" data-target="#generalProfitModal">
                        ОБЩАЯ ПРИБЫЛЬ ФИРМЫ
                    </button>
                </div>
                
                <br>

                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main" data-toggle="modal" data-target="#nurseProfitModal">
                        ПРИБЫЛЬ КОНКРЕТНОЙ СИДЕЛКИ
                    </button>
                </div>

                <br>

                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main" data-toggle="modal" data-target="#managerProfitModal">
                        РАСЧЁТ ЗАРПЛАТЫ МЕНЕДЖЕРА
                    </button>
                </div>
            </div>
        </div>
    </div>


<!-- Модальное окно, общая прибыль фирмы -->
<div class="modal fade" id="generalProfitModal" tabindex="-1" role="dialog" aria-labelledby="generalProfitModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="generalProfitModalLabel">ОБЩАЯ ПРИБЫЛЬ ФИРМЫ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" class="d-flex flex-column justify-content-center align-items-center">
                    <p class="textTitle"> ПЕРИОД, ЗА КОТОРЫЙ НУЖНО РАСЧИТАТЬ ПРИБЫЛЬ </p> 
                    <br>
                    <div class="modalDivInputsAnalit d-flex flex-row justify-content-between">
                        <p class="textInputModal"> НАЧАЛО </p> 
                        <input class="inputModal" type="date" required>
                    </div>

                    <div class="modalDivInputsAnalit d-flex flex-row justify-content-between">
                        <p class="textInputModal"> КОНЕЦ </p> 
                        <input class="inputModal" type="date" required>
                    </div> 
                    <br>
                    <button type="submit" class="btn btn-primary-modal"> РАСЧИТАТЬ </button>
                </form>    
            </div>
        </div>
    </div>
</div>    


<!-- Модальное окно, прибыль конкретной сиделки -->
<div class="modal fade" id="nurseProfitModal" tabindex="-1" role="dialog" aria-labelledby="nurseProfitModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="nurseProfitModalLabel">ПРИБЫЛЬ КОНКРЕТНОЙ СИДЕЛКИ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" class="d-flex flex-column align-items-center">
                    <p class="textTitle"> ПЕРИОД, ЗА КОТОРЫЙ НУЖНО РАСЧИТАТЬ ПРИБЫЛЬ </p> 

                    <br>
                    
                    <div class="modalDivInputs d-flex justify-content-around">
                        <p class="textInputModal"> НАЧАЛО </p> 
                        <input class="inputModal" type="date" required>
                    </div>

                    <div class="modalDivInputs d-flex justify-content-around">
                        <p class="textInputModal"> КОНЕЦ </p> 
                        <input class="inputModal" type="date" required>
                    </div> 

                    <div class="modalDivInputs d-flex justify-content-around">
                        <p class="textInputModal"> ФИО </p> 
                        <input class="inputModalSmall" type="text" list="<listOfNurses>" required>
                        <datalist id="<listOfNurses>">
                            <option value="Петрова Наталья Владимировна"></option>
                        </datalist> 
                    </div> 

                    <div class="modalDivInputs d-flex justify-content-around">
                        <p class="textInputModal"> МЕСТО РАБОТЫ </p> 
                        <input class="inputModalSmall" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex justify-content-around">
                        <p class="textInputModal"> ПОДОПЕЧНЫЙ </p> 
                        <input class="inputModalSmall" list="<listOfClient>" required>
                        <datalist id="<listOfClient>">
                            <option value="Ускова Наталья Владимировна"></option>
                        </datalist> 
                    </div> 

                    <br>

                    <button type="submit" class="btn btn-primary-modal"> РАСЧИТАТЬ </button>
                </form>    
            </div>
        </div>
    </div>
</div>    



<!-- Модальное окно, расчет зарплаты менеджера -->
<div class="modal fade" id="managerProfitModal" tabindex="-1" role="dialog" aria-labelledby="managerProfitModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="managerProfitModalLabel">РАСЧЕТ ЗАРПЛАТЫ МЕНЕДЖЕРА</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" class="d-flex flex-column align-items-center">
                    <p class="textTitle"> ПЕРИОД, ЗА КОТОРЫЙ НУЖНО РАСЧИТАТЬ ПРИБЫЛЬ </p> 
                    <br>
                    <div class="modalDivInputs d-flex flex-row justify-content-between">
                        <p class="textInputModal"> НАЧАЛО </p> 
                        <input class="inputModal" type="date" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-between">
                        <p class="textInputModal"> КОНЕЦ </p> 
                        <input class="inputModal" type="date" required>
                    </div> 

                    <div class="modalDivInputs d-flex justify-content-around">
                        <p class="textInputModal"> ФИО </p> 
                        <input class="inputModalSmall" type="text" list="<listOfManagers>" required>
                        <datalist id="<listOfManagers>">
                            <option value="Логинов Игорь Сергеич"></option>
                        </datalist> 
                    </div> 

                    <div class="modalDivInputs d-flex justify-content-around">
                        <p class="textInputModal"> ПРОЦЕНТ ПО ДОГОВОРУ </p> 
                        <input class="inputModalSmall" type="text" required>
                    </div> 
                    <br>
                    <button type="submit" class="btn btn-primary-modal"> РАСЧИТАТЬ </button>
                </form>    
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