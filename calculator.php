<?php


/* Template Name: Kalkulator*/


get_header('second'); ?>


<div class="container calculator-container">



		
	<h1 class="entry-title-calc">Kalkulator wynajmu auta</h1>

    <div class="calculator">

	<div class="rent-time">
	<h4>Wybierz datę i miejsce wynajmu:*</h4>

	<div class="custom-container-page">
	<div class="start-rent two-col">

	<label> Data wydania: <input id="firstDate"  readonly="readonly" data-provide="datepicker" class="datetime" value=""></label>
	<label> Godzina wydania: 
	<select id="start-hour" class="rentDetails">
		<option value="" disabled selected>Wybierz godzinę</option>
	 	<option value="7"> 7:00</option>
	   	<option value="8"> 8:00</option>
	    <option value="9"> 9:00</option>
	    <option value="10"> 10:00</option>
	    <option value="11"> 11:00</option>
	    <option value="12"> 12:00</option>
	    <option value="13"> 13:00</option>
	    <option value="14"> 14:00</option>
	    <option value="15"> 15:00</option>
	    <option value="16"> 16:00</option>
	    <option value="17"> 17:00</option> 
	</select>
	</label>
	<label> Miejsce wydania:
	<select class="rentDetails" id="start-location">
		<option value="" disabled selected>Wybierz miejsce</option>
		<option value="WARSZAWA / BIURO"> WARSZAWA / BIURO</option>
		<option value="WARSZAWA / LOTNISKO im. Fryderyka Chopina">WARSZAWA / LOTNISKO im. Fryderyka Chopina</option>
	 	<option value="WARSZAWA / LOTNISKO Modlin">WARSZAWA / LOTNISKO Modlin</option>     
	</select>
	
	</label>
	</div>

	<div class="end-rent two-col">
	
	<label> Data zwrotu: 
	<input id="secondDate" class="datetime"  data-provide="datepicker" readonly="readonly" value="">
	</label>
	<label> Godzina zwrotu: 
	<select id="end-hour" class="rentDetails">
		<option value="" disabled selected>Wybierz godzinę</option>
		<option value="7"> 7:00</option>
	    <option value="8"> 8:00</option>
	    <option value="9"> 9:00</option>
	    <option value="10"> 10:00</option>
	    <option value="11"> 11:00</option>
	    <option value="12"> 12:00</option>
	    <option value="13"> 13:00</option>
	    <option value="14"> 14:00</option>
	    <option value="15"> 15:00</option>
	    <option value="16"> 16:00</option>
	    <option value="17"> 17:00</option> 
	</select>
	</label>
	<label> Miejsce zwrotu:
	<select class="rentDetails" id="end-location">
		<option value="" disabled selected>Wybierz miejsce</option>
	    <option value="WARSZAWA / BIURO"> WARSZAWA / BIURO</option>
	    <option value="WARSZAWA / LOTNISKO im. Fryderyka Chopina">WARSZAWA / LOTNISKO im. Fryderyka Chopina</option>
 	    <option value="WARSZAWA / LOTNISKO Modlin">WARSZAWA / LOTNISKO Modlin</option>     
	</select>
	</label>

	</div>
	</div>
	</div>


	<h4>Wybierz segment:</h4>
	<div class="segment-class"> 
	<label for="segment-1">
		<img src="/www/wp-content/uploads/2020/10/net-rent_www_segmentA.png" /><input class="input" type="radio" id="segment-1" name="segment" value="A"><span class="checkmark"></span>
	</label>
	<label for="segment-2">
		<img src="/www/wp-content/uploads/2019/05/bez-net-rent_B.png" /><input class="input" type="radio" id="segment-2" name="segment" value="B"><span class="checkmark"></span>
	</label>
	<label for="segment-3">
		<img src="/www/wp-content/uploads/2019/05/bez-net-rent_C.png" /><input class="input" type="radio" id="segment-3" name="segment" value="C"><span class="checkmark"></span>
	</label>
	<label for="segment-4">
		<img src="/www/wp-content/uploads/2019/05/net-rent_d-1.png" /><input class="input" type="radio" id="segment-4" name="segment" value="D"><span class="checkmark"></span>
	</label>
	<label for="segment-5">
		<img src="/www/wp-content/uploads/2020/10/net-rent_www_segmentSUV.png" /><input class="input" type="radio" id="segment-5" name="segment" value="SUV"><span class="checkmark"></span>
	</label>
	<label for="segment-6">
		<img src="/www/wp-content/uploads/2019/10/net-rent_audi_Q5_www_suv_premium.png" /><input class="input" type="radio" id="segment-6" name="segment" value="SUV Premium"><span class="checkmark"></span>
	</label>
	<label for="segment-7">
		<img src="/www/wp-content/uploads/2020/09/Segment-E.png" /><input class="input" type="radio" id="segment-7" name="segment" value="E"><span class="checkmark"></span>
	</label>
	</div>

	<div class="standard-section"><h4>Wybierz standard:</h4>
		<div class="custom-container-page">
			<div class="two-col">
				<label>Nadwozie kombi<input type="checkbox" name="standard" value="Nadwozie kombi" class="standardInput"><span class="checkmark"></span></label>
			</div>
			<div class="two-col">
				<label>Automatyczna skrzynia biegów<input type="checkbox" class="standardInput" value="Automatyczna skrzynia biegów"  name="standard" ><span class="checkmark"></span></label>
			</div>
		</div>
	</div>


	<div class="services-section">
		<h4>Wybierz dodatki:</h4>
		<div class="custom-container-page">
		<div class="two-col">
		<label>
			<span id="acLimitText"> Zniesienie limitu kilometrów (40zł / doba)</span><input type="checkbox" name="limit" class="additionCheckbox kmLimit" value="20"><span class="checkmark"></span>
		</label>
		<label>
			<span id="kmLimitText">Zniesienie udziału własnego** (40zł / doba)</span> <input type="checkbox" name="ac" class="additionCheckbox acLimit" value="20"><span class="checkmark"> </span>
		</label>
		<label>Zwrot brudnego pojazdu (25zł)
			<input type="checkbox" class="additionCheckbox addition" data-cost="25" value="Zwrot brudnego pojazdu (25zł)"><span class="checkmark"> </span>
		</label>
		<label>Wyjazd poza granice Rzeczypospolitej Polskiej (0zł)
		    <input type="checkbox" data-cost="0" class="additionCheckbox addition" value="Wyjazd poza granice Rzeczypospolitej Polskiej (0zł) "><span class="checkmark"> </span>
		</label>
		</div>

		<div class="two-col">
		<label>Fotelik samochodowy: 0-18 kg (20zł)
			 <input type="checkbox" data-cost="20" class="additionCheckbox addition" value="Fotelik samochodowy: 0-18 kg (20zł) "><span class="checkmark"> </span>
		</label>
		<label>Fotelik samochodowy: 9-36 kg  (20zł)
			 <input type="checkbox" data-cost="20" class="additionCheckbox addition" value="Fotelik samochodowy: 9-36 kg (20zł)"><span class="checkmark"> </span>
		</label>

		<label>Łańcuchy zimowe (50zł)
			 <input type="checkbox" data-cost="50" class="additionCheckbox addition" value="Łańcuchy zimowe (50zł)"><span class="checkmark"> </span>
		</label>
		<label>Zapas płynu do spryskiwaczy (30zł)
			 <input type="checkbox" data-cost="30" class="additionCheckbox addition" value="Zapas płynu do spryskiwaczy (30zł)"><span class="checkmark"> </span>
		</label>

		</div>
		</div>
	</div>
	

	<div class="aditional-info">
		<p>* Maksymalnie miesiac</p>
		<p>** Opłata za zniesienie udziału własnego</p>
	</div>

	</div>

		
	<h2 class="entry-title-calc">Podsumowanie</h2>
	<div class="custom-container-page">
	<div class="two-col">
		<div class="rent-info"> Data wydania: <span id="start-date"></span></div>
		<div class="rent-info"> Godzina wydania: <span id="start-hour-final"></span></div>
		<div class="rent-info"> Miejsce wydania: <span id="start-location-final"></span></div>
	</div>
	<div class="two-col">
		<div class="rent-info"> Data zwrotu: <span id="end-date"></span></div>
		<div class="rent-info"> Godzina zwrotu <span id="end-hour-final"></span></div>
		<div class="rent-info"> Miejsce zwrotu: <span id="end-location-final"></span></div>
	</div>
	</div>

	<div class="custom-container-page">
		<div class="two-col">
			<div class="rent-info"> Segment: <span id="seg"></span></div>
			<div class="rent-info"> Standard: <span id="standard">Nie wybrano</span></div>
		</div>
		<div class="two-col">			
		</div>
	</div>

	<div class="custom-container-page">
		<div class="two-col">
			<div class="rent-info">Kaucja: <span id="kaucja"></span></div>
			<div class="rent-info">Udział własny za szkody AC: <span id="ac"></span></div>
			<div class="rent-info">Limit km: <span id="limit-km"></span></div>
			<div class="rent-info">Czynsz najmu / 1 doba: <span id="najm"></span></div>	
			<div class="rent-info">Dodatki: <span id="dodatki"></span></div>
		</div>
		<div class="two-col">
			<div class="rent-info">Łączna ilość dób: <span id="days"></span></div>
			<div class="rent-info">Całkowity czynsz najmu: <span id="total-price-final"></span></div>

		</div>
	</div>




