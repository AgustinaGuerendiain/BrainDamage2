"use strict"


document.addEventListener('DOMContentLoaded', ()=>{


    getComentariosDeItem();

    let form = document.getElementById("form-comentario");
    if (form) {
        form.addEventListener('submit', e => {
        //evita el envio del formulario
        e.preventDefault();

        addComentario();
    } );
    }
    

});

//MUESTRO TODOS LOS COMENTARIOS DE UN ITEM
function getComentariosDeItem(){

    let id = getItemId();

    //el fetch por default hace un GET, por eso no indico verbo
    fetch('api/comentarios/'+ id)
        .then(response=> response.json())
        .then(comentario=> render(comentario))
        .catch(error=> console.log(error));
}

//OBTENGO EL ID DEL PRODUCTO
function getItemId() {
    let params = window.location.href.split("/");
    return params[parseInt(params.length) - 1];
}

//PARA AGREGAR COMENTARIOS
function addComentario(){

    let formComentario = document.getElementById("form-comentario");
    let idUsuario = formComentario.dataset.iduser;
    let id_producto = getItemId();
    const comentario = {
        id_cerveza: id_producto,
        id_usuario: idUsuario,
        comentario: document.getElementById("comentario").value,
        valoracion: document.getElementById("valoracion").value
    }
    
    fetch('api/comentario',{
        method: 'POST',
        headers: {'Content-Type': 'application/json'},       
        body: JSON.stringify(comentario) 
    }).then(response=>response.json())
    .then(comentario=> getComentariosDeItem())
    .catch(error=> console.log(error));

}

//PARA BORRAR
function deleteComentario($id){

    fetch('api/comentario/'+ $id, {
        method: 'DELETE'
    })
    .then(response=> response.json())
    .then(comentario=> getComentariosDeItem() )
    .catch(error=> console.log(error));
    
}

//PARA FORMAR EL COMENTARIO
function render(comentarios){

    let admin = document.getElementById("contenedor").dataset.admin;

    const container = document.getElementById('comentarios');
    container.innerHTML = "";
    for (let comentario of comentarios){

        //COMENTARIO
        let nombre = document.createTextNode(comentario.comentario);
        let itemLista = document.createElement('li');
        itemLista.setAttribute("class","list-group-item d-flex justify-content-between align-items-center");
        itemLista.appendChild(nombre);

        //VALORACION
        let puntuacion = document.createTextNode("Valoracion " + comentario.valoracion);
        let valoracion = document.createElement('span');
        valoracion.appendChild(puntuacion);
        valoracion.setAttribute("class","badge badge-primary badge-pill");
        itemLista.appendChild(valoracion);

        //BOTON BORRAR
        if (admin && admin == 1) {
           let boton = document.createElement('button');
            boton.setAttribute("class","btn btn-outline-danger");
            boton.setAttribute("id",comentario.id_comentario);
            boton.innerHTML="Borrar";
            boton.addEventListener('click',()=>{
                deleteComentario(boton.id);
            });
            itemLista.appendChild(boton); 
        }
        

        container.appendChild(itemLista);
    }
}
