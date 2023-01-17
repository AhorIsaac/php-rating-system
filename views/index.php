<!DOCTYPE html>
<html>

<head>
    <title> Rating System </title>
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../public/css/darkly-bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="../public/font-awesome/css/all.css" type="text/css" rel="stylesheet">
    <link href="../public/font-awesome/css/fontawesome.css" type="text/css" rel="stylesheet">
    <!--- css files --->
    <!-- internal css --->
    <style>
        #logo {
            font-family: Calibri, 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
            border: 4px inset dimgray;
            padding: 4px;
            font-size: 36px;
            color: black;
            border-top-left-radius: 24px;
            border-bottom-right-radius: 24px;
            text-shadow: 2px 2px 2px cadetblue;
            box-shadow: 0 0 1px 1px tomato;
            background: conic-gradient(from 180deg, white, silver, grey, silver, white);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-5 mb-5"> <span id="logo">USR</span> User Rating System </h1>

        <div id="success_msg" class="text-center"></div>

        <div class="card">
            <div class="card-header">
                Sample Product
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- first column -->
                    <div class="col-sm-4 text-center">
                        <h1 class="text-warning mt-4 mb-4">
                            <b> <span id="average_rating">0.0</span> / 5 </b>
                        </h1>

                        <div class="mb-3">
                            <i class="fa fa-star star-light mr-1 main_star"></i>
                            <i class="fa fa-star star-light mr-1 main_star"></i>
                            <i class="fa fa-star star-light mr-1 main_star"></i>
                            <i class="fa fa-star star-light mr-1 main_star"></i>
                            <i class="fa fa-star star-light mr-1 main_star"></i>
                        </div>

                        <h3> <span id="total_review"> 0 </span> Review </h3>
                    </div>
                    <!-- end of first column -->
                    <!-- second column -->
                    <div class="col-sm-4 text-center">
                        <div>
                            <div class="progress-label-left">
                                <b>5</b> <i class="fa fa-star text-warning"></i>
                            </div>
                            <div class="progress-label-right text-info">
                                (<span id="total_five_star_review">0</span>)
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemax="100" aria-valuemin="0" id="five_star_progress">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="progress-label-left">
                                <b>4</b> <i class="fa fa-star text-warning"></i>
                            </div>
                            <div class="progress-label-right text-info">
                                (<span id="total_four_star_review">0</span>)
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemax="100" aria-valuemin="0" id="four_star_progress">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="progress-label-left">
                                <b>3</b> <i class="fa fa-star text-warning"></i>
                            </div>
                            <div class="progress-label-right text-info">
                                (<span id="total_three_star_review">0</span>)
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemax="100" aria-valuemin="0" id="three_star_progress">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="progress-label-left">
                                <b>2</b> <i class="fa fa-star text-warning"></i>
                            </div>
                            <div class="progress-label-right text-info">
                                (<span id="total_two_star_review">0</span>)
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemax="100" aria-valuemin="0" id="two_star_progress">
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="progress-label-left">
                                <b>1</b> <i class="fa fa-star text-warning"></i>
                            </div>
                            <div class="progress-label-right text-info">
                                (<span id="total_one_star_review">0</span>)
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemax="100" aria-valuemin="0" id="one_star_progress">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end of second column -->
                    <!-- third column -->
                    <div class="col-sm-4 text-center">
                        <h3 class="mt-4 mb-3"> Write Review Here </h3>
                        <button type="button" id="add_review" name="add_review" class="btn btn-primary">
                            Review
                        </button>
                    </div>
                    <!-- end of third column -->
                </div>
            </div>
        </div>
        <!-- end of card -->

        <div class="m-auto mt-5" id="review_content">

        </div>
    </div>

    <div class="modal fade" id="review_modal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewModalLabel"> Submit Review </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="rating"> Choose Rate Number </label>
                        <input type="number" min="1" max="5" name="rating_num" id="rating_num" class="form-control" style="font-weight: bold" />
                    </div>
                    <h4 class="text-center mt-2 mb-4">
                        <i class="fa fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                        <i class="fa fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                        <i class="fa fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                        <i class="fa fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                        <i class="fa fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                    </h4>
                    <div class="form-group">
                        <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter your name" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="user_review" name="user_review" placeholder="Type review here"></textarea>
                    </div>
                    <div class="form-group text-center mt-4">
                        <button type="button" id="save_review" class="btn btn-primary"> Submit </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center p-3">
        <h2 class="text-info font-weight-bold">
            &copy;Trey Corporation
        </h2>
        <p class="">
            <i class="fab fa-facebook fa-2x m-2"></i>
            <i class="fab fa-whatsapp fa-2x m-2"></i>
            <i class="fab fa-twitter fa-2x m-2"></i>
            <i class="fab fa-linkedin fa-2x m-2"></i>
            <i class="fab fa-instagram fa-2x m-2"></i>
        </p>
        <p class="font-weight-bold">
            <script>
                let date_ = new Date();
                document.write(date_.getFullYear())
            </script>
        </p>
    </div>


    <!-- js scripts -->
    <script src="../public/scripts/jquery-3.5.1.js"> </script>
    <script src="../public/scripts/popper.min.js"> </script>
    <script src="../public/scripts/bootstrap.min.js"> </script>
    <script src="../public/scripts/util.js"> </script>
    <script src="../public/scripts/modal.js"> </script>
    <script src="../public/scripts/collapse.js"> </script>
    <script src="../public/scripts/tooltip.js"> </script>
    <script src="../public/scripts/popover.js"> </script>
    <script src="../public/scripts/modal-support.js"> </script>
    <script src="../public/font-awesome/js/all.js"> </script>
    <script src="../public/font-awesome/js/fontawesome.js"> </script>
    <script>
        $(document).ready(function() {
            $("#add_review").click(function() {
                $("#review_modal").modal('show');
            });

            $("#save_review").click(function() {
                let user_rating = $("#rating_num").val();
                let user_name = $("#user_name").val();
                let user_review = $("#user_review").val();
                let user_review_bool = true;

                if (user_name == '' || user_review == '' || user_rating == null || user_rating == undefined) {
                    alert('Please fill both fields');
                    return false;
                } else {
                    $.ajax({
                        url: "../controllers/ReviewController.php",
                        type: "POST",
                        data: {
                            user_review_bool: user_review_bool,
                            user_rating: user_rating,
                            user_name: user_name,
                            user_review: user_review
                        },
                        success: function(data) {
                            $("#review_modal").modal('hide');

                            load_rating_data();
                            load_all_reviews();

                            $("#success_msg").html(`${data}`);

                            $("#rating_num").val("");
                            $("#user_name").val("");
                            $("#user_review").val("");
                        }

                    });
                }
            });

        })

        function load_rating_data() {
            $.ajax({
                url: "../controllers/ReviewController.php",
                type: "POST",
                data: {
                    action: 'load_data'
                },
                dataType: "JSON",
                success: function(data) {
                    $("#average_rating").text(data.average_rating);
                    $("#total_review").text(data.total_review);

                    let count_star = 0;

                    $('.main_star').each(function() {
                        count_star++;
                        if (Math.ceil(data.average_rating) >= count_star) {
                            $(this).addClass('text-warning');
                            $(this).addClass('star-light');
                        }
                    });

                    $('#total_five_star_review').text(data.five_star_review);
                    $('#total_four_star_review').text(data.four_star_review);
                    $('#total_three_star_review').text(data.three_star_review);
                    $('#total_two_star_review').text(data.two_star_review);
                    $('#total_one_star_review').text(data.one_star_review);

                    $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');
                    $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');
                    $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');
                    $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');
                    $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

                }

            });
        }

        load_rating_data();

        const rateElement = document.querySelector('#rating_num');

        rateElement.addEventListener('change', (event) => {
            const rating = document.querySelector('#rating_num').value;

            for (let count = 1; count <= 5; count++) {
                $("#submit_star_" + count).addClass('star-light');
                $("#submit_star_" + count).removeClass('text-warning');
            }

            for (let count = 1; count <= rating; count++) {
                $("#submit_star_" + count).addClass('text-warning');
            }
        });

        function load_all_reviews() {
            $("#review_content").load("../includes/reviews.php");
        }

        load_all_reviews();
    </script>
</body>

</html>