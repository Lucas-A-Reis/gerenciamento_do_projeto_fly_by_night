'use strict'

const links = document.querySelectorAll('.excluir');

for(const link of links){
    link.addEventListener("click", function(event){
        event.preventDefault();
        console.log('aaaa');
        let resposta = confirm('Deseja realmente excluir esse registro?');
        if(resposta){
            location.href = link.href;
        }
    })
}

