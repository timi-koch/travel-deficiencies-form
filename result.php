<header> <!-- -->
<title>Travel Deficiencies - Result</title>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">    
<style>
table, td
{
	width:800px;
	color:black;
	margin-left:auto;
	margin-right:auto;
    vertical-align: center;
    padding: 30px;
    line-height: 150%;
}     
</style>
</header>  
<!--



-->   
<body>
<div>
    <table>
            <tr>
                <td>
<?php
error_reporting(E_ALL & ~E_NOTICE);

$userinput = $_POST;

foreach($userinput AS $key => $value)
{
    $$key=$value;
}



/* VARIABLEN */

$ruecktritt=0;
$ruecktrittmoeglich=NULL;
$gruende=array();
$unterkunftprozent=0;
$verpflegungprozent=0;
$sonstigesprozent=0;
$transportprozent=0;
$excursionprice=$price;
$flightdelayprice=$price;
$movingprice=$price;
$transportswitchprice=$price;
$missingtransportprice=0;
$verpflegungmini=0;
$totalprice=0;



/* UNTERKUNFT */

if($devaccomm=="0"){$unterkunftprozent+=0;}
elseif($devaccomm=="1"){$unterkunftprozent+=10;$gruende[]='Deviation from the booked accommodation.';}
elseif($devaccomm=="2"){$unterkunftprozent+=15;$gruende[]='Deviation from the booked accommodation.';}
elseif($devaccomm=="3"){$unterkunftprozent+=20;$gruende[]='Deviation from the booked accommodation.';}
elseif($devaccomm=="4"){$unterkunftprozent+=25;$gruende[]='Deviation from the booked accommodation.';}

if($diffaccomm=="0"){$unterkunftprozent+=0;}
elseif($diffaccomm=="1"){$unterkunftprozent+=5;$gruende[]='The new location was different from the original one.';}
elseif($diffaccomm=="2"){$unterkunftprozent+=10;$gruende[]='The new location was far away from the original one.';}
elseif($diffaccomm=="3"){$unterkunftprozent+=15;$gruende[]='The new location was very far away from the original one.';}

if($difftype=="0"){$unterkunftprozent+=0;}
elseif($difftype=="1"){$unterkunftprozent+=10;$gruende[]='We were accommodated in a hotel instead of a bungalow.';}
elseif($difftype=="2"){$unterkunftprozent+=5;$gruende[]='We were accommodated on a different floor.';}

if($roomtype=="0"){$unterkunftprozent+=0;}
elseif($roomtype=="1"){$unterkunftprozent+=20;$gruende[]='We were accommodated in a double room instead of a single room.';}
elseif($roomtype=="2"){$unterkunftprozent+=25;$gruende[]='We were accommodated in a triple room instead of a single room.';}
elseif($roomtype=="3" && $strangerdanger!="1"){$unterkunftprozent+=20;$gruende[]='We were accommodated in a triple room instead of a double room.';}
elseif($roomtype=="3" && $strangerdanger=="1"){$unterkunftprozent+=25;$gruende[]='We were accommodated with strangers in a triple room instead of a double room.';}
elseif($roomtype=="4" && $strangerdanger!="1"){$unterkunftprozent+=20;$gruende[]='We were accommodated in a quadruple room instead of a double room.';}
elseif($roomtype=="4" && $strangerdanger=="1"){$unterkunftprozent+=30;$gruende[]='We were accommodated with strangers in a quadruple room instead of a double room.';}

if($roomsize1=="on" && $roomsize2!="on"){$unterkunftprozent+=5;$gruende[]='The room was smaller than agreed upon.';}
elseif($roomsize1=="on" && $roomsize2=="on"){$unterkunftprozent+=10;$gruende[]='The room was substantially smaller than agreed upon.';}
elseif($roomsize1!="on" && $roomsize2=="on"){$unterkunftprozent+=10;$gruende[]='The room was substantially smaller than agreed upon.';}

if($balconyhot=="on" && $balconycold!="on"){$unterkunftprozent+=10;$gruende[]='The promised balcony was missing.';}
elseif($balconyhot=="on" && $balconycold=="on"){$unterkunftprozent+=10;$gruende[]='The promised balcony was missing.';}
elseif($balconyhot!="on" && $balconycold=="on"){$unterkunftprozent+=5;$gruende[]='The promised balcony was missing.';}

