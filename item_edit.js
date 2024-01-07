function ChangeItem(ItemID){
    document.getElementById("ItemID").value=ItemID;
    document.getElementById("mfrom").action = "item_edit.php";
	document.getElementById("mfrom").submit();
}
function UpdateItem(){
    document.getElementById("ItemID").value = document.getElementById("ItemID").value;
	document.getElementById("item_name").value = document.getElementById("item_name").value;
	document.getElementById("item_price").value = document.getElementById("item_price").value;
	document.getElementById("item_des").value = document.getElementById("item_des").value;
	document.getElementById("item_sup").value = document.getElementById("item_sup").value;
	document.getElementById("item_addr").value = document.getElementById("item_addr").value;
	document.getElementById("item_ph").value = document.getElementById("item_ph").value;
	document.getElementById("mfrom").action = "item_mdysave.php";
	document.getElementById("mfrom").submit();
}
function DeleteItem(){
    document.getElementById("ItemID").value = document.getElementById("ItemID").value;
    document.getElementById("mfrom").action = "item_delsave.php";
    document.getElementById("mfrom").submit();
}
function InsertItem(){
    document.getElementById("mfrom").action = "item_add.php";
    document.getElementById("mfrom").submit();
}
function InsertItemSave(){
	//console.log("click")
	document.getElementById("item_name").value = document.getElementById("item_name").value;
	document.getElementById("item_price").value = document.getElementById("item_price").value;
	document.getElementById("item_des").value = document.getElementById("item_des").value;
	document.getElementById("item_sup").value = document.getElementById("item_sup").value;
	document.getElementById("item_addr").value = document.getElementById("item_addr").value;
	document.getElementById("item_ph").value = document.getElementById("item_ph").value;
	document.getElementById("mfrom").action = "item_addsave.php";
	document.getElementById("mfrom").submit();
}