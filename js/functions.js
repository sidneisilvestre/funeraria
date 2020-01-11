function login(){

var nome = document.querySelector("#n1").value;
var senha = document.querySelector("#n2").value;
if (nome == "gerente" && senha == "123"){
document.getElementById("s").innerHTML = "<a href='gerente.php'>Fazer Login </a>";
}else if (nome == "agente" && senha == "123"){
document.getElementById("s").innerHTML = "<a href='agente.php'>Fazer Login </a>";
}else if (nome == "motorista" && senha == "123"){
document.getElementById("s").innerHTML = "<a href='motorista.php'>Fazer Login </a>";
} else {
document.getElementById("s").innerHTML = "Este usuário ou senha estão inválidos!";
}
}
