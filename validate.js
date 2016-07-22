	
function validate()
{	
	if(document.getElementById('txtname').value=="")
	{
		alert('please fill your name');
		document.getElementById('txtname').focus();
		return false;
	} 

	if(document.getElementById('txtaddress').value=="")
	{
		alert('please fill your address');
		document.getElementById('txtaddress').focus();
		return false;
	}

	if(document.getElementById('selcity').value=="")
	{
		alert('please select city');
		document.getElementById('selcity').focus();
		return false;
	}

	var rad1 = document.getElementById('radgender1').checked;
	var rad2 = document.getElementById('radgender2').checked;
	if( !(rad1 || rad2) )
	{
		alert('please select one gender');
		document.getElementById('radgender1').focus();
		return false;
	}

	var chkflag = false;

	for(var i=1 ; i<=3;i++ )
	{
		if(document.getElementById('chk'+i).checked)
		{
			chkflag=true;
		}
	}

	if(!chkflag)
	{
		alert('please select atleast one hobby');
		document.getElementById('chk1').focus();
		return false;
	}
	return true;  
}	
