$(document).ready(function() {
    $("#btnComentarios").click(function(e) {
        e.preventDefault();
        var fecha = $("#fecha").val().trim();
        var nombre = $("#nombre").val().trim();
        var correo = $("#correo").val().trim();
        var asunto = $("#asunto").val().trim();
        var mensaje = $("#mensaje").val().trim();

        console.log(fecha + " " + nombre + " " + correo + " " + asunto + " " + mensaje + " ");

        mostrarDato();
    }); //end #btnRegistrar

    async function mostrarDato() {
        const datos = new FormData(document.getElementById('contacto2'));

        await fetch('data/contacto.php', {
                method: 'POST',
                body: datos
            })
            .then(response => response.json())
            .then(response => {
                if (response.dato == 'ok') {
                    location.href = "index.html";
                } else {
                    alert("ERROR EN LOS DATOS");
                }
            })
            .catch(err => {
                console.log(err);
            });
    } //end mostrarDato
});