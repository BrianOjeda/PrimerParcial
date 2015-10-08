 <div id="contenedor">
      <button type="button" id="btnGuardar" class="btn btn-primary" onclick="Geolocalizacion.Marcador.guardar()" title="Guarda en un archivo de texto">Descargar mi marcador</button>
        <div id="mostrarMapa" style="height: 650px;">
             <script async defer src="https://maps.google.com/maps/api/js?signed_in=true&callback=Geolocalizacion.Marcador.iniciar"></script>
        </div>
     <input type="hidden" name="punto" id="punto" readonly>
     <input type="hidden" name="id" id="id" readonly>
</div>
