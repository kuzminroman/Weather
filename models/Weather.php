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
}