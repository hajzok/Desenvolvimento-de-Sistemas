var var1, var2, var3, var4;
	var1 = document.getElementById("n1");
	var2 = document.getElementById("n2");
	var3 = document.getElementById("n3");
	var4 = document.getElementById("n4");
		
function validar(){

	var1.style="";
	var2.style="";
	if(var1.value == ""){
		alert("Preencha o primeiro campo!");
		var1.style="border:2px solid red;";
		return false;
	}
	else{
		if(var2.value == ""){
			alert("Preencha o segundo campo!");
			var2.style="border:2px solid red;";
			return false;
		}
	}
	return true;
}

function calcular(){
	let sair = validar();
	
	if(sair == false){
		return false;
	}
	else{
		var3.value = (parseFloat(var2.value) / (parseFloat(var1.value) * parseFloat(var1.value))).toFixed(2);
		alertar();
	}
}

function alertar(){
	if(var3.value < 18){
		var4.value = "O paciente está abaixo do peso";
	}
	else if(var3.value >= 18 && var3.value <= 24){
		var4.value = "O paciente está saudável";
	}	
	else if(var3.value >= 25 && var3.value <= 30){
		var4.value = "O paciente está com sobrepeso";
	}
	
	else if(var3.value >= 35 && var3.value <= 40){
		var4.value = "O paciente está com obesidade moderada";
	}
	
	else if(var3.value > 40 && var3.value <= 50){
		var4.value = "O paciente está com obesidade grave";
	}
	
	else if(var3.value > 50){
		var4.value = "O paciente está com obesidade gravíssima";
	}
}