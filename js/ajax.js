$(function(){
	$("#carregando").hide();

		$("div#selecao a").click(function(){
			pagina = "arquivos/" + $(this).attr('href')

			$("carregando").ajaxStart(function(){
				$(this).show();
			})
			$("carregando").ajaxStop(function(){
				$(this).hide();
			})

			$("#conteudo").load(pagina)
			return false;
		})
})

function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}