<?php
    session_start();
    require 'db.php';
 //submit_rating.php
 // Array ( [rating_data] => 5 [user_name] => anokh [user_review] => dsf )
 if(isset($_POST["rating_data"]))
 {
	 $uname	=	$_POST["user_name"];
	 $rating	=	$_POST["rating_data"];
	 $review	=	$_POST["user_review"];
	 $pid	=	$_POST["product_id"];
	 $time	=	time();
	 $query = "INSERT INTO review_table1 (pid,user_name,user_rating,user_review,datetime) VALUES ('$pid','$uname',$rating,'$review',$time)";
	//  print_r($query);
	//  die;
	 $statement=$conn->query($query);
 if ($statement==true) {
	 echo "Your Review & Rating Successfully Submitted";
 }
 }

 if(isset($_POST["action"]))
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
	 $pid=$_POST['productId'];
		 $query = "SELECT * FROM review_table1 WHERE  pid=".$pid;
		 $result = $conn->query($query);
		//   print_r($query);
		//   die;
	 if($result->num_rows>0){
		 while($row=$result->fetch_assoc())
		 {
			 $review_content[] = array(
				 'user_name'	=>	$row["user_name"],
				 'user_review'	=>	$row["user_review"],
				 'rating'		=>	$row["user_rating"],
				 'datetime'		=>	date('l jS, F Y h:i:s A', $row["datetime"])
			 );
			 if($row["user_rating"] == '5')
			 {
				 $five_star_review++;
			 }
	 
			 if($row["user_rating"] == '4')
			 {
				 $four_star_review++;
			 }
	 
			 if($row["user_rating"] == '3')
			 {
				 $three_star_review++;
			 }
	 
			 if($row["user_rating"] == '2')
			 {
				 $two_star_review++;
			 }
	 
			 if($row["user_rating"] == '1')
			 {
				 $one_star_review++;
			 }
	 
			 $total_review++;
	 
			 $total_user_rating = $total_user_rating + $row["user_rating"];
	 
		 }
	 }
 
	 $average_rating = $total_user_rating / $total_review;
 
	 $output = array(
		 'average_rating'	=>	number_format($average_rating, 1),
		 'total_review'		=>	$total_review,
		 'five_star_review'	=>	$five_star_review,
		 'four_star_review'	=>	$four_star_review,
		 'three_star_review'	=>	$three_star_review,
		 'two_star_review'	=>	$two_star_review,
		 'one_star_review'	=>	$one_star_review,
		 'review_data'		=>	$review_content
	 );
 
	 echo json_encode($output);
 
 }
 
 ?>