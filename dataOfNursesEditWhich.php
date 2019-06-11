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

    <title> Просмотр данных о сиделке </title>
</head>
<body>
    <!-- ШАПКА -->
    <nav class="navbar navbar-expand-md d-flex justify-content-center w-100" style="height: 200px; background: #F1FFE8;">
        <ul class="d-flex justify-content-between text-center w-100">
            <li class="d-flex flex-column justify-content-center"><a class="active-color" href="dataOfNurses.php"> ДАННЫЕ О СИДЕЛКАХ </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="" href="dataOfContracts.php"> ДАННЫЕ О ДОГОВОРАХ </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="" href="selectToolNurses.php"> ИНСТРУМЕНТ ПОДБОРА СИДЕЛОК </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="" href="analytics.php"> АНАЛИТИКА </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="" href="dataOfManagers.php"> ДАННЫЕ О МЕНЕДЖЕРАХ </a></li>
            <form class="d-flex align-items-center justify-content-center" style="padding-left: 20px;" method="get">
                <p class="p-0 m-0"> Имя </p>
                <a href="login.php"> <img src="images/logout.png" alt="logout" style="width: 25px; heigth: 25px; margin-left: 5px;"> </a>
            </form>
        </ul>
    </nav>

    <br>
    <br>
    <div class="container-fluid d-flex justify-content-center h-100 mx-0">
        <div class="row h-100 w-100">
            <!-- Кнопки и их описание -->
            <div class="col-12 h-100 text-center d-flex flex-column align-items-center">
                <h2 class="titleText"> ПЕТРОВА НАТАЛЬЯ ВЛАДИМИРОВНА </h2>
                <br>
                <hr class="hr-white">
                <br>
                <form method="POST" class="formSize d-flex flex-column align-items-center text-center">
                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ФИО </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ВОЗРАСТ </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ТЕЛЕФОН </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>
                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ДОП. ТЕЛЕФОН (не обязательное поле) </p> 
                        <textarea class="inputModal" type="text"> </textarea>
                    </div>
                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ДОП. ТЕЛЕФОН (не обязательное поле) </p> 
                        <textarea class="inputModal" type="text"> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> НАЦИОНАЛЬНОСТЬ </p> 
                        <select class="inputModal" type="text" required>
                            <option> Русский(ая) </option>
                            <option> Башкир(ка) </option>
                            <option> Татар(ка </option>
                            <option> Дагестанец(ка) </option>
                            <option> Армянин(ка) </option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> АДРЕС ПРОЖИВАНИЯ </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ПАСПОРТНЫЕ ДАННЫЕ </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> АДРЕС ПРОПИСКИ </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ДОП. КОНТАКТНЫЕ ДАННЫЕ</p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ОПЫТ РАБОТЫ </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> С КАКИМИ ЗАБОЛЕВАНИЯМИ РАБОТАЛ(А) </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> НАВЫКИ </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> СТАТУС СИДЕЛКИ </p> 
                        <select class="inputModal" type="text" required>
                            <option> Работает </option>
                            <option> Свободен(на) </option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ЗНАНИЕ ЯЗЫКА </p> 
                        <select class="inputModal" type="text" required>
                            <option> Татарский </option>
                            <option> Башкирский </option>
                            <option> Дагестанский </option>
                            <option> Армянский </option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ВЕРОИСПОВЕДАНИЕ </p> 
                        <select class="inputModal" type="text" required>
                            <option> Христианство </option>
                            <option> Ислам </option>
                            <option> Иудаизм </option>
                            <option> Буддизм </option>
                            <option> Атеизм </option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> НАЛИЧИЕ СПРАВОК О НЕСУДИМОСТИ </p> 
                        <select class="inputModal" type="text" required>
                            <option> Да </option>
                            <option> Нет </option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> НАЛИЧИЕ САН.КНИЖКИ ИЛИ МЕД.СПРАВОК </p> 
                        <select class="inputModal" type="text" required>
                            <option> Да </option>
                            <option> Нет </option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> НАЛИЧИЕ МЕД. ОБРАЗОВАНИЯ </p> 
                        <select class="inputModal" type="text" required>
                            <option> Да </option>
                            <option> Нет </option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> БАНКОВКАЯ КАРТА </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ИНФОРМАЦИЯ О ПРОХОЖДЕНИИ КУРСОВ </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ВОЗМОЖНОСТЬ РАБОТЫ С ДЕТЬМИ </p> 
                        <select class="inputModal" type="text" required>
                            <option> Да </option>
                            <option> Нет </option>
                        </select>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ОТЗЫВ МЕНЕДЖЕРА </p> 
                        <textarea class="inputModal" type="text" required> </textarea>
                    </div>
                    <br>
                    <div class="footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-light-nurses-main"> РЕДАКТИРОВАТЬ </button>
                    </div>
                </form>    
                <br>
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