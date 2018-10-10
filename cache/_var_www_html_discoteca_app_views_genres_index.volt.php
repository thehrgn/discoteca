<h1>Genres</h1>

<div class="ui grid">
    <div class="four column row">

      <div class="right floated column">
        <button class="ui  primary button">
            <i class="icon add"></i>
            Add Genre
          </button>

      </div>
  </div>

  <div class="row">
    <table class="ui celled table" id="tableGenres">
      <thead>
        <th>Name</th><th>Options</th>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>




<script type="text/javascript">

$(document).ready( function () {

  //DataTable definition
var table = $('#tableGenres').DataTable(
  {
    processing:true,
    serverSide:false,
    ajax: {
                "url": "<?php echo $this->url->get('genres/datatable') ?>",
                "type": "POST",
            },
            columns: [
                {data: "name" },
                {
                   sortable: false,
                   "render": function ( data, type, full, meta ) {
                       return '<div class="ui buttons"><button class="ui positive button" onclick="editP('+full.id+')"  > <i class="icon edit"></i>                       </button>                       <div class="or" data-text="O"></div> <button class="ui negative button" onclick="deleteP('+full.id+')"><i class="icon erase"></i> </button> </div>';
                   }
               }
              ],
       "language": {
           "lengthMenu": "Mostrar _MENU_ resultados por pagina",
           "zeroRecords": "Ninguna coincidencia - Intente nuevamente",
           "info": "Mostrando pagina _PAGE_ de _PAGES_",
           "infoEmpty": "Sin información disponible",
           "search":"Buscar:",
           "infoFiltered": "(filtrado del total de _MAX_ registros)"
       }
   }
);//Close DataTable



} );


function editP(vari){}
function deleteP(va){}

</script>
