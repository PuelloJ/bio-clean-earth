function reciclar() {
    window.location.replace("?controlador=paginas&accion=reciclaje");
}

function residuo(){
  window.location.replace("?controlador=paginas&accion=reciclaje");
}

const open = document.getElementById('btn-reciclar');
const modal_container = document.getElementById('modal_container');
const modal_container1 = document.getElementById('modal_container1');
const close = document.getElementById('close');
const closeDialog = document.getElementById('closeDialogo');
const closeDialo = document.getElementById('closeDialog');


closeDialog.addEventListener('click', () => {
    modal_container.classList.remove('showDialog'); 
})

open.addEventListener('click', () => {
  modal_container1.classList.add('show');  
});

closeDialo.addEventListener('click', () => {
  modal_container1.classList.remove('show');
});


