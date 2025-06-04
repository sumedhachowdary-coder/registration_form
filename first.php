<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <style>
 .box{
 width:500px;
 height:600px;
 border:1px solid red;
 background-color: bisque;
 margin:auto;
 text-align:center;
 }
 </style>
</head>
<body>
 <br><br>
 <form action="store.php" method="POST" onsubmit="return validateform()">
 <div class="box">
 <h4>Student Registration Form</h4>
 <br>
 Name:
 <input type="text" id="name" name="name">
 <br><br>
 Registration number:
 <input type="text" id="reg_no" name="reg_no">
 <br><br>
 DOB:
 <input type="date" id="date" name="dob">
 <br><br>
 Program:
 <input type="text" id="program" name="program">
 <br><br>
 Email Id:
 <input type="text" id="email" name="email">
 <br><br>
 Temporary Address:
 <input type="text" id="taddress" name="taddress">
 <br><br>
 Click on the check box if your temporary address is same as permanent
address
 <input type="checkbox" id="sameaddress" name="sameaddress" onclick="printaddress()">
 <br><br>
 Permanent Address:
 <input type="text" id="paddress" name="paddress">
 <br><br>
 Phone number:
 <input type="tel" id="phone" name="phone">
 <br>
 <br>
 <input type="submit" value="Submit">
 <br><br>
 <p id="error_msg"></p>
 <br>
 <br>
 <br>
 </div>
 </form>
 <script>
 function validateform(){
 let a=document.getElementById('error_msg');
 let name=document.getElementById('name').value;
 let reg_no=document.getElementById('reg_no').value;
 let dob=document.getElementById('date').value;
 let program=document.getElementById('program').value;
 let email=document.getElementById('email').value;
 let phone=document.getElementById('phone').value;
 a.innerHTML='';
 var mob=/^[0-9]{10}$/;
 if(!mob.test(phone)){
 a.innerHTML+='Phone number should have 10 characters<br>';
 }
 var reg_n=/^[A-Za-z0-9]+$/;
 if(!reg_n.test(reg_no)){
 a.innerHTML+='Registration contains only alphabets and numericals<br>';
 }
 var namee=/^[A-Za-z]{1,30}$/;
 if(!namee.test(name)){
 a.innerHTML+='Name should contain only alphabets and should not exceed 30 characters<br>';
 }
 var emailid=/^[A-Za-z0-9]+@gmail.com$/;
 if(!emailid.test(email)){
 a.innerHTML+='invalid email id<br>';
 }
 if(a.innerHTML!=''){
 return false;
 }
 return true;
}
 function printaddress(){
 let tad=document.getElementById('taddress').value;
 let pad=document.getElementById('paddress');
 var checkbox=document.getElementById('sameaddress').checked;
 if(checkbox){
 pad.value=tad;
 pad.disabled=true;
 }else{
 pad.disabled=false;
 }
 }

 </script>
</body>
</html>