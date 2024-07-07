document.addEventListener('DOMContentLoaded', ()=>{
    iniciarBehavior();
})


function iniciarBehavior(){
    const servicios = document.querySelectorAll('.servicio');

    servicios.forEach(servicio =>{
        servicio.addEventListener('click', function(e){
            const parrafo = servicio.querySelector('.parrafo-servicio');
            parrafo.classList.toggle('extend-parrafo');
        })
    })
}