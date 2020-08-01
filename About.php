<?php include_once('header.php');  ?>

<html>
<head>
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/style2.css" >

</head>
<body>
<div class="container-fluid row mb-5 mt-5">
    <div class="col-lg-6 mt-5">
                <img src="images/story.svg"  id="Contact_img">
    </div>
    <div class="col-lg-6">

                    <h1 class="text-center text-danger">Our Story</h1>
                    <p class="text-justify mt-5"><big>BE-FIT</big> definition of training is: “making your MIND comfortable with the fact that your BODY is going to be a little uncomfortable”. People who don’t like to exercise usually just don’t like to be uncomfortable, but getting out of our comfort zones – mentally or physically – is where positive change happens. Nobody improves while sitting under a warm fuzzy blanket. My specialty is helping people to get out of their comfort zones whether it’s for a minute or an hour. I can’t make someone want to get stronger, leaner or fitter, but if they want to do it, I’m with them all the way!</p>
                    <p class="text-justify  "> <big>FITNESS</big> simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently worem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

    </div>
</div>

<div class="container my-5">
    <h2 class="text-center text-danger font-weight-bold mb-5">F A Q</h2>

    <button class="accordion">What documnets are requierd for student offer ?</button>
<div class="panel">
  <p class="py-2 px-4">Current High school or collage fee Recipet and Id card.</p>
</div>

<button class="accordion">What documnets are requierd for student offer ?</button>
<div class="panel">
  <p class="py-2 px-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">What documnets are requierd for student offer ?</button>
<div class="panel">
  <p class="py-2 px-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

</div>

<!--============================================= TESTIMONIAL SECTION====================================================-->

<div class="container-fluid">
        <h1 class="text-center text-danger my-5">TESTIMONIALS</h1>
    <div class="row ml-3">
            <div class="col-md-4">
                    <div class="card border-danger mb-3 ml-5 bg-dark" style="max-width: 18rem;">
                        <div class="card-body text-white">
                        <p class="card-text">I Had joined in the student Master pack program. Tariner had deep knowledge of nutritetion and Bodybuilding. This program help me lose weight From 95Kg to 76Kg. Program is definatliy value for Money</p>
                    </div>
                    <div class="card-footer bg-transparent border-light text-danger font-weight-bold">Rohit Kumar</div>
                    </div>
            </div>

            <div class="col-md-4">
                    <div class="card border-danger mb-3 ml-5 bg-dark" style="max-width: 18rem;">
                    <div class="card-body text-white">
                        <p class="card-text">I Had joined in the student Master pack program. Tariner had deep knowledge of nutritetion and Bodybuilding. This program help me lose weight From 95Kg to 76Kg. Program is definatliy value for Money</p>
                    </div>
                    <div class="card-footer bg-transparent border-light text-primary font-weight-bold">Mohit Bansalr</div>
                    </div>
            </div>

            <div class="col-md-4">
                    <div class="card border-danger mb-3 ml-5 bg-dark" style="max-width: 18rem;">
                    <div class="card-body text-white">
                        <p class="card-text">I Had joined in the student Master pack program. Tariner had deep knowledge of nutritetion and Bodybuilding. This program help me lose weight From 95Kg to 76Kg. Program is definatliy value for Money</p>
                    </div>
                    <div class="card-footer bg-transparent border-light text-success font-weight-bold">Manohar Patil</div>
                    </div>
            </div>
    </div>
</div>


<?php include_once('footer.php') ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

</script>
</body>
</html>