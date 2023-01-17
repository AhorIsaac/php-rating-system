<?php 

require_once("../classes/Rating.php");

if (isset($_POST["user_review_bool"]))
{
    if (!empty($_POST["user_rating"]) && (!empty($_POST["user_name"])) && !empty($_POST["user_review"]) ) 
    {
        $user_rating = $_POST["user_rating"]; 
        $user_name = $_POST["user_name"]; 
        $user_review = $_POST["user_review"]; 

        $fields = [
            "user_name" => $user_name, 
            "user_review" => $user_review, 
            "user_rating" => $user_rating 
        ]; 

        $rating = new Rating(); 
        $rating_store = $rating->store($fields); 

        if ($rating_store == TruE) 
        {
            echo '
            <div class="alert alert-success text-center alert-dismissible fade show " 
            style="font-family: monospace; display: inline-block;">
                <button class="close" data-dismiss="alert"> 
                    <span aria-hidden="true">&times;</span> 
                </button>
                <p class="text-white"> Thanks for your review! 
                    <i class="fa fa-thumbs-up fa-1x text-success"></i>  
                </p>
            </div>
            ';
            exit();                                                       
        }
    }
}

if (isset($_POST["action"])) 
{
    $average_rating = 0; 
    $total_review = 0; 
    $five_star_review = 0;
    $four_star_review = 0;
    $three_star_review = 0;
    $two_star_review = 0;
    $one_star_review = 0;           
    $total_user_rating = 0; 
    $review_content = array(); 
    
    $rating = new Rating(); 
    $reviews = $rating->reviews(); 

    foreach($reviews as $review) 
    {
        if($review->user_rating == "5") 
        {
            $five_star_review++;
        }

        if($review->user_rating == "4") 
        {
            $four_star_review++;
        }        

        if($review->user_rating == "3") 
        {
            $three_star_review++;
        }
   
        if($review->user_rating == "2") 
        {
            $two_star_review++;
        }
        
        if($review->user_rating == "1") 
        {
            $one_star_review++;
        }        

        $total_review++;

        $total_user_rating += $review->user_rating;
    }

    $average_rating = $total_user_rating / $total_review;

    $output = array(
        "average_rating" => number_format($average_rating, 1), 
        "total_review" => $total_review, 
        "five_star_review" => $five_star_review, 
        "four_star_review" => $four_star_review,
        "three_star_review" => $three_star_review,
        "two_star_review" => $two_star_review,
        "one_star_review" => $one_star_review, 
        "review_data" => $review_content
    );

    echo json_encode($output); 
    
}
