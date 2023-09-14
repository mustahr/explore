<?php
$id_trip = array();
$id_s_trip = array();
$number = 0;
$searchTerm = '';
require_once '../conf/connect.php';
// $error = '';
if (isset($_GET['searchTerm'])) {
    $searchTerm = $_GET['searchTerm'];
    // Perform the search and display results here
    // Modify the code below to match your database structure and connection method

    // Define words to exclude from the search
    $excludeWords = array("and", "in", "where", "me", "can", "et", "not", "dans", "right", "now", "visit", "want", "to", "pour", "I", "i", "want");
    // Check the connection
    if ($db->connect_error) {
        die('Connection failed: ' . $db->connect_error);
    }

    // Escape special characters to prevent SQL injection
    $escapedSearchTerm = $db->real_escape_string($searchTerm);
    $searchWords = explode(' ', $escapedSearchTerm);

    // Remove excluded words from the searchWords array
    $filteredWords = array_filter($searchWords, function ($word) use ($excludeWords) {
        return !in_array(strtolower($word), $excludeWords);
    });

    // Construct the SQL query
    $sql = "SELECT trip_id FROM trip WHERE 0";
    // Iterate over each search word and add it to the query
    foreach ($filteredWords as $word) {
        $sql .= " OR trip_title LIKE '%$word%' OR activity LIKE '%$word%' OR description_1 LIKE '%$word%' OR description_2 LIKE '%$word%' OR description_3 LIKE '%$word%'";
    }
    $sql_special = "SELECT DISTINCT(id_s_trip) FROM special_trips_days WHERE 0";
    foreach ($filteredWords as $word) {
        $sql_special .= " OR day_content LIKE '%$word%'";
    }

    // Execute the query
    $result = $db->query($sql);
    $result_sql_special = $db->query($sql_special);
    // Process the search results for trips
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Display the search results
            array_push($id_trip, $row['trip_id']);
        }
    }
    // else {
    //     $error = 'Try typing Zagora or a city you want to visit .';
    // }
    // Process the search results for special trips
    // Fetch the IDs into an array
    $tripIds = [];
    if ($result_sql_special->num_rows > 0) {
        while ($row_special = $result_sql_special->fetch_assoc()) {
            $tripIds[] = $row_special['id_s_trip'];
        }
    }
    // If there are matching trip IDs, fetch the details from the trips table
    if (!empty($tripIds)) {
        $tripIdsString = implode(',', $tripIds);
        $sql_trips = "SELECT * FROM special_trips WHERE id_s_trip IN ($tripIdsString)";

        // Execute the query to fetch the trips
        $result_trips = $db->query($sql_trips);

        // Process the search results
        if ($result_trips->num_rows > 0) {
            while ($row_trip = $result_trips->fetch_assoc()) {
                // Display the search results from the trips table
                array_push($id_s_trip, $row_trip['id_s_trip']);
            }
        } else {
            echo "No matching trips found.";
        }
    }
    // else {
    //     $error = 'Try typing Zagora or a city you want to visit .';
    // }
    $number = count($id_s_trip) + count($id_trip);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="theme-color" content="#F0A500">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../../block/header_style.css">
    <link rel="stylesheet" href="../../block/footer.css">
    <title>Explore Morocco - Trip</title>
    <link rel="icon" href="../../block//logo.png">

    <!-- bootstrash -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Font awsome -->
    <script src="https://kit.fontawesome.com/8ec1398eb3.js" crossorigin="anonymous"></script>
    <!-- icons.com -->
    <a target="_blank" href="https://icons8.com/icon/ZMS7XMuKStHF/loading-heart"></a>

</head>

<body>
    <?php
    // include header

    $logo = '../../block//logo.png';
    $file = '../../block/header.php';
    $index = '../../';
    $trips = 'trips.php';
    $search_url = '';
    $categories =  '../category/categories.php';
    $contact =  '../contact.php';
    $about = '../about.php';
    $faq = '../faq.php';

    require($file);

    // logo($logo, $index, $trips, $categories, $contact, $about, $faq);
    ?>
    <section class="sec-7">
        <form action="search" method="GET">
            <div id="text">
                <input type="text" name="searchTerm" placeholder="What's your destination">
                <button type="submit" id="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
            <a href="../../"><i class="fa fa-home" aria-hidden="true"></i>&nbsp BACK</a>
        </form>
        <?php
        if (empty($id_trip) && empty($id_s_trip)) {
            echo '<h2 class="error">Can\'t find nothing, search for something else or <a href="../contact">contact us.</a></h2>';
        } else { ?>
            <div class="title">
                <h2>
                    Found <?= $number . ' : ' . $searchTerm  ?>
                </h2>
                <!-- <hr> -->
            </div>
        <?php
        }
        if (!empty($id_trip)) {
            $normal_trip = $db->query("SELECT trip_id,trip_front_image,trip_title FROM trip WHERE trip_id in (" . implode(',', $id_trip) . ")");
        ?>

            <div class="inner-card">
                <?php
                while ($s = $normal_trip->fetch_assoc()) { ?>
                    <!-- Start card -->
                    <div class="card ">
                        <div class="image">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($s['trip_front_image']); ?>" alt="Traveling">
                        </div>
                        <div class="content">
                            <div class="text">
                                <!-- <div class="distenation"> -->
                                <?php echo $s['trip_title']; ?>
                                <!-- </div> -->
                            </div>
                            <div class="more">
                                <a href="../trips/trip.php?trip_id=<?php echo $s['trip_id']; ?>&search=<?php echo $searchTerm ?>" title="More infos">
                                    see more
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End card -->
                <?php } ?>
            </div>
        <?php } ?>
    </section>
    <?php
    if (!empty($id_s_trip)) {
        $special = $db->query("SELECT id_s_trip,thumb_img,title,trip_days FROM special_trips WHERE id_s_trip in (" . implode(',', $id_s_trip) . ")");
    ?>
        <section class="sec-7">
            <div class="inner-card">
                <?php
                while ($s = $special->fetch_assoc()) { ?>
                    <!-- Start card -->
                    <div class="card ">
                        <div class="image">
                            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($s['thumb_img']); ?>" alt="Traveling">
                        </div>
                        <div class="content">
                            <div class="text">
                                <!-- <div class="distenation"> -->
                                <?php echo $s['title']; ?>
                                <!-- </div> -->
                                <p>
                                    <?php echo $s['trip_days']; ?> days trip
                                </p>
                            </div>
                            <div class="more">
                                <a href="../trips/special?trip_id=<?php echo $s['id_s_trip']; ?>" title="More infos">
                                    see more
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End card -->
                <?php } ?>
            </div>
        </section>
    <?php } ?>
    <?php
    // include footer

    $file = '../../block/footer.php';


    require($file);

    footer($logo, $index, $about, $contact, $faq);
    ?>


    <script src="./../js/main.js"></script>
</body>

</html>