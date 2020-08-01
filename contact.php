<?php include_once('header.php');  ?>

<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/style2.css" >

</head>
<body>
<div class="container-fluid row mb-5">
    <div class="col-lg-6">
        <h2 class="text-danger font-weight-bold text-center mt-5">Feel Free To Cotanct us</h2>
        <img src="images/Meditation.svg"  id="Contact_img">
    </div>
    <div class="col-lg-6 container_Contact">
                
                    <h1 class="text-center text-danger">Contact Us</h1>
                    <div class="bg-success" id="Form_Submit">
                         <h5 class="text-center text-white">Form Submited </h5>              
                    </div>
                    <form id="MY-form">

                            <div class="form-group">
                                    <label for="exampleFormControlInput1" class="text-danger font-weight-bold mx-3">Name </label>
                                    <input type="text" class="form-control mx-3 userFullName" id="exampleFormControlInput1 Inp_field" placeholder="ENTER FULL NAME">
                            </div>


                            <div class="form-group">
                            <label for="exampleFormControlInput1" class="text-danger font-weight-bold mx-3">Email address</label>
                            <input type="email" class="form-control mx-3 userEmail" id="exampleFormControlInput2 Inp_field" placeholder="name@example.com">
                            </div>

                            <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="text-danger font-weight-bold mx-3">Message :</label>
                            <textarea class="form-control mr-1 userMessage" id="exampleFormControlTextarea1  Inp_field" rows="3" placeholder="Write your Message here.."></textarea>
                            </div>

                        <input type="submit" value="submit" name="submit" class="btn btn-danger font-weight-bold"  id="submit" onclick="Submit()">
                    </form>
            

    </div>
</div>


<?php include_once('footer.php') ?>

<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-firestore.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>