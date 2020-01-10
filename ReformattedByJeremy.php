<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting( E_ALL );

class weatherTool {
	const APIXUKEY = '774e4c6f0eb04258b79165458181105';
	const APIXUCITY = 'Limoges';
	const DATEFORMAT = 'Y-m-d';

    /**
     * My function
     */
	function get_today_weather():array{
		$today_weather = [];

		// Get weather from APIXU  :
		$DateToDay = new DateTime('now');
        $ToDayStr = $DateToDay-> format(self::DATEFORMAT);
        $Url = 'http://api.apixu.com/v1/history.json?key='.self::APIXUKEY.'&q='.self::APIXUCITY.'&dt='.$ToDayStr;
        $Curl = curl_init();
        curl_setopt( $Curl, CURLOPT_URL, $Url );
        curl_setopt($Curl, CURLOPT_RETURNTRANSFER, TRUE);
        $ResponseJson = curl_exec($Curl);
        $Response = json_decode($ResponseJson);

        // Check reponse :
        if (!empty($Response)) {
            if (!property_exists($Response, 'error'))
			{
                if (
                    property_exists($Response, 'forecast') && property_exists($Response->forecast, 'forecastday')
				) {
				$forecastday = reset($Response->forecast->forecastday);
						if ($forecastday !== FALSE)
						{
							if (property_exists($forecastday, 'day'))
								{
								$today_weather = array(
									'maxTemp'=> $forecastday->day->maxtemp_c,
									'minTemp'=> $forecastday->day->mintemp_c,
                                    'precipitation'=> $forecastday->day->totalprecip_mm,
                                    'wind'=> $forecastday->day->maxwind_mph,
                                    'humidity'=> $forecastday->day->avghumidity
								);
							} else {
                                echo 'Cannot get properties from APIXU response';
							}
						}
						else
                        {
							echo 'Cannot get forecastday value from APIXU response';
						}
                } else {
                    echo 'Cannot get forecast and forecastday properties from APIXU response';
                }
            } else {
                echo 'Error from the APIXU response. Code : '.$Response->error->code.', message : '.$Response->error->message;
            }
        } else {
            echo 'Cannot get response from APIXU';
        }

        return
            $today_weather;
    }
}

$weatherTool = new weatherTool();
$today_weather = $weatherTool-> get_today_weather();
echo '<pre>';
var_dump($today_weather);
echo '</pre>';
