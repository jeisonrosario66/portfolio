const elemento = document.getElementById("menu_burger");
const elemento_sub = document.getElementById("sub_inicio");
const elemento_sub2 = document.getElementById("sub_about");
const elemento_sub3 = document.getElementById("sub_skills");
const elemento_sub4 = document.getElementById("sub_portafolio");
const elemento_sub5 = document.getElementById("sub_contacto");


let interructor = false
function sub() {
    if (interructor === true) {
        info_principal.classList.remove("if_prcp_dsplz");
        info_principal.classList.add("if_prcp_cntr");

        menu_lateral.classList.remove("mn_ltl_active");
        menu_lateral.classList.add("mn_ltl_none");
        
        elemento.classList.remove("fa-bars-staggered")
        elemento.classList.add("fa-bars")

        interructor = false
    }
}
function validaClick(){
    const menu_lateral = document.getElementById("menu_lateral");
    const info_principal = document.getElementById("info_principal");
    if (interructor === false) {
        info_principal.classList.remove("if_prcp_cntr");
        info_principal.classList.add("if_prcp_dsplz");

        menu_lateral.classList.remove("mn_ltl_none");
        menu_lateral.classList.add("mn_ltl_active");

        elemento.classList.remove("fa-bars")
        elemento.classList.add("fa-bars-staggered")

        interructor = true
    }else {
        info_principal.classList.remove("if_prcp_dsplz");
        info_principal.classList.add("if_prcp_cntr");

        menu_lateral.classList.remove("mn_ltl_active");
        menu_lateral.classList.add("mn_ltl_none");
        
        elemento.classList.remove("fa-bars-staggered")
        elemento.classList.add("fa-bars")

        interructor = false
    }
};

elemento.addEventListener("click", validaClick);
elemento_sub.addEventListener("click", sub);
elemento_sub2.addEventListener("click", sub);
elemento_sub3.addEventListener("click", sub);
elemento_sub4.addEventListener("click", sub);
elemento_sub5.addEventListener("click", sub);


