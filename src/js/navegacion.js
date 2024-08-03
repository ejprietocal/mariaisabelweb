document.addEventListener('DOMContentLoaded', function(e){
    navBehavior();
    scrollNav();
});

function navBehavior(){
    const hamburguesa = document.querySelector('.hamburguer');
    const menu = document.querySelector('.listado-opciones');
    hamburguesa.addEventListener('click',()=>{
        hamburguesa.classList.toggle('activo');
        menu.classList.toggle('show-menu');
    })
}

function scrollNav(){
    
    const seccion2 = document.querySelector('.seccion2');
    const seccion4 = document.querySelector('.seccion4');
    const seccion7 = document.querySelector('.seccion7');
    const seccion1 = document.querySelector('.seccion1');
    const opcion = document.querySelectorAll('.opcion');
    const logo = document.querySelector('#logo-principal');


    opcion.forEach(opcion=>{
        opcion.addEventListener('click', ()=>{
            const opcionId = opcion.id;

            if(opcionId === 'sobre'){
                seccion4.scrollIntoView({
                    behavior: "smooth"
                });
            }
            else if(opcionId === 'servicios'){
                seccion2.scrollIntoView({
                    behavior: "smooth"
                });
            }
            else if(opcionId === 'contacto'){
                seccion7.scrollIntoView({
                    behavior: "smooth"
                });
            }
        })
    })

    logo.addEventListener('click', function(e){
        seccion1.scrollIntoView({
            behavior: "smooth"
        });
    });




}