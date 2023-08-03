var productList = [];
var clienteList = [];

function adicionarcliente(){
var nome = document.getElementById("nome").value;
var endereco = document.getElementById("endereco").value;
var telefone = document.getElementById("telefone").value;

document.querySelector('#temp').style.display="block";
// document.getElementById('btn-salvar-2').style.display="block";

var cliente = { nome : nome, endereco: endereco, telefone: telefone};
clienteList.push(cliente);
var novoCliente = document.createElement("tr");

novoCliente.innerHTML = "<th>"+ nome + "<br>Endereço: " + endereco + "<br>Telefone: " + telefone + "</th>";
var tela = document.getElementById("listaProdutos").appendChild(novoCliente);
tela.style.width="100%";

var linhatab = document.createElement("tr");
linhatab.innerHTML = "<th>Produto</th>"+"<th>Quantidade</th>";
document.getElementById("listaProdutos").appendChild(linhatab);

//Estilo
linhatab.style.display="flex";
linhatab.style.width="100%";
}

var cont = 0;
function adicionarProduto() {
    if(cont == 0){
    adicionarcliente();
    cont +=1;
    }

    var nome = document.getElementById("view-nome");
    var endereco = document.getElementById("view-ende");
    var telefone = document.getElementById("view-tel");
    nome.style.display="none";
    endereco.style.display="none";
    telefone.style.display="none";

    var quantidade = document.getElementById("quantidade").value;
    var produtos = document.getElementById("produtos").value;

    var produto = { produtos : produtos, quantidade: quantidade};
    
    document.querySelector('#temp').style.display="block";
    productList.push(produto);
    var novoPedido = document.createElement("tr");
    novoPedido.style.border="1px";
    novoPedido.innerHTML = "<th>"+produtos+"</th>" + "<th>"+quantidade+"</th>";
    novoPedido.style.display="flex";
    novoPedido.style.border="solid 1px 1px 1px 1px #000";
    novoPedido.style.backgroundColor="white";
    novoPedido.style.width="100%";
    
    document.getElementById("listaProdutos").appendChild(novoPedido);
    // list_produto.style.padding="10px";
    // list_produto.style.margin="5px 10px 5px 20px";
    // list_produto.style.border="solid 1px rgb(89, 94, 97)";
    return productList;
}

// function adicionarProduto() {
//     var nome = document.getElementById("nome").value;
//     var endereco = document.getElementById("endereco").value;
//     var telefone = document.getElementById("telefone").value;
//     var quantidade = document.getElementById("quantidade").value;
//     var produtos = document.getElementById("produtos").value;
//     var listp = document.getElementById("listaProdutos").value;

//     document.querySelector('#temp').style.display="block";
//     document.getElementById('btn-salvar-2').style.display="block";

//     var produto = { nome: nome, endereco: endereco, telefone: telefone, quantidade: quantidade, produtos : produtos};
//     productList.push(produto);

//     var novoProduto = document.createElement("tr");
//     var id = "produto" + (productList.length - 1);
    
//     // Primeira Forma
//     novoProduto.innerHTML = nome + "<br/>Endereço: " + endereco + "<br>Telefone: " + telefone +
//     "<br>Quantidade: "+"<span class='"+id+"controlquantidade item-lista'>" + quantidade + "<br/>Produto: " + produtos +
//     "</span><hr/>";
    
//     // listp.innerHTML = "<th>" + nome + "</th><th>" + endereco + "</th><th>" + telefone +
//     // "</th><th>" + quantidade + "</th><th>" + produtos +
//     // "</span></th>";
    
//     var list_produto = document.getElementById("listaProdutos").appendChild(novoProduto);
//     list_produto.style.padding="10px";
//     list_produto.style.margin="5px 10px 5px 20px";
//     list_produto.style.border="solid 1px rgb(89, 94, 97)";

// }

function gerarListaProdutos() {
    var produtos = document.getElementById("listaProdutos").innerHTML;
    var file = new Blob([produtos], {type: "text/plain"});
    var a = document.createElement("a");
    var url = URL.createObjectURL(file);
    a.href = url;
    a.download = "listaProdutos.html";
    document.body.appendChild(a);
    a.click();
    setTimeout(function() {
        document.body.removeChild(a);
        window.URL.revokeObjectURL(url);  
    }, 0);
}

function removerUnidade(index) {
    var produto = productList[index];
    var estoqueSpan = document.getElementById("produto" + index + "controlEstoque");
    
}

function downloadFile(text, filename) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);
    element.style.display = 'none';
    document.body.appendChild(element);
    element.click();
    document.body.removeChild(element);
}