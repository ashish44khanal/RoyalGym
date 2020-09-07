<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition</title>
</head>
<body>
<?php include ('header.html') ?>


<div class="customTopLayer">
    <div class="topLayer">
        <div class="container">
        <h3>NUTRITION</h3>
        <p>Home > Nutrition</p>
        </div>
    </div>
</div>

    <div class="serviceHead">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <hr class="col-md-3 hrLine"><h5 class="redText">ARTICLES ABOUT NUTRITION</h5>
                        <h2 class="introHead font-weight-bold">EAT A HEALTHY MEAL TO HELP YOUT BODY HEAL</h2>

                        <select name="ask" id="" class="selectBox col-md-8">
                            <option value="">Filter articles with categories</option>
                            <option value="">Category 1</option>
                            <option value="">Category 2</option>
                            <option value="">Category 3</option>
                        </select>
                </div>
            </div>
        </div>
    </div>

    <div class="nutritionArticle container">
        <div class="row">
            <div class="col-md-8">

                <div class="row myArticle">
                    <div class="col-md-4">
                        <a href="Nutrition_details.php"><img src="images/nutrition.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-md-8">
                        <a href="Nutrition_details.php" class="normalA"><h6 class="font-weight-bold">
                         Everything You Ever Wanted to Know About Celery
                        </h6></a>
                        <p class="text-muted">
                        If you’ve been grocery shopping lately, you’ve probably noticed that the celery section is either sold out or costs much more than it usually does.
                        </p>
                        <i class="fa fa-clock"></i> 22 july, 2020
                    </div>
                </div>

                <hr>

                <div class="row myArticle">
                    <div class="col-md-4">
                        <a href="Nutrition_details.php"><img src="images/nutrition.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-md-8">
                        <a href="Nutrition_details.php" class="normalA"><h6 class="font-weight-bold">
                         Everything You Ever Wanted to Know About Celery
                        </h6></a>
                        <p class="text-muted">
                        If you’ve been grocery shopping lately, you’ve probably noticed that the celery section is either sold out or costs much more than it usually does.
                        </p>
                        <i class="fa fa-clock"></i> 22 july, 2020
                    </div>
                </div>

            </div>

            <div class="col-md-4 requestForm">
                <div class="myForm">
                    <h5 class="font-weight-bold whiteText" style="text-transform:uppercase;">
                    Request for personal nutrition plan
                    <hr style="border:1px solid white">
                    </h5>
                    <form action="">
                        <input type="text" class="customInput col-md-12" placeholder="Full Name">
                        <input type="text" class="customInput col-md-12" placeholder="Address">
                        <input type="text" class="customInput col-md-12" placeholder="Contact Number">
                        <input type="text" class="customInput col-md-3" placeholder="Age" style="float:left;margin-right:10px;">
                        <input type="text" class="customInput col-md-8" placeholder="Weight (kg)" style="float:right;">
                        <select name="" id="" class="col-md-12 customInput formSelect">
                            <option value="">Nutrition Purpose</option>
                            <option value="">Weight Loss</option>
                            <option value="">Weight Gain</option>
                            <option value="">Fat Loss</option>
                        </select>

                        <button class="btnBlue">SUBMIT REQUEST</button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>