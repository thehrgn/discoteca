<h1>Genres</h1>

<div class="ui grid">
    <div class="four column row">

      <div class="right floated column">
        <button class="ui  primary button" id="btnAdd" name="btnAdd">
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



<div class="ui modal mini">
  <i class="close icon"></i>
  <div class="header">
    New Genre
  </div>
  <form class="ui form" name="formAdd" id="formAdd" method="post">
    <div class="field">
    <label>Name</label>
      <div class=" fields">
        <div class="field">
          <input type="text" id="nameG" name="nameG" placeholder="Name">
        </div>
      </div>
    </div>
  </form>
  <div class="actions">
    <div class="ui deny button" id="btnCancel" name="btnCancel">Cancel</div>
    <div class="ui positive button " id="btnSave" name="btnSave">OK</div>
  </div>
</div>

<script type="text/javascript">

$(document).ready( function () {

  //DataTable definition
var tableG = $('#tableGenres').DataTable(
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

  $("#btnAdd").click(function (){
      var modal= $('.ui.modal').modal(
        {
        closable  : false,
        onDeny    : function(){
          window.alert('Wait not yet!');
          return false;
    },
    onApprove : function() {
      save(tableG);
    }
  }).modal("show");
    });

} );

function save(tableG)
{
  $.ajax({
        method: "POST",
          url: "<?php echo $this->url->get('genres/save') ?>",
        data: { name: $("#nameG").val() }
      }).done(function( msg ) {
          //console.log(msg);

          tableG.ajax.reload();
        });
}

function editP(vari){}
function deleteP(va){}

</script>
