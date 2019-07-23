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
        <tr/>

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
        <tr/>

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
            <td><b><?=$arrayDate[1]?></b>
                <p>Утром</p></td>
            <td><?=$arrayDegrees[1][0]?></td>
            <td><?=$arrayDescription[1][0]?></td>
            <td><?=$arrayPressure[1][0]?></td>
            <td><?=$arrayHumidity[1][0]?></td>
            <td><?=$arrayWind[1][0]?></td>
            <td><?=$arrayTypeWind[1][0]?></td>
            <td><?=$arrayExtra[1][0]?></td>
        <tr>

        <tr>
            <th scope="row"></th>
            <td><?=$arrayDate[0][0]?></td>
            <td><?=$arrayDegrees[0][1]?></td>
            <td><?=$arrayDescription[0][1]?></td>
            <td><?=$arrayPressure[0][1]?></td>
            <td><?=$arrayHumidity[0][1]?></td>
            <td><?=$arrayWind[0][1]?></td>
            <td><?=$arrayTypeWind[0][1]?></td>
            <td><?=$arrayExtra[0][1]?></td>
        <tr>

        <tr>
            <th scope="row"></th>
            <td><?=$arrayDate[0][0]?></td>
            <td><?=$arrayDegrees[0][1]?></td>
            <td><?=$arrayDescription[0][1]?></td>
            <td><?=$arrayPressure[0][1]?></td>
            <td><?=$arrayHumidity[0][1]?></td>
            <td><?=$arrayWind[0][1]?></td>
            <td><?=$arrayTypeWind[0][1]?></td>
            <td><?=$arrayExtra[0][1]?></td>
        <tr>

        <tr>
            <th scope="row"></th>
            <td><?=$arrayDate[0][0]?></td>
            <td><?=$arrayDegrees[0][1]?></td>
            <td><?=$arrayDescription[0][1]?></td>
            <td><?=$arrayPressure[0][1]?></td>
            <td><?=$arrayHumidity[0][1]?></td>
            <td><?=$arrayWind[0][1]?></td>
            <td><?=$arrayTypeWind[0][1]?></td>
            <td><?=$arrayExtra[0][1]?></td>
        <tr>

        <tr>
            <th scope="row"></th>
            <td><?=$arrayDate[0][0]?></td>
            <td><?=$arrayDegrees[0][1]?></td>
            <td><?=$arrayDescription[0][1]?></td>
            <td><?=$arrayPressure[0][1]?></td>
            <td><?=$arrayHumidity[0][1]?></td>
            <td><?=$arrayWind[0][1]?></td>
            <td><?=$arrayTypeWind[0][1]?></td>
            <td><?=$arrayExtra[0][1]?></td>
        <tr>

        <tr>
            <th scope="row"></th>
            <td><?=$arrayDate[0][0]?></td>
            <td><?=$arrayDegrees[0][1]?></td>
            <td><?=$arrayDescription[0][1]?></td>
            <td><?=$arrayPressure[0][1]?></td>
            <td><?=$arrayHumidity[0][1]?></td>
            <td><?=$arrayWind[0][1]?></td>
            <td><?=$arrayTypeWind[0][1]?></td>
            <td><?=$arrayExtra[0][1]?></td>
        <tr>

        <tr>
            <th scope="row"></th>
            <td><?=$arrayDate[0][0]?></td>
            <td><?=$arrayDegrees[0][1]?></td>
            <td><?=$arrayDescription[0][1]?></td>
            <td><?=$arrayPressure[0][1]?></td>
            <td><?=$arrayHumidity[0][1]?></td>
            <td><?=$arrayWind[0][1]?></td>
            <td><?=$arrayTypeWind[0][1]?></td>
            <td><?=$arrayExtra[0][1]?></td>
        <tr>

        </tbody>
    </table>

<?php endforeach; ?>