<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weather".
 *
 * @property int $id
 * @property string $date
 * @property string $degrees
 * @property string $description
 * @property string $pressure
 * @property string $humidity
 * @property string $wind
 * @property string $type_wind
 * @property string $extra
 * @property string $date_regist
 */
class Weather extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'weather';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'degrees', 'description', 'pressure', 'humidity', 'wind', 'type_wind', 'extra', 'date_regist'], 'string'],
            ];
    }

    /**
     * {@inheritdoc}
     */

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'degrees' => 'Degrees',
            'description' => 'Description',
            'pressure' => 'Pressure',
            'humidity' => 'Humidity',
            'wind' => 'Wind',
            'type_wind' => 'Type Wind',
            'extra' => 'Extra',
            'date_regist' => 'Regist',
            ];
    }

    public function showWeather()
    {
        $dateNow = date('Y-m-d');
        $weather = Weather::find()
            ->where(['date_regist' => $dateNow])
            ->all();
        return $weather;
    }

    private function showDateNow()
    {
        $dateNow = date('Y-m-d');
        $date = "";
        $dateRegist = Weather::find()
            ->select(['date_regist'])
            ->where(['date_regist' => $dateNow])
            ->all();
        foreach ($dateRegist as $d)
        {
            $date = $d['date_regist'];
        }
        return $date;
    }

    private function insertWeather()
    {
        $weatherElement = new ParsingWeather();
        $weather = new Weather();
        $weather->date = $weatherElement->generateDate();
        $weather->degrees = $weatherElement->parsingDegrees();
        $weather->description = $weatherElement->parsingDescription();
        $weather->pressure = $weatherElement->parsingPreassure();
        $weather->humidity = $weatherElement->parsingHumidity();
        $weather->wind = $weatherElement->parsingWind();
        $weather->type_wind = $weatherElement->parsingTypeWind();
        $weather->extra = $weatherElement->parsingExtra();
        $weather->date_regist = date('Y-m-d');
        if($weather->save())
        {
            return $weather->save();

        } else {
            echo "Error save";
            print_r($weather->getErrors());
            exit;
        }
    }

    public function executeInsertWeather()
    {
        $dateRegist = $this->showDateNow();
        $dateNow = date('Y-m-d');

        if($dateNow != $dateRegist)
        {
            return $this->insertWeather();
        }

        return false;
    }

    /***
     * @param $i
     * @param $j
     */
    public function tamplateWeather($i, $j)
    {
        $show = $this->showWeather();
        foreach($show as $s):
            $arrayDate = json_decode($s['date']);
            $arrayDegrees = json_decode($s['degrees']);
            $arrayDescription = json_decode($s['description']);
            $arrayPressure = json_decode($s['pressure']);
            $arrayHumidity = json_decode($s['humidity']);
            $arrayWind = json_decode($s['wind']);
            $arrayTypeWind = json_decode($s['type_wind']);
            $arrayExtra = json_decode($s['extra']);

        $tamplate = <<<HTML
            <td><?=$arrayDegrees[$i][$j]?></td>
            <td><?=$arrayDescription[$i][0]?></td>
            <td><?=$arrayPressure[$i][0]?></td>
            <td><?=$arrayHumidity[0][0]?></td>
            <td><?=$arrayWind[0][0]?></td>
            <td><?=$arrayTypeWind[0][0]?></td>
            <td><?=$arrayExtra[0][0]?></td>
HTML;
        endforeach;
    }
}