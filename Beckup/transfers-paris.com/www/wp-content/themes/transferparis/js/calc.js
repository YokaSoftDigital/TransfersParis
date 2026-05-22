//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*---------------------------------CALCULATE------------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////
/* -----------------select-address---------*/
/////////////////////////////////////////////
var selectAddr = document.getElementById("window1-hidden-select"),
	selectInput = document.getElementById("form-from");

selectInput.addEventListener("click", function(){
	selectAddr.style.display = "block",
	selectRememberCheck = false;

	setTimeout(function(){selectAddr.style.opacity = "1";},100);
});	

var selectLi = selectAddr.getElementsByTagName("li"),
	selectRemember = 0,
	selectTrigZero = 1;


/////////////////////////////////////////////
/* -----------------select-----------------*/
/////////////////////////////////////////////
	addStyle("modal-select-bg2");
	var bg2 = document.getElementById("modal-select-bg2"),
		modalSelect = document.getElementById("modal-select"),
		innerInputCheck = false;

	/* open modal select */
	document.getElementById("choose-car-class").addEventListener("click", function(){
		disableScrolling();
		document.getElementById("window1-hidden-select").style.opacity = "0";
		setTimeout(function(){document.getElementById("window1-hidden-select").style.display = "none";},500);
		modalSelect.style.display = "flex";
		setTimeout(function(){bg2.style.transform = "scale(1)";}, 200);
		setTimeout(function(){modalSelect.classList.add("active");},500);
	});

	/* close modal */
	function closeModal(id, funcbg2){
		enableScrolling();
		document.getElementById(id).classList.remove("active");
		setTimeout(function(){document.getElementById(funcbg2).style.transform = "scale(0)";}, 200);
		setTimeout(function(){document.getElementById(id).style.display = "none";},1500);
	}

	/* close modal select when click on close Button */
	document.getElementById("close-modal-select").addEventListener("click", function(){
		closeModal("modal-select", "modal-select-bg2")
	});

	/* close modal select when click on list */
	var list = document.querySelectorAll('#modal-select-list li');

	Array.prototype.slice.call(list).forEach(function(listItem){
	  listItem.addEventListener('click', function(e){
	  	var passCarCommon = this.dataset.carLength;

	    // car class
	    var passCarValue1 = document.getElementById("car-class-val-1").innerHTML;
	    var passCarValue2 = document.getElementById("car-class-val-2").innerHTML;
	    var passCarValue3 = document.getElementById("car-class-val-3").innerHTML;
	    var passCarValue4 = document.getElementById("car-class-val-4").innerHTML;
	    
	    if (parseInt(passCarCommon) == 1) {
	    	document.querySelector(".simplebar-content").innerHTML = passCarValue1;
	    	console.log("1");
	    }else if(parseInt(passCarCommon) == 2){
	    	document.querySelector(".simplebar-content").innerHTML = passCarValue2;
	    	console.log("2");
	    }else if(parseInt(passCarCommon) == 3){
	    	document.querySelector(".simplebar-content").innerHTML = passCarValue3;
	    	console.log("3");
	    }else if(parseInt(passCarCommon) == 4){
	    	document.querySelector(".simplebar-content").innerHTML = passCarValue4;
	    	console.log("4");
	    }
	    
	    /* select */
	    for (var s of selectLi) {
			s.addEventListener("click", function(){
				if (innerInputCheck == true) {
					var addressPass = document.getElementById("form-passenger").dataset.address;
			    	document.getElementById("form-passenger").value = "";
			    	document.getElementById("form-baggage").value = "";
			    	document.getElementById("window1-data-val").dataset.currentPrice = 0;

			    	//document.getElementById("form-passenger").classList.add("pass-off");
			    	//document.getElementById("form-baggage").classList.add("pass-off");
			    	var commonPriceVal = parseInt(document.getElementById("window1-data-val"));
			    	var commonPrice = document.getElementById("window1-data-val");
			    	commonPriceVal -= MinPassValue; minIf = false;
					commonPriceVal = commonPriceVal - (backValue * addressPass);
					commonPriceVal = commonPriceVal - passValue; minInner = false;

					totalpassVal = 0;
		  			MinPassValue = 0;
		  			backValue = 0;
		  			passValue = 0;

		  			commonPriceVal -= passBoolBagCheckVal;
		  			passBoolBagCheckVal = 0;
				  
				  	passBool = false;
				  	passCheck = 0;
			    }
			    
				if (selectRememberCheck == true) {selectRememberCheck = false; commonPriceSelect -= selectRemember;}
				var commonPriceSelect = document.getElementById("window1-data-val");
				selectInput.value = this.innerHTML;
				selectAddr.style.opacity = "0";
				setTimeout(function(){selectAddr.style.display = "none";},500);
				var price = this.dataset.price;
				document.getElementById("form-passenger").classList.remove("pass-off");
				document.getElementById("to-from").classList.remove("pass-off");
				document.getElementById("form-from").classList.remove("input-error");
				document.getElementById("form-passenger").dataset.address = price;
				document.getElementById("window1-input-order").dataset.adressFrom = this.innerHTML;
				selectRemember = price;
				commonPriceSelect.dataset.currentPrice = price;
				selectRememberCheck = true;
				document.getElementById("window1-trigger-item-action").classList.remove("pass-off");

				if (price == 0) {
					console.log("true");
					selectTrigZero = 0;
					trig(selectTrigZero);
				}else{
					selectTrigZero = 1;
					trig(selectTrigZero);
					console.log("false");
				}

			});
		}
	    /* end select */

	    document.getElementById("choose-car-class").value = this.innerText;
	    document.getElementById("choose-car-class").classList.remove("input-error");
	    document.getElementById("form-passenger").classList.add("pass-off");
	    document.getElementById("form-baggage").classList.add("pass-off");
	    var passCount = this.dataset.passangerCount;
	    document.getElementById("form-passenger").dataset.max = passCount;
	    document.getElementById("form-baggage").dataset.max = passCount;
	    
	    document.getElementById("car-max-sit").innerHTML = passCount;
	    document.getElementById("window1-input-order").dataset.carclass = this.innerText;

	    closeModal("modal-select", "modal-select-bg2");
	    setTimeout(function(){document.getElementById("car-message").classList.add("active");},1000);
	    if (innerInputCheck == true) {
	    	var addressPass = document.getElementById("form-passenger").dataset.address;
	    	document.getElementById("form-passenger").value = "";
	    	document.getElementById("form-baggage").value = "";
	    	document.getElementById("window1-data-val").dataset.currentPrice = 0;

	    	//document.getElementById("form-passenger").classList.add("pass-off");
	    	//document.getElementById("form-baggage").classList.add("pass-off");
	    	var commonPriceVal = parseInt(document.getElementById("window1-data-val"));
	    	var commonPrice = document.getElementById("window1-data-val");
	    	commonPriceVal -= MinPassValue; minIf = false;
			commonPriceVal = commonPriceVal - (backValue * addressPass);
			commonPriceVal = commonPriceVal - passValue; minInner = false;

			totalpassVal = 0;
  			MinPassValue = 0;
  			backValue = 0;
  			passValue = 0;
  			if (selectRememberCheck == true) {document.getElementById("form-from").value = "";selectRememberCheck = false; commonPriceVal -= selectRemember;}

  			commonPriceVal -= passBoolBagCheckVal;
  			passBoolBagCheckVal = 0;
		  
		  	passBool = false;
		  	passCheck = 0;
	    }

	    document.getElementById("calendar-input").classList.remove("pass-off");
	    document.getElementById("form-from").classList.remove("pass-off");
	    innerInputCheck = true;
	    document.getElementById("window1-trigger-item-action").classList.add("pass-off");
	    trig(selectTrigZero);
	  });
	});

