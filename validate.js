function Validate()
{
	var x=document.forms["guest"]["email"].value;
	var y=document.forms["guest"]["name"].value;
	if(y==null || y=="")
	{
		alert("Please enter your Name! ");
		return false;
	}
	if(x==null || x=="")
	{
		alert("Please enter your email address!");
		return false;
	}
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  		alert("Not a valid e-mail address");
		return false;
	}
	else
		return true;
}