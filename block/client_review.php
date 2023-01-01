<?php
require_once '../conf/connect.php';
$review = $db->query("SELECT c.first_name,c.last_name,c.client_func , r.review FROM client c JOIN review r ON c.id_client = r.id_client WHERE r.id_trip = 17 ");

while ($rev = $review->fetch_assoc()) {
?>
    <div class="client_review">

        <div class="img" data-aos="fade-up">
            <img src="https://img.freepik.com/free-photo/islamic-woman-portrait-looking-camera_53876-20792.jpg?w=740&t=st=1670531986~exp=1670532586~hmac=e91d2fd8f7c8c42327f1b08d0ac9e7798ca303c6e2163f0066d183f9b317dae8" alt="">
        </div>

        <div class="review" data-aos="fade-up">
            <h3>Client review</h3>
            <p>
                <?php echo $rev['review']; ?>
            </p>
            <h3 id="client_name"><?php echo $rev['first_name'] . " " . $rev['last_name'] ?> - <p><?php echo $rev['client_func']; ?></p>
            </h3>
            <?php
            ?>
        </div>
    </div>
<?php
}
?>