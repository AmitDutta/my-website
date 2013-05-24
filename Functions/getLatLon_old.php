<?php
    include_once("DBInteractor.php");
    // $strQuery = 'select lat,lon,recorded_time from current_location where id = 1520';
    $strQuery = "select lat, lon, date_format(recorded_datetime, '%M %d %Y %h:%i %p') as recorded_time from current_location order by id desc limit 1";
    $resId = executeQuery($strQuery);
    if($resId)
    {
        $data = getRecordsArray($resId);        
        echo json_encode(array('lat'=>$data["lat"],'lon'=>$data["lon"],'time'=>$data["recorded_time"]));
    }
?>