//---------- HEADER ----------
//---------- Animação Hambuguer - NAVBAR ---------
function navBar(){
    let bar1 = document.getElementById('bar1')
    let bar2 = document.getElementById('bar2')
    let bar3 = document.getElementById('bar3')
    let navItens = document.getElementById('navItens')

    bar1.classList.toggle('active')
    bar2.classList.toggle('active')
    bar3.classList.toggle('active')
    navItens.classList.toggle('active')
}

//NAVBAR LINK ACTIVE STATE
let titulo = document.getElementById('titulo')
let navLink1 = document.getElementById('navLink1')
let navLink2 = document.getElementById('navLink2')
let navLink3 = document.getElementById('navLink3')

if(titulo.innerText == 'Notícias'){
    navLink1.classList.toggle('active')
}
if(titulo.innerText == 'Análise'){
    navLink2.classList.toggle('active')
}
if(titulo.innerText == 'Contactos'){
    navLink3.classList.toggle('active')
}