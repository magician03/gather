<?php 

$cities=array("Mumbai","Delhi","Bangalore","Hyderabad","Ahmedabad","Chennai","Kolkata","Surat","Pune","Jaipur","Lucknow","Kanpur","Nagpur","Indore","Thane","Bhopal","Visakhapatnam","Pimpri & Chinchwad","Patna","Vadodara","Ghaziabad","Ludhiana","Agra","Nashik","Faridabad","Meerut","Rajkot","Kalyan & Dombivali","Vasai Virar","Varanasi","Srinagar","Aurangabad","Dhanbad","Amritsar","Navi Mumbai
","Allahabad","Ranchi","Haora","Coimbatore","Jabalpur","Gwalior","Vijayawada","Jodhpur","Madurai","Raipur","Kota","Guwahati","Chandigarh","Solapur","Hubli and Dharwad"
,"Bareilly","Moradabad","Mysore","Gurgaon","Aligarh","Jalandhar","Tiruchirappalli","Bhubaneswar","Salem","Mira and Bhayander",
"Thiruvananthapuram","Bhiwandi","Saharanpur","Gorakhpur","Guntur","Bikaner","Amravati","Noida","Jamshedpur","Bhilai Nagar","Warangal","Cuttack","Firozabad","Kochi","Bhavnagar","Dehradun","Durgapur","Asansol","Nanded Waghala","Kolapur","Ajmer","Gulbarga","Jamnagar","Ujjain","Loni",
"Siliguri","Jhansi","Ulhasnagar","Nellore","Jammu","Sangli Miraj Kupwad","Belgaum","Mangalore","Ambattur","Tirunelveli","Malegoan","Gaya","Jalgaon","Udaipur","Maheshtala");

?>
 <div class="container">

    
	
	
