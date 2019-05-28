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

    <title> Просмотр данных о сиделках </title>
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
                <h2 class="titleText"> ПРОСМОТР ДАННЫХ О СИДЕЛКАХ </h2>
                
                <br>
                <hr class="hr-white">
                <form class="find" method="POST d-flex justify-content-around">
                    <input type="text" class="find-input" placeholder="Введите имя сиделки для поиска конкретной информации">
                    <button class="btn find-btn"> <img src="/images/findIcon.png" alt="find" style="width: 31px; heigth: 31px;"> </button>
                </form>
                <hr class="hr-white">
                <br>


                <!-- По нажатию на кнопку с именем, появляется модальное окно с подробной информацией о том, на кого кликнули -->
                <p class="font-title"> ФИО СИДЕЛКИ </p>
                <div class="d-flex flex-column align-items-center">
                    <a class="name-of-nurses" href="#viewNurseModal" data-toggle="modal"> Петрова Наталья Владимировна </a>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Модальное окно для просмотра данных о сиделке -->
<div class="modal fade" id="viewNurseModal" tabindex="-1" role="dialog" aria-labelledby="viewNurseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="viewNurseModalLabel">ПРОСМОТР ДАННЫХ О МЕНЕДЖЕРЕ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Андрей, здесь должны данные выводится с БД -->
            <div class="modal-body d-flex flex-column">

            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th scope="row th-width">ФИО</th>
                        <td>Петрова Наталья Владимировна</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ВОЗРАСТ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ТЕЛЕФОН</th>
                        <td>Данные вытащить из базы данных
                            Так же доп. телефоны, если есть.
                        </td>
                    </tr>

                    <tr>
                        <th scope="row th-width">НАЦИОНАЛЬНОСТЬ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">АДРЕС ПРОЖИВАНИЯ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ПАСПОРТНЫЕ ДАННЫЕ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">АДРЕС ПРОПИСКИ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ДОП. КОНТАКТНЫЕ ДАННЫЕ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ОПЫТ РАБОТЫ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">С КАКИМИ ЗАБОЛЕВАНИЯМИ РАБОТАЛ(А)</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">НАВЫКИ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">СТАТУС СИДЕЛКИ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ЗНАНИЕ ЯЗЫКА</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ВЕРОИСПОВЕДАНИЕ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">НАЛИЧИЕ СПРАВОК О НЕСУДИМОСТИ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">НАЛИЧИЕ САН. КНИЖКИ ИЛИ МЕД. СПРАВОК</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">НАЧИЛИЕ МЕД. ОБРАЗОВАНИЯ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">БАНКОВСКАЯ КАРТА</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ИНФОРМАЦИЯ О ПРОХОЖДЕНИИ КУРСОВ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ВОЗМОЖНОСТЬ РАБОТЫ С ДЕТЬМИ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ОТЗЫВ МЕНЕДЖЕРА</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>
                </tbody>
            </table>
                
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary-modal" data-dismiss="modal" aria-label="Close"> ЗАКРЫТЬ </button>
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