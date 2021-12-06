

$(obtener_registros());

function obtener_registros(dato)
{
	$.ajax({
		url : 'consulta.php',
		type : 'POST',
		
		data : { datoenv: dato},
		})

	.done(function(resultado){
		$("#tabla_resultado").html(resultado);
	});
}
$(document).on('keyup', '#busqueda', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});