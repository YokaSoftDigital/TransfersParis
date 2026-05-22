//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*---------------------------------Def Function---------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
	const w = window.innerWidth,
		h = window.innerHeight,
		d = Math.ceil(Math.sqrt(Math.pow(w, 2) + Math.pow(h, 2)));

/* disable or enable scroll */
function disableScrolling(){
    document.querySelector("body").style.overflowY = "hidden";
}

function enableScrolling(){
    document.querySelector("body").style.overflowY = "auto";
}

disableScrolling();

function addStyle(ids){
	var target = document.getElementById(ids);
	target.style.width = d * 2 + 350 + "px";
	target.style.height = d * 2 + 350 + "px";
	target.style.left = - d - 200 + "px";
	target.style.bottom = - d - 200 + "px";
}
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*---------------------------------LOADER---------------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
var loaderContainer = document.getElementById("loader"),
	loaderInner = document.getElementById("loader-inner");
	addStyle("loader-bg");
var loaderBg = document.getElementById("loader-bg");

	var loaderArray = loaderInner.textContent.replace(/^\s+|\s+$/g,""). split("");
	loaderInner.innerHTML = "";

	var loaderDaly = 0.1;
	for (var i = 0; i <= loaderArray.length -1; i++) {
		loaderInner.insertAdjacentHTML('beforeend', "<span style='transition-delay: "+ loaderDaly +"s'>" + loaderArray[i] + "</span>");
		loaderDaly += 0.13;
	}

	setTimeout(function(){
		loaderContainer.classList.add("active");
		loaderBg.style.transform = "scale(1)";
	},300);

	setTimeout(function(){
		document.getElementById("commoon-opacity-wrapper").style.opacity = 1;
		loaderContainer.classList.remove("active");
	},2400);

	setTimeout(function(){
		loaderBg.style.transform = "scale(0)";
		document.getElementById("commoon-opacity-wrapper").classList.add("active");
	},3700);

	setTimeout(function(){
		loaderContainer.style.display = "none";
		enableScrolling();
	},4300);




//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*---------------------------------Modal Order----------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
var modalFormBg1 = document.getElementById("modal-form-bg1"),
	modalForm = document.getElementById("modal-form"),
	modalTriger = document.getElementById("window1-trigger-item-action");

