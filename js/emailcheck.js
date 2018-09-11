function check()
{
  if(!document.getElementById("email").checkValidity() && isValidMsg(document.forms['frm'].message.value))
  {
    alert("input not valid!");
  } 
  else
  {
    isValid();
  }
}

function isValid()
{
    M.toast({html: 'Message Sent!', classes: 'rounded'});
}

function isValidMsg(str)
{
    return str.replace(/^\s+/g, '').length;
}

