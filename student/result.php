<head>
    <link rel="stylesheet" type="text/css" href="style.css"><meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Your Result</title>
    <div id="main">
    <body>
        <center>
            <div class="txt">Student Result Management</div>
            <div class="content">
                <div class="content3">
                    <div class="max">Result</div>
                    <div class="padding" style="padding: 10px; line-height: 37px;">
                <?php
                $roll = $_POST["roll"];
                $session = $_POST["session"];
                $class = $_POST["class"];
                $conn = mysqli_connect("localhost", "root", "", "result");
                if ($conn-> connct_error) {
                    die("connection failed:". $conn-> connect_error);
                }
                $sql = "SELECT * FROM result WHERE roll = '$roll' AND session = '$session' AND class = '$class' ";
                $runQuery = mysqli_query($conn,$sql);
                $countRows = mysqli_num_rows($runQuery);
                if($countRows > 0) {
                    while($row = mysqli_fetch_array($runQuery)) {
                        echo "NAME :" . $row['name'] . "<br>" ;
                        echo "ROLL :" . $row['roll'] . "<br>" ;
                        echo "SESSION :" . $row['session'] . "<br>" ;
                        echo "CLASS :" . $row['class'] . "<br>" ;
                        echo "LANGUAGE :" . $row['language'] . "<br>" ;
                        echo "MATH :" . $row['math'] . "<br>" ;
                        echo "PHYSICS :" . $row['physics'] . "<br>" ;
                        echo "CHEMISTRY :" . $row['chemistry'] . "<br>" ;
                        echo "BIOLOGY :" . $row['biology'] . "<br>" ;
                        echo "ICT :" . $row['ict'] . "<br>" ;
                        echo "GPA :" . $row['gpa'] . "<br>" ;
                    }
                }
                else{
                    echo "<center><h2>Sorry! No Result Found!</h2></center>";
                }
                ?>    
                </div>
               </div>
            </div>
        </center>
    </body>
</div>
</head>