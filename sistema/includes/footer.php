</div>
<footer class="footer">
  <div class="footer__block block no-margin-bottom">
    <div class="container-fluid text-center">
      <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      <p class="no-margin-bottom"><?php echo fechaPeru(); ?> &copy; Sistema Pesquero <a href="https://angelsifuentes.com">Argenis Uceda</a>.</p>
    </div>
  </div>
</footer>
</div>
</div>
<!-- JavaScript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="js/Chart.bundle.min.js"></script>
<script src="js/front.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/sweetalert2@10.js"></script>
<script type="text/javascript" src="js/producto.js"></script>
<script type="text/javascript" src="js/all.min.js"></script>

<script src='https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
<script src='https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js'></script>

<script src='https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/datatables-buttons-excel-styles@1.2.0/js/buttons.html5.styles.templates.min.js'></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      dom: "Bfrtip",
      buttons: {
        dom: {
          button: {
            className: "btn"
          }
        },
        buttons: [{
          extend: "excel", // Extend the excel button
          text: "Generar Excel",
          className: "btn btn-outline-success ",
          excelStyles: { // Add an excelStyles definition
            template: "blue_medium", // Apply the 'blue_medium' template
          },
        }, ],
      },
      language: {
        "decimal": "",
        "emptyTable": "No hay datos",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
        "infoEmpty": "Mostrando 0 a 0 de 0 registros",
        "infoFiltered": "(Filtro de _MAX_ total registros)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ registros",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "No se encontraron coincidencias",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        },
        "aria": {
          "sortAscending": ": Activar orden de columna ascendente",
          "sortDescending": ": Activar orden de columna desendente"
        }
      }
    });
    var usuarioid = '<?php echo $_SESSION['idUser']; ?>';
    searchForDetalle(usuarioid);
  });
</script>
</body>

</html>