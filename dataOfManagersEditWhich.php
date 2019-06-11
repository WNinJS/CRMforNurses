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

    <title> Редактирование данных менеджера </title>
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
            <div class="col-12 h-100 text-center d-flex flex-column align-items-center">
                <h2 class="titleText"> ЛОГИНОВ ИГОРЬ СЕРГЕИЧ </h2>
                <br>
                <hr class="hr-white">
                <br>
                <form method="POST" class="formSize d-flex flex-column align-items-center text-center">
                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ЛОГИН </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>
                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ПАРОЛЬ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>
                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ФОРМА ДОПУСКА </p> 
                        <select class="inputModal" type="text">
                            <option>Менеджер</option>
                        </select>
                    </div>
                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ФИО </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> КОНТАКТЫ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ГРАФИК РАБОТЫ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ОКЛАД </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
                    </div>

                    <div class="modalDivInputs d-flex flex-row justify-content-around align-items-center">
                        <p class="textInputModal"> ПРОЦЕНТ </p> 
                        <textarea class="inputModal" type="text">Вытащить с базы</textarea>
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