</div>



	<div class="bottom-section-form">
			<h2>Dane użytkownika</h2>
	<div id="wpcf7-f530-o1" lang="pl-PL" dir="ltr">
	<form  class="wpcf7-form" id="calc-form" >

	<div class="custom-container-page">
	<div class="two-col">
	<label>Imię
	    <input type="text" id="firstName" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" required/>
	</label>
	
	<label> Adres email
	  <input type="email" value="" id="e-mail" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" required/>
	</label>
	</div>
	
	<div class="two-col">
	<label> Nazwisko
	    <input type="text"  id="surname" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required /></span>
	</label><br />
	<label>Telefon kontaktowy
	<input type="tel"  id="contact-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" required/>
	</label>
	</div>


	<span class="wpcf7-list-item"><label><input type="checkbox" name="acceptance-1" value="1" aria-invalid="false" required/><span class="wpcf7-list-item-label">Wyrażam zgodę na przetwarzanie moich danych osobowych przez Net-Rent Sp.z  o.o. , w zakresie, w jakim jest do niezbędne dla przygotowania do zawarcia umowy najmu, w tym rezerwacji samochodu oraz dla realizacji umowy najmu samochodu. Dane zostały podane przeze mnie dobrowolnie. Jestem poinformowany o prawie dostępu do moich danych i możliwości ich poprawiania.</span></label></span><br />
	<span class="wpcf7-list-item"><label><input type="checkbox" name="acceptance-2" value="1" aria-invalid="false" required/><span class="wpcf7-list-item-label">Wyrażam zgodę na udostępnianie moich danych osobowych podmiotom trzecim współpracującym z Bad Cars w zakresie, w jakim jest to niezbędne dla celów przygotowania do zawarcia umowy najmu samochodu, w tym rezerwacji samochodu, oraz dla realizacji umowy najmu.</span></label></span><br />
	<span class="wpcf7-list-item"><label><input type="checkbox" name="acceptance-3" value="1" aria-invalid="false" required/><span class="wpcf7-list-item-label">Akceptuję regulamin wypożyczalni Net-Rent Sp. z o.o.</span></label></span>


	<div class="submit-button" >
	<input type="submit" value="Wyślij zapytanie" />
	</div>
	</div>
	</form>
	<div class="success"></div>


	</div>
<?php get_footer('second'); ?>