    <?php
    function logo($logo,$index,$trips,$categories,$contact,$about,$faq)
    {
        echo '
        <div class="modal fade" id="MenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="' . $index . '">HOME</a>
                    <a href="' . $trips . '">ALL TRIPS</a>
                    <a href="' . $categories . '">ALL CATEGORIES</a>
                    <a href="' . $contact . '">CONTACT US</a>
                    <a href="' . $about . '">ABOUT US</a>
                    <a href="' . $faq . '">FAQ</a>
                </div>
            </div>
        </div>
    </div>
    <header>
        <nav>

            <head>
                <div class="logo" data-aos="fade-up">
                    <a href="' . $index . '"><img src="' . $logo . '" alt="Logo"></a>
                </div>
                <div class="search-toggle" data-aos="fade-up">
                    <div class="toggle">
                        <button type="button"  title="Menu" class="btn btn-primary" data-toggle="modal" data-target="#MenuModal">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </head>
        </nav>
    </header>
        ';
    }
    ?>
    <!--Menu Modal -->