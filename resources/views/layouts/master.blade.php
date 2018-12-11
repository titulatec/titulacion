<script src="{{asset('js/app.js')}}"></script>

<script>
  
  $('#edit').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) 
      var nombre = button.data('mytitle') 
      var description = button.data('mydescription') 
      var cat_id = button.data('catid') 
      var modal = $(this)
      modal.find('.modal-body #title').val(nombre);
      modal.find('.modal-body #des').val(description);
      modal.find('.modal-body #cat_id').val(cat_id);
})