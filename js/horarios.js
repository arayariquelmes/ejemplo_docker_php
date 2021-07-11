
window.addEventListener("DOMContentLoaded", async ()=>{
    const ulHorarios = document.querySelector(".ul-horarios");
    let resp = await axios.get("http://localhost:8082/api/horarios/get.php");
    let horarios = resp.data;
    horarios.forEach(h=>{
        let horarioLi = document.createElement("li");
        if(h.nro == new Date().getDay()){
            horarioLi.classList.add("text-primary");
        }
        horarioLi.innerText = h.dia
        horarioLi.classList.add("list-unstyled-item","list-hours-item", "d-flex");
        let horarioSpan = document.createElement("span");
        if(h.abierto){
            horarioSpan.innerText = `${h.hora_inicio} hrs a ${h.hora_fin} hrs`;
        }else {
            horarioSpan.innerText = "Cerrado";
        }
        horarioSpan.classList.add("ml-auto");
        horarioLi.appendChild(horarioSpan);
        ulHorarios.appendChild(horarioLi);
    });
});