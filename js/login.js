$(document).ready(function() {
    $('input[name="radio"]').click(function() {
      if($(this).val() == '商家') {
        $('#Store').show();
        $('#StoreDes').show();
        $('#StoreTime').show();
        //$('#no-section').hide();
      } else if ($(this).val() == '顧客') {
        $('#Store').hide();
        $('#StoreDes').hide();
        $('#StoreTime').hide();
        //$('#no-section').show();
      }
    });
  });
function show_hide() {
    var login = document.getElementById("container1");
    var signup = document.getElementById("container2");
    var copyright = document.getElementById("copyright");
  
    if (login.style.display === "none") {
        login.style.display = "block";  //lonin出現
        document.getElementById("username").value="";
        document.getElementById("password").value="";
        signup.style.display = "none";  //signup消失
        copyright.style.margin = "200px 0px 0px 0px";
    } else {
        login.style.display = "none";   //login消失
        signup.style.display = "block"; //signup出現
        signup.style.visibility="visible";
        copyright.style.margin = "200px 0px 0px 0px";
     
        document.getElementById("fullname").value="";
        document.getElementById("username2").value="";
        document.getElementById("password2").value="";
        document.getElementById("comfirm_password").value="";
    }
}

function Login(){
    document.getElementById("radio1").value = document.getElementById("radio1").value;
    document.getElementById("radio2").value = document.getElementById("radio2").value;
    document.getElementById("username").value = document.getElementById("username").value;
	document.getElementById("password").value = document.getElementById("password").value;
	document.getElementById("mlogin").action = "account_login.php";
	document.getElementById("mlogin").submit();
}
function Reg(){
    document.getElementById("radio1").value = document.getElementById("radio1").value;
    document.getElementById("radio2").value = document.getElementById("radio2").value;
    document.getElementById("username").value = document.getElementById("username").value;
	  document.getElementById("password").value = document.getElementById("password").value;
	  document.getElementById("comfirm_password").value = document.getElementById("comfirm_password").value;
    document.getElementById("Store").value = document.getElementById("Store").value;
    document.getElementById("StoreDes").value = document.getElementById("StoreDes").value;
    document.getElementById("StoreTime").value = document.getElementById("StoreTime").value;
    document.getElementById("mlogin").action = "account_reg.php";
	document.getElementById("mlogin").submit();
}