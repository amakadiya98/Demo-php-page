<?php error_reporting(0)?>
<!doctype html>
<html lang="en">

<head>
    <?php  include 'includes/head.php';?>
</head>

<body>

    <div class="container-fluid bg-dark">
        <?php $page='demo'; include 'includes/navbar_part.php';?>
    </div>
    <div class="row mt-5 container">
        <div class="col-12 text-center my-5">
            <h3 class="page-text">Demo-Page</h3>
        </div>
    </div>


    <!--Demo-part start here-->
    <section class="demo-part">
        <div class="container">
            <h2 class="demo-head-text">View some PHP Function</h2>
            <p class="discription-text">Some basic php function using in programming language</p>
            <div class="row mt-5">
             <!--basic calculator-start-->   
            <div class="col-md-4">
                <div class="well_part">
                    <h4 class="well-head-text">Basic Calculator</h4>
            
            <?php           //php=calculator-part-start
                
                        function add($a=0,$b=0){
                            $r=$a+$b;
                            return $r;
                        }
                        function sub($a=0,$b=0){
                            $r=$a-$b;
                            return $r;
                        }
                        function mul($a=0,$b=1){
                            $r=$a*$b;
                            return $r;
                        }
                        function div($a=0,$b=1){
                            $r=$a/$b;
                            return $r;
                        }
     
                    function calc(){
                        if(isset($_GET["add"])){
                            $a = $_GET['num1'];
                            $b = $_GET['num2'];
                            $o=add($a+$b);
                            echo $o;
                        }

                        if(isset($_GET["sub"])){
                            $a = $_GET['num1'];
                            $b = $_GET['num2'];
                            $o=sub($a-$b);
                            echo $o;
                        }

                        if(isset($_GET["mul"])){
                            $a = $_GET['num1'];
                            $b = $_GET['num2'];
                            $o=mul($a*$b);
                            echo $o;
                        }

                        if(isset($_GET["div"])){
                            $a = $_GET['num1'];
                            $b = $_GET['num2'];
                            $o=div($a/$b);
                            echo $o;
                        }
                        if(isset($_GET["min"])){
                            $a = $_GET['num1'];
                            $b = $_GET['num2'];
                            $o=min($a,$b);
                            echo $o;
                        }
                        if(isset($_GET["rand"])){
                            $a = $_GET['num1'];
                            $b = $_GET['num2'];
                            $o=rand($a,$b);
                            echo $o;
                        }
                    }                       //php=calculator-part-start
            ?>
            <!--Form-part-for-calculatot-start-->
                <form action="" method="get" name="form1">
                    <label class="head-box">Number 1:</label><br />
                            <input name="num1" type="text" value="<?php echo $a; ?>" /><br />
                    <label class="head-box">Number 2:</label><br />
                            <input name="num2" type="text" value="<?php echo $b; ?>" /><br /><br />
                            <input type="submit" class="head-box" name="add" value="ADD" class="mr-1">
                            <input type="submit" class="head-box" name="sub" value="SUB" class="mr-1">
                            <input type="submit" class="head-box" name="mul" value="MUL" class="mr-1">
                            <input type="submit" class="head-box" name="div" value="DIV" class="mr-1">
                            <input type="submit" class="head-box" name="min" value="MIN" class="mr-1">
                            <input type="submit" class="head-box" name="rand" value="Random" class="mr-1">
                            <br /><br />
                    <label>Result:</label>
                                <input name="num3" type="text" value="<?php echo calc(); ?>" /><br />
                </form>
            <!--Form-part-for-calculatot-end-->
                </div><!--well-1-part-end-->
            </div><!--col-part-1-end-->
             <!--basic calculator-end--> 
                <!--Array-part-start-->
                <div class="col-md-4">
                <div class="well_part">
                <h4 class="well-head-text">Make Array</h4>
                <?php 
                    if(isset($_GET['display']))
                    {
                        $firstarray = $_GET["dim1"];
                        $secondarray = $_GET["dim2"];
                      
                        $d = []; 
                        $k = 0; 
                        for($row = 0; $row < $firstarray; $row++) { 
                            for ($col = 0; $col < $secondarray; $col++) { 
                                $d[$row][$col]= $k++; 
                            } 
                        } 
                    }
                    ?>
                <form method="GET" action="">
                <label class="head-box">Enter Row and column:</label><br />
                <label class="head-box">Enter Row</label>
                <input type="number"  min="2" max="7" name="dim1" value="<?php echo $firstarray;?>"/><br/>
                <label class="head-box">Enter Column</label>
                <input type="number"  min="2" max="7" name="dim2" value="<?php echo $secondarray;?>"/><br/>
                <input type="submit" name="display" class="head-box" value="Make Array" /><br /><br />
                <label class="head-box">Result:</label>
                <?php  echo "Entered array nxn: " . $firstarray . "x" . $secondarray . " <br>"; ?>
                    <?php 
                  
                        for ($row = 0; $row < $firstarray; $row++) { 
                            for ($col = 0; $col < $secondarray; $col++) { 
                                echo $d[$row][$col]." "; 
                            } 
                            echo "</br>"; 
                        }  
                    ?>
                <br />
                </form>
           <!--Form-part-for-array-end-->
                </div> <!--well-part-end-->
                </div>  <!--col-part-end-->
                 <!--Array-part-end-->
                    <div class="col-md-4">
                    <div class="well_part">
                        <h4 class="well-head-text">Age Calculator</h4>
                    <?php 
                        //php-age-part-start                   
                        if(isset($_GET["cal"]))
                        {
                            $dateOfBirth = $_GET['birthdate'];
                            $today = date("m-d-Y");
                            $difference = date_diff (date_create($dateOfBirth), date_create($today));
                        }           //php-age-end-part
                    ?>
                    <!-- form-part-for-age-start -->
                        <form action="" method="get">
                            <label class="head-box">Enter Your Birthdate:</label><br />
                                <input type="date" name="birthdate" value="<?php echo  $dateOfBirth;?>" /><br /><br />
                                <input type="submit" name="cal" class="head-box" value="calculate" /><br /><br />
                            <label class="head-box">Result:</label>
                                <input name="num3" type="text" value="<?php echo $difference->y; ?>" /><br />
                        </form>
                      <!-- form-part-for-age-end -->
                    </div> <!--well-part-end-->
                </div>  <!--col-part-end-->

                <!--string-convert-part-start-->
                    <div class="col-md-4">
                    <div class="well_part">
                        <h4 class="well-head-text">Binary To Hexa (String)</h4>
                        <?php
                        if(isset($_GET["convert"])){
                            $sen1 = $_GET['sentence'];
                            $str = bin2hex($sen1);
                           
                         }
                        ?>
                        <form action="" method="get">
                            <label class="head-box">Enter String:</label><br />
                            <input type="text" name="sentence" value="<?php echo "$sen1";?>" /><br /><br />
                           
                            <input type="submit" name="convert" class="head-box" value="Convert" /><br /><br />
                            <label class="head-box">Result:</label><br/>
                            <input name="final" type="text" value="<?php echo($str); ?>" /><br />
                            
                    </form>
                    </div>
                    </div>
                <!--string-convert-part-end--> 

                <!--find-day-of-year-start-->
                <div class="col-md-4">
                    <div class="well_part">
                        <h4 class="well-head-text">Find day of any Month</h4>
                        <?php 
                        //php-age-part-start                   
                        if(isset($_GET["find"]))
                        {
                            $mon_find= $_GET['month'];
                            $yea_find=$_GET['year'];
                            $d=cal_days_in_month(CAL_GREGORIAN,$mon_find,$yea_find);
                           
                        }          
                    ?>
                    <form>
                        <label class="head-box">Enter Month</label><br />
                            <input type="text" name="month"  value="<?php echo $mon_find;?>"/><br />
                            <h6 class="error-msg">
                            <?php  if($mon_find>12){echo "please enter valid month...!";}?><br/>
                    </h6>
                            <label class="head-box">Enter Year</label><br />
                            <input type="text" name="year" max="4" value="<?php echo $yea_find;?>"/><br /><br />
                        <input type="submit" name="find" class="head-box" value="Find no of day" /><br /><br />
                        <label class="head-box">Result:</label><br/>
                            <input name="day-name" type="text" value="<?php echo $d; ?>" /><br />
                        </form>
                    </div>
                    </div>  
                <!--find-day-of-year-start-->

                <div class="col-md-4">
                    <div class="well_part">
                        <h4 class="well-head-text">Find name of day</h4>
                        <?php
                        if(isset($_GET["find_day"]))
                        {
                            $mon= $_GET['month'];
                            $dat=$_GET['date'];
                          
                            $yea=$_GET['year'];
                            $jd=gregoriantojd($mon,$dat,$yea);
                           
                        } 
                        ?>        
                        <form>
                        <label class="head-box">Enter Day</label><br />
                            <input type="text" name="date" value="<?php echo $dat;?>"/><br />
                            <h6 class="error-msg">
                            <?php  if($dat>31){echo "please enter valid date...!";}?><br/>
                        </h6>
                        <label class="head-box">Enter Month</label><br />
                            <input type="text" name="month" value="<?php echo $mon;?>"/><br />
                            <h6 class="error-msg">
                            <?php  if($mon>12){echo "please enter valid month...!";}?><br/>
                    </h6>
                            <label class="head-box">Enter Year</label><br />
                            <input type="text" name="year" value="<?php echo $yea;?>"/><br /><br />
                        <input type="submit" name="find_day" class="head-box" value="Find name of day" /><br /><br />
                        <label class="head-box">Result:</label><br/>
                            <input name="day-name" type="text" value="<?php  echo jddayofweek($jd,1); ?>" /><br />
                        </form>
                    </div>
                    </div>

            </div><!--row-ending-->
        </div><!--conatinetr-ending-->
    </section>

    <!--Demo-part end here-->


    <!--Footer-part start here-->
    <?php  include 'includes/footer_part.php';?>
    <!--footer-part end here-->
    <!--script-part-->
    <?php  include 'includes/script.php';?>
</body>


</html>