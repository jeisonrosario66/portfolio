const elemento = document.getElementById("menu_burger");
let interructor = false
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

