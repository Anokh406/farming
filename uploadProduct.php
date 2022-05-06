<?php
 	session_start();
	require 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$productType = $_POST['type'];
		$productName = dataFilter($_POST['pname']);
		$productInfo = $_POST['pinfo'];
		$productPrice = dataFilter($_POST['price']);
		$fid = $_SESSION['id'];
        $quantity=$_POST['quantity'];
        $weight=$_POST['weight'];

		$sql = "INSERT INTO fproduct (fid, product, pcat, pinfo, price , quantity , weight)
			   VALUES ('$fid', '$productName', '$productType', '$productInfo', '$productPrice','$quantity','$weight')";
            //    print_r($sql);
            //    die;
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			$_SESSION['message'] = "Unable to upload Product !!!";
			header("Location: Login/error.php");
		}
		else {
			$_SESSION['message'] = "successfull !!!";
		}

		$pic = $_FILES['productPic'];
		$picName = $pic['name'];
		$picTmpName = $pic['tmp_name'];
		$picSize = $pic['size'];
		$picError = $pic['error'];
		$picType = $pic['type'];
		$picExt = explode('.', $picName);
		$picActualExt = strtolower(end($picExt));
		$allowed = array('jpg','jpeg','png');

		if(in_array($picActualExt, $allowed))
		{
			if($picError === 0)
			{
				$_SESSION['productPicId'] = $_SESSION['id'];
				$picNameNew = $productName.$_SESSION['productPicId'].".".$picActualExt ;
				$_SESSION['productPicName'] = $picNameNew;
				$_SESSION['productPicExt'] = $picActualExt;
				$picDestination = "images/productImages/".$picNameNew;
				move_uploaded_file($picTmpName, $picDestination);
				$id = $_SESSION['id'];

				$sql = "UPDATE fproduct SET picStatus=1, pimage='$picNameNew' WHERE product='$productName';";

				$result = mysqli_query($conn, $sql);
				if($result)
				{

					$_SESSION['message'] = "Product Image Uploaded successfully !!!";
					header("Location: market.php");
				}
				else
				{
					//die("bad");
					$_SESSION['message'] = "There was an error in uploading your product Image! Please Try again!";
					header("Location: Login/error.php");
				}
			}
			else
			{
				$_SESSION['message'] = "There was an error in uploading your product image! Please Try again!";
				header("Location: Login/error.php");
			}
		}
		else
		{
			$_SESSION['message'] = "You cannot upload files with this extension!!!";
			header("Location: Login/error.php");
		}
	}

	function dataFilter($data)
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AgroCulture</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="bootstrap\js\bootstrap.min.js"></script>
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" type="text/css" href="indexFooter.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-layers.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
        <link rel="stylesheet" href="css/skel.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/style-xlarge.css" />
    </noscript>
    <script src="https://cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>

<body>
    <?php require 'menu.php'; ?>
    <!-- One -->
    <section id="one" class="wrapper style1 align-center">
        <div class="container">
            <form method="POST" action="uploadProduct.php" enctype="multipart/form-data">
                <h2>Enter the Product Information here..!!</h2>
                <br>
                <center>
                    <input type="file" name="productPic"></input>
                    <br />
                </center>
                <div class="row">
                    <div class="col-sm-6" style="margin-top: 11px;">
                        <div class="select-wrapper" style="width: auto">
                            <?php 
                              $query = "SELECT * FROM fproduct ORDER BY product ASC";
                              $result = $conn->query($query);
                            ?>
                            <select name="type" id="product" class="form-control form-control-lg select2">
                                <?php
                                foreach($result as $row)
                                {
                                echo '<option value="'.$row['product'].'">'.$row['product'].'</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="pname" id="pname" value="" placeholder="Product Name"
                            style="background-color:white;color: black;" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="quantity" id="quantity" value="" placeholder="Enter Quantity"
                            style="background-color:white;color: black;" />
                    </div>
                    <div class="col-sm-6">
                        <select class="form-select" name="weight"  id="weight"style="background-color:white;color: black;"aria-label="Default select example">
                            <option selected>Select Weight</option>
                            <option value="1">Kg</option>
                            <option value="2">Ton</option>
                           
                        </select>
                    </div>
                </div>
                <br>
                <div>
                    <textarea name="pinfo" id="pinfo" rows="12"></textarea>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="price" id="price" value="" placeholder="Price"
                            style="background-color:white;color: black;" />
                    </div>
                    <div class="col-sm-6">
                        <button class="button fit" style="width:auto; color:black;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script>
    $(document).ready(function() {

        $('.select2').select2({
            placeholder: 'Select Category',
            theme: 'bootstrap4',
            tags: true,
        }).on('select2:close', function() {
            var element = $(this);
            var new_category = $.trim(element.val());

            if (new_category != '') {
                $.ajax({
                    url: "add.php",
                    method: "POST",
                    data: {
                        category_name: new_category
                    },
                    success: function(data) {
                        if (data == 'yes') {
                            element.append('<option value="' + new_category + '">' +
                                new_category + '</option>').val(new_category);
                        }
                    }
                })
            }

        });

    });

    CKEDITOR.replace('pinfo');
    </script>
</body>

</html>