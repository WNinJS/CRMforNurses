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

    <title> Редактирование данных о менеджерах </title>
</head>
<body>
    <!-- ШАПКА -->
    <nav class="navbar navbar-expand-md d-flex justify-content-center w-100" style="height: 200px; background: #F1FFE8;">
        <ul class="d-flex justify-content-between text-center w-100">
            <li class="d-flex flex-column justify-content-center"><a class="" href="dataOfNurses.php"> ДАННЫЕ О СИДЕЛКАХ </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="" href="dataOfContracts.php"> ДАННЫЕ О ДОГОВОРАХ </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="" href="selectToolNurses.php"> ИНСТРУМЕНТ ПОДБОРА СИДЕЛОК </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="" href="analytics.php"> АНАЛИТИКА </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="active-color" href="dataOfManagers.php"> ДАННЫЕ О МЕНЕДЖЕРАХ </a></li>
        </ul>
    </nav>

    <br>
    <br>
    <div class="container-fluid d-flex justify-content-center h-100 mx-0">
        <div class="row h-100 w-100">
            <!-- Кнопки и их описание -->
            <div class="col-12 h-100 text-center">
                <h2 class="titleText"> РЕДАКТИРОВАНИЕ ДАННЫХ О МЕНЕДЖЕРАХ</h2>
                
                <br>

                <hr class="hr-white">

                <form class="find" method="POST d-flex justify-content-around">
                    <input type="text" class="find-input" placeholder="Введите фио менеджера для поиска конкретной информации">
                    <button class="btn find-btn"> <img src="/images/findIcon.png" alt="find" style="width: 31px; heigth: 31px;"> </button>
                </form>
                <hr class="hr-white">
                <br>

                <p class="font-title"> ФИО МЕНЕДЖЕРА </p>
                <div class="d-flex flex-column align-items-center">
                    <a class="name-of-nurses" data-toggle="modal" href="#editManagerModal"> ЛОГИНОВ ИГОРЬ СЕРГЕИЧ </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Модальное окно для редактирования данных о выбранном менеджере -->
<div class="modal fade" id="editManagerModal" tabindex="-1" role="dialog" aria-labelledby="editManagerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="editManagerModalLabel">РЕДАКТИРОВАНИЕ ДАННЫХ О МЕНЕДЖЕРЕ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Андрей, отсюда данные должны отправляться в БД -->
            <!-- Здесь поля, в которых редактируются данные о менеджере-->
            <!-- Информация в них должна содержаться сразу при открытии этой модалки для удобства бабулек -->
            <div class="modal-body d-flex flex-column">

                <form method="POST">
                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ФИО </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> КОНТАКТЫ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ГРАФИК РАБОТЫ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ОКЛАД </p> 
                        <input class="inputModal" type="text" list="<listOfNational>" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ПРОЦЕНТ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ФОРМА ДОПУСКА </p> 
                        <input class="inputModal" type="text" list="<listOfFormAccess>" required>
                        <datalist id="<listOfFormAccess>">
                            <option value="Менеджер">
                        </datalist>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around">
                        <p class="textInputModal"> ПАРОЛЬ </p> 
                        <input class="inputModal" type="text" required>
                    </div>

                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary-modal"> РЕДКАТИРОВАТЬ </button>
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