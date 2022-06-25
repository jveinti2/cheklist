const $ = (selector) => document.querySelector(selector)
//btns sidebar
const $btn1 = $('#lista_btn-1')
const $btn2 = $('#lista_btn-2')
const $btn3 = $('#lista_btn-3')
const $btn4 = $('#lista_btn-4')
const $btn5 = $('#lista_btn-5')
const $btn6 = $('#lista_btn-6')

//btns paso a pasos
const $DivRetencion1Si = $('#DivRetencion1Si')
const $DivRetencion1No = $('#DivRetencion1No')

const $DivRetencion2Si = $('#DivRetencion2Si')
const $DivRetencion2No = $('#DivRetencion2No')



//funciones accionadoras de subtemas
function ocultarLista1 () {
    $btn1.style.display = 'none'
}
function mostrarLista1 () {
    $btn1.style.display = 'block'  
}
function ocultarLista2 () {
    $btn2.style.display = 'none'
}
function mostrarLista2 () {
    $btn2.style.display = 'block'  
}
function ocultarLista3 () {
    $btn3.style.display = 'none'
}
function mostrarLista3 () {
    $btn3.style.display = 'block'  
}
function ocultarLista4 () {
    $btn4.style.display = 'none'
}
function mostrarLista4 () {
    $btn4.style.display = 'block'  
}
function ocultarLista5 () {
    $btn5.style.display = 'none'
}
function mostrarLista5 () {
    $btn5.style.display = 'block'  
}
function ocultarLista6 () {
    $btn6.style.display = 'none'
}
function mostrarLista6 () {
    $btn6.style.display = 'block'  
}

//paso a pasos
function mostrarSiPaso1 () {
    DivRetencion1Si.style.display = 'block'
    DivRetencion1No.style.display = 'none'
}
function mostrarNoPaso1 () {
    DivRetencion1No.style.display = 'block'
    DivRetencion1Si.style.display = 'none'
}
function mostrarSiPaso2 () {
    DivRetencion2Si.style.display = 'block'
    DivRetencion2No.style.display = 'none'
}
function mostrarNoPaso2 () {
    DivRetencion2No.style.display = 'block'
    DivRetencion2Si.style.display = 'none'
}
