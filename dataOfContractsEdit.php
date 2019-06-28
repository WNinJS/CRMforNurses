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

    <title> Редактирование данных договоров </title>
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
                <li class="navbar-item-active text-center"> <a class="nav-link linkActive" href="dataOfContracts.php"> ДОГОВОРЫ </a></li>
                <li class="navbar-item-active text-center"> <a class="nav-link" href="selectToolNurses.php"> ИНСТРУМЕНТ ПОДБОРА СИДЕЛОК </a></li>
                <li class="navbar-item-active text-center"> <a class="nav-link" href="analytics.php"> АНАЛИТИКА </a></li>
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
                <h2 class="titleText text-center"> РЕДАКТИРОВАНИЕ ДАННЫХ О ДОГОВОРАХ </h2>
                
                <br>
                <hr class="hr-white">
                <form class="find" method="POST d-flex justify-content-around">
                    <input type="text" class="find-input" placeholder="Введите номер договора для поиска конкретной информации">
                    <button class="btn find-btn"> <img src="/images/findIcon.png" alt="find" style="width: 31px; heigth: 31px;"> </button>
                </form>
                <hr class="hr-white">
                <br>

                <p class="font-title"> ДОГОВОР </p>
                <div class="d-flex flex-column align-items-center">
                    <a class="name-of-nurses" href="dataOfContractsEditWhich.php"> ДОГОВОР №1 </a>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Модальное окно для редактирования данных о новом договоре-->
<div class="modal fade" id="editContractModal" tabindex="-1" role="dialog" aria-labelledby="editContractModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="editContractModalLabel">РЕДАКТИРОВАНИЕ ДАННЫХ О ДОГОВОРЕ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Здесь поля, в которых редактируются данные о договоре -->
            <!-- Андрей, отсюда данные должны отправляться в БД -->
            <!-- В двух последних инпутах, что относятся к договору (Менеджер и Сиделка) -->
            <!-- Есть выпадающие списки, инфа этих списков должна браться с БД -->
             <!-- Информация в них должна содержаться сразу при открытии этой модалки для удобства бабулек -->
            <div class="modal-body d-flex flex-column">

                <form method="POST">
                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> НОМЕР ДОГОВОРА </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ФИО ЗАКАЗЧИКА </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ПАСПОРТНЫЕ ДАННЫЕ </p> 
                        <input class="inputModal" type="text" required>
                    </div>  

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> СТЕПЕНЬ РОДСТВА М/У ЗАКАЗЧИКОМ И ПОДОП. </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ТЕЛЕФОН </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ДОП.ДАННЫЕ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ФИО ПОДОПЕЧНОГО </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ВОЗРАСТ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ЗАБОЛЕВАНИЕ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ОСОБЕННОСТИ ПОДОП. </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> АДРЕС РАБОТЫ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <!-- МАКС ТУТ НАД ПОРАБОТАТЬ -->
                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> СРОК ДЕЙСТВИЯ ДОГОВОРА </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ГРАФИК РАБОТЫ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ОБЩАЯ СУММА ДОГОВОРА </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ДОЛЯ ОФИСА </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> СПОСОБ ПОСТУПЛЕНИЯ ДЕНЕГ </p> 
                        <input class="inputModal" type="text" list="<listOfPay>" required>
                        <datalist id="<listOfPay>">
                            <option value="Наличные">
                            <option value="Банковская карта">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ОБЩИЙ ТАРИФ </p> 
                        <input class="inputModal" type="text" list="<listOfRate>" required>
                        <datalist id="<listOfRate>">
                            <option value="1%">
                            <option value="2%">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ТАРИФ СИДЕЛКИ </p> 
                        <input class="inputModal" type="text" list="<listOfRate>" required>
                        <datalist id="<listOfRate>">
                            <option value="1%">
                            <option value="2%">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> СРЕДНИЙ ПРОЦЕНТ ПО ДОГОВОРУ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> МЕНЕДЖЕР </p> 
                        <input class="inputModal" type="text" list="<listOfManagers>" required>
                        <datalist id="<listOfManagers>"">
                            <option value="Логинов Игорь Сергеич"></option>
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> СИДЕЛКА </p> 
                        <input class="inputModal" type="text" list="<listOfNurses>" required>
                        <datalist id="<listOfNurses>">
                            <option value="Петрова Наталья Владимировна"></option>
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> СИДЕЛКА(если требуется) </p> 
                        <input class="inputModal" type="text" list="<listOfNurses>" required>
                        <datalist id="<listOfNurses>">
                            <option value="Петрова Наталья Владимировна"></option>
                        </datalist>
                    </div>

                    <br>


                    <!-- <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ТЕЛЕФОН </p> 
                        <input class="inputModal" type="text" required>
                    </div> -->

                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary-modal"> РЕДАКТИРОВАТЬ </button>
                </div>
            </form>    
        </div>
    </div>
</div>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>