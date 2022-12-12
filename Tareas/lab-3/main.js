function login() {
    const user = document.getElementById('usuario').value
    const password = document.getElementById('password').value
    if(!user) {
        alert('Usuario es requerido!')
        return 
    }
    if(!password) {
        alert('Contraseña es requerido!')
        return
    }

    var ajax = new XMLHttpRequest();
    var formulario = document.getElementById("form-login");
    var datos = new FormData(formulario);
    ajax.open("POST", "autenticar.php", false);
    ajax.onreadystatechange = function()
    {
        if(ajax.readyState == 4 && ajax.status == 200)
        {
            const resultado = JSON.parse(ajax.responseText)
            console.log(resultado)
            if(resultado.length > 0) window.location = 'fitroduccion.html'; 
             else alert('Datos incorrecto!')
            
        }
    }
    ajax.send(datos);
}
let carreras = []
function cargarCarreras() {
    fetch('listar-carreras.php')
    .then(response => response.text())
    .then(data => {
        carreras = JSON.parse(data);
    })
    .catch(error => console.log(error));
}
num = 0;
function addDatos() {
    let numero = document.getElementById('numero').value
    num = parseInt(numero);
    let opciones = ''
    for(let i = 0; i < carreras.length; i++) {
        opciones += `<option value="${carreras[i].id}">${carreras[i].nombre}</option>`
    }
    let html = ''
    for(let i = 0; i < num; i++){ 
        html += `<tr>
            <td>
                <input type="text" id="nombre-${i}"/>
            </td>
            <td>
                <input type="text" id="apellido-${i}"/>
            </td>
            <td>
                <input type="text" id="cu-${i}"/>
            </td>
            <td>
                Hombre
                <input type="radio" name="contact-${i}" checked id="h-${i}"/>
                Mujer
                <input type="radio" name="contact-${i}" id="m-${i}"/>
            </td>
            <td>
                <select id="carrera-${i}">
                ${opciones}
                <select>
            </td>
        </tr>`
    }
    document.getElementById('formulario').innerHTML = html
}
function Limpiar() {
    document.getElementById('formulario').innerHTML = ''

}

num = 0;
function Agregar() {
    console.log('aqui')
    let nombres = []
    let apellidos = []
    let cu = []
    let sexo = []
    let carreras = []
    for(let i = 0; i < num; i++){ 
        nombres.push(document.getElementById(`nombre-${i}`).value)
        apellidos.push(document.getElementById(`apellido-${i}`).value)
        cu.push(document.getElementById(`cu-${i}`).value)
        sexo.push(document.getElementById(`m-${i}`).checked ? 'H' : 'M')
        carreras.push(document.getElementById(`carrera-${i}`).value)
    }

    var datos = new FormData();
    datos.append('nombres', JSON.stringify(nombres));
    datos.append('apellidos', JSON.stringify(apellidos));
    datos.append('cu', JSON.stringify(cu));
    datos.append('sexo', JSON.stringify(sexo));
    datos.append('carreras', JSON.stringify(carreras));

    fetch("insert.php",
        {
            method: "POST",
            body: datos
        })
        .then(response => response.text())
        .then(data => {
            console.log(data)
            alert('registrado correctamente')
        })
        .catch(error => console.log(error));
}

function enterNum (value) {
    const data = (num ? num : '') + '' + value
    document.getElementById('result').innerHTML = data
    num = parseInt(data)
    console.log(num)
}
function Lim() {
    document.getElementById('result').innerHTML = ''
    num = 0
}
function calcular() {
    let fibonacci = [];
    fibonacci[0] = 0;
    fibonacci[1] = 1;
    document.getElementById('result').innerHTML = ''
    for (var i = 2; i < num; i++) {
        fibonacci[i] = fibonacci[i - 2] + fibonacci[i - 1];
        document.getElementById('result').innerHTML += ' - ' + fibonacci[i] 
    }
}