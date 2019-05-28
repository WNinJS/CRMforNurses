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

    <title> Данные о менеджерах </title>
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
                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main">
                        <a href="dataOfManagersView.php"> ПРОСМОТРЕТЬ </a> 
                    </button>
                    <p class="buttons-text-nurses-main"> 
                        Чтобы просмотреть данные
                        о менеджерах, нажмите на кнопку
                        "просмотреть"
                    </p>
                </div>
                    
                <br>

                <!-- Кнопка, вызывающее модальное окно для добавления данных о новом менеджере -->
                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main" data-toggle="modal" data-target="#addManagerModal">
                        ДОБАВИТЬ
                    </button>
                    <p class="buttons-text-nurses-main">
                        Чтобы добавить новые данные
                        о менеджерах, нажмите на кнопку
                        "редактировать"
                    </p>
                </div>

                <br>

                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main">
                        <a href="dataOfManagersEdit.php"> РЕДАКТИРОВАТЬ </a>  
                    </button>
                    <p class="buttons-text-nurses-main">
                        Чтобы редактировать данные
                        о менеджерах, нажмите на кнопку
                        "добавить"
                    </p>
                </div>

                <br>

            </div>
        </div>
    </div>


<!-- Модальное окно для добавления данных о новом менеджере -->
<div class="modal fade" id="addManagerModal" tabindex="-1" role="dialog" aria-labelledby="addManagerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="addManagerModalLabel">ДОБАВЛЕНИЕ ДАННЫХ О НОВОМ МЕНЕДЖЕРЕ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Андрей, отсюда данные должны отправляться в БД -->
            <!-- Здесь поля, в которые заполняются данные о новом менеджере -->
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