var eventBody = document.getElementById("window1-input-order");
document.getElementById("window1-input-order").addEventListener("click",function(){

	if (this.dataset.adressTo == "empty" || this.dataset.adressFrom == "empty" || this.dataset.time == "empty" || this.dataset.carclass == "empty" || this.dataset.passenger == "empty" || this.dataset.baggage == "empty") {
		if (this.dataset.adressTo == "empty") {document.getElementById("to-from").classList.add("input-error");}else{document.getElementById("to-from").classList.remove("input-error");} 
		if (this.dataset.adressFrom == "empty") {document.getElementById("form-from").classList.add("input-error");}else{document.getElementById("form-from").classList.remove("input-error");}
		if (this.dataset.time == "empty") {document.getElementById("calendar-input").classList.add("input-error");}else{document.getElementById("calendar-input").classList.remove("input-error");}
		if (this.dataset.carclass == "empty") {document.getElementById("choose-car-class").classList.add("input-error");}else{document.getElementById("choose-car-class").classList.remove("input-error");}
		if (this.dataset.passenger == "empty") {document.getElementById("form-passenger").classList.add("input-error");}else{document.getElementById("form-passenger").classList.remove("input-error");}
		if (this.dataset.baggage == "empty") {document.getElementById("form-baggage").classList.add("input-error");}else{document.getElementById("form-baggage").classList.remove("input-error");}
	}else{

		if (document.getElementById("window1-back-trip").classList.contains("active")) {
			if (modalTriger.dataset.trigerTime == "empty" || modalTriger.dataset.trigerAddress == "empty") {
				if (modalTriger.dataset.trigerTime == "empty") {
					document.getElementById("calendar-input-1").classList.add("input-error");
				}
				if (modalTriger.dataset.trigerAddress == "empty") {
					document.getElementById("route-to").classList.add("input-error");
				}
				console.log("error");
			}else{
				console.log("success1");
				document.getElementById("form-from").classList.remove("input-error");
				document.getElementById("to-from").classList.remove("input-error");
				document.getElementById("calendar-input").classList.remove("input-error");
				document.getElementById("choose-car-class").classList.remove("input-error");
				document.getElementById("form-passenger").classList.remove("input-error");
				document.getElementById("form-baggage").classList.remove("input-error");
				document.getElementById("calendar-input-1").classList.remove("input-error");
				document.getElementById("route-to").classList.remove("input-error");

				document.getElementById("modal-hidden-1").value = this.dataset.adressTo;
				document.getElementById("modal-hidden-2").value = this.dataset.adressFrom;
				document.getElementById("modal-hidden-3").value = this.dataset.time;
				document.getElementById("modal-hidden-4").value = this.dataset.carclass;
				document.getElementById("modal-hidden-5").value = this.dataset.passenger;
				document.getElementById("modal-hidden-6").value = this.dataset.baggage;
				document.getElementById("modal-hidden-7").value = document.getElementById("window1-data-val").innerHTML;
				

				disableScrolling();
				modalForm.style.display = "flex";
				setTimeout(function(){modalForm.style.opacity = "1";}, 100);
				setTimeout(function(){
					modalForm.classList.add("active");
					document.getElementById('modal-inner-content-bg').style.transform = "scale(1)";
				},400);
				setTimeout(function(){document.getElementById('modal-inner-box').classList.add("active");},800);
			}
		}else{
			console.log("success2");
			document.getElementById("form-from").classList.remove("input-error");
			document.getElementById("to-from").classList.remove("input-error");
			document.getElementById("calendar-input").classList.remove("input-error");
			document.getElementById("choose-car-class").classList.remove("input-error");
			document.getElementById("form-passenger").classList.remove("input-error");
			document.getElementById("form-baggage").classList.remove("input-error");
			document.getElementById("calendar-input-1").classList.remove("input-error");
			document.getElementById("route-to").classList.remove("input-error");

			document.getElementById("modal-hidden-1").value = this.dataset.adressTo;
			document.getElementById("modal-hidden-2").value = this.dataset.adressFrom;
			document.getElementById("modal-hidden-3").value = this.dataset.time;
			document.getElementById("modal-hidden-4").value = this.dataset.carclass;
			document.getElementById("modal-hidden-5").value = this.dataset.passenger;
			document.getElementById("modal-hidden-6").value = this.dataset.baggage;
			document.getElementById("modal-hidden-7").value = document.getElementById("window1-data-val").innerHTML;
			document.getElementById("modal-hidden-8").value = "";
			document.getElementById("modal-hidden-9").value = "";

			disableScrolling();
			modalForm.style.display = "flex";
			setTimeout(function(){modalForm.style.opacity = "1";}, 100);
			setTimeout(function(){
				modalForm.classList.add("active");
				document.getElementById('modal-inner-content-bg').style.transform = "scale(1)";
			},400);
			setTimeout(function(){document.getElementById('modal-inner-box').classList.add("active");},800);
		}
	}

});

document.getElementById("modal-form-close").addEventListener("click",function(){
	enableScrolling();
	modalForm.classList.remove("active");
	document.getElementById('modal-inner-box').classList.remove("active");
	setTimeout(function(){modalForm.classList.remove("active");},400);
	document.getElementById('modal-inner-content-bg').style.transform = "scale(0)";
	setTimeout(function(){modalForm.style.opacity = "0";},900);
	setTimeout(function(){modalForm.style.display = "none";},1400);
});

var inputOrderName = document.getElementById("modal-form-name");
var inputOrderPhone = document.getElementById("modal-form-phone");


inputOrderName.oninput = function() {
	document.getElementById('window1-hidden-name').value = inputOrderName.value;
};

