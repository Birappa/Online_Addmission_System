<?php
	session_start();
	 if(!isset($_SESSION["valid"]))
	 {
		header("Location:login.php") ;
	 }
	if($_GET["msg"]="error")
	{
		//echo("Error");
	}
	$regId=$_GET['regId'];
?>
<html>
<head>
<title>&nbsp;&nbsp;&nbsp;&nbsp; Online Admission form for X university , various courses </title>
	
	<script language="javascript">
	function Validate()
	{
		var regxp= "/^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i";
		var email = document.getElementById("email").value;
		
		 if(document.getElementById("fullname").value=="")
			{
				alert("please enter Full Name");
				document.getElementById("fullname").focus();
				return false;
				
			}
		else if(document.getElementById("date").value=="")
			{
				alert("please enter valid Date");
				document.getElementById("date").focus();
				return false;
				
			}
		else if(document.getElementById("age").value=="")
			{
				alert("please Enter Valid Age");
				document.getElementById("age").focus();
				return false;
				
			}
		else if(document.getElementById("Mstatus").value=="")
			{
				alert("please enter valid Marrital Status");
				document.getElementById("Mstatus").focus();
				return false;
				
			}
		else if(document.getElementById("gender").value=="")
			{
				alert("please select Gender");
				document.getElementById("gender").focus();
				return false;
				
			}
		else if(document.getElementById("category").value=="")
			{
				alert("please select Category");
				document.getElementById("category").focus();
				return false;
				
			}
		
		else if(document.getElementById("mname").value=="")
			{
				alert("Please enter Mother Name");
				document.getElementById("mname").focus();
				return false;
				
			}
		else if(document.getElementById("fname").value=="")
			{
				alert("please enter valid Father Name");
				document.getElementById("fname").focus();
				return false;
				
			}
		else if(document.getElementById("nationality").value=="")
			{
				alert("please select Nationality");
				document.getElementById("nationality").focus();
				return false;
				
			}
		else if(document.getElementById("religion").value=="")
			{
				alert("please select Religion");
				document.getElementById("religion").focus();
				return false;
				
			}
		
		
		else if(document.getElementById("state").value=="")
			{
				alert("Please select State");
				document.getElementById("state").focus();
				return false;
				
			}
		else if(document.getElementById("pincode").value=="")
			{
				alert("Please enter pincode");
				document.getElementById("pincode").focus();
				return false;
				
			}
		else if(document.getElementById("nationality").value=="")
			{
				alert("please select Nationality");
				document.getElementById("nationality").focus();
				return false;
				
			}
		else if(document.getElementById("email").value=="")
			{
				alert("please select email");
				document.getElementById("email").focus();
				return false;
				
			}
		
		else if(! email.match(regexp))
			{
				alert("Email address entered is not valid \n Please enter a correct email address");
				document.getElementById("email").focus();
				return false;
			}
		
		else if(document.getElementById("mobile").value=="")
			{
				alert("Please enter Mobile");
				document.getElementById("mobile").focus();
				return false;
				
			}
	}
	
	</script>
</head>

<CENTER>
<body bgcolor="#F0F4F1">


<form id="reg_frm" name="reg_frm"  method="post" autocomplete="off" onSubmit="return Validate()" action="process_admform.php?action=insert" >
	<input type="hidden" name="regId" value="<?php echo($_GET['regId']); ?>"
<BODY bgColor="#F0F4F1" leftMargin=0 topMargin=0 marginheight="0" marginwidth="0" oncontextmenu="return false;">
<table border=1 cellspacing=1 width=1024px id=AutoNumber2 bordercolor=white class="bgcolr" style='border-collapse: collapse'>
<tr bordercolor=white>

     <td colspan=2 bgcolor=white bordercolor=white align=center>
	 <font color=#800080>
	 <center>&nbsp;&nbsp;&nbsp;&nbsp Before proceeding, please ensure that you have read <a  href="how.php">HOW TO APPLY</a> instruction to be fed is readily available with you. </font> 

	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <font color=#000000><font color=red>*</font>&nbsp;Mandatory Field</font></td>

</tr>

<tr>

     <td colspan=2 bgcolor=white bordercolor=white align=center></td>

</tr>

 
<tr>
                <td height="25" colspan="4" bgcolor="#FCFCFC" class="tableheader"><br><br><b >&nbsp;&nbsp;&nbsp;&nbsp Personal Details :</b></td>
              </tr>

