<!doctype html>
<head>
    <title>Travel with us</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    
    
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script>
    function validateForm(){
        let a=document.forms["myform"]["name"].value;
       
        let b=document.forms["myForm"]["tel"].value;
    let c=document.forms["myForm"]["email"].value;
    let d=document.forms["myForm"]["address"].value;
    let e=document.forms["myForm"]["date"].value;
    let f=document.forms["myForm"]["number"].value;

    
    
        if(a==""|| b=="" || c=="" ||d==""||e==""||f==""){
            alert(" * Must be filled");
            return false;
        }
    }

    </script> 
    </head>
    <body>
    <?php include'header.php'; ?>
    <br>
    <br>
    <br>
        <div class="travelcontact">
        <form name="myform" method="post" target="_self" onsubmit="return validateForm()">
            <fieldset>
                <legend style="text-align:center; font-size:25px;"> Details</legend>
                <div class="row">
                    <div class="column">
                        <label> Enter your Name:*</label></div></div>
                        <div class="row">
                        <div class="column">
                        <input type="text"  name="name" placeholder="Enter your name">
                    </div>
                   
                </div><br>
                    
                  <div class="row">
                        <div class="column">
                            <label>Date of birth:</label>
                           
                                  
                        	<select autofocus> Year
                         <option>2000</option>
                         <option>1999</option>
                         <option>1998</option>
                         <option>1997</option>
                         <option>1996</option>
                         <option>1995</option>
                         <option>1994</option>
                         <option>1993</option>
                         </select>
                         
                         <select autofocus> Month
                         <option>JAN</option>
                         <option>FEB</option>
                         <option>MAR</option>
                         <option>APR</option>
                         <option>MAY</option>
                         <option>JUNE</option>
                         <option>JULY</option>
                         <option>AUG</option>
                         <option>SEP</option>
                         <option>OCT</option>
                         <option>NOV</option>
                         <option>DEC</option>
                         </select>
                         
                      <select autofocus> DATE
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                         <option>5</option>
                         <option>6</option>
                         <option>7</option>
                         <option>8</option>
                         <option>8</option>
                         <option>10</option>
                         <option>11</option>
                         <option>12</option>
                         <option>13</option>
                         <option>14</option>
                         <option>15</option>
                         <option>16</option>
                         <option>17</option>
                         <option>18</option>
                         <option>19</option>
                         <option>20</option>
                         <option>21</option>
                         <option>22</option>
                         <option>23</option>
                         <option>24</option>
                         <option>25</option>
                         <option>26</option>
                         <option>27</option>
                         <option>28</option>
                         <option>29</option>
                         <option>30</option>
                         <option>31</option>
                        
                         

                         
                         
                         

                         </SELECT>
                         </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="column">  
                            <label>Contact No.*</label></div>
               <div class="row">
               <input type="tel" name="tel" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" max-length="10" required></div>
               <br>
                    <div class="row">
                        <div class="column">
                            <label> Enter your Address:*</label></div></div>
                            <div class="row">
                            <div class="column">
                            <textarea rows=4 cols=10 placeholder="Plot no,Street,Locality,City,State" name="address"></textarea>
                        </div>
                        <br>
<div class="row">
    <div class="column">
        <label>Enter your E-mail:*</label>
        <input type="email" placeholder="name@gmail.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$">
    </div>
</div>

<br>
<div class="row">
    <div class="column">
        <label for="country">Departure Country:</label>

        </div></div>

        <div class="row">
            <div class="column">
        
        <select name="country" id="country">
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="Andorra">Andorra</option>
            <option value="Argentina">Argentina</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Belgium">Belgium</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Brazil">Brazil</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Canada">Canada</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Colombia">Colombia</option>
            <option value="Congo (Congo-Brazzaville)">Congo-Brazzaville</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            
            <option value="Czechia (Czech Republic)">Czechia(Czech Republic)</option>
            <option value="Democratic Republic of the Congo">Democratic Republic of Congo</option>
            <option value="Denmark">Denmark</option>
            <option value="Dominica">Dominica</option>

            <option value="Egypt">Egypt</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Fiji">Figi</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Greece">Greece</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Goa</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran">Iran</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Laos">Laos</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Libya">Libya</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mexico">Mexico</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="New Zealand">new Zealand</option>
            <option value="Nigeria">Nigeria</option>
            <option value="North Korea">North Korea</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Panama">Panama</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Poland">Poland</option>

            <option value="Portugal">Portugal</option>
            <option value="Qatar">Qatar</option>
            <option value="Romania">Romania</option>
            <option value="Russia">Russia</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Serbia">Serbia</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovenia">Slovenia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Korea">South Korea</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>

            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syria">Syria</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania">Tanzania</option>
            <option value="Thailand">Thailand</option>
            <option value="Turkey">Turkey</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>

            <option value="United Arab Emirates">United Arab Emirates</option>
           
            <option value="United States of America">United States of America</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Vietnam">Vietnam</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option></select></div></div>


<div class="row">
    <div class="column"><label for="country">Destination Country:</label></div>
</div>
            <div class="row">
                <div class="column">
                   
                    <select name="country" id="country">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Canada">Canada</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Congo (Congo-Brazzaville)">Congo-Brazzaville</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        
                        <option value="Czechia (Czech Republic)">Czechia(Czech Republic)</option>
                        <option value="Democratic Republic of the Congo">Democratic Republic of Congo</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Dominica">Dominica</option>
            
                        <option value="Egypt">Egypt</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Fiji">Figi</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Goa</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Laos">Laos</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Libya">Libya</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">new Zealand</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="North Korea">North Korea</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Panama">Panama</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
            
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Korea">South Korea</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
            
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
            
                        <option value="United Arab Emirates">United Arab Emirates</option>
                       
                        <option value="United States of America">United States of America</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                              </select>
    </div>
</div><br>
<div class="row">
    <div class="column">    <label>Date  of Departure:*</label> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <label> Return Date :</label>
    </div></div>
    <div class="row">
<div class="column"> <input type="date" name="date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="date" name="date">

</div>


</div>
<br>





<div class="row">
    <div class="column">
        <label>No.of travellers:*</label></div><div>
        <input type="number" min="1" max="200" step="1" name="number">
    </div>
</div>
<div class="row">
    <div class="column">
        <label>Children below 3yrs of age : </label></div></div>
        <div class="row"><div class="column">
            <label>Yes</label>  <input type="radio"name="children" value="yes" >
            <label>NO</label>  <input type="radio" name="children" value="no">
        </div></div>

        <div class="row">
            <div class="column">
                <label>Adults above 60yrs of age : </label></div></div>
                <div class="row"><div class="column">
                    <label>Yes</label>  <input type="radio" name="adult" value="yes">
                    <label>NO</label>  <input type="radio" name="adult" value="no">
                </div></div>
     
                <div class="row">
                    <div class="column">
                        <label> Instructions:</label></div></div>
                        <div class="row">
                        <div class="column">
                        <textarea rows=4 cols=10 name="instructions" ></textarea>
                    </div>
                    <br>
  
            
                        </div>
                        <div class="row">
                            <div class="column">
                                <input type="submit" value="SUBMIT" style='width:100px;margin:0 50%;position:absolute;left:-60px;'>
                    </div></div>
                <br><br>
                </div>
            </fieldset>
        </form>

    </body>
    </html>