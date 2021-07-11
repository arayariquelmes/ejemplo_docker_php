window.agregarAlCarro = function(){
    let guardados = localStorage.getItem("productos");
    let productos = [];
    if(guardados){
        productos = JSON.parse(guardados);
    }
    productos.push(this.producto);

    localStorage.setItem("productos", JSON.stringify(productos));
    window.actualizarCarro();
    toastr.info("Producto agregado al carro!");
    this.classList.remove('btn-primary');
    this.classList.add('btn-info');
};
window.addEventListener("DOMContentLoaded", async ()=>{
    const moldeProducto = document.querySelector("#moldes > .molde-producto");
    const contenedorProductos = document.querySelector("#contenedor-productos");
    let resp = await axios.get("http://localhost:8082/api/productos/get.php");
    let productos = resp.data;
    productos.forEach(p=>{
        let nuevoProd = moldeProducto.cloneNode(true);
        nuevoProd.querySelector(".titulo-cafe-span").innerText= p.nombre;
        nuevoProd.querySelector(".precio-cafe-span").innerText = numeral(p.precio).format('$0,0');
        nuevoProd.querySelector('.agregar-cafe-btn').producto = p;
        nuevoProd.querySelector('.agregar-cafe-btn').addEventListener("click", window.agregarAlCarro);
        nuevoProd.querySelector(".foto-cafe-img").src = `img/${p.foto}`;
        nuevoProd.querySelector('.descripcion-cafe-div > p').innerText = p.descripcion;
        contenedorProductos.appendChild(nuevoProd);
    });
});