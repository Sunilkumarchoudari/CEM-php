<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>CSK</title>
    <?php require 'utils/styles.php'; ?>
    <!--css links. file found in utils folder-->
    <?php require 'utils/scripts.php'; ?>
    <!--js links. file found in utils folder-->
</head>

<body>
    <?php require 'utils/header.php'; ?>
    <!--header content. file found in utils folder-->
    <div class="content">
        <!--body content holder-->
        <div class="container">
            <div class="col-md-12">
                <!--body content title holder with 12 grid columns-->
                <h1>Our Venues</h1>
                <!--body content title-->
            </div>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--location content -->
            <section>
                <div class="container">
                    <div class="col-md-4">
                        <!--image holder with 4 grid column-->
                        <img src="images/event-hall.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="urbanxchange" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--location modal content-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal header-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <!--close button on top-->
                                    <h4 class="modal-title" id="myModalLabel">Event Hall</h4>
                                    <!--modal title-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal content-->
                                        <div class="col-md-6">
                                            <!--image holder with 6 grid column-->
                                            <img src="images/event-hall.jpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>Mahaveer Event Hall</h5>
                                            <!--content title-->
                                            <p>
                                                An assembly hall is a kind of function hall, a large room used to hold public meetings or meetings of the members of an organization such as a school, college. etc.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                          
                                        </div>
                                    </div>
                                    <!--modal body-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button>
                                    <p>
                                        <!--close button-->
                                </div>
                                <!--modal footer-->
                            </div>
                            <!--modal content div-->
                        </div>
                        <!--modal dialog div-->
                    </div>
                    <!--modal div-->
                    <div class="subcontent col-md-8">
                        <!--location non modal content -->
                        <h1 class="title">Event Hall</h1>
                        <!--location title-->
                        <p class="location">
                            <!--location secondary content-->
                            Old Block Mahaveer College
                        </p>
                        <p class="definition">
                            <!--content body-->
                        </p>
                        <hr class="customline3">
                        <!--css modified horizontal line-->
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#urbanxchange">
                            <!--button for modal trigger-->
                            More Details <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                            <!--glyphicon-->
                        </button>
                    </div>
                    <!--subcontent div-->
                </div>
                <!--container div-->
            </section>
        </div>
        <!--row div-->

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--location content -->
            <section>
                <div class="container">
                    <div class="col-md-4">
                        <!--image holder with 4 grid column-->
                        <img src="images/it-hub.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="ananasbar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--location modal content-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal header-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <!--close button on top-->
                                    <h4 class="modal-title" id="myModalLabel">IT Hub</h4>
                                    <!--modal title-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal content-->
                                        <div class="col-md-6">
                                            <!--image holder with 6 grid column-->
                                            <img src="images/it-hub.jpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>Mahaveer IT Hub</h5>
                                            <!--content title-->
                                            <p>
                                            An open-minded and diverse population that readily shares information, encourages experimentation, accepts failure and dispenses with formality and hierarchy is what makes Silicon Valley the successful hub that it is.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <!--for second paragraph-->
                                        </div>
                                    </div>
                                    <!--modal body-->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button>
                                    <p>
                                </div>
                                <!--modal footer-->
                            </div>
                            <!--modal content div-->
                        </div>
                        <!--modal dialog div-->
                    </div>
                    <!--modal div-->
                    <div class="subcontent col-md-8">
                        <!--location non modal content -->
                        <h1 class="title">IT Hub</h1>
                        <!--location title-->
                        <p class="location">Mahaveer Institute Of Science & Technology</p>
                        <!--location secondary content-->
                        <p class="definition">
                            <!--subline of divsion-->
                        </p>
                        <hr class="customline3">
                        <!--css modified horizontal line-->
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#ananasbar">
                            <!--button for modal trigger-->
                            More Details <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                            <!--glyphicon-->
                        </button>
                    </div>
                    <!--subcontent div-->
                </div>
                <!--container div-->
            </section>
        </div>
        <!--row div-->

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--location content -->
            <section>
                <div class="container">
                    <div class="col-md-4">
                        <!--image holder with 4 grid column-->
                        <img src="images/conference-hall.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="argyle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--location modal content-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal header-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <!--close button on top-->
                                    <h4 class="modal-title" id="myModalLabel">Conference Hall</h4>
                                    <!--modal title-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal content-->
                                        <div class="col-md-6">
                                            <!--image holder with 6 grid column-->
                                            <img src="images/conference-halljpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>Mahaveer Conference Hall</h5>
                                            <!--content title-->
                                            <p>
                                            A conference hall, conference room, or meeting room is a room provided for singular events such as event discussion, and more Depending on the purpose of the meeting, conference rooms may be set up in various styles.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <!--inside content-->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subcontent col-md-8">
                        <h1 class="title">Conference Hall</h1>
                        <p class="location">Mahaveer Institute Of Science & Technology</p>
                        <p class="definition">
                        <!--definatio-->
                        <hr class="customline3">
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#argyle">
                            More Details <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <div class="col-md-12">
                <hr>
            </div>
        </div>

        <div class="row">
            <!--location content -->
            <section>
                <div class="container">
                    <div class="col-md-4">
                        <!--image holder with 4 grid column-->
                        <img src="images/play-ground.jpg" class="img-responsive">
                    </div>
                    <div class="modal fade" id="munich" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <!--location modal content-->
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!--modal header-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Play Ground</h4>
                                    <!--modal title-->
                                </div>
                                <div class="row">
                                    <div class="modal-body">
                                        <!--modal content-->
                                        <div class="col-md-6">
                                            <!--image holder with 6 grid column-->
                                            <img src="images/playground.jpg" class="img-responsive">
                                        </div>
                                        <div class="modaltext1 col-md-6">
                                            <h5>Mahaveer Play Ground</h5>
                                            <p>
                                            A playground,playpark, a place specifically designed to enable students to play there. It is typically outdoors. While a playground is usually designed for students, some target other age groups. Here all sports and games allowed to play and practiece.
                                            </p>
                                        </div>
                                        <div class="modaltext2 col-md-12">
                                            <!--paragraph content-->
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button>
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="subcontent col-md-8">
                        <h1 class="title">Play Ground</h1>
                        <p class="location">Mahaveer Institute Of Science & Technology</p>
                        <p class="definition">
                        <!--paragraph content-->
                        <hr class="customline3">
                        <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#munich">
                            More Details <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php require 'utils/footer.php'; ?>
</body>

</html>