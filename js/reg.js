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

function Reg(){
    document.getElementById("radio1").value = document.getElementById("radio1").value;
    document.getElementById("radio2").value = document.getElementById("radio2").value;
    document.getElementById("username").value = document.getElementById("username").value;
	  document.getElementById("password").value = document.getElementById("password").value;
	  document.getElementById("comfirm_password").value = document.getElementById("comfirm_password").value;
    document.getElementById("Store").value = document.getElementById("Store").value;
    document.getElementById("StoreDes").value = document.getElementById("StoreDes").value;
    document.getElementById("StoreTime").value = document.getElementById("StoreTime").value;
    document.getElementById("mreg").action = "account_reg.php";
	document.getElementById("mreg").submit();
}