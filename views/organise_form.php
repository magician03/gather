<?php 

$cities=array("Mumbai","Delhi","Bangalore","Hyderabad","Ahmedabad","Chennai","Kolkata","Surat","Pune","Jaipur","Lucknow","Kanpur","Nagpur","Indore","Thane","Bhopal","Visakhapatnam","Pimpri & Chinchwad","Patna","Vadodara","Ghaziabad","Ludhiana","Agra","Nashik","Faridabad","Meerut","Rajkot","Kalyan & Dombivali","Vasai Virar","Varanasi","Srinagar","Aurangabad","Dhanbad","Amritsar","Navi Mumbai
","Allahabad","Ranchi","Haora","Coimbatore","Jabalpur","Gwalior","Vijayawada","Jodhpur","Madurai","Raipur","Kota","Guwahati","Chandigarh","Solapur","Hubli and Dharwad"
,"Bareilly","Moradabad","Mysore","Gurgaon","Aligarh","Jalandhar","Tiruchirappalli","Bhubaneswar","Salem","Mira and Bhayander",
"Thiruvananthapuram","Bhiwandi","Saharanpur","Gorakhpur","Guntur","Bikaner","Amravati","Noida","Jamshedpur","Bhilai Nagar","Warangal","Cuttack","Firozabad","Kochi","Bhavnagar","Dehradun","Durgapur","Asansol","Nanded Waghala","Kolapur","Ajmer","Gulbarga","Jamnagar","Ujjain","Loni",
"Siliguri","Jhansi","Ulhasnagar","Nellore","Jammu","Sangli Miraj Kupwad","Belgaum","Mangalore","Ambattur","Tirunelveli","Malegoan","Gaya","Jalgaon","Udaipur","Maheshtala");

?>

<div class="container">

<form action="organise.php" method="POST" role="form">
 <div class="input-field col s5">
          
        <input type="text"  name="eventname" required="required" placeholder="Event Name">
    </div>

    <div class="input-field col s5">
        
        <input type="datetime-local"  name="time" required="required" placeholder="Date&Time of event">
    </div>
    
    <div class="input-field col s5">
        
        <input type="text"  required="required" name="amount" placeholder="Amount req/ Head(INR)">
    </div>
    
    <div class="input-field col s5">
        
        <input type="number"  required="required" name="max_mem" placeholder="Max mem">
    </div>

    <div class="input-field col s5">
        
        <input type="number"  required="required" name="min_mem" placeholder="Min mem">
    </div>


    <div class="input-field col s5">
        <select  name = "type">
                        <option value = "None">Interest/Category</option>
                        
                        
                            <option value ="movie" >Movie </option>
                            <option value ="sport" >Sport </option>
                            <option value ="party" >Party </option>
                            <option value ="trip" >Trip </option>
                            <option value ="volunteering" >Volunteering </option>
                            <option value ="date" >Date </option>
                            <option value ="movie" >Hangout </option>
                            <option value ="pool" >Transport Pooling </option>
                            <option value ="projects" >Project </option>
                            

              </select>
        
    <br/>
        

    </div>
    
    <div class="input-field col s5">
        <select  required="required" name = "city">
                        <option value = "None">Select your City</option>
                        
                        <?php foreach ($cities as $city): ?>
                        
                            <option value = <?= $city ?>> <?= $city ?> </option>
                    
                    <?php endforeach ?>
              </select>


    </div>


    <div class="form-group">
        <select  name = "duration">
                        
                        
                        
                            <option value ="1Hr" >1 Hour </option>
                            <option value ="2Hr" >2 Hours </option>
                            <option value ="3Hr" >3 Hours </option>
                            <option value ="6Hr" >6 Hours </option>
                            <option value ="12Hr" >12 Hours </option>
                            <option value ="1Day" >1 Day </option>
                            <option value =">1Day" >> 1Day </option>
                            <option value =">5Days" >> 5Days </option>
                            <option value ="undefined" >Undefined </option>
                            

              </select>
        
    <br/><br/>


   
    <div class="input-field col s5">
          <textarea placeholder="Describe your event in brief..." name="details" id="input" class="materialize-textarea"></textarea>
          
        </div>
    <br/><br/>
    

    <button type="submit" class="btn btn-primary">Organise this Gathering..!</button>
</form>

</div>