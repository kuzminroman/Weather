<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Weather';
$this->params['breadcrumbs'][] = $this->title;

foreach($show as $s):
    $arrayDate = json_decode($s['date']);
    $arrayDegrees = json_decode($s['degrees']);
    $arrayDescription = json_decode($s['description']);
    $arrayPressure = json_decode($s['pressure']);
    $arrayHumidity = json_decode($s['humidity']);
    $arrayWind = json_decode($s['wind']);
    $arrayTypeWind = json_decode($s['type_wind']);
    $arrayExtra = json_decode($s['extra']);
    ?>


    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Дата</th>
            <th scope="col">Температура</th>
            <th scope="col">Описание</th>
            <th scope="col">Давление</th>
            <th scope="col">Влажность</th>
            <th scope="col">Ветер м/c</th>
            <th scope="col">Ветер (тип)</th>
            <th scope="col">Ощущается как</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th scope="row"></th>
            <td>
                <b><?=$arrayDate[0]?></b>
                <p>Утром</p>
            </td>
            <td><?=$arrayDegrees[0][0]?></td>
            <td><?=$arrayDescription[0][0]?></td>
            <td><?=$arrayPressure[0][0]?></td>
            <td><?=$arrayHumidity[0][0]?></td>
            <td><?=$arrayWind[0][0]?></td>
            <td><?=$arrayTypeWind[0][0]?></td>
            <td><?=$arrayExtra[0][0]?></td>
        </tr>
        <tr>
            <th scope="row"></th>
            <td>Днем</td>
            <td><?=$arrayDegrees[0][1]?></td>
            <td><?=$arrayDescription[0][1]?></td>
            <td><?=$arrayPressure[0][1]?></td>
            <td><?=$arrayHumidity[0][1]?></td>
            <td><?=$arrayWind[0][1]?></td>
            <td><?=$arrayTypeWind[0][1]?></td>
            <td><?=$arrayExtra[0][1]?></td>
        </tr>
        <tr>
            <th scope="row"></th>
            <td>Вечером</td>
            <td><?=$arrayDegrees[0][2]?></td>
            <td><?=$arrayDescription[0][2]?></td>
            <td><?=$arrayPressure[0][2]?></td>
            <td><?=$arrayHumidity[0][2]?></td>
            <td><?=$arrayWind[0][2]?></td>
            <td><?=$arrayTypeWind[0][2]?></td>
            <td><?=$arrayExtra[0][2]?></td>
        </tr>
        <tr>
            <th scope="row"></th>
            <td>Ночью</td>
            <td><?=$arrayDegrees[0][3]?></td>
            <td><?=$arrayDescription[0][3]?></td>
            <td><?=$arrayPressure[0][3]?></td>
            <td><?=$arrayHumidity[0][3]?></td>
            <td><?=$arrayWind[0][3]?></td>
            <td><?=$arrayTypeWind[0][3]?></td>
            <td><?=$arrayExtra[0][3]?></td>
        </tr>



        <tr>
            <th scope="row"></th>
            <td>
                <b><?=$arrayDate[1]?></b>
                <p>Утром</p>
            </td>
            <td><?=$arrayDegrees[1][0]?></td>
            <td><?=$arrayDescription[1][0]?></td>
            <td><?=$arrayPressure[1][0]?></td>
            <td><?=$arrayHumidity[1][0]?></td>
            <td><?=$arrayWind[1][0]?></td>
            <td><?=$arrayTypeWind[1][0]?></td>
            <td><?=$arrayExtra[1][0]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Днем</td>
            <td><?=$arrayDegrees[1][1]?></td>
            <td><?=$arrayDescription[1][1]?></td>
            <td><?=$arrayPressure[1][1]?></td>
            <td><?=$arrayHumidity[1][1]?></td>
            <td><?=$arrayWind[1][1]?></td>
            <td><?=$arrayTypeWind[1][1]?></td>
            <td><?=$arrayExtra[1][1]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Вечером</td>
            <td><?=$arrayDegrees[1][2]?></td>
            <td><?=$arrayDescription[1][2]?></td>
            <td><?=$arrayPressure[1][2]?></td>
            <td><?=$arrayHumidity[1][2]?></td>
            <td><?=$arrayWind[1][2]?></td>
            <td><?=$arrayTypeWind[1][2]?></td>
            <td><?=$arrayExtra[1][2]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Ночью</td>
            <td><?=$arrayDegrees[1][3]?></td>
            <td><?=$arrayDescription[1][3]?></td>
            <td><?=$arrayPressure[1][3]?></td>
            <td><?=$arrayHumidity[1][3]?></td>
            <td><?=$arrayWind[1][3]?></td>
            <td><?=$arrayTypeWind[1][3]?></td>
            <td><?=$arrayExtra[1][3]?></td>
        </tr>



        <tr>
            <th scope="row"></th>
            <td>
                <b><?=$arrayDate[2]?></b>
                <p>Утром</p>
            </td>
            <td><?=$arrayDegrees[2][0]?></td>
            <td><?=$arrayDescription[2][0]?></td>
            <td><?=$arrayPressure[2][0]?></td>
            <td><?=$arrayHumidity[2][0]?></td>
            <td><?=$arrayWind[2][0]?></td>
            <td><?=$arrayTypeWind[2][0]?></td>
            <td><?=$arrayExtra[2][0]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Днем</td>
            <td><?=$arrayDegrees[2][1]?></td>
            <td><?=$arrayDescription[2][1]?></td>
            <td><?=$arrayPressure[2][1]?></td>
            <td><?=$arrayHumidity[2][1]?></td>
            <td><?=$arrayWind[2][1]?></td>
            <td><?=$arrayTypeWind[2][1]?></td>
            <td><?=$arrayExtra[2][1]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Вечером</td>
            <td><?=$arrayDegrees[2][2]?></td>
            <td><?=$arrayDescription[2][2]?></td>
            <td><?=$arrayPressure[2][2]?></td>
            <td><?=$arrayHumidity[2][2]?></td>
            <td><?=$arrayWind[2][2]?></td>
            <td><?=$arrayTypeWind[2][2]?></td>
            <td><?=$arrayExtra[2][2]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Ночью</td>
            <td><?=$arrayDegrees[2][3]?></td>
            <td><?=$arrayDescription[2][3]?></td>
            <td><?=$arrayPressure[2][3]?></td>
            <td><?=$arrayHumidity[2][3]?></td>
            <td><?=$arrayWind[2][3]?></td>
            <td><?=$arrayTypeWind[2][3]?></td>
            <td><?=$arrayExtra[2][3]?></td>
        </tr>




        <tr>
            <th scope="row"></th>
            <td>
                <b><?=$arrayDate[3]?></b>
                <p>Утром</p>
            </td>
            <td><?=$arrayDegrees[3][0]?></td>
            <td><?=$arrayDescription[3][0]?></td>
            <td><?=$arrayPressure[3][0]?></td>
            <td><?=$arrayHumidity[3][0]?></td>
            <td><?=$arrayWind[3][0]?></td>
            <td><?=$arrayTypeWind[3][0]?></td>
            <td><?=$arrayExtra[3][0]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Днем</td>
            <td><?=$arrayDegrees[3][1]?></td>
            <td><?=$arrayDescription[3][1]?></td>
            <td><?=$arrayPressure[3][1]?></td>
            <td><?=$arrayHumidity[3][1]?></td>
            <td><?=$arrayWind[3][1]?></td>
            <td><?=$arrayTypeWind[3][1]?></td>
            <td><?=$arrayExtra[3][1]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Вечером</td>
            <td><?=$arrayDegrees[3][2]?></td>
            <td><?=$arrayDescription[3][2]?></td>
            <td><?=$arrayPressure[3][2]?></td>
            <td><?=$arrayHumidity[3][2]?></td>
            <td><?=$arrayWind[3][2]?></td>
            <td><?=$arrayTypeWind[3][2]?></td>
            <td><?=$arrayExtra[3][2]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Ночью</td>
            <td><?=$arrayDegrees[3][3]?></td>
            <td><?=$arrayDescription[3][3]?></td>
            <td><?=$arrayPressure[3][3]?></td>
            <td><?=$arrayHumidity[3][3]?></td>
            <td><?=$arrayWind[3][3]?></td>
            <td><?=$arrayTypeWind[3][3]?></td>
            <td><?=$arrayExtra[3][3]?></td>
        </tr>


        <tr>
            <th scope="row"></th>
            <td>
                <b><?=$arrayDate[4]?></b>
                <p>Утром</p>
            </td>
            <td><?=$arrayDegrees[4][0]?></td>
            <td><?=$arrayDescription[4][0]?></td>
            <td><?=$arrayPressure[4][0]?></td>
            <td><?=$arrayHumidity[4][0]?></td>
            <td><?=$arrayWind[4][0]?></td>
            <td><?=$arrayTypeWind[4][0]?></td>
            <td><?=$arrayExtra[4][0]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Днем</td>
            <td><?=$arrayDegrees[4][1]?></td>
            <td><?=$arrayDescription[4][1]?></td>
            <td><?=$arrayPressure[4][1]?></td>
            <td><?=$arrayHumidity[4][1]?></td>
            <td><?=$arrayWind[4][1]?></td>
            <td><?=$arrayTypeWind[4][1]?></td>
            <td><?=$arrayExtra[4][1]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Вечером</td>
            <td><?=$arrayDegrees[4][2]?></td>
            <td><?=$arrayDescription[4][2]?></td>
            <td><?=$arrayPressure[4][2]?></td>
            <td><?=$arrayHumidity[4][2]?></td>
            <td><?=$arrayWind[4][2]?></td>
            <td><?=$arrayTypeWind[4][2]?></td>
            <td><?=$arrayExtra[4][2]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Ночью</td>
            <td><?=$arrayDegrees[4][3]?></td>
            <td><?=$arrayDescription[4][3]?></td>
            <td><?=$arrayPressure[4][3]?></td>
            <td><?=$arrayHumidity[4][3]?></td>
            <td><?=$arrayWind[4][3]?></td>
            <td><?=$arrayTypeWind[4][3]?></td>
            <td><?=$arrayExtra[4][3]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>
                <b><?=$arrayDate[5]?></b>
                <p>Утром</p>
            </td>
            <td><?=$arrayDegrees[5][0]?></td>
            <td><?=$arrayDescription[5][0]?></td>
            <td><?=$arrayPressure[5][0]?></td>
            <td><?=$arrayHumidity[5][0]?></td>
            <td><?=$arrayWind[5][0]?></td>
            <td><?=$arrayTypeWind[5][0]?></td>
            <td><?=$arrayExtra[5][0]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Днем</td>
            <td><?=$arrayDegrees[5][1]?></td>
            <td><?=$arrayDescription[5][1]?></td>
            <td><?=$arrayPressure[5][1]?></td>
            <td><?=$arrayHumidity[5][1]?></td>
            <td><?=$arrayWind[5][1]?></td>
            <td><?=$arrayTypeWind[5][1]?></td>
            <td><?=$arrayExtra[5][1]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Вечером</td>
            <td><?=$arrayDegrees[5][2]?></td>
            <td><?=$arrayDescription[5][2]?></td>
            <td><?=$arrayPressure[5][2]?></td>
            <td><?=$arrayHumidity[5][2]?></td>
            <td><?=$arrayWind[5][2]?></td>
            <td><?=$arrayTypeWind[5][2]?></td>
            <td><?=$arrayExtra[5][2]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Ночью</td>
            <td><?=$arrayDegrees[5][3]?></td>
            <td><?=$arrayDescription[5][3]?></td>
            <td><?=$arrayPressure[5][3]?></td>
            <td><?=$arrayHumidity[5][3]?></td>
            <td><?=$arrayWind[5][3]?></td>
            <td><?=$arrayTypeWind[5][3]?></td>
            <td><?=$arrayExtra[5][3]?></td>
        </tr>


        <tr>
            <th scope="row"></th>
            <td>
                <b><?=$arrayDate[6]?></b>
                <p>Утром</p>
            </td>
            <td><?=$arrayDegrees[6][0]?></td>
            <td><?=$arrayDescription[6][0]?></td>
            <td><?=$arrayPressure[6][0]?></td>
            <td><?=$arrayHumidity[6][0]?></td>
            <td><?=$arrayWind[6][0]?></td>
            <td><?=$arrayTypeWind[6][0]?></td>
            <td><?=$arrayExtra[6][0]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Днем</td>
            <td><?=$arrayDegrees[6][1]?></td>
            <td><?=$arrayDescription[6][1]?></td>
            <td><?=$arrayPressure[6][1]?></td>
            <td><?=$arrayHumidity[6][1]?></td>
            <td><?=$arrayWind[6][1]?></td>
            <td><?=$arrayTypeWind[6][1]?></td>
            <td><?=$arrayExtra[6][1]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Вечером</td>
            <td><?=$arrayDegrees[6][2]?></td>
            <td><?=$arrayDescription[6][2]?></td>
            <td><?=$arrayPressure[6][2]?></td>
            <td><?=$arrayHumidity[6][2]?></td>
            <td><?=$arrayWind[6][2]?></td>
            <td><?=$arrayTypeWind[6][2]?></td>
            <td><?=$arrayExtra[6][2]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Ночью</td>
            <td><?=$arrayDegrees[6][3]?></td>
            <td><?=$arrayDescription[6][3]?></td>
            <td><?=$arrayPressure[6][3]?></td>
            <td><?=$arrayHumidity[6][3]?></td>
            <td><?=$arrayWind[6][3]?></td>
            <td><?=$arrayTypeWind[6][3]?></td>
            <td><?=$arrayExtra[6][3]?></td>
        </tr>


        <tr>
            <th scope="row"></th>
            <td>
                <b><?=$arrayDate[7]?></b>
                <p>Утром</p>
            </td>
            <td><?=$arrayDegrees[7][0]?></td>
            <td><?=$arrayDescription[7][0]?></td>
            <td><?=$arrayPressure[7][0]?></td>
            <td><?=$arrayHumidity[7][0]?></td>
            <td><?=$arrayWind[7][0]?></td>
            <td><?=$arrayTypeWind[7][0]?></td>
            <td><?=$arrayExtra[7][0]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Днем</td>
            <td><?=$arrayDegrees[7][1]?></td>
            <td><?=$arrayDescription[7][1]?></td>
            <td><?=$arrayPressure[7][1]?></td>
            <td><?=$arrayHumidity[7][1]?></td>
            <td><?=$arrayWind[7][1]?></td>
            <td><?=$arrayTypeWind[7][1]?></td>
            <td><?=$arrayExtra[7][1]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Вечером</td>
            <td><?=$arrayDegrees[7][2]?></td>
            <td><?=$arrayDescription[7][2]?></td>
            <td><?=$arrayPressure[7][2]?></td>
            <td><?=$arrayHumidity[7][2]?></td>
            <td><?=$arrayWind[7][2]?></td>
            <td><?=$arrayTypeWind[7][2]?></td>
            <td><?=$arrayExtra[7][2]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Ночью</td>
            <td><?=$arrayDegrees[7][3]?></td>
            <td><?=$arrayDescription[7][3]?></td>
            <td><?=$arrayPressure[7][3]?></td>
            <td><?=$arrayHumidity[7][3]?></td>
            <td><?=$arrayWind[7][3]?></td>
            <td><?=$arrayTypeWind[7][3]?></td>
            <td><?=$arrayExtra[7][3]?></td>
        </tr>




        <tr>
            <th scope="row"></th>
            <td>
                <b><?=$arrayDate[8]?></b>
                <p>Утром</p>
            </td>
            <td><?=$arrayDegrees[8][0]?></td>
            <td><?=$arrayDescription[8][0]?></td>
            <td><?=$arrayPressure[8][0]?></td>
            <td><?=$arrayHumidity[8][0]?></td>
            <td><?=$arrayWind[8][0]?></td>
            <td><?=$arrayTypeWind[8][0]?></td>
            <td><?=$arrayExtra[8][0]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Днем</td>
            <td><?=$arrayDegrees[8][1]?></td>
            <td><?=$arrayDescription[8][1]?></td>
            <td><?=$arrayPressure[8][1]?></td>
            <td><?=$arrayHumidity[8][1]?></td>
            <td><?=$arrayWind[8][1]?></td>
            <td><?=$arrayTypeWind[8][1]?></td>
            <td><?=$arrayExtra[8][1]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Вечером</td>
            <td><?=$arrayDegrees[8][2]?></td>
            <td><?=$arrayDescription[8][2]?></td>
            <td><?=$arrayPressure[8][2]?></td>
            <td><?=$arrayHumidity[8][2]?></td>
            <td><?=$arrayWind[8][2]?></td>
            <td><?=$arrayTypeWind[8][2]?></td>
            <td><?=$arrayExtra[8][2]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Ночью</td>
            <td><?=$arrayDegrees[8][3]?></td>
            <td><?=$arrayDescription[8][3]?></td>
            <td><?=$arrayPressure[8][3]?></td>
            <td><?=$arrayHumidity[8][3]?></td>
            <td><?=$arrayWind[8][3]?></td>
            <td><?=$arrayTypeWind[8][3]?></td>
            <td><?=$arrayExtra[8][3]?></td>
        </tr>


        <tr>
            <th scope="row"></th>
            <td>
                <b><?=$arrayDate[9]?></b>
                <p>Утром</p>
            </td>
            <td><?=$arrayDegrees[9][0]?></td>
            <td><?=$arrayDescription[9][0]?></td>
            <td><?=$arrayPressure[9][0]?></td>
            <td><?=$arrayHumidity[9][0]?></td>
            <td><?=$arrayWind[9][0]?></td>
            <td><?=$arrayTypeWind[9][0]?></td>
            <td><?=$arrayExtra[9][0]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Днем</td>
            <td><?=$arrayDegrees[9][1]?></td>
            <td><?=$arrayDescription[9][1]?></td>
            <td><?=$arrayPressure[9][1]?></td>
            <td><?=$arrayHumidity[9][1]?></td>
            <td><?=$arrayWind[9][1]?></td>
            <td><?=$arrayTypeWind[9][1]?></td>
            <td><?=$arrayExtra[9][1]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Вечером</td>
            <td><?=$arrayDegrees[9][2]?></td>
            <td><?=$arrayDescription[9][2]?></td>
            <td><?=$arrayPressure[9][2]?></td>
            <td><?=$arrayHumidity[9][2]?></td>
            <td><?=$arrayWind[9][2]?></td>
            <td><?=$arrayTypeWind[9][2]?></td>
            <td><?=$arrayExtra[9][2]?></td>
        </tr>

        <tr>
            <th scope="row"></th>
            <td>Ночью</td>
            <td><?=$arrayDegrees[9][3]?></td>
            <td><?=$arrayDescription[9][3]?></td>
            <td><?=$arrayPressure[9][3]?></td>
            <td><?=$arrayHumidity[9][3]?></td>
            <td><?=$arrayWind[9][3]?></td>
            <td><?=$arrayTypeWind[9][3]?></td>
            <td><?=$arrayExtra[9][3]?></td>
        </tr>

        </tbody>
    </table>
<?php endforeach;?>