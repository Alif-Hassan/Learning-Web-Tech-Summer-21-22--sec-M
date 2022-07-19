<?php
//include "gfv.php";
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Form</title>
</head>

</head>
<body>
<h1 style="color:#02a95c;font-family:daggersquare;" align= "center">Fund Lagbe!</h1>

	
	  <p align="right"><a href="aboutus.html" style="font-family:poppins;color:black;">About Us</a>  <a href="Home.php" style="font-family:poppins;color:black;">Home</a></p>
	  
	  <p style="color:#02a95c;font-family:poppins;"align="center">Please fill up the form with necessary details about you and your campaign.</p>
			 <form method ="post" action="process.php" >
			 <fieldset style="background-color:#bcdcbf;"align ="middle">
			 <legend style="background-color:SlateBlue;color:rgb(255,255,255);font-family:poppins;"> Individual Campaign Form</legend>
                
			                <table align="center">
					        
							
							<!-- <img src="in.gif" alt=""width="300" height="300"align = "middle"> -->
					
							</tr>	
							<tr>
							<td style="font-family:poppins medium;color:#5a5a5a;"><b>Title</td></b>
							<td><input type= "text" name="title" value="" placeholder="Enter title" size="25" ></td>
							<td><?php echo $t; ?></td>
						    </tr>
						    <tr>
							<td style="font-family:poppins medium;color:#5a5a5a;font-weight:bold;">Name</td>
							<td><input "text" name="n" value=""size="25" placeholder="Enter valid name"></td>
							<td><?php echo $nmerr; ?></td>
						    </tr>
						
							<tr>
						    <td><strong style="font-family:poppins medium;color:#5a5a5a;">Image Link</td></strong>
                            <td><input type="text" name="img" value=""size="25"></td>
							<td><?php echo $img; ?></td>
                            </tr>

						   <tr>
						   <td><strong style="font-family:poppins medium;color:#5a5a5a;">Video Link</td></strong> 
						   <td><input type="text" name="vdo" value=""size="25"></td>
						   <td><?php echo $vdo; ?></td>
                           </tr>

						    <tr>
                            <td><strong style="font-family:poppins medium;color:#5a5a5a;">Starting Date</strong><br></td>
                            <td><input type="date" name="sd" value=""></td>
							<td> <?php echo $sderr; ?></td>
						    </tr>

						    <tr>
                            <td><strong style="font-family:poppins medium;color:#5a5a5a;">Ending Date</strong><br></td>
                            <td><input type="date" name="ed" value=""></td>
							<td> <?php echo $sderr; ?></td>
					     	</tr>

                            <tr>
							<td style="font-family:poppins medium;color:#5a5a5a;" ><b>Phone No.</td></b>
							<td><input type= "number" name="pn" value="" placeholder="enter your phone number" size="25" ></td>
							<td><?php echo $phnerr; ?></td>
                            </tr>
					
							 <tr> <td><b style="font-family:poppins medium;color:#5a5a5a;">Country</td></b>

				  	         <td>
								<select class="country"name = "country" >
							    <option value="Bangladesh">Select a country</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Nepal">Nepal</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Ukraine">Ukraine</option>
							</select>
						    </td>
							
							</tr>

						    <tr>
							<td style="font-family:poppins medium;color:#5a5a5a;"><b>Location</b></td>
							<td><input "text" name="lc" value="" size="25"></td>
							<td><?php echo $locationerr; ?></td>
							</tr>
							<tr>
						    <td style="font-family:poppins medium;color:#5a5a5a;font-weight:bold;">Minimum Amount</td>
							
							
							<td><input "number" name="min" value="" size="25"placeholder="show in taka"></td>
							</tr>
                            <tr>
							<td style="font-family:poppins medium;color:#5a5a5a;font-weight:bold;">Maximum Amount</td>
							<td><input "number" name="max" value=""size="25"placeholder="show in taka" ></td>
							</tr>
								
							
							<tr>
							<td style="font-family:poppins medium;color:#5a5a5a;font-weight:bold;">Recommended Amount</td>
								
							
						    <td><input "number" name="ra" value=""size="25"placeholder="show in taka" ></td>
							</tr>
							<tr>
							<td style="font-family:poppins medium;color:#5a5a5a;font-weight:bold;">Pledged Amount</td>
							
							
							<td><input "number" name="pda" value=""size="25" placeholder="show in taka"></td>
							</tr>
							<tr>
                            <td style="font-family:poppins medium;color:#5a5a5a;"><b>Postal Code</td></b>
					
							<td><input "number" name="pc" value=""size="25" ></td>
							
							<td><?php echo $pcerr; ?></td>
                            </tr>


							<tr>
							<td style="font-family:poppins medium;color:#5a5a5a;"><b>Bank Account</td></b>

							<td><input "text" name="bn" value=""size="25" ></td>
								
							
							<td><?php echo $bnerr; ?></td>
                            </tr>

							<tr>
							<td style="font-family:poppins medium;color:#5a5a5a;"><b>Bank Account No.</td></b>

							
							<td><input "number" name="bc" value=""size="25" ></td>
							</tr>
                            <tr>
							<td style="font-family:poppins medium;color:#5a5a5a;"><b>NID No</td></b>
							
							
							<td><input "number" name="nid" value=""size="25" ></td>
							
							<td><?php echo $nid; ?></td>
							</tr>
						
				  	    <tr>
						<td style="font-family:poppins medium;color:#5a5a5a;"><b>Category:</td></b>
					 
						<td>
							  <select class="category"name = "category">
							   <option value="Flood Relief">Select a category</option>
							    <option value="Flood Relief">Flood Relief</option>
								<option value="Earthquake">Earthquake</option>
                                <option value="Landslide">Landslide</option>
                                <option value="Education">Education</option>
                                <option value="Child Education">Child Education</option>
                                <option value="Orphans">Orphans</option>
							
							</select>
						</td>
						</tr>
                            <tr>
							<td style="font-family:poppins medium;color:#5a5a5a;"><b>Amount</td></b>
							
							
							<td><input "number" name="ia" value="" size="25"></td>
							<td><?php echo $am; ?></td>
							</tr>
                          
                           <tr>
							<td style="font-family:poppins medium;color:#5a5a5a;"><b>Short Description</td></b>
							
							
							<td><textarea name="comment" rows="5" cols="40" placeholder="Tell us the story" ></textarea></td>
                           </tr>
                            <tr>
	                        <td style="font-family:poppins medium;color:#5a5a5a;">
							<td><input type="checkbox" name="" > I agree with the <a href="t&c.html">terms and conditions</a></td>
					
						    </tr>
	                        
							<tr>
							<td><input type="submit" name="Submit" value="Submit" style="background-color:#02a95c;font-family:poppins;color:rgb(255,255,255);">
							<input type="reset" value="Reset" style="background-color:#02a95c;font-family:poppins;color:rgb(255,255,255)">
							</td>  
							</tr>

						</table>
						
			</fieldset>
		</form>

		<footer>
  <p align="center"style="background-color:#02a95c;font-family:poppins medium;color:white;"font-size="11">© Fund Lagbe!<br></p>