<tr>
		<td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Full Name <font color=#800080 >[as in Secondary School Certificate]</font><span class="alert"><font color=red>*</font></span></td>
		<td class="tablecontent2">
		
	<input type=text name="fullname" size=40 maxlength=40 id=fullname onBlur="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)"> <br/><font color=#800080>[Please Select Title & do not use any prefix such as Shri or Dr. etc. with Name]</font>
    </td></tr>
	        <tr>
                <td class="tablecontent1"><p>&nbsp;&nbsp;&nbsp;&nbsp Date of Birth : <span class="alert"><font color=red>*</font></span></p></td>
                <td colspan="3" class="tablecontent1">
					<input type="date" name="date" id="date">
				</td>
				 </tr>
<tr>
                <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Age as on 05.08.2011
 </td>
                <td colspan="3" class="tablecontent2">
				<input  size="3" name="age"  id="age" />
				</td>
                </tr>
			    <tr>
				<td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp Marital Status<span class="alert"><font color=red>*</font></span></td>
				<td class="tablecontent1">
				
				<select  class="listMenu" name="Mstatus" id="Mstatus">
				<option selected value=''>Select</option>
				<option  value='Single'>Single</option>
				<option  value='Unmarried'>Unmarried</option>
				</select> 
				
		</td>
    </tr>
	
 <tr>
<td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp Gender<span class="alert"><font color=red>*</font></span></td>
     	<td class="tablecontent1">
		
		<select  class="listMenu" name="gender" id="gender">
        <option selected value=''>Select</option>
		<option  value='MALE'>MALE </option>
		<option  value='FEMALE'>FEMALE</option>
        </select> 
		
		</td></tr>
		<tr>					

        <td class="tablecontent1">&nbsp;&nbsp;&nbsp;&nbsp CATEGORY<span class="alert"><font color=red>*</font></span></td>
     	<td class="tablecontent1">
		
		<select  class="listMenu" name="opt_cat" id="category">
        <option selected value=''>Select</option>
		<option  value='GENERAL'>GENERAL </option>
		<option  value='OBC'>OBC</option>
		<option  value='SC'>SC</option>
		<option  value='ST'>ST</option>
		
        </select> 
		</td>
		</td>
     <tr>

      <td class="tablecontent1">&nbsp&nbsp;&nbsp;&nbsp;&nbspMother's Name<span class="alert"><font color=red>*</font></span></td>

      <td class="tablecontent1">

		<input type=text name="mname" id=mname size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));' onkeydown="return alphactrl(event)">

       <br/><font color=#800080>[Please do not use any prefix such as Smt or Dr. etc.]</font></td>

    </tr>

    <tr>

      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Father's Name<span class="alert"><font color=red>*</font></span></td>

      <td class="tablecontent2">

	<input type=text name=fname id=fname size=31 maxlength=30 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress='return (alphachar(event,number2) && alphactrl(event));'onkeydown="return alphactrl(event)">

      <br/><font color=#800080>[Please do not use any prefix such as Shri or Dr. etc.]</font></td>

    </tr>

    <tr>

      <td class="tablecontent1">&nbsp&nbsp;&nbsp;&nbsp;&nbspNationality</td>

      <td class="tablecontent1">

	<input type=text name="nation" id="nationality" value='INDIAN' readonly size=31 maxlength=10>

      </td>

</tr>

		 <tr>

      <td class="tablecontent2">&nbsp&nbsp;&nbsp;&nbsp;&nbspReligion <font color=red> *</font></td>

      <td class="tablecontent2">

		<select width=30 size=1 name=religion id="religion"  class="listMenu">

        <option selected value=''>Select

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </option>

        <option value='1'>Hindu</option>

        <option value='2'>Christian</option>

        <option value='3'>Islam</option>

        <option value='4'>Jain</option>

        <option value='5'>Sikh</option>

        <option value='6'>Buddhist</option>

        <option value='7'>Parsi</option>

        <option value='8'>Other</option>

	</select></td>

    </tr>

    <tr>

                <td height="20" colspan="5" align="left"  bgcolor="#F5F5F5" class="tableheader"><strong><br><br>&nbsp;&nbsp;&nbsp;&nbspContact Details </strong>:</td>

                      </tr>
    <tr>

      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Address for Communication<span class="alert"><font color=red>*</font></span> </td>

      <td class="tablecontent2">

    <TEXTAREA Name="address" id="address" ROWS=2 COLS=20 onChange="javascript:this.value=this.value.toUpperCase();" onkeypress="return (alphacharintspecial(event,number4) && alphactrl(event));" onkeydown="return alphactrl(event)" >

	 
