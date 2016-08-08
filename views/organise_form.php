<?php 

$cities=array("Mumbai","Delhi","Bangalore","Hyderabad","Ahmedabad","Chennai","Kolkata","Surat","Pune","Jaipur","Lucknow","Kanpur","Nagpur","Indore","Thane","Bhopal","Visakhapatnam","Pimpri & Chinchwad","Patna","Vadodara","Ghaziabad","Ludhiana","Agra","Nashik","Faridabad","Meerut","Rajkot","Kalyan & Dombivali","Vasai Virar","Varanasi","Srinagar","Aurangabad","Dhanbad","Amritsar","Navi Mumbai
","Allahabad","Ranchi","Haora","Coimbatore","Jabalpur","Gwalior","Vijayawada","Jodhpur","Madurai","Raipur","Kota","Guwahati","Chandigarh","Solapur","Hubli and Dharwad"
,"Bareilly","Moradabad","Mysore","Gurgaon","Aligarh","Jalandhar","Tiruchirappalli","Bhubaneswar","Salem","Mira and Bhayander",
"Thiruvananthapuram","Bhiwandi","Saharanpur","Gorakhpur","Guntur","Bikaner","Amravati","Noida","Jamshedpur","Bhilai Nagar","Warangal","Cuttack","Firozabad","Kochi","Bhavnagar","Dehradun","Durgapur","Asansol","Nanded Waghala","Kolapur","Ajmer","Gulbarga","Jamnagar","Ujjain","Loni",
"Siliguri","Jhansi","Ulhasnagar","Nellore","Jammu","Sangli Miraj Kupwad","Belgaum","Mangalore","Ambattur","Tirunelveli","Malegoan","Gaya","Jalgaon","Udaipur","Maheshtala");

?>


<form action="organise.php" method="POST" role="form">

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="text" class="form-control" name="eventname" required="required" placeholder="Event Name">
    </div>

    <div class="form-group">Date,Time:
        <label class="sr-only" for="">label</label>
        <input type="datetime-local" class="form-control" name="time" required="required" placeholder="Date&Time of event">
    </div>
    
    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="text" class="form-control" required="required" name="amount" placeholder="Amount req/ Head(INR)">
    </div>
    
    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="number" class="form-control" required="required" name="max_mem" placeholder="Max mem">
    </div>

    <div class="form-group">
        <label class="sr-only" for="">label</label>
        <input type="number" class="form-control" required="required" name="min_mem" placeholder="Min mem">
    </div>


    <div class="form-group">
        <select class ="form-control" name = "type">
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
                            <option value ="Random" >Random(!) </option>

              </select>
        
    <br/>
        

    </div>
    
    <div class="form-group">
        <select class ="form-control" required="required" name = "city">
                        <option value = "None">Select your City</option>
                        
                        <?php foreach ($cities as $city): ?>
                        
                            <option value = <?= $city ?>> <?= $city ?> </option>
                    
                    <?php endforeach ?>
              </select>


    </div>


    <div class="form-group">
        <select class ="form-control" name = "duration">
                        
                        
                        
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


    <textarea  rows="4" cols="35" placeholder="Describe your event in brief..." name="details" id="input" class="form-control" rows="3" required="required"></textarea>

    <br/><br/>
    

    <button type="submit" class="btn btn-primary">Organise this Gathering..!</button>
</form>

