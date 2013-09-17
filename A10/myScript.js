//returns the classes of any html element when given the id
function getClasses(elem) {
    var target = document.getElementById(elem);
    if(target.hasAttribute("class")){
        
        target= target.getAttribute("class");
        var classes = target.split(" ");

        for (var i = 0; i < classes.length; i++) {
            alert(classes[i]);
        }
    
    }else{
        alert("no classes found");
    }
    

}

//adds a class to the given elements class.
function addClass(elem, className) {
    var target = document.getElementById(elem);
    if (target.hasAttribute("class")) {
        //append next class
        target.setAttribute("class", (target.getAttribute("class") + " " + className));
    } else {
        //create attribute class
        var att=document.createAttribute("class");
        att.value= className;
        target.setAttributeNode(att);
    }
}

//validates the form
function validateForm() {
	//checking the name first
 	var x=document.forms.myForm.name.value;
	if (x===null || x==="")
  	{

		addClass("name","red");
		var error = document.createElement("h1");
		error.appendChild(document.createTextNode("No name entered"));
		document.forms.myForm.appendChild(error);	

  	}else{
		document.getElementById("name").setAttribute("class","");
	} 

	//checking the email
	x=document.forms.myForm.email.value;
	if (x===null || x==="")
  	{
		addClass("email","red");
  		var error = document.createElement("h1");
		error.appendChild(document.createTextNode("No email entered"));
		document.forms.myForm.appendChild(error);
  	} else{
		document.getElementById("name").setAttribute("class","");
	} 



	//checking the password
	x=document.forms.myForm.password.value;
	if (x===null || x==="")
  	{
		addClass("password","red");
  		var error = document.createElement("h1");
		error.appendChild(document.createTextNode("No password entered"));
		document.forms.myForm.appendChild(error);
  	} else{
		document.getElementById("name").setAttribute("class","");
	} 



	//checking the confirm password
	var y=document.forms.myForm.confirm.value;
	if (y===null || y==="")
  	{
		addClass("confirm","red");
  		var error = document.createElement("h1");
		error.appendChild(document.createTextNode("No confirm password entered"));
		document.forms.myForm.appendChild(error);
	return false;
  	}else{
		document.getElementById("name").setAttribute("class","");
	} 


	//checking if password and confirm passward are the same.
	/*if(y!===null && x!===null){
		if(y != x){
			var error = document.createElement("h1");
			error.appendChild(document.createTextNode("password and confirm password not the same"));
			document.forms.myForm.appendChild(error);
			return false;
		}
	
	}*/
	


}