/////////////////////////////////////////////
/* -------------end-select-----------------*/
/////////////////////////////////////////////


var backValue = 0,
    passValue = 0,
    MinPassValue = 0,
    backPosition = false,
    minIf = false,
    minInner = false,
    checkValFirst = false,
    totalpassVal = 0,
    totalPassBool = false;

var passCheck = 0,
    passBool = false,
    passBoolBagCheckVal = 0;

function changePass(){
  var commonPrice = document.getElementById("window1-data-val"),
      commonPriceVal = parseInt(commonPrice.dataset.currentPrice);
  var addressPass = document.getElementById("form-passenger").dataset.address;
  var currentValEmp = this.value;
  var currentVal;
  var passValueClear = 0;
  var passValueClearData = 0;

  var totlaPass = 0;

  if (currentValEmp == "" || currentValEmp == 0) {currentVal = 0;}else{currentVal = currentValEmp;}
  if (currentValEmp > 40) {currentVal = 40;this.value = 40;}

  var breakValue = parseInt(this.dataset.max);
  if (Number.isInteger(currentVal / breakValue) && currentVal != "") {currentVal = currentVal - 1;checkValFirst = true;}
  var carLength = Math.floor(currentVal / breakValue);

  if (checkValFirst == true) {currentVal += 1;checkValFirst = false;}
  
  if (carLength > 0) {

    if (minIf == true) {commonPriceVal -= MinPassValue; minIf = false;}
    if (backPosition == true) {commonPriceVal = commonPriceVal - (backValue * addressPass);}
    if (minInner == true) {commonPriceVal = commonPriceVal - passValue;minInner = false;}
    if (Number.isInteger(currentVal / breakValue) && currentVal != "") {currentVal = currentVal - 1;checkValFirst = true;}
    if (!Number.isInteger(currentVal / breakValue)) {
      if (checkValFirst == true) {currentVal += 1;checkValFirst = false;}
      var currentFloat = currentVal - (breakValue * (carLength));
      if (currentFloat > 4) {

        passValueClear = (currentFloat - 4) * 10;
        commonPriceVal += passValueClear;
        minInner = true;

      }
    }
    if (checkValFirst == true) {currentVal += 1;checkValFirst = false;}
    
    commonPriceVal += carLength * addressPass;

    addedPassBoll = true;
    backPosition = true;
    if (totalPassBool == true) {commonPriceVal -= totalpassVal;totalPassBool = false;}
    if (breakValue > 4) {
      
      totlaPass = ((carLength * breakValue) - (carLength * 4)) * 10;
      commonPriceVal += totlaPass;
      totalPassBool = true;
    }

  }else{
    if (totalPassBool == true) {commonPriceVal -= totalpassVal; totalPassBool = false;}
    commonPriceVal = commonPriceVal - (backValue * addressPass);
    if (minInner == true) {commonPriceVal = commonPriceVal - passValue;minInner = false;}
    
    if (currentVal > 4) {

      commonPriceVal -= MinPassValue;
      passValueClearData = ((currentVal - 4) * 10);
      commonPriceVal += passValueClearData;
      minIf = true;

    }else{

      if (minIf == true) {commonPriceVal -= MinPassValue; minIf = false;}

    }
  }

  totalpassVal = totlaPass;
  MinPassValue = passValueClearData;
  backValue = parseInt(carLength);
  passValue = passValueClear;


  commonPrice.dataset.currentPrice = commonPriceVal;

  commonPriceVal -= passBoolBagCheckVal;
  commonPrice.dataset.currentPrice = commonPriceVal;
  
  passBool = false;
  passCheck = 0;
  document.getElementById("form-baggage").dataset.pass = currentVal;
  changeBag();
  document.getElementById("form-passenger").classList.remove("input-error");
  
  document.getElementById("car-max-sit").innerHTML = breakValue;
  document.getElementById("car-max-sit-person").innerHTML = currentVal;

  // car length
  document.getElementById("window1-data-cars").innerHTML = carLength + 1;
  document.getElementById("form-baggage").classList.remove("pass-off");

  trig(selectTrigZero);

}