inputOrderPhone.oninput = function() {
	document.getElementById('window1-hidden-phone').value = inputOrderPhone.value;
};


//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*---------------------------------Modal Menu-----------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////

addStyle("modal-menu-bg");

var modalMenuBg = document.getElementById("modal-menu-bg");
var modalMenu = document.getElementById("modal-menu");
document.getElementById("open-mobile-menu").addEventListener("click", function(){
	disableScrolling();
	modalMenu.style.display = "flex";
	setTimeout(function(){modalMenuBg.style.transform = "scale(1)";}, 200);
	setTimeout(function(){modalMenu.classList.add("active");},500);
});

document.getElementById("close-modal-menu").addEventListener("click", function(){
	enableScrolling();
	modalMenu.classList.remove("active");
	setTimeout(function(){modalMenuBg.style.transform = "scale(0)";}, 200);
	setTimeout(function(){modalMenu.style.display = "none";},1100);
});

var modalNavWrapper = document.getElementById("modal-menu");
var modalNavLink = modalNavWrapper.getElementsByTagName("a");
for (var modalNavKey of modalNavLink) {
	modalNavKey.addEventListener("click", function(){
		enableScrolling();
		modalMenu.classList.remove("active");
		setTimeout(function(){modalMenuBg.style.transform = "scale(0)";}, 200);
		setTimeout(function(){modalMenu.style.display = "none";},1100);
	});
}

//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*-------------------------------Address-To-------------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
addStyle("address-to-bg");

document.getElementById("route-to").addEventListener("click", function(){
	disableScrolling();
	document.getElementById("address-to").style.display = "flex";
	setTimeout(function(){
		document.getElementById("address-to-bg").style.transform = "scale(1)";
	},100);
	setTimeout(function(){
		document.getElementById("address-to").classList.add("active");
	},500);
});

document.getElementById("close-address-to").addEventListener("click", function(){
	enableScrolling();
	document.getElementById("address-to").classList.remove("active");
	setTimeout(function(){
		document.getElementById("address-to-bg").style.transform = "scale(0)";
	},100);
	setTimeout(function(){
		document.getElementById("address-to").style.display = "none";
	},1100);
});



document.getElementById("address-to-button").addEventListener("click", function(){
	var input1 = document.getElementById("address-to-from"),
		input2 = document.getElementById("address-to-to");
	console.log(input1.value.length);
	if (input1.value.length != "0" && input2.value.length != "0") {
		enableScrolling();
		document.getElementById("address-to").classList.remove("active");
		setTimeout(function(){
			document.getElementById("address-to-bg").style.transform = "scale(0)";
		},100);
		setTimeout(function(){
			document.getElementById("address-to").style.display = "none";
		},1100);
		document.getElementById("route-to").value = input1.value + " / " + input2.value;
		document.getElementById("window1-input-order").dataset.routeTo = input1.value + " / " + input2.value;
		input1.classList.remove("input-error");
		input2.classList.remove("input-error");
		document.getElementById("route-to").classList.remove("input-error");
		document.getElementById("window1-trigger-item-action").dataset.trigerAddress = input1.value + " / " + input2.value;
		document.getElementById("modal-hidden-9").value = input1.value + " / " + input2.value;
	}else{
		if (input1.value.length == "0") {input1.classList.add("input-error");}else{input1.classList.remove("input-error");}
		if (input2.value.length == "0") {input2.classList.add("input-error");}else{input2.classList.remove("input-error");}
	}
});
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*-------------------------------Address-From-----------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
addStyle("address-form-bg");

document.getElementById("to-from").addEventListener("click", function(){
	disableScrolling();
	document.getElementById("address-from").style.display = "flex";
	setTimeout(function(){
		document.getElementById("address-form-bg").style.transform = "scale(1)";
	},100);
	setTimeout(function(){
		document.getElementById("address-from").classList.add("active");
	},500);
});

