<!DOCTYPE html>
<html>
<head>
	<title>Form </title>

	<link rel="stylesheet" type="text/css" href="./css/style.css">

</head>
<body>

<a href="action.php?ID=1&name=abc"> go to action page</a>


	<form action="action.php" name="form1"  id="form1" method="POST" >
		<table>
			<tr>
				<td>
				 <label for="txtname">Name</label>
				</td>
				<td>
					<input type="text" name="txtname" id="txtname" placeholder="Enter Your Name"    >	
					<!-- type password/date/number/email value="name"  -->
				</td>
				<tr>
					<td>
						Address
					</td>
					<td>
						<textarea name="txtaddress" id="txtaddress" placeholder="Enter Your Address"  ></textarea>
					</td>
				</tr>
			</tr>
			<tr>
				<td>
					<label for="selcity">	
					City
					</label>
				</td>
				<td>
					<select name="selecity" id="selcity"  ><!-- multiple -->
						 <option value="" >Select City</option>
						 <option value="1" >A.bad</option>
						 <option value="2"  >Pune</option>
						 <option value="3"  >Mumbai</option>
					</select>	
					<!-- selected -->
				</td>
			</tr>	
			<tr>	
					<td>	Gender</td>
					<td>
							<input type="radio" name="radgender" id="radgnder1" value="MALE" > 
							<label for="radgnder1">Male	</label>	
							

							<input   type="radio" name="radgender" id="radgender2" value="FEMALE" >
							<label for="radgender2">Female	</label>

								<!-- checked -->
					</td>		

			</tr>
			<tr>	
					<td>Hobby</td>
					<td>
						<input type="checkbox" name="chk1" id="chk1" value="Cricket" ><!-- checked -->
						<label for="chk1">	Cricket</label>
						<input type="checkbox" name="chk2" id="chk2" value="Tenis">
						<label for="chk2">	Tenis</label>
						<input type="checkbox" name="chk3" id="chk3" value="Football">
						<label for="chk3">	Football</label>
					</td>	
			</tr>

			<tr>	
					<td>Hobby</td>
					<td>
						<input type="checkbox" name="chkhobby[12]" id="chk1" value="Cricket" ><!-- checked -->
						<label for="chk1">	Cricket</label>
						<input type="checkbox" name="chkhobby[32]" id="chk2" value="Tenis">
						<label for="chk2">	Tenis</label>
						<input type="checkbox" name="chkhobby[43]" id="chk3" value="Football">
						<label for="chk3">	Football</label>
					</td>	
			</tr>
			<tr>	
					<td colspan="2">

						<input type="hidden" name="hid" value="<?php echo date('Y') ?>">	
						<input type="button" name="" value="Button">
						<input type="submit" name="" value="SUBMIT">
						<input type="reset" name="" value="RESET">
						<button>Button tag</button>	

					</td>
			</tr>
		</table>
	</form>	

</body>
</html>