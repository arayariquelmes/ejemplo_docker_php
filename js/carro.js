window.actualizarCarro = function(){
    let productos = localStorage.getItem("productos");
    if(productos){
        productos = JSON.parse(productos);
    } else{
        productos = [];
    }
    
    document.querySelector("#cantidad-productos-carro").innerText = productos.length;
};
window.addEventListener('DOMContentLoaded', ()=>{

    window.actualizarCarro();
});

document.querySelector('.carro-btn').addEventListener('click', ()=>{
    let productos = localStorage.getItem("productos");
    if(productos){
        productos = JSON.parse(productos);
    } else{
        productos = [];
    }
    const moldeCarro = document.querySelector('.molde-carro').cloneNode(true);
    let total = 0;

    productos.forEach(p=>{
        let tr = document.createElement('tr');
        let tdNombre = document.createElement('td');
        let tdPrecio = document.createElement('td');
        tdNombre.innerText = p.nombre;
        tdPrecio.innerText = `${numeral(p.precio).format('$0,0')}`;
        tr.appendChild(tdNombre);
        tr.appendChild(tdPrecio);
        moldeCarro.querySelector('tbody').appendChild(tr);
        total+=+p.precio;
    });
    moldeCarro.querySelector('.precio-total-span').innerText = `${numeral(total).format('$0,0')}`;
    Swal.fire({title:'Total',html: moldeCarro.innerHTML, confirmButtonText:'Pagar!'});
});