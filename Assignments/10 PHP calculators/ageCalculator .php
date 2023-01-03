
<form method="post">
    <center>
	
    Choose your DOB

	<select name="yy">
		<option value="">Year</option>
	        <?php
		for($i=1900;$i<=2021;$i++)
		{
		echo "<option value='$i'>$i</option>";
		}
		?>
	</select>
	
    <select name="mm">
		<option value="">Month</option>
		<?php
		for($i=1;$i<=12;$i++)
		{
		echo "<option value='$i'>$i</option>";
		}
		?>
	</select>
	
	
	<select name="dd">
		<option value="">Date</option>
		<?php
		for($i=1;$i<=31;$i++)
		{
		echo "<option value='$i'>$i</option>";
		}

		?>
	</select>
    <input type="submit" name="sub" value="check it"/>

    </center>

</form>

<center>
<?php

if(isset($_POST['sub'])){

    $mm=$_POST['mm'];
    $dd=$_POST['dd'];
    $yy=$_POST['yy'];

    $dob=$mm."-".$dd."-".$yy;

    if( strlen($dob) >=8 ){
        $today = date("Y-m-d");
        $diff = date_diff(date_create($dob), date_create($today));
    
        echo 'You are '.$diff->format('%y'). ' years old';
    }else{
        echo "Select your DOB first Year,Month and Date";
    }
}
?>
</center>