if($seaview=="on" && $seaviewpar!="on"){$unterkunftprozent+=10;$gruende[]='The promised seaview was missing.';}
elseif($seaview=="on" && $seaviewpar=="on"){$unterkunftprozent+=5;$gruende[]='The promised seaview was missing.';}
elseif($seaview!="on" && $seaviewpar=="on"){$unterkunftprozent+=5;$gruende[]='The promised seaview was missing.';}

if($bathwc=="on" && $wc!="on"){$unterkunftprozent+=25;$gruende[]='The promised private bathroom was missing.';}
elseif($bathwc=="on" && $wc=="on"){$unterkunftprozent+=25;$gruende[]='The promised private bathroom was missing.';}
elseif($bathwc!="on" && $wc=="on"){$unterkunftprozent+=15;$gruende[]='The promised private toilet was missing.';}

if($shower=="on"){$unterkunftprozent+=10;$gruende[]='The promised private shower was missing.';}

if($airconhot=="on" && $airconcold!="on"){$unterkunftprozent+=20;$gruende[]='The promised air conditioning was missing.';}
elseif($airconhot=="on" && $airconcold=="on"){$unterkunftprozent+=20;$gruende[]='The promised air conditioning was missing.';}
elseif($airconhot!="on" && $airconcold=="on"){$unterkunftprozent+=10;$gruende[]='The promised air conditioning was missing.';}

if($tvradio=="on"){$unterkunftprozent+=5;$gruende[]='The promised TV or radio was missing.';}

if($furniture=="on"){$unterkunftprozent+=10;$gruende[]='There was insufficient furniture in the accommodation.';}

if($dmgsmall=="on" && $dmgmedium=="on" && $dmglarge=="on"){$unterkunftprozent+=50;$gruende[]='There were substantial damages to our accommodation like cracks and humidity.';}
elseif($dmgsmall=="on" && $dmgmedium=="on" && $dmglarge!="on"){$unterkunftprozent+=30;$gruende[]='There were damages to our accommodation like cracks and humidity.';}
elseif($dmgsmall=="on" && $dmgmedium!="on" && $dmglarge=="on"){$unterkunftprozent+=50;$gruende[]='There were substantial damages to our accommodation like cracks and humidity.';}
elseif($dmgsmall=="on" && $dmgmedium!="on" && $dmglarge!="on"){$unterkunftprozent+=10;$gruende[]='There were damages to our accommodation like cracks and humidity.';}
elseif($dmgsmall!="on" && $dmgmedium=="on" && $dmglarge!="on"){$unterkunftprozent+=30;$gruende[]='There were damages to our accommodation like cracks and humidity.';}
elseif($dmgsmall!="on" && $dmgmedium=="on" && $dmglarge=="on"){$unterkunftprozent+=50;$gruende[]='There were substantial damages to our accommodation like cracks and humidity.';}
elseif($dmgsmall!="on" && $dmgmedium!="on" && $dmglarge=="on"){$unterkunftprozent+=50;$gruende[]='There were substantial damages to our accommodation like cracks and humidity.';}

if($verminslight=="on" && $verminnormal=="on" && $verminsevere=="on"){$unterkunftprozent+=50;$gruende[]='There was a severe vermin infestation.';}
elseif($verminslight=="on" && $verminnormal=="on" && $verminsevere!="on"){$unterkunftprozent+=30;$gruende[]='There was a vermin infestation.';}
elseif($verminslight=="on" && $verminnormal!="on" && $verminsevere=="on"){$unterkunftprozent+=50;$gruende[]='There was a severe vermin infestation.';}
elseif($verminslight=="on" && $verminnormal!="on" && $verminsevere!="on"){$unterkunftprozent+=10;$gruende[]='There was a slight vermin infestation.';}
elseif($verminslight!="on" && $verminnormal=="on" && $verminsevere!="on"){$unterkunftprozent+=30;$gruende[]='There was a vermin infestation.';}
elseif($verminslight!="on" && $verminnormal=="on" && $verminsevere=="on"){$unterkunftprozent+=50;$gruende[]='There was a severe vermin infestation.';}
elseif($verminslight!="on" && $verminnormal!="on" && $verminsevere=="on"){$unterkunftprozent+=50;$gruende[]='There was a severe vermin infestation.';}

if($failuretoilet=="on"){$unterkunftprozent+=15;$gruende[]='There toilet was unusable.';}

