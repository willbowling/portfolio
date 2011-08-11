

function isEmailAddr(email)
{
  var result = false
  var theStr = new String(email)
  var index = theStr.indexOf("@");
  if (index > 0)
  {
    var pindex = theStr.indexOf(".",index);
    if ((pindex > index+1) && (theStr.length > pindex+1))
	result = true;
  }
  return result;
}





function valNameEmailPhone(theForm)
{

  if (theForm.name.value == "" )
  {
    alert("Please enter your Name.");
    theForm.name.focus();
    return (false);
  } 
  
  if (theForm.email.value == "" || !isEmailAddr(theForm.email.value))
  {
    alert("Please enter a valid Email Address.");
    theForm.email.focus();
    return (false);
  }  
  

	if (theForm.phone.value == "" )
  {
    alert("Please enter your Phone Number.");
    theForm.phone.focus();
    return (false);
  }

	if (theForm.country.value == "" )
  {
    alert("Please enter your Country.");
    theForm.country.focus();
    return (false);
  }
   
  return (true);

}


