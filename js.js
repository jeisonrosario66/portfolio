// elemento: boton del cabezera_2 Para cambiar el estilo al precionar
// elemento_subx: botones de enlaces para ocultar el menu al precionar
const elemento = document.getElementById("menu_burger");
const elemento_sub = document.getElementById("sub_inicio");
const elemento_sub2 = document.getElementById("sub_about");
const elemento_sub3 = document.getElementById("sub_skills");
const elemento_sub4 = document.getElementById("sub_portafolio");
const elemento_sub5 = document.getElementById("sub_contacto");
const menu_lateral = document.getElementById("menu_lateral");
const info_principal = document.getElementById("info_principal");
// interructr: indica si el menu lateral se muestra o no
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

// Hover del boton contactame
const elemento_btn_contacto = document.getElementById("btn_contacto");
const tagI = document.getElementById("btn_contacto_tag");
const tagI2 = document.getElementById("btn_contacto_tag2");
elemento_btn_contacto.addEventListener("mouseover", function() {
    tagI.classList.add("btn_contato_tags_active")
    tagI2.classList.add("btn_contato_tags_active")
});
elemento_btn_contacto.addEventListener("mouseout", function() {
    tagI.classList.remove("btn_contato_tags_active")
    tagI2.classList.remove("btn_contato_tags_active")
});


//Descargar Cv
let cvUrl = "source/pdf/jeison_rosario_cv.pdf"
const cvBtn = document.getElementById("btn_cv");
cvBtn.addEventListener("click", function() {
    window.open(cvUrl, 'Download');
})