if($failurebathboiler=="on"){$unterkunftprozent+=15;$gruende[]='There bathroom and/or the boiler were unusable.';}

if($failuregas=="on"){$unterkunftprozent+=10;$gruende[]='There was a failure of gas.';}

if($failureele=="on"){$unterkunftprozent+=10;$gruende[]='There was a failure of electricity.';}

if($failurewater=="on"){$unterkunftprozent+=10;$gruende[]='There was no running water.';}

if($failureachot=="on" && $failureaccold!="on"){$unterkunftprozent+=20;$gruende[]='The air conditioning didn´t work.';}
elseif($failureachot=="on" && $failureaccold=="on"){$unterkunftprozent+=20;$gruende[]='The air conditioning didn´t work.';}
elseif($failureachot!="on" && $failureaccold=="on"){$unterkunftprozent+=10;$gruende[]='The air conditioning didn´t work.';}

if($failureelevatorhigh=="on" && $failureelevatorlow!="on"){$unterkunftprozent+=10;$gruende[]='The elevator was out of order.';}
elseif($failureelevatorhigh=="on" && $failureelevatorlow=="on"){$unterkunftprozent+=10;$gruende[]='The elevator was out of order.';}
elseif($failureelevatorhigh!="on" && $failureelevatorlow=="on"){$unterkunftprozent+=5;$gruende[]='The elevator was out of order.';}

if($servicetotal=="on"){$unterkunftprozent+=25;$gruende[]='The was no service whatsoever.';}

if($servicecleaninghigh=="on" && $servicecleaninglow!="on"){$unterkunftprozent+=20;$gruende[]='The room didn´t get cleaned.';}
elseif($servicecleaninghigh=="on" && $servicecleaninglow=="on"){$unterkunftprozent+=20;$gruende[]='The room didn´t get cleaned.';}
elseif($servicecleaninghigh!="on" && $servicecleaninglow=="on"){$unterkunftprozent+=10;$gruende[]='The cleaning wasn´t done in a satisfying manner.';}

if($changeoflinen=="on"){$unterkunftprozent+=5;$gruende[]='The linen weren´t changed often enough.';}

if($changeoftowel=="on"){$unterkunftprozent+=5;$gruende[]='The towels weren´t changed often enough.';}

if($noiseday=="0"){$unterkunftprozent+=0;}
elseif($noiseday=="1"){$unterkunftprozent+=5;$gruende[]='There was slight disturbing noise during the day.';}
elseif($noiseday=="2"){$unterkunftprozent+=15;$gruende[]='There was disturbing noise during the day.';}
elseif($noiseday=="3"){$unterkunftprozent+=25;$gruende[]='There was unbearable noise during the day.';}

if($noisenight=="0"){$unterkunftprozent+=0;}
elseif($noisenight=="1"){$unterkunftprozent+=10;$gruende[]='There was slight disturbing noise during the night.';}
elseif($noisenight=="2"){$unterkunftprozent+=25;$gruende[]='There was disturbing noise during the night.';}
elseif($noisenight=="3"){$unterkunftprozent+=40;$gruende[]='There was unbearable noise during the night.';}

if($odors=="0"){$unterkunftprozent+=0;}
elseif($odors=="1"){$unterkunftprozent+=5;$gruende[]='There were temporary unpleasant odors.';}
elseif($odors=="2"){$unterkunftprozent+=10;$gruende[]='There were unpleasant odors.';}
elseif($odors=="3"){$unterkunftprozent+=15;$gruende[]='There were unbearable odors.';}

if($spa=="0"){$unterkunftprozent+=0;}
elseif($spa=="1"){$unterkunftprozent+=20;$gruende[]='A promised spa facility was missing.';}
elseif($spa=="2"){$unterkunftprozent+=30;$gruende[]='Multiple promised spa facilities were missing.';}
elseif($spa=="3"){$unterkunftprozent+=40;$gruende[]='The agreed upon spa facilities were not present.';}



/* VERPFLEGUNG */

if($monomenu=="on" && $nocatering!="on"){$verpflegungmini+=5;$gruende[]='The menu was monotonous.';}
elseif($monomenu=="on" && $nocatering=="on"){$verpflegungmini+=50;$gruende[]='There was no catering at all.';}

if($warmmeals=="on" && $nocatering!="on"){$verpflegungmini+=10;$gruende[]='There were insufficient warm meals.';}
elseif($warmmeals=="on" && $nocatering=="on"){$verpflegungmini+=50;$gruende[]='There was no catering at all.';}

