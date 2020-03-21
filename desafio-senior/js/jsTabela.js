function insereDados(e, r, o) { var n = document.getElementById("tbProdutos"),
        t = n.rows.length,
        i = n.insertRow(t),
        s = i.insertCell(0),
        l = i.insertCell(1),
        a = i.insertCell(2),
        d = i.insertCell(3);
    s.innerHTML = t, l.innerHTML = e, a.innerHTML = r, d.innerHTML = o }

function enviaCodProduto() { var e = $("#fProduto").serialize(); return $.ajax({ type: "POST", url: "../../src/controller/ProdutoController.php", data: e, dataType: "json", complete: function(e) { e = e.responseText.split(",");
            codigo = e[0].substring(1, e[0].length), descricao = e[1], preco = e[2].substring(0, e[2].length - 1), insereDados(codigo, descricao, preco) }, error: function() { alert("Produto não cadastrado.") } }), !1 }