document.getElementById("close-address-from").addEventListener("click", function(){
	enableScrolling();
	document.getElementById("address-from").classList.remove("active");
	setTimeout(function(){
		document.getElementById("address-form-bg").style.transform = "scale(0)";
	},100);
	setTimeout(function(){
		document.getElementById("address-from").style.display = "none";
	},1100);
});

document.getElementById("address-from-button").addEventListener("click", function(){
	var input1 = document.getElementById("address-from-from"),
		input2 = document.getElementById("address-from-to");
	console.log(input1.value.length);
	if (input1.value.length != "0" && input2.value.length != "0") {
		enableScrolling();
		document.getElementById("address-from").classList.remove("active");
		setTimeout(function(){
			document.getElementById("address-form-bg").style.transform = "scale(0)";
		},100);
		setTimeout(function(){
			document.getElementById("address-from").style.display = "none";
		},1100);
		document.getElementById("to-from").value = input1.value + " / " + input2.value;
		document.getElementById("window1-input-order").dataset.adressTo = input1.value + " / " + input2.value;
		input1.classList.remove("input-error");
		input2.classList.remove("input-error");
		document.getElementById("to-from").classList.remove("input-error");
	}else{
		if (input1.value.length == "0") {input1.classList.add("input-error");}else{input1.classList.remove("input-error");}
		if (input2.value.length == "0") {input2.classList.add("input-error");}else{input2.classList.remove("input-error");}
	}
});

//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*---------------------------------Callback-------------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
function callbackTitle(action, message){
	var titleVal = document.getElementById("callback-title");
	if (action == "add") {
		titleVal.value = message;
	}else{
		titleVal.value = "";
	}
}


document.getElementById("header-call").addEventListener("click", function(){
	disableScrolling();
	callbackTitle("add", "Callback");
	document.getElementById("modal-call").style.display = "flex";
	setTimeout(function(){
		document.getElementById("modal-call").style.opacity = "1";
	},100);
	setTimeout(function(){
		document.getElementById("modal-call").classList.add("active");
	},500);
});

document.getElementById("window3-item-link").addEventListener("click", function(){
	disableScrolling();
	callbackTitle("del", "Callback");
	document.getElementById("modal-call").style.display = "flex";
	setTimeout(function(){
		document.getElementById("modal-call").style.opacity = "1";
	},100);
	setTimeout(function(){
		document.getElementById("modal-call").classList.add("active");
	},500);
});

document.getElementById("close-modal-call").addEventListener("click", function(){
	enableScrolling();
	callbackTitle("del", "Callback");
	document.getElementById("modal-call").classList.remove("active");
	setTimeout(function(){
		document.getElementById("modal-call").style.opacity = "0";
	},500);
	setTimeout(function(){
		document.getElementById("modal-call").style.display = "none";
	},1000);
});

//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*---------------------------------Driver Modal---------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////

document.getElementById("window7-link").addEventListener("click", function(){
	disableScrolling();
	document.getElementById("modal-driver").style.display = "flex";
	setTimeout(function(){
		document.getElementById("modal-driver").style.opacity = "1";
	},100);
	setTimeout(function(){
		document.getElementById("modal-driver").classList.add("active");
	},400);
});

document.getElementById("close-modal-driver").addEventListener("click", function(){
	enableScrolling();
	document.getElementById("modal-driver").classList.remove("active");
	setTimeout(function(){
		document.getElementById("modal-driver").style.opacity = "0";
	},500);
	setTimeout(function(){
		document.getElementById("modal-driver").style.display = "none";
	},1000);
});
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*---------------------------------Modal Calendar-------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////



//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*--------------------------------Inpur Mask------------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////

function inputCalendarTime(id, to){
	var attId = document.getElementById(to);
	var attCreate = document.createAttribute("data-time");
	attCreate.value = document.getElementById(id).value;
	attId.setAttributeNode(attCreate);
}

//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*--------------------------------Car slider check------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
var tabQuery = document.getElementById("window4-item-box");

let selectedTabs;

