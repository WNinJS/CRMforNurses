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
    <nav class="navbar navbar-expand-md d-flex justify-content-center w-100" style="height: 200px; background: #F1FFE8;">
        <ul class="d-flex justify-content-between text-center w-100">
            <li class="d-flex flex-column justify-content-center"><a class="" href="dataOfNurses.php"> ДАННЫЕ О СИДЕЛКАХ </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="active-color" href="dataOfContracts.php"> ДАННЫЕ О ДОГОВОРАХ </a></li>
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
                        ПРОСМОТРЕТЬ
                    </button>
                    <p class="buttons-text-nurses-main"> 
                        Чтобы просмотреть данные
                        о договорах, нажмите на кнопку
                        "просмотреть"
                    </p>
                </div>
                
                <br>

                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main">
                        ДОБАВИТЬ
                    </button>
                    <p class="buttons-text-nurses-main">
                        Чтобы добавить новые данные
                        о договорах, нажмите на кнопку
                        "добавить"
                    </p>
                </div>

                <br>

                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main">
                        РЕДАКТИРОВАТЬ
                    </button>
                    <p class="buttons-text-nurses-main">
                        Чтобы редактировать данные
                        о договорах, нажмите на кнопку
                        "редактировать"
                    </p>
                </div>

                <br>

                <div class="d-flex flex-row justify-content-around align-items-center">
                    <button class="btn btn-light-nurses-main">
                        ЗАПОЛНИТЬ ДОГОВОР
                    </button>
                    <p class="buttons-text-nurses-main">
                        Чтобы заполнить
                        договор для последующей распечатки, 
                        нажмите на кнопку "заполнить договор"
                    </p>
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