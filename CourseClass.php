<?php

class CourseClass
{
    public function getCourse(){

        $jsonurl = 'https://query.yahooapis.com/v1/public/yql?q=select+*+from+yahoo.finance.xchange+where+pair+=+%22USDRUB%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys';
        $contenet = file_get_contents($jsonurl);
        if($contenet){
            $crs = json_decode($contenet, true);

            $pairname = $crs['query']['results']['rate']['id'];

            $rate = $crs['query']['results']['rate']['Rate'];

            $dateInArray = $crs['query']['results']['rate']['Date'];
            $date = date("d.m.Y", strtotime($dateInArray));


            $timeInArray = $crs['query']['results']['rate']['Time'];
            $time = date("H:i",strtotime( $timeInArray));
            return $pairname . " " . $rate . " " . $date . " " . $time;
        }

        else{
            return "<br> Что-то пошло не так";
        }
    }
}
?>