</TEXTAREA> <font color=#800080>[Maximum 50 character]
     </td>

	 </tr>


 <tr><td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp State<span class="alert"><font color=red>*</font></span></td>

	<td class="tablecontent2">

 <select size=1 name="state" id=state class=listMenu>
 <option value=''>Select State</option>
 <option value='ANDAMAN AND NICOBAR'>ANDAMAN AND NICOBAR</option>
 <option value='ANDHRA PRADESH'>ANDHRA PRADESH</option>
 <option value='ARUNACHAL PRADESH'>ARUNACHAL PRADESH</option>
 <option value='ASSAM'>ASSAM</option>
 <option value='BIHAR'>BIHAR</option>
 <option value='CHANDIGARH'>CHANDIGARH</option>
 <option value='CHATTISGARH'>CHATTISGARH</option>
 <option value='DADRA NAGAR HAVELI'>DADRA NAGAR HAVELI</option>
 <option value='DAMAN DIU'>DAMAN DIU</option>
 <option value='DELHI'>DELHI</option>
 <option value='GOA'>GOA</option>
 <option value='GUJARAT'>GUJARAT</option>
 <option value='HARYANA'>HARYANA</option>
 <option value='HIMACHAL PRADESH'>HIMACHAL PRADESH</option>
 <option value='JAMMU AND KASHMIR'>JAMMU AND KASHMIR</option>
 <option value='JHARKHAND'>JHARKHAND</option>
 <option value='KARNATAKA'>KARNATAKA</option>
 <option value='KERALA'>KERALA</option>
 <option value='LAKSHADWEEP'>LAKSHADWEEP</option>
 <option value='MADHYA PRADESH'>MADHYA PRADESH</option>
 <option value='MAHARASHTRA'>MAHARASHTRA</option>
 <option value='MANIPUR'>MANIPUR</option>
 <option value='MEGHALAYA'>MEGHALAYA</option>
 <option value='MIZORAM'>MIZORAM</option>
 <option value='NAGALAND'>NAGALAND</option>
 <option value='ORISSA'>ORISSA</option>
 <option value='PONDICHERRY'>PONDICHERRY</option>
 <option value='PUNJAB'>PUNJAB</option>
 <option value='RAJASTHAN'>RAJASTHAN</option>
 <option value='SIKKIM'>SIKKIM</option>
 <option value='TAMIL NADU'>TAMIL NADU</option>
 <option value='TRIPURA'>TRIPURA</option>
 <option value='UTTAR PRADESH'>UTTAR PRADESH</option>
 <option value='UTTARAKHAND'>UTTARAKHAND</option>
 <option value='WEST BENGAL'>WEST BENGAL</option>
 </select>

      <font color=black> Pin Code<span class=alert><font color=red>*</font></span>
	  <input name="pincode" id="pincode" onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);"  id=txtpin  maxlength=6 size=6 name=pincode />

   </td>
	  </tr> 
   <tr>
      <td class="tablecontent2">&nbsp;&nbsp;&nbsp;&nbsp Email address<span class="alert"><font color=red>*</font></span></td>
       <td class="tablecontent2">
		<input type=text name="email" id=email size=31  maxlength=45 onChange="return ValidateForm007();" onkeypress="return emailctrl(event);" onkeydown="return emailctrl(event);"><font color=#800080>[Maximum 45 character] 

 </td>

     </tr>


<tr>

      <td class="tablecontent2">&nbsp&nbsp;&nbsp;&nbsp;&nbspMobile Number <font color=red>*</font></td>

       <td class="tablecontent2">

	<input name="mobile" class="textbox2" id="mobile" onkeypress="return (number(event) && numberctrl(event));" onkeydown="return numberctrl(event);" size="25"  maxlength="10" /><font color=#800080>(10 digit)</font>

    </td> </tr>



 </table>
<input type="hidden" name="modtype" id="modtype" value="1"/>


  </center></div><div align=center><center>
  <p>
<input   type="submit" value="Submit" name="submit" />  
  </center></div>
</form>
</body>
</html>



		