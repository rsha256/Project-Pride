function check()
{
  if(!document.getElementById("email").checkValidity())
  {
    alert("input not valid!");
  } 
  else
  {
    callMeIfValid();
  }
}

function callMeIfValid()
{
    M.toast({html: 'Message Sent!', classes: 'rounded'});
}
