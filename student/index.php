<head><link rel="stylesheet" type="text/css" href="style.css"><meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0,user-scalable=no"/>
<title>Student Result Management</title></head>
<div id="main">
<body >
    
    <center>
        <div class="txt">Student Result Management</div>
        <div class="content">
            <div class="content2">
                <div class="max">Input Panel</div>
                <!-- Adding form -->
                <form action="result.php" method="post"><br>
                  <input type="text" name="roll" palceholder="Roll Number" required><br/><br><br>
                  <select name="session">
        <option value="pre">Pre Test/Half Yearly</option>
        <option value="final">Test/Final</option> 
      </select><br/><br><br>
      <select name="class">
     <option value="6">Six</option>  
     <option value="7">Seven</option> 
     <option value="8">Eight</option> 
     <option value="9">Nine</option>
     <option value="10">Ten</option> </select>
      <br/><br><br>
     <input type="submit" name="" value="Fetch result">
      </form>    

            </div>
        </div>

    </center>

</body>
</div>