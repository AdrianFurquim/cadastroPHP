// Funções para o search da pesquisa

var search = document.querySelector("#pesquisar");

search.addEventListener("keydown", function(event){
    if (event.key === "Enter") {
        searchData();
    }
})

function searchData(){
    window.location = 'sistema.php?search='+search.value;
}