<?php
$more = $db->query("SELECT * FROM $table");

$array_id = array();
$array_title = array();

if ($table == 'trip') {
    while ($trip = $more->fetch_assoc()) {
        array_push($array_id, $trip["trip_id"]);
        array_push($array_title, $trip["trip_title"]);
    }
    function more_trips_cat($array_id, $array_title)
    {
        $html =    '
        <head>
            <link rel="stylesheet" href="../../block/more_trips_cat.css">
        </head>
        <div class="navigate">
            <h4>More trips</h4> 
        ';
        for ($i = 0; $i < count($array_id); $i++) {
            $html .=  '
                            <a href="trip.php?trip_id=' . $array_id[$i] . '">
                                <li>
                                    ' . $array_title[$i] . '
                                </li>
                            </a>
                            ';
        }
        $html .= '
            </div>
            ';
        return $html;
    }
} else {
    while ($trip = $more->fetch_assoc()) {
        array_push($array_id, $trip["id_cat"]);
        array_push($array_title, $trip["category"]);
    }
    function more_trips_cat($array_id, $array_title)
    {
        $html =    '
        <head>
            <link rel="stylesheet" href="../../block/more_trips_cat.css">
        </head>
        <div class="navigate">
            <h4>More trips</h4> 
        ';
        for ($i = 0; $i < count($array_id); $i++) {
            $html .=  '
                            <a href="../category/category.php?id_cat=' . $array_id[$i] . '">
                                <li>
                                    ' . $array_title[$i] . '
                                </li>
                            </a>
                            ';
        }
        $html .= '
            </div>
            ';
        return $html;
    }
}