function changeBag(){
  var commonPriceBag = document.getElementById("window1-data-val"),
      commonPriceValBag = parseInt(commonPriceBag.dataset.currentPrice);
  var valBag = parseInt(document.getElementById("form-baggage").value);
  var passBag = parseInt(document.getElementById("form-baggage").dataset.pass);
  var passCount = 0;

  document.getElementById("form-baggage").classList.remove("input-error");

  if(valBag > passBag){
    if (passBag < 4) {
      if(passBool == true){commonPriceValBag -= passCheck;passBool = false;}
      passCount = (valBag * 10) - 40;
      commonPriceValBag += passCount;
      passBool = true;
    }else{
      if(passBool == true){commonPriceValBag -= passCheck;passBool = false;}
      passCount = (valBag - passBag) * 10;
      commonPriceValBag += passCount;
      passBool = true;
    }
  }else{
    if(passBool == true){commonPriceValBag -= passCheck;passBool = false;}
  }

  passCheck = passCount;
  passBoolBagCheckVal = passCount;
  commonPriceBag.dataset.currentPrice = commonPriceValBag;

  trig(selectTrigZero);

}

document.getElementById("form-baggage").addEventListener("input", changeBag);
document.getElementById("form-passenger").addEventListener("input", changePass);

//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*---------------------------------TRIGER---------------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
var trigerMind = 0,
	trigerBool = false;

function trig (zero){
	var trigerPrice = document.getElementById("window1-data-val"),
		trigerPriceVal = trigerPrice.dataset.currentPrice,
		trigerPosition = document.getElementById("window1-back-trip"),
		trigerHidden = document.getElementById("window1-hidden-data-val"),
		trigerCurrent = 0;

	if (zero == 0) {
		trigerPrice.innerHTML = document.getElementById("input-hidden-select-error").innerHTML;
		document.getElementById("modal-hidden-8").value = "";
		document.getElementById("modal-hidden-9").value = "";
	}else{
		if (trigerPosition.classList.contains("active")) {
			trigerPrice.innerHTML -= trigerMind;
			trigerHidden.innerHTML -= trigerMind;
			trigerCurrent = trigerPriceVal *= 2;
			trigerPrice.innerHTML = trigerCurrent;
			trigerHidden.innerHTML = trigerCurrent;
		}	else{
			if (trigerBool == true) {
				trigerPrice.innerHTML -= trigerMind;
				trigerHidden.innerHTML -= trigerMind;
			}
			trigerPrice.innerHTML = trigerPriceVal;
			trigerHidden.innerHTML = trigerPriceVal;
		}
		trigerMind = trigerCurrent;
		trigerBool = true;
	}
}

var calculateTrigger = 0;
document.getElementById("window1-trigger-item-action").addEventListener("click", function(){
	if (calculateTrigger == 0) {
		this.classList.add("active");
		document.getElementById("window1-back-trip").classList.add("active");
		calculateTrigger = 1;
	}else{
		this.classList.remove("active");
		calculateTrigger = 0;
		document.getElementById("window1-back-trip").classList.remove("active");
	}
	trig(selectTrigZero);
});