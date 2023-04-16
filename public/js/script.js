/*
document.querySelector('#formulario').
onsubmit = (event)=>{
    event.preventDefault()
    alert('Dados enviados com sucesso');
}
*/

let entrada = document.querySelectorAll('.entrada')

entrada.forEach((n,i)=>{
    entrada[i].onmouseenter = ()=>{
        entrada[i].style.background = "rgb(238, 238, 242)"
        if(n.name == 'nome'){
            n.placeholder = "Não esqueça do sobrenome"
        }
        else if(n.name == 'email'){
            n.placeholder = "email que você tem acesso"
        }
    }

    entrada[i].onmouseout = ()=>{
        entrada[i].style.background = '#ffffff'
        if(n.name == 'nome'){
            n.placeholder = "Digite seu nome completo"
        }
        else if(n.name == 'email'){
            n.placeholder = "email"
        }
    }
})

let nomeAutor = document.querySelector('.nome-autor')
nomeAutor.style.cursor = "pointer"

nomeAutor.addEventListener('click',abrirLink)

function abrirLink(){
    window.open("https://github.com/MarcosPauloMacedo")
}