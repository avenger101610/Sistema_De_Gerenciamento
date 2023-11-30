
// Código para abrir a tela de Nova Tarefa
function New_task(){
    console.log('oi');
    var see = document.querySelector('#frame');
    if (see.classList.contains('hide')) {
        see.classList.replace('hide','show');
    }
    else {
        see.classList.replace('show','hide');
    }
}
