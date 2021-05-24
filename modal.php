
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Delete Kontakt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form action="loeschen.php" method="POST">

        <div class="modal-body">
          <h4>Möchtst Du wircklich Datensatz löschen?!</h4>            
          <input id="idd" name="idd" type="hidden" value="" >        
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="deleteData"class="btn btn-primary" >Delete</button>
        </div>
        
     </form>   
    </div>
  </div>
</div>