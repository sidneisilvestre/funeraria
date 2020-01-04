/*Função com estrutura de decisão */
function login(){
var n1 = document.querySelector("#n1");
var op = document.querySelector("#op");
var n2 = document.querySelector("#n2");
if(op.value == 1){
s.textContent = "Seja bem vindo <a href="index1.php">Fazer Login Gerente </a>";
} else if(op.value == 2){
s.textContent = "Seja bem vindo <a href="index2.php">Fazer Login Agente </a>";
} else if(op.value == 3){
s.textContent = "Seja bem vindo <a href="index3.php">Fazer Login Motorista </a>";
} else {
alert = "Você não pode logar! ";
}

}
