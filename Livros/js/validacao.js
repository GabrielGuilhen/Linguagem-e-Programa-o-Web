function validar() {
    //capturar os valores informados pelo usuario
    var titulo = document.getElementById('titulo').value;
    var autor = document.getElementById('autor').value;
    var genero = document.getElementById('genero').value;
    var paginas = document.getElementById('paginas').value;

    //alert(titulo + ' - ' +autor+ ' - ' +genero+ ' - ' +paginas);

    erros = [];
    if (titulo == '') {
        erros.push('Informe o titulo!');
    }
    if (genero == '') {
        erros.push('Informe o gênero!');
    }
    if (paginas == '') {
        erros.push('Informe o número de páginas');
    }
    if (autor == '') {
        erros.push('Informe o autor!');
    }
    if (erros.length > 0) {
        //alert(erros.join("\n"));
        document.getElementById('div-erro').innerHTML = erros.join("<br>");

        return false;
    }
    return true;




}
