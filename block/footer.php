<?php


function footer($logo, $index, $about ,$contact, $faq)
{
    echo '
    <footer>
    <div class="logo reveal">
        <a href="' . $index . '"><img src="' . $logo . '" alt="Logo"></a>
    </div>
    <div class="footer">
        <div class="follow reveal">
            <p>Follow us on :</p>
            <span>
                <a href="http://" title="@moroccan_explorers">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAAqUlEQVRIie3SsQ3CMBBA0buUdFTUzEDPEEwAU9EyC2tEiI4SapCiT0PDSeDjjCOE7peO42cnFsl+OUCBNbAHLsAAnIEDsGgJ73jdshW6eoO64S5gbwLv1AeczAm3wHQM+GrgWWQdDcCYoU5V7VixyD9+KoK6YHtlS8+BuWvDHtiz0KObiExUdShNrP7UpqMHbQH33onVt1pVP15D5PsnTjjhhBP+YzgbrTs8kL3ZJFJksQAAAABJRU5ErkJggg==" alt="icon">
                </a>
                <a href="https://www.instagram.com/moroccan_explorers/" title="@moroccan_explorers">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABmJLR0QA/wD/AP+gvaeTAAABsElEQVRYhe2WzU7CQBSFkT9XgFtxgz6DuBHZ+ACojwHoWoGn8Ad9ApHXMFE0QeNCQffIAwjuIJ8LbsPYtKUzhOiiJ2na3Lnn3DPTmduGQgEC/HcAeaAJ9IExszEGPoWzM0/hGHDlo+AsXAIxEwNW8QFwDGSAsA9eGFgHKsBQNOq6xfNK8U1t91OdrGIip0NsCunEsPAZUJbnqmg1dAT6Qso4jC0Dh8CDzG4ItIAyEJecW+BUnjdEq6djYCSkiC2+Brx4bLhnIG3jRGRspGMAAIeZW8XfgAKQkGsP6MrYk7USXnomBo4k3AFSDpyUYqK0CAOPEi548PYlp7UIAwMJJzx4Scn58mtgZmNRdXzkLGnoaRvoyH3XI8cae9U18gsur6As4a7LJlwBPiSnOEvPxECcyTkHeJcNl5TrQCnexvbxMTHg1ojSigkntIFVG8eoEXm14jhQAu7lZAyAO6Bon7nkG7XiGyFVfJPctWqida1D2hHSEMjOUXwL+BatbV1yXTFRZfKT4eeHJCLLXlOKX5i4jyom5sE5ENU2oBjJAQ2gx/R0eGEkuQ3tZQ8Q4C/wA/lL1GfXg1+GAAAAAElFTkSuQmCC" alt="icon">
                </a>
            </span>
        </div>
        <div class="link reveal">
            <a href="' . $about . '">ABOUT</a>
            <a href="' . $contact . '">CONTACT</a>
            <a href="' . $faq . '">FAQ</a>
        </div>
        <div class="sign reveal">
            <div class="login-box">
                <h3>Sign up for updates : </h3>
                <form action="block/form.php" method="post">
                    <div class="user-box">
                        <input type="text" name="email" required>
                        <label>Email Adresse</label>
                    </div>
                    <div class="a">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <input type="submit" value="submit" class="submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
        ';
}
?>
<!--Menu Modal -->