<form action="display.php" method="post">
<div class="input-field col s5">
    <select multiple name="interests[]" >
    	<option value="" disabled selected>Choose your Interests</option>
      <option value="movie"  data-icon="data:image/png;base64,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" class="left circle">Movie</option>
      <option value="sport"  data-icon="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA0CAYAAADFeBvrAAAFLUlEQVRoQ82aOTCsQRSFe3Jy5MiRI0dsiS0xcuSIB7ElHnLElhw5cvJ59XVVq547vdzuf5TXVVOj3uvt3OXcpafV7Xa7ZsDj6enJfHx8mPf39+DOY2NjZnR01ExPTw/4ZGNagwDExW9ubgxA+JQMQPFZWFgwAG06GgECxMXFhXl9fW16D7t+YmLCrK6uWnC1owoQQE5OTqxZ/cbAHDc3N6uAFQHCtA4ODorNqhY0pri3t1dkimpA19fX5ujoyHx/fwfvNz4+br6+vszn52fR/UdGRszw8LB5e3sLrhsaGjI7OztmcXFRta8K0P7+vnX60MDeV1ZWLJitrS3VoXJSu922oC4vL5PncI/cyAKKgZmamrKSm5yctGfc3d2Zw8PDKg3t7u6aubk5u8/Ly4vhzJDGEF4OVBJQDMz29rZlo9AAGMz3/PycFCYCYQ8HRE5mj+Pj4749cqCigEJgsGfYzWkldWMkHTIhLrSxsaFydPaA7aTfpkAFAUEAsJk/cF5IQQPGX4dvIW0GGsFXSgagMG1JNrBfiCj6AEHNHOxLpUQzJZfVzg1pijshKJld9AFCxTJ9gYVmZma05//KvMfHxz4WJU7hAv7oARQyNSSBFPg+PT39lcvmNsXnsBisR/qTNL0eQNhkLJ2Blf4SUIw1SZNQhBs/gELakZJD7X8xcubua+kHEESQy5r/V0Bk6Y5JLSBsc2lpKSv829vbYtp10Z/vUspnDbQ/Pz+fvVun07G+bgHBFGdnZ9lFNWyH3znfw7n5lIwQu4XWu+zFAuKQXKrCJiWAkCw5mgwBUC05nzbAagE50rKAck7nJBKLziHyAEys1CAEAEpzroas3PmAbz08PHS1af/5+XnWD0iPyOE0g7KDtCY1yBLW1tY021kLanU6na7M20Krc9qBWNBKjinl3jAU2ko1SLRaYp9Wu93u5gghVS5wwVw1mxOvpiqNlRP+3uvr63lAufqDDZlTWnpLkGTzsarYzU1VzszJAtKmO6j66uoqp4jk/y8vL1uTzY0UIwcBzc7OWqolRyJ+aOi1xHFjF9YQjgu0gCLnJATc39//bBkExD9SFuOkGjButyZmpzE3XxDEOEiIct/3/yggaqLS0cTstOYm7yQzHAtI0rbWb+TmTcxOa27yTOlPlrZlYIVCUWXNqDG7UnPz74Vr+NmIDayh1KdWYjVmV2tuIYuwqU8oOc0F0pj2asyuVngy0PYkp9K5Qs0HrQmWmF0Tc5PNnJ7yIVTg1UqONCj2cieFQsEX65yWJqw9BR6LyXz9frIm5dFqbdDzZArEy4fL8JNNErREcCWDxgxLAu0gQRBIyV7IzPlblhPBJkkoyWQDbNPVS+6hF1PBCWt6BBqgkAsVNN/uAZp10DINfL9EkX6YbTRi46m4VPPKFgKleR0M3SXZaOQgbX9BBjhiUJNBpl0a0ENZjapZr7loSQNF7qdthPjr1M16FmlLXv8Av9mnEYA/J9WCju2lfk5xG+Sqw9BBNRmGprSWZxU/eNWCwgzQrpbeoWC0E2t3hYSWi4/Vj8YxU8gd6K8rtQLN3llAXKDkYOICUTunJbRDdqJtrmjAcFcVIEcUqR9eMAdiwFm1AZfASU8w1cvTtLh8rasBsYjgh7ZyfXAuASgASk2hGQAAJuc7xBnOK/mVVhEgJwkcn5JDay6lNI7ZUh5ofw5TrSF5MYBBu7Hf6ZQCIWvm4a0GiDurSkPyopgi4Egkc+Yo12JW5GiudVYqBDl/IIBCqYzmJ5qa55RSgP8AbP/4nLiDTdUAAAAASUVORK5CYII=" class="left circle">Sport</option>
      <option value="party"  data-icon="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAFEklEQVRoQ+1ZXYhVVRT+7jjemXFmhDQINFB70UKtwEzQCQqJEUOhH7GYoAyyXqSH7CHUh/4eqofqpRKyoCFCK5ghc6gwaBqQDCqTspecQIWgFObOjPdex7mxzvWcu886a+21z3BjCGbe5u6919rf2t/+9rf3KdRqtRr+x3+FOQCzvHpzKxAvwBsnq3jrhyr2rCvimTuKTV0XX+ymrcBNb48nk/5pVxcWtjUHw7lSDXf1TyTB/ni6KxVYBDCTaj55rIyvR6ei4K/e3Y4HV7U2BcGzx8v47Pd63PtXtuL1e9ptAG41OWJtVp+cmcJz35Sj5s3LW3FwSzpRatxfJ4A/B4GLp4FFq4Fl24AbNmRC8+p/29eJG7sLfgAnLlzFIwOXo06rFrfgix0LGgM8iccqwG2HAmhEMX58JVuH25/PgLCqT0EyFFIrGZA4iEYje4DSaBbAdauBOxvAQqovAoj5T40pRQlIHESjoW363ugdTNp2D5Xx1Vmd+3HHzArsHLiM7y9cjdrf6W3HvSuubcaAxC4AGi/un4BCuDSmOBL3VQA9/RM4X6rbo88fWoBbrm+p9zUS0x7o6R9HqVrvLilG1KBRcf3LwKI1URd3DpYgZFbAVaAHVrbitVi2jMTukltVi0CMDgKXTgPE/eUNFXIpTHE+2t6BDUvmqbTLAHjhuwo++OVKMiADQkj85dkpPDVUl9DM3tEZn2mhjbv18ESyiku7Chh+tNMbIQOAqLBzYBJn/pmWQbBwnDrdRWC4zz6Jf/17GqVqDcT3sUoN9P+50nRCX0qzb2Mbdq2dnw8A9aZgDw9MJpWg32glHl9bNJNaXujFkQreP9VYYd/sQiyJ6oW4ooQwwVryvcfL+PSaLbDiqSLABnrNnHsSWgmp3eeB8kyeYqUU0JPcC0DaD1qsjO1wOuadPA0N9WCmnZb2gwRCkztp8rRSsfGTYvmKwfubAGjA1sOT+M1RJR6ElOfnJ9I+nfpwSaY98u6WDoxVa4lhlACsXzIPH2/vCGFt1szxUfxYz5PQPRRpUgd7O6KLjhXTOn3dOZgrYFWfgj22Zj4ObEpfwXy2/NCpK3hppKJW2JLiYABWojiQdOD4nCm3CxxJUwDwE9ZHSGkDq7YcgCXPKRds7ASVQnwD5j0xVVvO3GYeRZP6qgBcS2vJgbQCmi0POeGbsgKuglgApGNfexgIKUxTVOjW9xqXkxgABSYZjJ85XGD81iQ9zYRUP44ZYuSor0ohl8NxUDreaXOTZz8/nn7UDjFfUvVpHN0D4musT9ly7QFJKeIqk72478hkKp51D5AkmU7mozs6o3sAj3fz4hYcdZ90FB6rKyBptbtZpXZNvzVJdh2nVLAQR6oCkI57rjacZku7Cxjuy14BQ8DydyDthA82cxJNuN/nIDVTxwVBM2scqBYv2EpwKeUU4byW5I8XgiZFvOdvnDQp/jxJv1lq5DVzPR+m1YYDcJ8SKZnkiXhVLbXitMz9rOIuDw/Gk3NqSJuOu1nr6Z0XxervXQFePZe7EjX4pWYmlOA5LWfqBcA57gII4T8/eUOuinyMZSu8ALjKuDIZwn+u7VY1ib48p3W9NF8l3I8WlCB+LQjhf0gfrusS7XwvFOaV0lUi9+HK/V3T65A+kkPQcubyQnFnerilp5GFxQL2b2pLvhcQV988WYleGPZvlD/qER12H6t/rtL6SJPScs4IgHUXmO12k0KzPUEr/xwAq0L/dfu/yCEQrZQ4lncAAAAASUVORK5CYII=" class="left circle">Party</option>
		<option value="trip"  data-icon="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAFcElEQVRoQ71aO1BUMRS96QEtgUZpoNQB+sUeGO34FGrBp1OBHugBseNTqAWfTgR62X5BLaERGqDUgT7OyeSuedm8t3lJ1sy8ebO7L3fvSe65vzxBiYaU8jERVYjoqb7wGZc5LokI1w99VYUQ+Bw9RIwErfxLInrlUNpXNICsE9HXGFBBQKSUWPU3GoCvwj7PfSKi5RBApYBIKR8S0fsWALBBAtA7IcRvH/R4xhuIlBLmAxAA8z8GQLwWQhz4/JkXECnlx9BdODo6UnqMjIz46ON6Zl0I8a7Z5EIg2pS+ENFQM0F5v29ubqqfZmZmQkVg3gkRvSgytVwgGsQ37UpLK7G1taXmnJ6eqvvAwIC6T09Pl5alJ8BlP8sDUwQEIIJ2olar0ezsrFPhjY0NGhwcDAVzIoR45prsBBLDCWUHJye0sLBAw8PDdW6AK8fHx7SyskJDQ0Hrw/p/EEK8tcE0ANHeCeQOHlD0/v7eOb+trU0BjRzgS8abZYBoXvyKdbEwnf7+/jovWGnw5ezsjGB6kQOuucfkiw0EgQgpR9QAkK6uLuru7s7Iub6+ppubmxRAIPezEAKxTY06EJ12fI9CoCeDB+ADRm9vr7pfXFyoO3gD/iQa2BWVdJpAkuwGK8hult0wPgNMAn6Ya1DfFQVEZ7HgRrIB88LqLy0tKZkIjNvb26nMytRT7QoDwb8tJkNBpGLF1NRUPaIzkJ2dHerr60v5V0gu1xkIdsMugoL/jAPi4uJiPY7wd5EB0aXTpRCiR7TCrBD8lpeXyVT6/PycJicnM7sUvFKNExUQuLCoAGjLzeODzZuEQF4DCMpMVHvJBjwUYga7YBY8Pj5OQgja3d1N9l9a0AcAQb6ApkGygZWvVCq0urqakYn4sr+/3wrPVQWQpERnLszNzdHExEQGiIs7iVbvEkBkImFKDMxmbW2NXG4W5jY6OtoSwicHMj8/r4qpvAiOINnR0ZGcJ8mAsP2X2V0zYJaZ53o2GRA2Kaw4Mt+igQwYHs3Fo1BAAILs8VGoAJ7HJEdtzvV5nkyYHq6E6cpVMvfLRC6zIIeHhw01S5n5xrPK/SYJiHZSyJyBshjwVmNjY6oWaUG6ogJidIpyd3enkkMUUVx/4DPq8729PQUEUR11PDfs8BlcSVSfqBQFWW9ULcKBjrNdV1C044s9J9CkeFoPp/FRhMfqI65ybmWaFdftzCE2L2gAD4fci3cpEMyVEOJxdGFV1IzzVSyyRskUVsHmhd0AR2DzIQMcwq5FZMT/Sl0oIKUs3Xxgu48JbJEyss0HDQSnUN7tIPZUiOLsmXhH8Bv4Al5wGwgeDSsPXrS3t2c2jz0YuGL/1mSXG9tBZXcF3REoa9s3lEEdwi3Tzs5Opcvt7a26wyUjsTTPS5hnZtfFw0zdDToNBKdR8GAPigSxe7WLJwaHdimqRLvrDoURZ9A2tZUGuGq16pu2/EGzJLdlqsE8JyIc7uQOHNoADOyb3avZgedeVp4ABmx25mGGKMTQKuLDoQIVipvYPLEobeFAZqbgRXzJU8bFC05zzDaSY77fsYIBpqGWZ4Vh52ZjgcGVOftwRXZ249ygcBAfLxg4D1eaHb0BzBMGxytmKxza18U5ClJ+s0nBJuooun7iBK300ZtBfhyoVDjFwG7YTQVwxUwYPTyOeoQXwCUPXs9I86tE9DzoMNRUBpyp1Wpv8s4F8WwTu3ZiY/PKA65du5MT9hyvc3bDmyH6F7pm393weA4u9lXSFwYMB4A4g0Is+lSrCZDPRPS2Ja9wWKaGJBNHEakBAcBSy1+qsVdRF2UIoDguDm1gXOldPggBwDp5c6SZTWtQ8PHmi2c2OChtvniGFwCSvHj2F89jFpG2yoKHAAAAAElFTkSuQmCC" class="left circle">Trip</option>
		<option value="date"  data-icon="data:image/png;base64,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" class="left circle">Date</option>
		<option value="hangout"  data-icon="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAFDklEQVRoQ91aXWxURRg9I1LabUuppUAsWGm1hSjaIhh1gxIrxISIxZ/YB9T6KC+K0QdCDDbG+KCR+qJPRlQSMf6klpAYpIpC8QfigphAG1qoUAOFKqXtFig45ty9d7t3O/fuzHK3rEyy2c3emW/O+b4zM9/MXIEAipRyGoBHAdwMYKn9zd+J5RgAfnba318LIc5eafciXQM26GcBNAKoSdPOfgCbAHyULhljAlJKevYFGzg9H0RhJEjkXSEEo6RdjAhIKTcAeBFAUMCTgZJIsxCiSZeBFgEpJSXy4RVIRRePU4/SWqUTjZQEpJTU+MYMet2LHKOxVghBaXkWXwI2eHr+apbn/Eh4EsgS8I7jPEkoCWQZeIcEx0RLshTGEbAH7PdXQfOpZMoxUZs8sFUEIhM426QCnfx8vxCiNvFPFwEp5WsAONdnc2kSQhCnVeIE7BWW3s/UIhWUU1xSSiTQbKcIQXWUSTvxKFgE7MTs6P/A+45TGIW5TAAdAsxvuNoGUy4NA6d+Bkb6YvbyZgAz7wGuzw/GfsyKtTY4BIKbeUZOAb+uHwPvQCaJu98A8mYGRcKakYQtn3+CsoqDzUDvd2pzZQ8CCxjswEoxCTBZSy/f6dkWQ1K+YgzRjgbgUlSNkBJ66NOxZ6r2ZtxWkYD57LNrDdDb5u6qdh1Q3Qh8s9IfwsOtQMcmIPKmu17FEzGJmZUmEuAe9QHtdqf3Am2r1dUbOgC/COSWAks/ALZUq9vXbQZKF2tDAfADCXD6TN6AexvhAO3+Qv2cUbh41n8M5Ewb733HmnkUjpGANKEMlXwcAyRQ+STwyzpgMGlrW3w7cNd6oOtzbwJldcCS94zgmBPgwPvpJXUnK9uA0OzYs78PAue6Y7+nVgA3LIj9jp4AWuvU7e99xz0haFAxJ0CjLWHg/Bm3eRPvqaKYOx2ob9eA7K6SHgHaYCS6tgCTC4GbVhh7zmr/5zZgdBCobDBvb/MgAYq13Ji6R4PdkT8QOXQEvx0+4qqxcN4tWDj/VoRrbwuqK8uNxtPo0HAU3+7ag/Z9PPmIlYJQHuZXVWFvRzf6BwZ9AZYUFWJxdQUOdXZiKDoSrxteVINlS+5DQX7IhKA1jWovZNt/bMf7n3yG4YSO2VuocCqKSmbgukmTtDr/9/JlDPT3ITp4zlU/P5SH559+CsvvD2vZAWAtZFqpxMdftmLzV1vHGZ6cMwXTb5yjDd4xQBJn/jqO0YsXxtlc/dgjeObxFCt6rJWVSnAH5pvMte+LoGmjen4unV2OnCm5uh5z1Ru9cB59J3qUbTesXYPwItf2V1Wv2EmnKeg7vVC8/Ppb+P1wp/JxWaVHWqBJqberQ1nzjnlVePvVV/ysHBBC1GhtaLKUgGtDQxlxOi1SUebgPXm6X+mNoyfV/xeEQqgsn2O16eo5jqGoOsWeO6tEaXdWaYnfYB5g/hbfUtKCyWykqY5MVnNv6m0CzEg5FpRRyCQaQ9v0fo1zQnftHGw5XpBS+s5Iht4Kuro18yQa9Trc5S4t26Tkko5D4to7Xk+QklaKEbRGPOyZXXBkGYn0rpgSSNTbd7gTPSao+UbVrYzvIFaF0D565/WOZ74UsJQOAKgP5Jo1EZh9AcKzwUxFg17nRXf8AiOVY1LeEycbsKNBEhzkQRGxgFOqOl43lpCHrJgAkgQ/6UqLUiHwlgl72cOHDF+z4SrpvG6TfFDAnYvzug1X+53pgk7E8B+bM88RqdU/9gAAAABJRU5ErkJggg==" class="left circle">Hangout</option>
		<option value="pool"  data-icon="data:image/png;base64,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" class="left circle">Pool</option>
		<option value="project"  data-icon="data:image/png;base64,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" class="left circle">Project</option>
	
    </select>
   
 </option>
 
		
        <select class ="input-field col s5" name = "city">
                        <option value = "None">Select your City</option>
                        
                        <?php foreach ($cities as $city): ?>
                        
                            <option value = <?= $city ?>> <?= $city ?> </option>
                    
                    <?php endforeach ?>
              </select>
         


    </div>
    
				<div class="col sm 3">
					<button type="submit" type="submit" name="submit" value="submit" class="btn btn-primary">Find Events</button>
				</div>
			
		
	 </div>
	</div>
</form>