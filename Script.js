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

    var inpTitle = document.createElement('input') // <input type="text" class="txt" name="titletxt">
    inpTitle.setAttribute('type', 'text')
    inpTitle.setAttribute('class', 'txt')
    inpTitle.setAttribute('name', 'titletxt')
    divTitle.appendChild(inpTitle)

    var descDiv = document.createElement('div') // <div class="flexcolumn">
    descDiv.setAttribute('class', 'flexcolumn')
    div.appendChild(descDiv)

    var descLab = document.createElement('label') // <label for="desctxt" id="bloco">Descrição da Tarefa:</label>
    descLab.setAttribute('for', 'desctxt')
    descLab.setAttribute('id', 'bloco')
    descLab.innerHTML = 'Descrição da Tarefa:'
    descDiv.appendChild(descLab)

    var descText = document.createElement('textarea') //<textarea type="textarea" class="txt2" name="desctxt"></textarea>
    descText.setAttribute('type', 'textarea')
    descText.setAttribute('class', 'txt2')
    descDiv.appendChild(descText)

    var radioDiv//<div class="alignLeft">






}
