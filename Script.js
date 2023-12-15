function add(){
    var pai = document.getElementsByClassName('tasks')[0]
    var div = document.createElement('div') // <div class="card">
    div.setAttribute('class', 'card')
    pai.appendChild(div)
    
    var title = document.createElement('h1') // <h1 id="bloco">Tarefa nova:</h1>
    title.setAttribute('id', 'bloco')
    title.innerHTML = 'Tarefa nova:'
    div.appendChild(title)
    
    var divTitle = document.createElement('div') // <div class="flexrow">
    divTitle.setAttribute('class', 'flexrow')
    div.appendChild(divTitle)

    var labelTitle = document.createElement('label') // <label for="titletxt" id="bloco">Título da tarefa:</label>
    labelTitle.setAttribute('id', 'bloco')
    labelTitle.setAttribute('for', 'titletxt')
    labelTitle.innerHTML = 'Título da tarefa:'
    divTitle.appendChild(labelTitle)


}
