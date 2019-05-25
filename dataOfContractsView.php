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

    <title> Просмотр данных о договорах </title>
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
                <h2 class="titleText"> ПРОСМОТР ДАННЫХ О ДОГОВОРАХ </h2>
                
                <br>
                <hr class="hr-white">
                <form class="find" method="POST d-flex justify-content-around">
                    <input type="text" class="find-input" placeholder="Введите номер договора для поиска конкретной информации">
                    <button class="btn find-btn"> <img src="/images/findIcon.png" alt="find" style="width: 31px; heigth: 31px;"> </button>
                </form>
                <hr class="hr-white">
                <br>

                <!-- По нажатию на кнопку с номером договора, появляется модальное окно с подробной информацией о том, на которой кликнули -->
                <p class="font-title"> ДОГОВОР </p>
                <div class="d-flex flex-column align-items-center">
                    <a class="name-of-nurses" href="#viewContractModal" data-toggle="modal"> ДОГОВОР №1 </a>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Модальное окно для просмотра данных о договоре -->
<div class="modal fade" id="viewContractModal" tabindex="-1" role="dialog" aria-labelledby="viewContractModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title" id="viewContractModalLabel">ПРОСМОТР ДАННЫХ О ДОГОВОРЕ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Андрей, здесь должны данные выводится с БД -->
            <div class="modal-body d-flex flex-column">

            <table class="table table-hover">
                <tbody>

                    <tr>
                        <th scope="row th-width">НОМЕР ДОГОВОРА</th>
                        <td>1</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ФИО ЗАКАЗЧИКА</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">СТЕПЕНЬ РОДСТВА М/У ЗАКАЗЧИКОМ И ПОДОП.</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ТЕЛЕФОН</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ДОП. ДАННЫЕ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ФИО ПОДОПЕЧНОГО</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ВОЗРАСТ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ЗАБОЛЕВАНИЕ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ОСОБЕННОСТИ ПОДОП.</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">АДРЕС РАБОТЫ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">СРОК ДЕЙСТВИЯ ДОГОВОРА</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ГРАФИК РАБОТЫ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">СУММА ДОГОВОРА</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ОПЛАТА ПО ДОГОВОРУ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ДОЛЯ ОФИСА</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">СПОСОБ ПОСТУПЛЕНИЯ ДЕНЕГ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ТАРИФ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ДОЛЯ СДЕЛКИ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">СРЕДНИЙ ПРОЦЕНТ ПО ДОГОВОРУ</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">МЕНЕДЖЕР</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">СИДЕЛКА</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                </tbody>
            </table>

            <br>

            <!-- Добавление данных о заказчике договора -->
            <div class="modal-header text-center">
                <h5 class="modal-title" id="addContractModalLabel">ДАННЫЕ О ЗАКАЗЧИКЕ</h5>
                </button>
            </div>

            <br>

            <table class="table table-hover">
                <tbody>

                    <tr>
                        <th scope="row th-width">НОМЕР ДОГОВОРА</th>
                        <td>1</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">ФИО ЗАКАЗЧИКА</th>
                        <td>Данные вытащить из базы данных</td>
                    </tr>

                    <tr>
                        <th scope="row th-width">СТЕПЕНЬ РОДСТВА М/У ЗАКАЗЧИКОМ И ПОДОП.</th>
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