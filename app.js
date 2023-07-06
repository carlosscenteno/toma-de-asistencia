document.getElementById('formulario').addEventListener('submit', function(e) {
    
    e.preventDefault();

    let formulario = new FormData(document.getElementById('formulario'));

    fetch('registrar.php', {
        method: 'POST',
        body: formulario
    })
    .then(res => res.json())
    .then(data => {
        if(data == 'true') {
            document.getElementById('fecha').value = '';//es el id que esta en el formulario//
            document.getElementById('hora').value = '';//es el id que esta en el formulario//
            document.getElementById('tipo').value = '';//es el id que esta en el formulario//
            document.getElementById('hermanos_fi').value = '';//es el id que esta en el formulario//
            document.getElementById('visitas_fi').value = '';//es el id que esta en el formulario//
            document.getElementById('ninos_fi').value = '';//es el id que esta en el formulario//
            document.getElementById('hermanos_fii').value = '';//es el id que esta en el formulario//
            document.getElementById('visitas_fii').value = '';//es el id que esta en el formulario//
            document.getElementById('ninos_fii').value = '';//es el id que esta en el formulario//
            document.getElementById('hermanos_fiii').value = '';//es el id que esta en el formulario//
            document.getElementById('visitas_fiii').value = '';//es el id que esta en el formulario//
            document.getElementById('ninos_fiii').value = '';//es el id que esta en el formulario//
            document.getElementById('total_hermanos').value = '';//es el id que esta en el formulario//
            alert('se insertó correctamente.');
        } else {
            console.log(data);
        }
    });

});

