<?php
$trips = $db->query("SELECT * FROM trip WHERE show_trip = 'y'");

$cat = $db->query("SELECT * FROM category");

$array_id = array();
$array_title = array();

if ($table == 'trip') {
    while ($trip = $trips->fetch_assoc()) {
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
            <h4 class="scroll-target">More trips</h4> 
        ';
        for ($i = 0; $i < count($array_id); $i++) {
            $html .=  '
                            <a href="trip.php?trip_id=' . $array_id[$i] . '" data-aos="fade-right">
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
    while ($c = $cat->fetch_assoc()) {
        array_push($array_id, $c["id_cat"]);
        array_push($array_title, $c["category"]);
    }
    function more_trips_cat($array_id, $array_title)
    {
        $html =    '
        <head>
            <link rel="stylesheet" href="../../block/more_trips_cat.css">
        </head>
        <div class="navigate">
            <h4 class="scroll-target">More categories </h4> 
        ';
        for ($i = 0; $i < count($array_id); $i++) {
            $html .=  '
                            <a href="../category/category.php?id_cat=' . $array_id[$i] . '" data-aos="fade-right">
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