if($spoileddishes=="on" && $nocatering!="on"){$verpflegungmini+=25;$gruende[]='Some dishes were spoiled.';}
elseif($spoileddishes=="on" && $nocatering=="on"){$verpflegungmini+=50;$gruende[]='There was no catering at all.';}

if($nocatering=="on" && $verpflegungmini!=50){$verpflegungmini+=50;$gruende[]='There was no catering at all.';}
elseif($nocatering=="on" && $verpflegungmini>=50){$verpflegungmini+=0;}

if($selfnowaiter=="on"){$verpflegungmini+=15;$gruende[]='There were no waiters.';}

if($waitingmeals=="on"){$verpflegungmini+=15;$gruende[]='There were long waiting times during meals.';}

if($eatingshifts=="on"){$verpflegungmini+=10;$gruende[]='Guests had to eat in shifts.';}

if($dirtytables=="on"){$verpflegungmini+=10;$gruende[]='The tables were dirty.';}

if($dirtydishescutlery=="on"){$verpflegungmini+=15;$gruende[]='The dishes and/or cutlery were dirty.';}

if($noacindiningroom=="on"){$verpflegungmini+=10;$gruende[]='There was no air conditioning in the dining room.';}

if($verpflegungmini>50){$verpflegungprozent+=50;}
elseif($verpflegungmini<=50){$verpflegungprozent+=$verpflegungmini;}



/* SONSTIGES */

if($dirtypool=="on" && $missingpool!="on"){$sonstigesprozent+=10;$gruende[]='The swimming pool was dirty.';}
elseif($dirtypool=="on" && $missingpool=="on"){$sonstigesprozent+=20;$gruende[]='The promised swimming pool was missing.';}
elseif($dirtypool!="on" && $missingpool=="on"){$sonstigesprozent+=20;$gruende[]='The promised swimming pool was missing.';}

if($missingindoorpooloutdoor=="on" && $missingindoorpool!="on"){$sonstigesprozent+=10;$gruende[]='The promised indoor swimming pool was missing.';}
elseif($missingindoorpooloutdoor=="on" && $missingindoorpool=="on"){$sonstigesprozent+=20;$gruende[]='The promised indoor swimming pool was missing.';}
elseif($missingindoorpooloutdoor!="on" && $missingindoorpool=="on"){$sonstigesprozent+=20;$gruende[]='The promised indoor swimming pool was missing.';}

if($missingsauna=="on"){$sonstigesprozent+=5;$gruende[]='The promised sauna was missing.';}

if($missingtenniscourt=="on"){$sonstigesprozent+=10;$gruende[]='The promised tennis court was missing.';}

if($missingminigolf=="on"){$sonstigesprozent+=5;$gruende[]='The promised mini golf course was missing.';}

if($missingsurfsaildivingriding=="on"){$sonstigesprozent+=10;$gruende[]='Promised sports centres like surf, sailing, diving or ridind schools were missing.';}

if($missingchildcare=="on"){$sonstigesprozent+=10;$gruende[]='The promised childcare facility was missing.';}

if($noseaswimming=="on"){$sonstigesprozent+=15;$gruende[]='There was no possibility to swim in the sea even though advertised.';}

if($dirtybeach=="on" && $vdirtybeach!="on"){$sonstigesprozent+=10;$gruende[]='The beaches were dirty.';}
elseif($dirtybeach=="on" && $vdirtybeach=="on"){$sonstigesprozent+=20;$gruende[]='The beaches were very dirty.';}
elseif($dirtybeach!="on" && $vdirtybeach=="on"){$sonstigesprozent+=20;$gruende[]='The beaches were very dirty.';}

if($missingbeachchair=="on"){$sonstigesprozent+=5;$gruende[]='There were no beach chairs.';}

if($missingbeachumbrella=="on"){$sonstigesprozent+=5;$gruende[]='There were no beach umbrellas.';}

if($missingsnackbeachbar=="on"){$sonstigesprozent+=5;$gruende[]='The promised snack or beach bar was missing.';}

if($missingnudistbeach=="on"){$sonstigesprozent+=15;$gruende[]='The promised nudist beach was missing.';}

