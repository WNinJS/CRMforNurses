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

    <title> Инструмент подбора сиделок </title>
</head>
<body>
    <!-- ШАПКА -->
    <nav class="navbar navbar-expand-md d-flex justify-content-center w-100" style="height: 200px; background: #F1FFE8;">
        <ul class="d-flex justify-content-between text-center w-100">
            <li class="d-flex flex-column justify-content-center"><a class="" href="dataOfNurses.php"> ДАННЫЕ О СИДЕЛКАХ </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="" href="dataOfContracts.php"> ДАННЫЕ О ДОГОВОРАХ </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="active-color" href="selectToolNurses.php"> ИНСТРУМЕНТ ПОДБОРА СИДЕЛОК </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="" href="analytics.php"> АНАЛИТИКА </a></li>
            <li class="d-flex flex-column justify-content-center"><a class="" href="dataOfManagers.php"> ДАННЫЕ О МЕНЕДЖЕРАХ </a></li>
        </ul>
    </nav>

    <br>
    <br>
    <div class="container-fluid d-flex justify-content-center h-100 mx-0">
        <div class="row h-100 w-100 d-flex flex-column justify-content-around align-items-center">
            <h2 class="titleText"> ИНСТРУМЕНТ ПОДБОРА СИДЕЛОК </h2>

            <br>

            <form method="POST" class="d-flex flex-column justify-content-center align-items-center">
                <div class="modalDivInputs d-flex flex-row justify-content-around">
                    <p class="textInputModal"> НАВЫКИ </p> 
                    <input class="inputModal" list="<listOfTalents>" type="text" required>
                    <datalist id="<listOfTalents>">
                        <option value="Вышивание">
                        <option value="Рисование">
                        <option value="Пение">
                    </datalist>
                </div>

                <div class="modalDivInputs d-flex flex-row justify-content-around">
                    <p class="textInputModal"> ВОЗРАСТ </p> 
                    <input class="inputModal" list="<listOfAge>" type="text" required>
                    <datalist id="<listOfAge>">
                        <option value="20-30 лет">
                        <option value="30-40 лет">
                        <option value="40-50 лет">
                    </datalist>
                </div>

                <div class="modalDivInputs d-flex flex-row justify-content-around">
                    <p class="textInputModal"> ОПЫТ </p> 
                    <input class="inputModal" list="<listOfExperience>" type="text" required>
                    <datalist id="<listOfExperience>">
                        <option value="Менее 1 года">
                        <option value="1 - 2 года">
                        <option value="2 и более лет">
                    </datalist>
                </div>

                <div class="modalDivInputs d-flex flex-row justify-content-around">
                    <p class="textInputModal"> НАЛИЧИЕ СПРАВОК О НЕСУДИМОСТИ </p> 
                    <input class="inputModal" type="text" list="<listOfCrime>" required>
                    <datalist id="<listOfCrime>">
                        <option value="Да">
                        <option value="Нет">
                    </datalist>
                </div>

                <div class="modalDivInputs d-flex flex-row justify-content-around">
                    <p class="textInputModal"> НАЛИЧИЕ МЕД. ОБРАЗОВАНИЯ </p> 
                    <input class="inputModal" list="<listOfEdu>" type="text" required>
                    <datalist id="<listOfEdu>">
                        <option value="Да">
                        <option value="Нет">
                    </datalist>
                </div>

                <!-- <div class="modalDivInputs d-flex flex-row justify-content-around">
                    <p class="textInputModal"> ЗАНЯТОСТЬ </p> 
                    <input class="inputModal" type="text" list="<listOfBuse>" required>
                    <datalist id="<listOfBusy>">
                        <option value="Занята">
                        <option value="Свободна">
                    </datalist>
                </div> -->

                <div class="modalDivInputs d-flex flex-row justify-content-around">
                    <p class="textInputModal"> СОГЛАСИЕ РАБОТАТЬ С МУЖЧИНОЙ/ЖЕНЩИНОЙ </p> 
                    <input class="inputModal" list="<listOfAgree>" type="text" required>
                    <datalist id="<listOfAgree>">
                        <option value="Мужчина">
                        <option value="Женщина">
                        <option value="Без разницы">
                    </datalist>
                </div>

                <div class="modalDivInputs d-flex flex-row justify-content-around">
                    <p class="textInputModal"> ГРАФИК РАБОТЫ </p> 
                    <input class="inputModal" list="<listOfWorkTime>" type="text" required>
                    <datalist id="<listOfWorkTime>">
                        <option value="6:00 - 12:00">
                        <option value="9:00 - 17:00">
                        <option value="13:00 - 21:00">
                    </datalist>
                </div>

                <div class="modalDivInputs d-flex flex-row justify-content-around">
                    <p class="textInputModal"> НАЛИЧИЕ САН. КНИЖКИ ИЛИ МЕД. СПРАВОК </p> 
                    <input class="inputModal" list="<listOfDocs>" type="text" required>
                    <datalist id="<listOfDocs>">
                        <option value="Да">
                        <option value="Нет">
                    </datalist>
                </div>

                <div class="modalDivInputs d-flex flex-row justify-content-around">
                    <p class="textInputModal"> ВОХМОЖНОСТЬ РАБОТЫ С ДЕТЬМИ </p> 
                    <input class="inputModal" list="<listOfChild>" type="text" required>
                    <datalist id="<listOfChild>">
                        <option value="Да">
                        <option value="Нет">
                    </datalist>
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
                
                <br>

                <button type="submit" class="btn btn-light-nurses-main"> ДОБАВИТЬ </button>
            </form>    
        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>