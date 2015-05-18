function ajax_call(url){
	var xmlhttp;

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = 

	function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			return;
		}
	}

	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

function removeUser(id){
	ajax_call("ajax/removeUser.php?id=" + id);
	alert('usuário removido');
	location.reload();
}

function removeDept(id){
	ajax_call("ajax/removeDept.php?id=" + id);
	alert('departamento removido');
	location.reload();
}

function removeProcess(id){
	ajax_call("ajax/removeProcess.php?id=" + id);
	alert('processo removido');
	location.reload();
}

function seeDetail(id){
	var xmlhttp;

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = 

	function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('content').innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "ajax/getProcessDetail.php?id=" + id, true);
	xmlhttp.send();
}

function getList(condition){
	var xmlhttp;

	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}

	xmlhttp.onreadystatechange = 

	function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById('table_content').innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open("GET", "ajax/getProcessList.php?condition=" + condition, true);
	xmlhttp.send();
}

function search(){
	query = "WHERE process.protocol LIKE '" + frm.searchInput.value + "%'";
	getList(query);
}