if($missingrestaurantsupermarkethotelcatering=="on" && $missingrestaurantsupermarketselfcatering!="on"){$sonstigesprozent+=5;$gruende[]='The promised restaurant or supermarket was missing.';}
elseif($missingrestaurantsupermarkethotelcatering=="on" && $missingrestaurantsupermarketselfcatering=="on"){$sonstigesprozent+=15;$gruende[]='The promised restaurant or supermarket was missing.';}
elseif($missingrestaurantsupermarkethotelcatering!="on" && $missingrestaurantsupermarketselfcatering=="on"){$sonstigesprozent+=15;$gruende[]='The promised restaurant or supermarket was missing.';}

if($missingentertainmentfacilities=="on"){$sonstigesprozent+=15;$gruende[]='The advertised entertainment facilities like night clubs, cinemas or animators were missing.';}

if($missingboutique=="on"){$sonstigesprozent+=5;$gruende[]='The advertised boutique or shopping street was missing.';}

if($shoreexc=="yes"){$excursionprice-=($price-(($price/$vacationduration)*$excursiondays*0.3));$gruende[]='The shore excursions on the cruise were cancelled.';} /* EXCURSIONPRICE!!!!!!!!!!!!!!!!!!!!!!!!!!! */
elseif($shoreexc!="yes"){$excursionprice=0;}

if($tourguide=="0"){$sonstigesprozent+=0;}
elseif($tourguide=="1"){$sonstigesprozent+=5;$gruende[]='There was a lack of organization of the tour guide.';}
elseif($tourguide=="2"){$sonstigesprozent+=20;$gruende[]='The tour guide was missing on sightseeing trips.';}
elseif($tourguide=="3"){$sonstigesprozent+=30;$gruende[]='The tour guide was missing on study trips.';}

if($forcedmoving=="0"){$movingprice=0;} /* MOVINGPRICE!!!!!!!!!!!!!!!!!!!!!!!!!!! */
elseif($forcedmoving=="1"){$movingprice-=($price-(($price/$vacationduration)*0.5));$gruende[]='We were forced to move within the same hotel.';}
elseif($forcedmoving=="2"){$movingprice-=($price-(($price/$vacationduration)));$gruende[]='We were forced to move to another hotel.';}



/* TRANSPORT */

if($flightdelay>=5){$flightdelayprice-=($price-((($price/$vacationduration)*0.05)*($flightdelay-4)));$gruende[]='Our flight was delayed by '.$flightdelay.' hours.';} /* FLIGHTDELAYPRICE!!!!!!!!!!!!!!!!!!!!!!!!!!! */
elseif($flightdelay<=4){$flightdelayprice=0;}

if($aircraftclass=="on" && $aircraftdeviation!="on"){$transportprozent+=15;$gruende[]='We were put into a worse class of transport.';}
elseif($aircraftclass=="on" && $aircraftdeviation=="on"){$transportprozent+=15;$gruende[]='We were put into a worse class of transport.';}
elseif($aircraftclass!="on" && $aircraftdeviation=="on"){$transportprozent+=10;$gruende[]='There was a considerable deviation from the normal standard regarding aircraft equipment deficiencies during transport.';}

if($transportcatering=="on"){$transportprozent+=5;$gruende[]='The catering during transport was deficient.';}

if($transportentertainment=="on"){$transportprozent+=5;$gruende[]='Typical entertainment during transportation such as music, radio or movies were missing.';}

if($transportswitchdelay>=1){$transportswitchprice-=($price-((($price/$vacationduration)/24)*$transportswitchdelay));$gruende[]='We had to switch mode of transport which resulted in a delay of '.$transportswitchdelay.' hours.';} /* TRANSPORTSWITCHPRICE!!!!!!!!!!!!!!!!!!!!!!!!!!! */
elseif($transportswitchdelay<1){$transportswitchprice=0;}

if($missingtransport>0){$missingtransportprice+=$missingtransport;$gruende[]='We had to pay for a transport that should have been included in our vacation.';} /* MISSINGTRANSPORTPRICE!!!!!!!!!!!!!!!!!!!!!!!!!!! */
elseif($missingtransport="empty"){$missingtransportprice=0;}



/* CAPPED PROZENT */

if($unterkunftprozent>=100 && $typeaccomm=="1"){$unterkunftprozent=100;}
elseif($unterkunftprozent>=83.3 && $typeaccomm=="2"){$unterkunftprozent=83.3;}
elseif($unterkunftprozent>=62.5 && $typeaccomm=="3"){$unterkunftprozent=62.5;}
elseif($unterkunftprozent>=50 && $typeaccomm=="4"){$unterkunftprozent=50;}

