<?php


namespace app\models;

use Yii;
use GuzzleHttp\Client; // подключаем Guzzle

class ParsingWeather
{
    /***
     * @var $party_day
     */
    private $degrees;

    /***
     * @var $description
     */
    private $description;

    /***
     * @var $pressure
     */
    private $pressure;

    /***
     * @var $humidity
     */
    private $humidity;

    /***
     * @var $wind
     */
    private $wind;

    /***
     * @var $type_wind
     */
    private $type_wind;

    /***
     * @var $extra
     */
    private $extra;

    /**
     * @var \phpQueryObject
     */
    private $doc;

    function __construct()
    {
        $client = new Client();
        $page = $client->request('GET', "https://yandex.ru/pogoda/moscow/details");
        $body = $page->getBody($page);
        $this->doc = \phpQuery::newDocumentHTML($body);

        $this->degrees = '.weather-table__temp';
        $this->description = '.weather-table__body-cell_type_condition';
        $this->pressure = '.weather-table__body-cell_type_air-pressure';
        $this->humidity = '.weather-table__body-cell_type_humidity';
        $this->wind = '.weather-table__wind';
        $this->type_wind = '.weather-table__wind-direction';
        $this->extra = '.weather-table__body-cell_type_feels-like';
    }

    private function builder($elements)
    {
        $mas = [];

        foreach ($elements as $element)
        {
            $string = strval(pq($element));
            $serialize = strip_tags($string);
            $stringReplace = str_replace("\n", "", $serialize);
            $mas[] = $stringReplace;
        }

        $newmas = [];

        for($i = 0; $i < 40; $i += 4)
        {
            $newmas[] = array_slice($mas,  $i, 4);
        }

        $json = json_encode($newmas, JSON_UNESCAPED_UNICODE);

        return $json;
    }

    public static function generateDate()
    {
        $date = date("Y-m-d");
        $dates = [];
        for($i = 0; $i <= 9; $i++)
        {
            $dates[] = date('Y-m-d', strtotime($date. " + $i days"));
        }
        $jsonDate = json_encode($dates);
        return $jsonDate;
    }

    public function parsingDegrees()
    {
        $degrees = $this->doc->find($this->degrees);
        $degreesBuild = $this->builder($degrees);
        return $degreesBuild;
    }

    public function parsingDescription()
    {
        $descr = $this->doc->find($this->description);
        $descrBuild = $this->builder($descr);
        return $descrBuild;
    }

    public function parsingPreassure()
    {
        $preasure = $this->doc->find($this->pressure);
        $preasBuild = $this->builder($preasure);
        return $preasBuild;
    }

    public function parsingHumidity()
    {
        $humidity = $this->doc->find($this->humidity);
        $buildHum = $this->builder($humidity);
        return $buildHum;
    }

    public function parsingWind()
    {
        $wind = $this->doc->find($this->wind);
        $buildWind = $this->builder($wind);
        return $buildWind;
    }

    public function parsingTypeWind()
    {
        $typeWind = $this->doc->find($this->type_wind);
        $buildWindType = $this->builder($typeWind);
        return $buildWindType;
    }

    public function parsingExtra()
    {
        $extra = $this->doc->find($this->extra);
        $buildExtra = $this->builder($extra);
        return $buildExtra;
    }
}