</footer>
</body>
</html>

<!-- <?php

// <a href="scss.php"</a>



// if(isset($_POST["Submit"])){
// extract($_REQUEST);


// $_file=fopen("ind.txt","a");

// fwrite($_file,"<<<<<<<<<<<<<<<>>>>>>>>>>>>><<<<<<<<<<<<<<<New Request>>>>>>>>>>>>><<<<<<<<<<<<<<<>>>>>>>>>>>>>"."\n");


// fwrite($_file,"Name:");
// fwrite($_file,$n ."\n");

// fwrite($_file,"Starting Date:");
// fwrite($_file,$sd ."\n");

// fwrite($_file,"Ending Date:");
// fwrite($_file,$ed ."\n");

// fwrite($_file,"Phone No:");
// fwrite($_file,$pn ."\n");

// fwrite($_file,"Image Link:");
// fwrite($_file,$img ."\n");

// fwrite($_file,"Video Link:");
// fwrite($_file,$img ."\n");

// fwrite($_file,"Country:");
// fwrite($_file,$country ."\n");

// fwrite($_file,"Location:");
// fwrite($_file,$lc ."\n");

// fwrite($_file,"Postal Code:");
// fwrite($_file,$pc ."\n");

// fwrite($_file,"Bank Name:");
// fwrite($_file,$bn ."\n");

// fwrite($_file,"Bank Account No:");
// fwrite($_file,$bc ."\n");

// fwrite($_file,"Category:");
// fwrite($_file,$category ."\n");

// fwrite($_file,"Amount:");
// fwrite($_file,$ia ."\n");


// fwrite($_file,"Minimum Amount:");
// fwrite($_file,$min ."\n");

// fwrite($_file,"Maximum Amount:");
// fwrite($_file,$max ."\n");

// fwrite($_file,"Recommended Amount:");
// fwrite($_file,$ra ."\n");

// fwrite($_file,"Pledged Amount:");
// fwrite($_file,$pda ."\n");

// fwrite($_file,"Short Description:");
// fwrite($_file,$comment ."\n");
// }
?> -->