if($verpflegungprozent>=0 && $typeaccomm=="1"){$verpflegungprozent=0;}
elseif($verpflegungprozent>=16.7 && $typeaccomm=="2"){$verpflegungprozent=16.7;}
elseif($verpflegungprozent>=37.5 && $typeaccomm=="3"){$verpflegungprozent=37.5;}
elseif($verpflegungprozent>=50 && $typeaccomm=="4"){$verpflegungprozent=50;}

if($sonstigesprozent>=30){$sonstigesprozent=30;}

if($transportprozent>=20){$transportprozent=20;}



/* RÜCKTRITT MÖGLICH */

$ruecktritt=$unterkunftprozent+$verpflegungprozent+$sonstigesprozent+$transportprozent;
if($ruecktritt<=19){$ruecktrittmoeglich=false;}
elseif($ruecktritt>=20){$ruecktrittmoeglich=true;}



/* RÜCKZAHLUNG */

$rueckzahlung=$price*($ruecktritt/100);



/* ENDGÜLTIGER BETRAG RÜCKZAHLUNG */

$totalprice=$rueckzahlung+$excursionprice+$movingprice+$flightdelayprice+$transportswitchprice+$missingtransportprice;



/* TEXTTEIL */

if($cancelcomp=="1" && $ruecktritt<20)
{
    echo 'Unfortunately the deficiencies are too insignificant to cancel the contract.';
    echo '<br \>';
    echo '<br \>';
    echo 'You can still ask for a compensation.';
    echo '<br \>';
    echo '<br \>';
    echo 'Please fill out the form again while choosing the option "I would like to receive compensation".';
}
elseif($cancelcomp=="1" && $ruecktrittmoeglich=true)
{
    echo '<br \>';
    echo '<br \>';
    echo '<br \>';
    echo 'To';
    echo '<br \>';
    echo $travelagency;
    echo '<br \>';
    echo $address;
    echo '<br \>';
    echo ''.$zipcode.' '.$citytravel.'';
    echo '<br \>';
    echo $country;
    echo '<p align=right>'.$city.', '.date("d.m.Y").'</p>';
    echo '<br \>';
    echo '<br \>';
    echo '<b>Cancellation of Contract regarding booking number '.$bookingnumber.' due to Travel Deficiencies</b>';
    echo '<br \>';
    echo '<br \>';
    echo 'Dear '.$travelagency.',';
    echo '<br \>';
    echo 'I would like to cancel the aforementioned contract due to the following reasons: ';    
    echo '<br \>';
    echo '<br \>';
    foreach($gruende AS $value)  /* RÜCKTRITTSGRÜNDE AUFGELISTET */
    { echo '<p> -' .$value.'</p>';}
    echo '<br \>';
    echo '<br \>';
    echo 'I would like to ask you to confirm the cancellation and transfer the price in the amount of <b>EUR '.number_format($price, 2).'</b> to my bank account.';
    echo '<br \>';
    echo '<br \>';
    echo '<br \>';
    echo 'Yours sincerely,';
    echo '<br \>';
    echo $name;
    echo '<br \>';
    echo '<br \>';
    echo '<br \>';
}
elseif($cancelcomp=="2")
{
    echo '<br \>';
    echo '<br \>';
    echo '<br \>';
    echo 'To';
    echo '<br \>';
    echo $travelagency;
    echo '<br \>';
    echo $address;
    echo '<br \>';
    echo ''.$zipcode.' '.$citytravel.'';
    echo '<br \>';
    echo $country;
    echo '<p align=right>'.$city.', '.date("d.m.Y").'</p>';
    echo '<br \>';
    echo '<br \>';
    echo '<b>Compensation due to Travel Deficiencies regarding booking number '.$bookingnumber.'</b>';
    echo '<br \>';
    echo '<br \>';
    echo 'Dear '.$travelagency.',';
    echo '<br \>';
    echo 'I would like to receive compensation regarding the aforementioned travel due to the following reasons: ';
    echo '<br \>';
    echo '<br \>';
    foreach($gruende AS $value)  /* RÜCKTRITTSGRÜNDE AUFGELISTET */
    { echo '<p>- ' .$value.'</p>';}
    echo '<br \>';
    echo '<br \>';
    echo 'I paid a total amount of <b>EUR '.number_format($price, 2).'</b> for the trip including transportation.';
    echo '<br \>';
    echo '<br \>';
    echo 'According to the "Frankfurter Liste" I am entitled to <b>'.number_format($ruecktritt, 2).'%</b> of the total paid price for the trip.';
    echo 'This amounts to <b>EUR '.number_format($rueckzahlung, 2).'</b>.';
    echo '<br \>';
    echo '<br \>';
} 

