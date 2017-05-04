function validateloginform()
{
var x = document.forms["loginform"]["logintext"].value;
var y = document.forms["loginform"]["loginpassword"].value;
var z = 1;

if (x.length == 0)
{
document.getElementById("span1").innerHTML = "*This Field is Compulsory";
z = 0;
}
else if (x.length < 8)
{
document.getElementById("span1").innerHTML = "*Username should be 8 or more than 8 characters";
z = 0;
}
else
{
document.getElementById("span1").innerHTML = "";
}

if (y == "")
{
document.getElementById("span2").innerHTML = "*This Field is Compulsory";
z = 0;
}
else if (y.length < 8)
{
document.getElementById("span2").innerHTML = "*Password should be 8 or more than 8 characters";
z = 0;
}
else
{
document.getElementById("span2").innerHTML = "";
}



if (z == 0)
return false;
else
return true;
}


function validateregistrationform()
{
var x = document.forms["loginform"]["logintext"].value;
var y = document.forms["loginform"]["loginpassword"].value;
if (x == "")
document.getElementById("span1").innerHTML = "*This Field is Compulsory";
else if (x.length < 8)
document.getElementById("span1").innerHTML = "*Username should be 8 or more than 8 characters";

if (y == "")
document.getElementById("span2").innerHTML = "*This Field is Compulsory";
else if (y.length < 8)
document.getElementById("span2").innerHTML = "*Password should be 8 or more than 8 characters";

return false;
}




