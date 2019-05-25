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

    <title> Данные о сиделках </title>
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
        </ul>
    </nav>

    <br>
    <br>
    <div class="container-fluid d-flex justify-content-center h-100 mx-0">
        <div class="row h-100 w-100">
            <!-- Кнопки и их описание -->
            <div class="col-12 h-100 text-center">
                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main">
                        <a href="dataOfNursesView.php">  ПРОСМОТРЕТЬ</a>
                    </button>
                    <p class="buttons-text-nurses-main"> 
                        Чтобы просмотреть данные
                        о сиделках, нажмите на кнопку
                        "просмотреть"
                    </p>
                </div>
                
                <br>

                <div class="d-flex flex-row justify-content-around align-items-center">
                    <!-- Кнопка, вызывающая модальное окно для добавления данных о новой сиделке -->
                    <button class="btn btn-light-nurses-main" data-toggle="modal" data-target="#addNurseModal">
                        ДОБАВИТЬ
                    </button>
                    <p class="buttons-text-nurses-main">
                        Чтобы добавить новые данные
                        о сиделках, нажмите на кнопку
                        "добавить"
                    </p>
                </div>

                <br>

                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main">
                        <a href="dataOfNursesEdit.php"> РЕДАКТИРОВАТЬ </a> 
                    </button>
                    <p class="buttons-text-nurses-main">
                        Чтобы редактировать данные
                        о сиделках, нажмите на кнопку
                        "редактировать"
                    </p>
                </div>
            </div>
        </div>
    </div>

<!-- Модальное окно для добавления данных о новой сиделке -->
<div class="modal fade" id="addNurseModal" tabindex="-1" role="dialog" aria-labelledby="addNurseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="addNurseModalLabel">ДОБАВЛЕНИЕ ДАННЫХ О НОВОЙ СИДЕЛКЕ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Андрей, отсюда данные должны отправляться в БД -->
            <!-- Здесь поля, в которые заполняются данные о новой сиделке -->
            <div class="modal-body d-flex flex-column">

                <form method="POST">
                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ФИО </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ВОЗРАСТ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ТЕЛЕФОН </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> НАЦИОНАЛЬНОСТЬ </p> 
                        <input class="inputModal" type="text" list="<listOfNational>" required>
                        <datalist id="<listOfNational>">
                            <option value="Русский(ая)">
                            <option value="Башкир(ка)">
                            <option value="Татар(ка)">
                            <option value="Дагестанец(ка)">
                            <option value="Армянин(ка)">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> АДРЕС ПРОЖИВАНИЯ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ПАСПОРТНЫЕ ДАННЫЕ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> АДРЕС ПРОПИСКИ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> КОНТАКТНОЕ ЛИЦО </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ОПЫТ РАБОТЫ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> С КАКИМИ ЗАБОЛЕВАНИЯМИ РАБОТАЛ(А) </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> НАВЫКИ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ОТЗЫВ МЕНЕДЖЕРА </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> СТАТУС СИДЕЛКИ </p> 
                        <input class="inputModal" type="text" list="<listOfStatus>" required>
                        <datalist id="<listOfStatus>">
                            <option value="Работает">
                            <option value="Свободен(на)">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ЗНАНИЕ ЯЗЫКА </p> 
                        <input class="inputModal" type="text" list="<listOfLang>" required>
                        <datalist id="<listOfLang>">
                            <option value="Татарский">
                            <option value="Башкирский">
                            <option value="Дагестанский">
                            <option value="Армянский">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ВЕРОИСПОВЕДАНИЕ </p> 
                        <input class="inputModal" type="text" list="<listOfBelieve>" required>
                        <datalist id="<listOfBelieve>">
                            <option value="Христианство">
                            <option value="Ислам">
                            <option value="Иудаизм">
                            <option value="Буддизм">
                            <option value="Атеизм">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> НАЛИЧИЕ СПРАВОК О НЕСУДИМОСТИ </p> 
                        <input class="inputModal" type="text" list="<listOfCrimeInfo>" required>
                        <datalist id="<listOfCrimeInfo>">
                            <option value="Да">
                            <option value="Нет">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> НАЛИЧИЕ САН.КНИЖКИ ИЛИ МЕД.СПРАВОК </p> 
                        <input class="inputModal" type="text" list="<listOfMedicalInfo>" required>
                        <datalist id="<listOfMedicalInfo>">
                            <option value="Да">
                            <option value="Нет">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> НАЛИЧИЕ МЕД. ОБРАЗОВАНИЯ </p> 
                        <input class="inputModal" type="text" list="<listOfMedicalEdu>" required>
                        <datalist id="<listOfMedicalEdu>">
                            <option value="Да">
                            <option value="Нет">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> БАНКОВКАЯ КАРТА </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ИНФОРМАЦИЯ О ПРОХОЖДЕНИИ КУРСОВ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ВОЗМОЖНОСТЬ РАБОТЫ С ДЕТЬМИ </p> 
                        <input class="inputModal" type="text" list="<listOfWorkWithChild>" required>
                        <datalist id="<listOfWorkWithChild>">
                            <option value="Да">
                            <option value="Нет">
                        </datalist>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary-modal"> ДОБАВИТЬ </button>
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