if($shoreexc=="yes" && $excursiondays>=1 && $cancelcomp=="2")
{
    echo 'Additionally Shore Excursions on the cruise were cancelled on '.$excursiondays.' days. Therefore I ask for compensation in the amount of <b>EUR '.number_format($excursionprice, 2).'</b> on top.';
    echo '<br \>';
    echo '<br \>';
}

if($forcedmoving=="1" && $cancelcomp=="2")
{
    echo 'Furthermore I was forced to move within the same hotel. The compensation for this deficiency amounts to <b>EUR '.number_format($movingprice, 2).'</b>.';
    echo '<br \>';
    echo '<br \>';
}

if($forcedmoving=="2" && $cancelcomp=="2")
{
    echo 'Furthermore I was forced to move to another hotel. The compensation for this deficiency amounts to <b>EUR '.number_format($movingprice, 2).'</b>.';
    echo '<br \>';
    echo '<br \>';
}

if($flightdelay>=5 && $cancelcomp=="2")
{
    echo 'On top of that my flight was delayed by '.$flightdelay.' hours. According to court decisions I have the right to ask for a total of <b>EUR '.number_format($flightdelayprice, 2).'</b> in compensation.';
    echo '<br \>';
    echo '<br \>';
}

if($transportswitchdelay>=1 && $cancelcomp=="2")
{
    echo 'Moreover I had to switch mode of transport which resulted in a delay of '.$transportswitchdelay.' hours. Consequently I ask for compensation in the amount of <b>EUR '.number_format($transportswitchprice, 2).'</b>.';
    echo '<br \>';
    echo '<br \>';
}

if($missingtransport>0 && $cancelcomp=="2")
{
    echo 'Besides the agreed upon transfer from the airport to the accommodation was missing. As a consequence I had to pay <b>EUR '.number_format($missingtransportprice, 2).'</b> and ask for reimbursement in that amount.';
    echo '<br \>';
    echo '<br \>';
}

if($cancelcomp=="2")
{
    echo 'Due to the above-stated reasons I ask for reimbursement of a total of <b> EUR '.number_format($totalprice, 2).'</b> to my bank account within 14 days. In case I don´t get a confirmation I am going to be forced to initiate legal action.';
    echo '<br \>';
    echo '<br \>';
    echo '<br \>';
    echo 'Yours sincerely,';
    echo '<br \>';
    echo $name;
    echo '<br \>';
    echo '<br \>';
    echo '<br \>';
}   

/* WORD DOC ERSTELLEN?? ---- NICHT BENUTZT WEIL NICHT SICHER, OB JEDER WORD HAT! */

/* TEST VARIABLEN 
 
echo '<br \>';
echo '<br \>';
echo '<br \>';
echo 'UNTERKUNFT% = '.$unterkunftprozent;
echo '<br \>';
echo 'VERPFLEGUNG% = '.$verpflegungprozent;
echo '<br \>';
echo 'SONSTIGES% = '.$sonstigesprozent;
echo '<br \>';
echo 'TRANSPORT% = '.$transportprozent;
echo '<br \>';
echo 'PREIS = '.$price;
echo '<br \>';
echo 'FLIGHTDELAYPRICE = '.$flightdelayprice;
echo '<br \>';
echo 'MOVINGPRICE = '.$movingprice;
echo '<br \>';
echo 'EXCURSIONPRICE = '.$excursionprice;
echo '<br \>';
echo 'TRANSPORTSWITCHPRICE = '.$transportswitchprice;
echo '<br \>';
echo 'MISSINGTRANSPORTPRICE = '.$missingtransportprice;
echo '<br \>';
echo 'RÜCKTRITTMÖGLICH? = '.$ruecktrittmoeglich;
echo '<br \>';
echo 'RÜCKTRITT = '.$ruecktritt;
echo '<br \>';
echo 'RÜCKTRITT = '.$cancelcomp;

*/

?>
                </td>
            </tr>



</body>
</html>