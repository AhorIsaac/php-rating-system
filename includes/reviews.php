<?php

require_once("../classes/Rating.php");

$rating = new Rating();

$reviews = $rating->reviews();

foreach ($reviews as $review) {
?>

    <div class="row mb-3 mt-3">
        <div class="col-sm-1">
            <div class="rounded-circle bg-danger text-white pt-2 pb-2">
                <h3 class="text-center"> <?php echo $review->user_name[0] ?>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="card">
                <div class="card-header">
                    <b> <?php echo $review->user_name; ?> </b>
                </div>
                <div class="card-body">

                    <?php
                    for ($star = 1; $star <= 5; $star++) {
                        $class_name = '';

                        if ($review->user_rating >= $star) {

                            $class_name = 'text-warning';
                        } else {
                            $class_name = 'star-light';
                        }
                    ?>
                        <i class="fa fa-star <?php echo $class_name ?> mr-1"></i>
                    <?php
                    }
                    ?>

                    <br />

                    <?php echo $review->user_review; ?>

                </div>

                <div class="card-footer text-right text-light font-weight-bold">
                    <?php echo $review->date_time ?>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>