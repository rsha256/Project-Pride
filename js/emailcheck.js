function check()
{
  if(!document.getElementById("email").checkValidity() && isEmpty(document.forms['frm'].message.value))
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

function isEmpty(str)
{
    return !str.replace(/^\s+/g, '').length;
}

