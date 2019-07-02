  
  var signIN{
	  usrename = Yewoinesht;
	  password = 12345
	  }
	  
 function getInfo(){
	 var username = document.getElementById("username").value;
	 var password = document.getElementById("password").value;
}
if(username == signIN.username && password == signIN.password)
     {
		 window.open('./Homepage.html')
 }
 else{
	 alert("check your password")
	 
 }







