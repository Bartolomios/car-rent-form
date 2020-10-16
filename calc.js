const segmentsArray = []

jQuery(document).ready(function($){

let selectedSegment = "B"
let overallCostPerDay = 0
let costPerDay = 0
let daysOfRent = 0
let deposit = 0
let segmentObject = null
let standardArray = []
let accesoriesArray = []
let accesoriesCost = 0
let kmValue = 0
let kmValuePerDay = 0
let acValue = 0
let acValuePerDay = 0
let totalPrice = 0   
let startDate = document.getElementById('firstDate')
let endDate = document.getElementById('secondDate')
let date = new Date().toISOString().split('T')[0]


$(".datetime").datepicker({ dateFormat: 'yy-mm-dd' })


const initDate = () =>{
      startDate.value = date
      endDate.value = date
}


const calculateDate = () => {
      
      $("#start-date").text(startDate.value)
      $("#end-date").text(endDate.value)

      const findTheDifferenceBetweenTwoDates = (startDate, endDate) => {
        startDate = new Date(startDate)
        endDate = new Date(endDate)

        let startDMYFormat = startDate.toISOString().split('T')[0]
        let endDMYFormat = endDate.toISOString().split('T')[0]

       
        if(startDMYFormat < date){
          alert('Wprowadź późniejszą date wydania')
          return 0
        }
        else if(startDMYFormat > endDMYFormat){
         
          return 0
        }        
        else{
        let timeDifference = Math.abs(endDate.getTime() - startDate.getTime())
        let millisecondsInADay = (1000 * 3600 * 24)
        let differenceOfDays = Math.ceil(timeDifference / millisecondsInADay)
        return differenceOfDays
        }

      }

       let result = findTheDifferenceBetweenTwoDates(startDate.value, endDate.value)
    
       if(result>31){
        alert('Maksymalnie jeden miesiąc')
        }
        else if(result===0){
        $("#days").text('Wybierz minimum 1 dobę')
        }
        else{
        $("#days").text(result + ' doby')
        daysOfRent = result
        }


}
   
    const setSegment = () => {
        segmentObject = segmentsArray.find(segment =>{
        return segment.segmentName === selectedSegment
      })   
    }

    const calculateCostPerDay = (days, depositCost, dayCost, acCostPD, kmCostPD) =>{
      $('#najm').html(dayCost + ' zł')
      costPerDay = dayCost
      overallCostPerDay = (days * dayCost)

      deposit = depositCost
      $('#kaucja').html(deposit + ' zł') 

      acValuePerDay = acCostPD
      kmValuePerDay = kmCostPD

      $('#acLimitText').html("Zniesienie limitu kilometrów (" + acCostPD + "zł / doba)")
      $('#kmLimitText').html("Zniesienie udziału własnego** (" + kmCostPD + "zł / doba)")


    }

     const calculateTotalCost = (segmentObject) =>
    {
      const { day_1, day_2_to_7, day_8_to_21, day_22_to_30} = segmentObject
    
      if(daysOfRent === 1){
           calculateCostPerDay(daysOfRent, day_1.deposit, day_1.dayCost, day_1.acCost, day_1.kmCost)            
           }
      else if(daysOfRent>1 && daysOfRent < 8)
           {
            calculateCostPerDay(daysOfRent, day_2_to_7.deposit, day_2_to_7.dayCost, day_2_to_7.acCost, day_2_to_7.kmCost)  
  
           }
      else if(daysOfRent>7 && daysOfRent < 21)
           {
            calculateCostPerDay(daysOfRent, day_8_to_21.deposit, day_8_to_21.dayCost, day_8_to_21.acCost, day_8_to_21.kmCost)  
          
           }
      else if(daysOfRent>20 && daysOfRent < 31)
           {
           calculateCostPerDay(daysOfRent, day_22_to_30.deposit, day_22_to_30.dayCost, day_22_to_30.acCost, day_22_to_30.kmCost)    
           }        
      
    }


    const segmentSwitch = () => {
     setSegment()
     calculateTotalCost(segmentObject)
    }

const setStandard = () =>{
  standardArray = []
  $('input[name="standard"]:checked').each(function(){
    standardArray = [...standardArray, $(this).val()]
    })

  $('#standard').html(()=>{
    
    return (
    '<ul class="custom-list">' +
          standardArray.map(item =>{
            return '<li>' + item + '</li>'
          }).join('')
    +
    '</ul>'
    )
  })

}
const handleAccessoriesCost = () =>{ 

  kmValue = 0
  acValue = 0
  accesoriesArray = []
  accesoriesCost = 0

  $('.addition:checked').each(function(){

      let attrValue = parseInt($(this).attr( 'data-cost' ))
      accesoriesArray = [ ...accesoriesArray, $(this).val()]
      accesoriesCost += attrValue
  
  })
  $('.kmLimit:checked').each(function(){      
        
      kmValue =  kmValuePerDay * daysOfRent   
      
  })
  $('.acLimit:checked').each(function(){      
   
      acValue = acValuePerDay * daysOfRent        
      
  })
  $('#limit-km').html(kmValue + ' zł') 
  $('#ac').html(acValue + ' zł')  
  $('#dodatki').html(()=>{    
    return (
    '<ul class="custom-list">' +
          accesoriesArray.map(item =>{
            return '<li>' + item + '</li>'
          }).join('')
    +
    '</ul>'
    )
  })
}

const setRentDetails = () =>{

  let startHour = $('#start-hour').val();
  let endHour = $('#end-hour').val();
  let startLocation = $('#start-location').val();
  let endLocation = $('#end-location').val();


  if(startHour > 0 && endHour > 0 ){
    $('#start-hour-final').html(startHour + ':00');
    $('#end-hour-final').html(endHour + ':00');
  }
  else
  {
    $('#start-hour-final').html('Wybierz godzinę');
    $('#end-hour-final').html('Wybierz godzinę');
  }
  $('#start-location-final').html(startLocation);
  $('#end-location-final').html(endLocation);
}


const selectSegment = () =>{
  let segment = $('input[name="segment"]:checked').val()
  selectedSegment = segment      
  $("#seg").text(selectedSegment)
}

const totalPriceSummary = () =>{

   
    totalPrice = overallCostPerDay  + accesoriesCost + acValue + kmValue

    if(totalPrice>0){
          $('#total-price-final').html(totalPrice + ' zł');
        }
    else{
          $('#total-price-final').html('0 zł');
        }
     
}



$("#calc-form").submit(function(event){
        event.preventDefault()

        let name = $("#firstName").val()
        let surname = $("#surname").val()
        let email = $("#e-mail").val()
        let phone = $("#contact-phone").val();  
        let startDate = jQuery('#start-date').text();
        let startHour = $('#start-hour-final').text()
        let startLocation = $('#start-location-final').text()
        let endDate = jQuery('#end-date').text();
        let endHour = $('#end-hour-final').text()
        let endLocation = $("#end-location-final").text()

        console.log(deposit)
        console.log(kmValue)

        let podsumowanie="name="+name+"&surname="+surname+"&email="+email+"&phone="+phone+"&startDate="+startDate+
        "&startHour="+startHour+"&startLocation="+startLocation+"&endDate="+endDate+"&endHour="+endHour+"&endLocation="+endLocation+
        "&segment="+selectedSegment+"&standard="+standardArray+"&deposit="+deposit+"&ac="+acValue+"&kmLimit="+kmValue+"&costPerDay="+costPerDay+
        "&accesories="+accesoriesArray+"&days="+daysOfRent+"&totalPrice="+totalPrice

        const xhr = new XMLHttpRequest()
        
        xhr.open('POST', '../wp-content/themes/net-rent-theme/mail.php', true)
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        xhr.send(podsumowanie);


        $(this).unbind('submit')
            $(this).submit(function(){
                return false
            })
        $(".submit").val("Wysłano");
        $(".success").html("Dziękujemy, wiadomość została wysłana.")

        
 })


    initDate()
    calculateDate()   


    $('.datetime').change(() =>{
      calculateDate()       
      segmentSwitch()
      handleAccessoriesCost()
      totalPriceSummary()
    })
    $('.rentDetails').change(()=>{
      setRentDetails()
    })

    $('input[name="segment"]').change(() =>{ 
      selectSegment()
      segmentSwitch()
      totalPriceSummary()
    })
    $('.standardInput').change(() => {
      setStandard()
    })
     $('.additionCheckbox').change(() => {
       handleAccessoriesCost()
       totalPriceSummary()
    })


})