tabQuery.onclick = function(event) {
	let td = event.target.closest('div.window4-item');
	
	if (!td) return;
	if (!tabQuery.contains(td)) return;
	let tabImgPath = td.getElementsByTagName("img");
	let tabImgTitle = td.querySelectorAll(".window4-item-content h3");
	let tabImgDescription = td.querySelectorAll(".window4-hidden");
	tabanimation(tabImgPath, tabImgTitle, tabImgDescription);
	highlight(td);
};

function tabanimation(img, title, description){
	var imgTag = document.getElementById("window4-image");
	var titleTag = document.getElementById("window4-title");
	var hiddenTag = document.getElementById("window4-more-info-content");

	imgTag.style.transform = "translateX(-100px)";
	imgTag.style.opacity = 0;

	
	titleTag.style.transform = "translateX(100px)";
	titleTag.style.opacity = 0;

	hiddenTag.style.left = "-50px";
	hiddenTag.style.opacity = 0;

	setTimeout(function(){
		imgTag.src = img[0].src;
		titleTag.innerHTML = title[0].innerHTML;
		hiddenTag.innerHTML = description[0].innerHTML;
	},500);
	setTimeout(function(){
		imgTag.style.transform = "translateX(0px)";
		imgTag.style.opacity = 1;

		titleTag.style.transform = "translateX(0px)";
		titleTag.style.opacity = 1;

		hiddenTag.style.left = "0px";
		hiddenTag.style.opacity = 1;
	}, 600);
}

function highlight(td) {
  if (selectedTabs) { // убрать существующую подсветку, если есть
    selectedTabs.classList.remove('active');
  }
  selectedTabs = td;
  selectedTabs.classList.add('active'); // подсветить новый td
}

//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*---------------------------------NEWS-----------------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
var news = document.getElementsByClassName("window5-news-box");

for (let value of news) {
	value.addEventListener("click", function(e){
		var inner = this.getElementsByTagName("h2")[0].innerText;
		var innerDate = this.getElementsByClassName("window5-date")[0].innerText;
		disableScrolling();
		callbackTitle("add", "Excursion / " + inner + " / " + innerDate);
		document.getElementById("modal-call").style.display = "flex";
		setTimeout(function(){
			document.getElementById("modal-call").style.opacity = "1";
		},100);
		setTimeout(function(){
			document.getElementById("modal-call").classList.add("active");
		},500);
	});
}

addStyle("window6-bg");
var newsBg = document.getElementById("window6-bg"),
	newsParent = document.getElementById("window6"),
	newsClose = document.getElementById("close-modal-news");

document.getElementById("window5-more-news").addEventListener("click", function(){
	disableScrolling();
	newsParent.style.display = "block";
	setTimeout(function(){
		newsBg.style.transform = "scale(1)";
		newsBg.style.opacity = 1;
	},100)
	setTimeout(function(){
		newsParent.classList.add("active");
	}, 600);
});

newsClose.addEventListener("click", function(){
	enableScrolling();
	newsParent.classList.remove("active");
	setTimeout(function(){
		newsParent.style.transform = "scale(0)";
		newsBg.style.opacity = 0;
	},500)
	setTimeout(function(){
		newsParent.style.display = "none";
	}, 1200);
});


//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
/*-----------------------------------Order Check--------------------------------*/
//////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////
var formOrder = document.getElementById("window1-input-order");
// обработчик изменения текста
function onchange(e){
    // получаем элемент printBlock
    var val = e.target.value;
    var id = e.target.id;
    if (id == "form-from") {
    	formOrder.dataset.adressFrom = e.target.value;
    }else if(id == "form-passenger"){
    	formOrder.dataset.passenger = e.target.value;
    }else if(id == "form-baggage"){
    	formOrder.dataset.baggage = e.target.value;
    }
    
}

document.getElementById("form-from").addEventListener("input", onchange);
document.getElementById("form-passenger").addEventListener("input", onchange);
document.getElementById("form-baggage").addEventListener("input", onchange);


