// JS validation for the file

/* run the init() after the page get loaded 
* Run init() after page get loaded
*/
window.onload = init;

/*
initialiation for the init
*/

function init(){
	//Bind onsubmit event handler
	document.getElementById("formTest").onsubmit = validateForm;

	// Bind the evaent handler function

	document.getElementById("btnreset").onclick = clearForm;

	// Bind the on focus event handler

	document.getElememtById("fname").focus();
}

function validateForm(theForm){
	with(theForm){
	return(isNotEmpty(fname, "please enter the firstname " ,elmFNameError)
	&& isNotEmpty(lname, "please enter the lastname" , elmLNameError)
	&& isValidEmail(email ,"please enter email or email not in the format",elmemailError)
	&& isNumeric(phone, "please enter phone number",elmphoneError)
	&& isNumeric(ephone, "please enter guardian number" , elmephoneError)
	&& isChecked("sex", "please select the sex",elmsexError)
	&& isNotEmpty(dob, "please enter the date of the birth" , elmdobError)
	&& isChecked("lang" , "please select mother tougue" , elmlangError)
	&& isChecked("plang", "please select languages" , elmplangError)
	&& isChecked("profession" , "please select profession" , elmprofessionError)
	&& isChecked("qualification" , "please enter the qualification", elmqualificationError)
	&& isNotEmpty(iname, "please enter the institution name" , elminameError)
	&& isLengthMinMax(pincode,6,6,"please enter the pincode",elmpincodeError)
	&& isNotEmpty(paddress, "please enter permanent address",elmpaddressError)
	&& isNotEmpty(taddress, "please enter the temporary address",elmtaddressError)
	);
     }
}

function isLengthMinMax(inputElm,minLength,maxLength,errMsg,errElm){
	var inputValue = inputElm.value.trim();
	var isValid    = (inputValue.Length >=minLength) && (inputValue.Length <=maxLength);
	postValidate(isValid,errMsg,errElm,inputElm);
	return isValid;
}


function isNotEmpty(inputElm,errMsg,errElm){
	var isValid = (inputElm.value.trim() !== "");
	postValidate(isValid,errMsg,errElm,inputElm);
	return isValid;
}

function isValidEmail(inputElm,errMsg,errElm){
	var isValid = (inputElm.value.trim().match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/) !== null);
	postValidate(isValid,errMsg,errElm,inputElm);
	return isValid;
}

function isChecked(inputElm,errMsg,errElm){
	var elms=document.getElementByName(inputElm);
	var isChecked=false;
	for ( var i = 0; i < elms.length ; i++){
		if(elm[i].checked){
			isChecked=true;
			break;
		}
	}
	postValidate(isChecked,errMsg,errElm,null);//pass the null it's not focus any where
	return isChecked;
}

function isNumeric(inputElm,errmsg,erElm){
	var isValid = (inputElm.value,trim().match(/^\d+$/) !== null);
	postValidate(isValid,errMsg,errElm,inputElm);
	return isValid;
}

function postValidate(isValid,errMsg,errElm,inputElm){
	if(!isValid){
		// show the error message is its not proper field
	if(errElm !== undefined && errElm !== null && errMsg !== undefined && errMsg !== null){
		errElm.innerHTML = errMsg;
	}
	//set focus on input element currect this message
	if(inputElm !== undefined && inputElm !== null){
		inputElm.classList.add("errorBox"); // add the class for the styling
		inputElm.focus();
	}
}
	else{
	  //clear the if the previous error is working means
	if(errElm !== undefined && errElm !== null){
		errElm.innerHTML = "";
	}
	if(inputElm !== undefined && inputElm !== null){
		inputElm.classList.remove("errorBox");
	}
   }
}

function clearForm(){
	var elms = document.querySelectorAll('.errorBox'); // class
	for(var i = 0; i < elms.length; i++){
		elms[i].classList.remove("errorBox");
	}
	
	elms = document.querySelectorAll('[id$="Error"]');











