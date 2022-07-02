//prevent default fomr
const form = document.querySelector('#formularioRegister');
console.log(form);
form.addEventListener('submit', function (event) {
    event.preventDefault();
})

//
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
function ocultarLista1() {
    $btn1.style.display = 'none'
}
function mostrarLista1() {
    $btn1.style.display = 'block'
}
function ocultarLista2() {
    $btn2.style.display = 'none'
}
function mostrarLista2() {
    $btn2.style.display = 'block'
}
function ocultarLista3() {
    $btn3.style.display = 'none'
}
function mostrarLista3() {
    $btn3.style.display = 'block'
}
function ocultarLista4() {
    $btn4.style.display = 'none'
}
function mostrarLista4() {
    $btn4.style.display = 'block'
}
function ocultarLista5() {
    $btn5.style.display = 'none'
}
function mostrarLista5() {
    $btn5.style.display = 'block'
}
function ocultarLista6() {
    $btn6.style.display = 'none'
}
function mostrarLista6() {
    $btn6.style.display = 'block'
}

//paso a pasos
function mostrarSiPaso1() {
    DivPaso1Si.style.display = 'block'
    DivPaso1No.style.display = 'none'
}
function mostrarNoPaso1() {
    DivPaso1No.style.display = 'block'
    DivPaso1Si.style.display = 'none'
}
function mostrarSiPaso2() {
    DivPaso2Si.style.display = 'block'
    DivPaso2No.style.display = 'none'
}
function mostrarNoPaso2() {
    DivPaso2No.style.display = 'block'
    DivPaso2Si.style.display = 'none'
}
function mostrarSiNoPaso1() {
    DivPaso1SiNo.style.display = 'block'
    DivPaso1NoNo.style.display = 'none'
}
function mostrarNoNoPaso1() {
    DivPaso1NoNo.style.display = 'block'
    DivPaso1SiNo.style.display = 'none'
}
function mostrarSiSiNoPaso1() {
    DivPaso1SiSiNo.style.display = 'block'
    DivPaso1NoSiNo.style.display = 'none'
}
function mostrarNoSiNoPaso1() {
    DivPaso1NoSiNo.style.display = 'block'
    DivPaso1SiSiNo.style.display = 'none'
}
function mostrarSiNoSiNoPaso1() {
    DivPaso1SiNoSiNoPaso1.style.display = 'block'
    DivPaso1NoNoSiNoPaso1.style.display = 'none'
}
function mostrarNoNoSiNoPaso1() {
    DivPaso1NoNoSiNoPaso1.style.display = 'block'
    DivPaso1SiNoSiNoPaso1.style.display = 'none'
}
