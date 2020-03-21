function insereDados(codigo, descricao, preco) {
    var tb = document.getElementById("tbProdutos");
    var qtdLinhas = tb.rows.length;
    var linha = tb.insertRow(qtdLinhas);

    var celItem = linha.insertCell(0);
    var celCodigo = linha.insertCell(1)
    var celDescricao = linha.insertCell(2);
    var celPreco = linha.insertCell(3);

    celItem.innerHTML = qtdLinhas;
    celCodigo.innerHTML = codigo;
    celDescricao.innerHTML = descricao;
    celPreco.innerHTML = preco;
}

function enviaCodProduto() {
    var data = $("#fProduto").serialize();
    $.ajax({
        type: "POST",
        url: '../../src/controller/ProdutoController.php',
        data: data,
        dataType: "json",
        complete: function(response) {
            var response = response.responseText.split(',');

            codigo = response[0].substring(1, response[0].length);
            descricao = response[1];
            preco = response[2].substring(0, response[2].length - 1);

            insereDados(codigo, descricao, preco);

        },
        error: function() {
            alert('Produto não cadastrado.');
        }
    });

    return false;
}