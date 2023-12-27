<header> <!-- -->
<title>Travel Deficiencies - Form</title>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">    
</header>  
<!--



-->   
<body>
   <div id="content">
		<h1>Travel Deficiencies</h1>
		<form action="result.php" id="form" method="post">
			<table id="form1">
            <tr>
            <!-- !!!!ALLGEMEIN!!!! --> 
            </tr>
            <tr>
					<td class="title">
					What is your Name?
					</td>
					<td class="right">
               <input name="name" required/>
					</td>
				</tr>
            <tr>
					<td class="title">
					What City do you live in?
					</td>
					<td class="right">
               <input name="city" required/>
					</td>
				</tr>
            <tr>
					<td class="title">
					How much did you pay for the vacation (including transportation)?
					</td>
					<td class="right">
               <input type="number" step="any" name="price" required/>
					</td>
				</tr>
            <tr>
					<td class="title">
					How many days did the vacation last?
					</td>
					<td class="right">
               <input type="number" name="vacationduration"  required/>
					</td>
				</tr>
            <tr>
					<td class="title">
					What kind of vacation did you book?
					</td>
					<td class="right">
               <select id="typeaccomm" name="typeaccomm">
               <option value="1">only accommodation</option>
               <option value="2">accommodation with breakfast included</option>
               <option value="3">half board accommodation</option>
               <option value="4">full board accommodation</option>
               </td>
				</tr>
            <tr>
					<td class="title">
					Would you like to cancel the contract or receive compensation?
					</td>
					<td class="right">
               <select name="cancelcomp">
               <option value="2">I would like to receive compensation</option>
               <option value="1">I would like to cancel the contract</option>
               </td>
				</tr>
            <tr>
					<td class="title">
					What is the name of the travel agency?
					</td>
					<td class="right">
               <input name="travelagency"  required/>
					</td>
				</tr>
            <tr>
					<td class="title">
					What is the address of the travel agency?
					</td>
					<td class="right">
               <input name="address"  required/>
					</td>
				</tr>
            <tr>
					<td class="title">
					What is the ZIP code of the travel agency?
					</td>
					<td class="right">
               <input name="zipcode"  required/>
					</td>
				</tr>
            <tr>
					<td class="title">
					What city is the travel agency located in?
					</td>
					<td class="right">
               <input name="citytravel"  required/>
					</td>
				</tr>
            <tr>
					<td class="title">
					What country is the travel agency situated in?
					</td>
					<td class="right">
               <input name="country"  required/>
					</td>
				</tr>
            <tr>
					<td class="title">
					What is your booking number?
					</td>
					<td class="right">
               <input name="bookingnumber"  required/>
					</td>
				</tr>
				<tr>
            <tr>
            <!-- !!!!UNTERKUNFT!!!! --> 
            </tr>
            <tr>
					<td class="title">
					Deviation from the booked Accommodation
					</td>
					<td class="right">
               <select name="devaccomm">
               <option value="0">not applicable</option> <!-- 0% --> 
               <option value="1">new accommodation was close to the original one</option> <!-- 10% --> 
               <option value="2">new accommodation was a bit further away from the original one</option> <!-- 15% --> 
               <option value="3">new accommodation was far away from the original one</option> <!-- 20% --> 
               <option value="4">new accommodation was very far away from the original one</option> <!-- 25% --> 
					</td>
				</tr>
				<tr>
					<td class="title">
					Different Location (distance from the beach)
					</td>
					<td class="right">
					<select name="diffaccomm">
               <option value="0">not applicable</option> <!-- 0% -->
               <option value="1">new location was close to the original one</option> <!-- 5% -->
               <option value="2">new location was far away from the original one</option> <!-- 10% -->
               <option value="3">new location was very far away from the original one</option> <!-- 15% -->
               </td>
				</tr>
            <tr>
					<td class="title">
					Different Type of Accommodation
					</td>
					<td class="right">
               <select name="difftype">
               <option value="0">not applicable</option> <!-- 0% -->
               <option value="1">accommodation in a hotel instead of a bungalow</option> <!-- 10% -->
               <option value="2">accommodation on a different floor</option> <!-- 5% -->
					</td>
				</tr>
				<tr>
					<td class="title">
					Different Type of Room
					</td>
					<td class="right">
					<select name="roomtype">
					<option value="0">not applicable</option> <!-- 0% -->
               <option value="1">double room instead of single room</option> <!-- 20% -->
					<option value="2">triple room instead of single room</option> <!-- 25% -->
					<option value="3">triple room instead of double room</option> <!-- 20 25% -->
					<option value="4">quadruple room instead of double room</option> <!-- 20 30% -->
					</select>
               <br \>
               <input type="checkbox" name="strangerdanger" value="1" /> We were accommodated with unknown travellers
					</td>
				</tr>
            <tr>
					<td class="title">
					Deficiencies regarding room equipment
					</td>
					<td class="right">
					<input type="checkbox" name="roomsize1" />the room is too small<br /> <!-- 5% -->
               <input type="checkbox" name="roomsize2" />the room is substantially smaller than agreed upon<br /> <!-- 10% -->
               <input type="checkbox" name="balconyhot" />missing balcony during hot season<br /> <!-- 10% -->
               <input type="checkbox" name="balconycold" />missing balcony during cold season<br /> <!-- 5% -->
               <input type="checkbox" name="seaview" />missing sea view<br /> <!-- 10% -->
               <input type="checkbox" name="seaviewpar" />only partial sea view<br /> <!-- 5% -->
               <input type="checkbox" name="bathwc" />missing (private) bathroom and toilet<br /> <!-- 25% -->
               <input type="checkbox" name="wc" />missing (private) toilet<br /> <!-- 15% -->
               <input type="checkbox" name="shower" />missing (private) shower<br /> <!-- 10% -->
               <input type="checkbox" name="airconhot" />missing air conditioning during hot season<br /> <!-- 20% -->
               <input type="checkbox" name="airconcold" />missing air conditioning during cold season<br /> <!-- 10% -->
               <input type="checkbox" name="tvradio" />missing radio and/or tv<br /> <!-- 5% -->
               <input type="checkbox" name="furniture" />insufficient furniture<br /> <!-- 10% -->
               <input type="checkbox" name="dmgsmall" />small damages (smaller cracks, small humid spots,...)<br /> <!-- 10% -->
               <input type="checkbox" name="dmgmedium" />medium damages (cracks, humidity,...)<br /> <!-- 30% -->
               <input type="checkbox" name="dmglarge" />substantial damages (cracks, humidity,...)<br /> <!-- 50% -->
               <input type="checkbox" name="verminslight" />slight vermin infestation<br /> <!-- 10% -->
               <input type="checkbox" name="verminnormal" />vermin infestation<br /> <!-- 30% -->
               <input type="checkbox" name="verminsevere" />severe vermin infestation<br /> <!-- 50% -->
					</td>
				</tr>
            <tr>
					<td class="title">
					Failure of Utilities
					</td>
					<td class="right">
					<input type="checkbox" name="failuretoilet" />the toilet is unusable<br /> <!-- 15% -->
               <input type="checkbox" name="failurebathboiler" />the bath is unusable and/or the hot water boiler is not working properly<br /> <!-- 15% -->
               <input type="checkbox" name="failuregas" />failure of gas <br /> <!-- 10% -->
               <input type="checkbox" name="failureele" />failure of electricity<br /> <!-- 10% -->
               <input type="checkbox" name="failurewater" />no running water<br /> <!-- 10% -->
               <input type="checkbox" name="failureachot" />the air conditioning is not working during hot season<br /> <!-- 10% -->
               <input type="checkbox" name="failureaccold" />the air conditioning is not working during cold season<br /> <!-- 10% -->
               <input type="checkbox" name="failureelevatorlow" />the elevator is out of order while accommodated up to the second floor<br /> <!-- 5% -->
               <input type="checkbox" name="failureelevatorhigh" />the elevator is out of order while accommodated higher than the second floor<br /> <!-- 10% -->
					</td>
				</tr>
            <tr>
					<td class="title">
					Insufficient Service
					</td>
					<td class="right">
					<input type="checkbox" name="servicetotal" />there was no service whatsoever<br /> <!-- 25% -->
               <input type="checkbox" name="servicecleaninglow" />the cleaning wasn't done satisfactory<br /> <!-- 10% -->
               <input type="checkbox" name="servicecleaninghigh" />there was no cleaning<br /> <!-- 20% -->
               <input type="checkbox" name="changeoflinen" />the linen weren't changed often enough<br /> <!-- 5% -->
               <input type="checkbox" name="changeoftowel" />the towels weren't changed often enough<br /> <!-- 5% -->
               </td>
				</tr>
            <tr>
					<td class="title">
					If there was excessive noise during the day, please choose an option
					</td>
					<td class="right">
					<select name="noiseday">
               <option value="0">not applicable</option> <!-- 0% -->
               <option value="1">slight disturbing noise</option> <!-- 5% -->
               <option value="2">disturbing noise</option> <!-- 15% -->
               <option value="3">unbearable noise</option> <!-- 25% -->
               </td>
				</tr>
            <tr>
					<td class="title">
					If there was excessive noise during the night, please choose an option
					</td>
					<td class="right">
					<select name="noisenight">
               <option value="0">not applicable</option> <!-- 0% -->
               <option value="1">slight disturbing noise</option> <!-- 5% -->
               <option value="2">disturbing noise</option> <!-- 15% -->
               <option value="3">unbearable noise</option> <!-- 25% -->
               </td>
				</tr>
            <tr>
					<td class="title">
					If there were unpleasant odors, please choose an option
					</td>
					<td class="right">
					<select name="odors">
               <option value="0">not applicable</option> <!-- 0% -->
               <option value="1">temporary unpleasant odors</option> <!-- 5% -->
               <option value="2">constant unpleasant odors</option> <!-- 10% -->
               <option value="3">unbearable odors</option> <!-- 15% -->
               </td>
				</tr>
            <tr>
					<td class="title">
					If you were promised spa facilities, please choose an option
					</td>
					<td class="right">
					<select name="spa">
               <option value="0">not applicable</option>
               <option value="1">spa facility missing/unusable</option> <!-- 20% -->
               <option value="2">multiple spa facilites missing/unusable</option> <!-- 30% -->
               <option value="3">no spa facilities whatsoever</option> <!-- 40% -->
               </td>
				</tr>
            <tr>
            <!-- !!!!VERPFLEGUNG!!!! --> 
            </tr>
            <tr>
					<td class="title">
					Catering
					</td>
					<td class="right">
					<input type="checkbox" name="monomenu" />monotonous menu<br /> <!-- 5% -->
               <input type="checkbox" name="warmmeals" />insufficient warm meals<br /> <!-- 10% -->
               <input type="checkbox" name="spoileddishes" />spoiled dishes<br /> <!-- 25% -->
               <input type="checkbox" name="nocatering" />no catering<br /> <!-- 50% -->
               </td>
				</tr>
            <tr>
					<td class="title">
					Service
					</td>
					<td class="right">
					<input type="checkbox" name="selfnowaiter" />self-service instead of waiter<br /> <!-- 15% -->
               <input type="checkbox" name="waitingmeals" />long waiting times<br /> <!-- 15% -->
               <input type="checkbox" name="eatingshifts" />guests have to eat in shifts<br /> <!-- 10% -->
               <input type="checkbox" name="dirtytables" />dirty dining tables<br /> <!-- 10% -->
               <input type="checkbox" name="dirtydishescutlery" />dirty dishes/cutlery<br /> <!-- 15% -->
               <input type="checkbox" name="noacindiningroom" />no air conditioning in dining room<br /> <!-- 10% -->
               </td>
				</tr>
            <tr>
            <!-- !!!!SONSTIGES!!!! --> 
            </tr>
            <tr>
					<td class="title">
					Miscellaneous Deficiencies
					</td>
					<td class="right">
					<input type="checkbox" name="dirtypool" />dirty swimming pool<br /> <!-- 10% -->
               <input type="checkbox" name="missingpool" />missing swimming pool<br /> <!-- 20% -->
               <input type="checkbox" name="missingindoorpooloutdoor" />missing indoor pool - usable outdoor pool<br /> <!-- 10% -->
               <input type="checkbox" name="missingindoorpool" />missing indoor pool - no alternative pool<br /> <!-- 20% -->
               <input type="checkbox" name="missingsauna" />missing sauna<br /> <!-- 5% -->
               <input type="checkbox" name="missingtenniscourt" />missing tennis court<br /> <!-- 10% -->
               <input type="checkbox" name="missingminigolf" />missing mini golf course<br /> <!-- 5% -->
               <input type="checkbox" name="missingsurfsaildivingriding" />missing surf/sail/diving/riding school<br /> <!-- 10% -->
               <input type="checkbox" name="missingchildcare" />missing childcare<br /> <!-- 10% -->
               <input type="checkbox" name="noseaswimming" />no possibility to swim in the sea<br /> <!-- 15% -->
               <input type="checkbox" name="dirtybeach" />dirty beaches<br /> <!-- 10% -->
               <input type="checkbox" name="vdirtybeach" />very dirty beaches<br /> <!-- 20% -->
               <input type="checkbox" name="missingbeachchair" />missing beach chairs<br /> <!-- 5% -->
               <input type="checkbox" name="missingbeachumbrella" />missing beach umbrella<br /> <!-- 5% -->
               <input type="checkbox" name="missingsnackbeachbar" />missing snack or beach bar without alternatives<br /> <!-- 5% -->
               <input type="checkbox" name="missingnudistbeach" />missing nudist beach<br /> <!-- 15% -->
               <input type="checkbox" name="missingrestaurantsupermarkethotelcatering" />missing restaurant or supermarket (hotel catering)<br /> <!-- 5% -->
               <input type="checkbox" name="missingrestaurantsupermarketselfcatering" />missing restaurant or supermarket (self catering)<br /> <!-- 20% -->
               <input type="checkbox" name="missingentertainmentfacilities" />missing entertainment facilities (night club, cinema, animator)<br /> <!-- 15% -->
               <input type="checkbox" name="missingboutique" />missing boutique or shopping street<br /> <!-- 15% -->
               </td>
				</tr>
             <tr>
					<td class="title">
					Were shore excursions on cruises cancelled? <!-- 30%/day -->
					</td>
					<td class="right">
					<input type="radio" name="shoreexc" value="yes" /> Yes <br />
					<input type="radio" name="shoreexc" value="no" /> No
               </td>
				</tr>
            <tr>
					<td class="title">
					On how many days were shore excursions planned?
					</td>
					<td class="right">
					<input type="number" name="excursiondays" value="0" />
               </td>
				</tr>
            <tr>
					<td class="title">
					If there were issues with a tour guide please choose an option
					</td>
					<td class="right">
               <select name="tourguide">
               <option value="0">not applicable</option>
               <option value="1">lack of organization of the tour guide</option> <!-- 5% -->
               <option value="2">missing tour guide on sightseeing trips</option> <!-- 20% -->
               <option value="3">missing tour guide on study trips</option> <!-- 30% -->
               </td>
				</tr>
            <tr>
					<td class="title">
					Loss of time due to forced moving
					</td>
					<td class="right">
               <select name="forcedmoving">
               <option value="0">not applicable</option>
               <option value="1">had to move within the same hotel</option> <!-- 1/2 day -->
               <option value="2">had to move to another hotel</option> <!-- 1 day -->
               </td>
				</tr>
            <!-- !!!!TRANSPORT!!!! --> 
            <tr>
					<td class="title">
					Please put in the number of hours your flight was delayed if applicable <!-- 5%/day for every hour +4 -->
					</td>
					<td class="right">
					<input type="number" name="flightdelay" value="0" />
               </td>
				</tr>   
            <tr>
					<td class="title">
					Aircraft equipment deficiencies
					</td>
					<td class="right">
               <input type="checkbox" name="aircraftclass" />worse class of transport<br /> <!-- 15% -->
               <input type="checkbox" name="aircraftdeviation" />considerable deviation from the normal standard<br /> <!-- 10% -->
               </td>
				</tr>
            <tr>
					<td class="title">
					Service
					</td>
					<td class="right">
					<input type="checkbox" name="transportcatering" />deficiencies in catering during transport<br /> <!-- 5% -->
               <input type="checkbox" name="transportentertainment" />missing typical entertainment during transport (music, radio, movies)<br /> <!-- 5% -->
               </td>
				</tr>
            <tr>
					<td class="title">
					If you had to change mode of transport please put in the number of hours of the resulting delay if applicable <!-- % of delay relative to whole trip -->
					</td>
					<td class="right">
					<input type="number" name="transportswitchdelay" value="0" />
               </td>
				</tr>
            <tr>
					<td class="title">
					If a transport from the airport to the hotel was missing, please put in the price for the alternative transportation you had to spend<!-- price of transport -->
					</td>
					<td class="right">
					<input type="number" name="missingtransport" value="0" />
               </td>
				</tr> 
         </table>        
			<button>Send</button>
		</form>
	</div>
</body> 
    