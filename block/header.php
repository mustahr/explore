<?php
$directory = pathinfo($logo, PATHINFO_DIRNAME);
$filename1 = 'desert.jpg';
$filename2 = 'sunset.jpg';

$img1 = $directory . '/' . $filename1;
$img2 = $directory . '/' . $filename2;

?>
<!-- Loading animation -->
<div class="loading-animation" id="loading-animation">
    <img src="<?= $logo ?>" alt="Logo">
    <div class="circle">
    </div>
</div>
</div>
<div class="modal fade" id="MenuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <a href="<?= $index ?>">HOME</a>
                <a href="<?= $trips ?>">ALL TRIPS</a>
                <a href="<?= $categories ?>">ALL CATEGORIES</a>
                <a href="<?= $contact ?>">CONTACT US</a>
                <a href="<?= $about ?>">ABOUT US</a>
                <a href="<?= $faq ?>">FAQ</a>
            </div>
            <div class="images">
                <img src="<?= $img2 ?>" alt="Sunset in the desert">
            </div>
        </div>
    </div>
</div>
<!-- More info nav bar -->
<div class="modal fade more-info" id="MoreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="logo">
                    <img src="<?= $logo ?>" alt="Logo">
                </div>
                <div class="s006">
                    <form action="<?= $search_url?>" method="GET">
                        <fieldset>
                            <legend>What are you looking for?</legend>
                            <div class="inner-form">
                                <div class="input-field">
                                    <button class="btn-search" type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                        </svg>
                                    </button>
                                    <input id="search" type="text" name="searchTerm" spellcheck="true" placeholder="..."/>
                                </div>
                            </div>
                            <div class="suggestion-wrap">
                                <a href="<?= $search_url.'?searchTerm=Marrakech' ?>">Marrakesh</a>
                                <a href="<?= $search_url.'?searchTerm=Fes' ?>">Fes</a>
                                <a href="<?= $search_url.'?searchTerm=food' ?>">Food</a>
                                <a href="<?= $search_url.'?searchTerm=merzouga' ?>">Merzouga</a>
                                <a href="<?= $search_url.'?searchTerm=hiking' ?>">Hiking</a>
                                <a href="<?= $search_url.'?searchTerm=land scape' ?>">Land scapes</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<header id="navbar">
    <nav>
        <head>
            <div class="search-toggle active" id="search-toggle">
                <div class="toggle">
                    <button type="button" title="Info" class="btn btn-primary" data-toggle="modal" data-target="#MoreModal">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill="#f0a500" d="M19.7555474,18.6065254 L16.3181544,15.2458256 L16.3181544,15.2458256 L16.2375905,15.1233001 C16.0877892,14.9741632 15.8829641,14.8901502 15.6691675,14.8901502 C15.4553709,14.8901502 15.2505458,14.9741632 15.1007444,15.1233001 L15.1007444,15.1233001 C12.1794834,17.8033337 7.6781476,17.94901 4.58200492,15.4637171 C1.48586224,12.9784243 0.75566836,8.63336673 2.87568494,5.31016931 C4.99570152,1.9869719 9.30807195,0.716847023 12.9528494,2.34213643 C16.5976268,3.96742583 18.4438102,7.98379036 17.2670181,11.7275931 C17.182269,11.9980548 17.25154,12.2921761 17.4487374,12.4991642 C17.6459348,12.7061524 17.9410995,12.794561 18.223046,12.7310875 C18.5049924,12.667614 18.7308862,12.4619014 18.8156353,12.1914397 L18.8156353,12.1914397 C20.2223941,7.74864367 18.0977423,2.96755391 13.8161172,0.941057725 C9.53449216,-1.08543846 4.38083811,0.250823958 1.68905427,4.08541671 C-1.00272957,7.92000947 -0.424820906,13.1021457 3.0489311,16.2795011 C6.5226831,19.4568565 11.8497823,19.6758854 15.5841278,16.7948982 L18.6276529,19.7705177 C18.9419864,20.0764941 19.4501654,20.0764941 19.764499,19.7705177 C20.0785003,19.4602048 20.0785003,18.9605974 19.764499,18.6502845 L19.764499,18.6502845 L19.7555474,18.6065254 Z" transform="translate(2 2)" class="color200E32 svgShape" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="logo active">
                <a href="<?= $index ?>"><img src="<?= $logo ?>" alt="Logo"></a>
            </div>
            <div class="search-toggle active">
                <div class="toggle">
                    <button type="button" title="Menu" class="btn btn-primary" data-toggle="modal" data-target="#MenuModal">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </head>
    </nav>
</header>
<!--Menu Modal -->