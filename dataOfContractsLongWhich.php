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

    <title> Пролонгирование договора </title>
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
                <h2 class="titleText text-center"> ДОГОВОР №1 </h2>
                <br>
                <hr class="hr-white">
                <br>
                <form method="POST" class="formSize d-flex flex-column align-items-center text-center">
                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> НОМЕР ДОГОВОРА </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ФИО ЗАКАЗЧИКА </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ПАСПОРТНЫЕ ДАННЫЕ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>  

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> СТЕПЕНЬ РОДСТВА М/У ЗАКАЗЧИКОМ И ПОДОП. </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ТЕЛЕФОН </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ДОП.ДАННЫЕ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ФИО ПОДОПЕЧНОГО </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ВОЗРАСТ(укажите дату рождения) </p> 
                        <input type="date" class="inputModal" type="text">
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ЗАБОЛЕВАНИЕ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ОСОБЕННОСТИ ПОДОП. </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> АДРЕС РАБОТЫ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ГРАФИК РАБОТЫ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ОБЩАЯ СУММА ДОГОВОРА </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ДОЛЯ ОФИСА </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> СПОСОБ ПОСТУПЛЕНИЯ ДЕНЕГ </p> 
                        <select class="inputModal" type="text">
                            <option>Наличные</option>
                            <option>Банковская карта</option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ОБЩИЙ ТАРИФ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ТАРИФ СИДЕЛКИ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ПРЕМИЯ(если есть) </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> СРЕДНИЙ ПРОЦЕНТ ПО ДОГОВОРУ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> МЕНЕДЖЕР </p> 
                        <select class="inputModal" type="text">
                            <option>Логинов Игорь Сергеич</option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> СИДЕЛКА </p> 
                        <select class="inputModal" type="text">
                            <option>Петрова Наталья Владимировна</option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> СИДЕЛКА(если требуется) </p> 
                        <select class="inputModal" type="text">
                            <option>Петрова Наталья Владимировна</option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ОПЛАЧЕНО </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ИСТОРИЯ ДОГОВОРА </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <br>
                    
                    <hr class="hr-white">
                    <br>
                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> НАЧАЛО </p> 
                        <input class="inputModal" type="date">
                    </div>
                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ОКОНЧАНИЕ </p> 
                        <input class="inputModal" type="date">
                    </div>
                    <br>
                    <hr class="hr-white">
                    
                    <br>

                    <div class="footer d-flex justify-content-center">
                        <button type="submit" style="margin-bottom: 20px;" class="btn btn-light-nurses-main"> ПРОЛОНГИРОВАТЬ </button>
                    </div>
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