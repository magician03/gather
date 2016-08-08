<?php 

$cities=array("Mumbai","Delhi","Bangalore","Hyderabad","Ahmedabad","Chennai","Kolkata","Surat","Pune","Jaipur","Lucknow","Kanpur","Nagpur","Indore","Thane","Bhopal","Visakhapatnam","Pimpri & Chinchwad","Patna","Vadodara","Ghaziabad","Ludhiana","Agra","Nashik","Faridabad","Meerut","Rajkot","Kalyan & Dombivali","Vasai Virar","Varanasi","Srinagar","Aurangabad","Dhanbad","Amritsar","Navi Mumbai
","Allahabad","Ranchi","Haora","Coimbatore","Jabalpur","Gwalior","Vijayawada","Jodhpur","Madurai","Raipur","Kota","Guwahati","Chandigarh","Solapur","Hubli and Dharwad"
,"Bareilly","Moradabad","Mysore","Gurgaon","Aligarh","Jalandhar","Tiruchirappalli","Bhubaneswar","Salem","Mira and Bhayander",
"Thiruvananthapuram","Bhiwandi","Saharanpur","Gorakhpur","Guntur","Bikaner","Amravati","Noida","Jamshedpur","Bhilai Nagar","Warangal","Cuttack","Firozabad","Kochi","Bhavnagar","Dehradun","Durgapur","Asansol","Nanded Waghala","Kolapur","Ajmer","Gulbarga","Jamnagar","Ujjain","Loni",
"Siliguri","Jhansi","Ulhasnagar","Nellore","Jammu","Sangli Miraj Kupwad","Belgaum","Mangalore","Ambattur","Tirunelveli","Malegoan","Gaya","Jalgaon","Udaipur","Maheshtala");

?>
<div class="container">
<form action="display.php" method="post">
    <fieldset>
	<div class="form-group" >

		<div class="checkbox" style="font-style: italic ; text-align: left; font-weight: 10">
			<label>
				<input type="checkbox" value="movie" name="interests[]">
				Movie
			</label><br/><br/>
			<label>
				<input  type="checkbox" value="sport" name="interests[]">
				Sport
			</label><br/><br/>
			<label>
				<input type="checkbox" value="party" name="interests[]">
				Party
			</label><br/><br/>
			<label>
				<input type="checkbox" value="trip" name="interests[]">
				Trip
			</label><br/><br/>
			<label>
				<input type="checkbox" value="voluteer" name="interests[]">
				Volunteer
			</label><br/><br/>
			<label>
				<input type="checkbox" value="date" name="interests[]">
				Date
			</label><br/><br/>
			<label>
				<input type="checkbox" value="hangout" name="interests[]">
				Hangout
			</label><br/><br/>
			<label>
				<input type="checkbox" value="pool" name="interests[]">
				Pooling of Transport
			</label><br/><br/>
			<label>
				<input type="checkbox" value="project" name="interests[]">
				Project
			</label><br/><br/>
			<label>
				<input type="checkbox" value="random" name="interests[]">
				Random
			</label><br/><br/>
			

			<div class="form-group">
        <select class ="form-control" name = "city">
                        <option value = "None">Select your City</option>
                        
                        <?php foreach ($cities as $city): ?>
                        
                            <option value = <?= $city ?>> <?= $city ?> </option>
                    
                    <?php endforeach ?>
              </select>


    </div>
    </div>

			<div class="form-group">
				<div class="col-sm-3 col-offset-10">
					<button type="submit" type="submit" name="submit" value="submit" class="btn btn-primary">Find Events</button>
				</div>
			</div>
		

	</div>
	</fieldset>
</form>
</div>