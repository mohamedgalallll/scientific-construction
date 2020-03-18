<script>
  $(document).on('click', '.action-delete', function (e) {
            var id = $(this).data("id");
              Swal.fire({
                  title: 'Are you sure?',
                  text: "You won't be able to revert this!",
                  type: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Yes, delete it!',
                  confirmButtonClass: 'btn btn-danger',
                  cancelButtonClass: 'btn btn-32 ml-1',
                  buttonsStyling: false,
              }).then(function (result) {
                if (result.value) {
            $.ajax(
                {
                    url: "{{url('notifications/deleteComment')}}/"+id,
                    type: 'DELETE',
                    dataType: "JSON",
                    data: {
                        "id": id,
                        "_method": 'DELETE',
                        "_token": "{{csrf_token()}}"
                    },
                    success: function(data, status) {
                   if (data == true) {
                       Swal.fire({
                           type: "success",
                           title: 'Deleted!',
                           text: 'Your file has been deleted.',
                           confirmButtonClass: 'btn btn-success',
                       });
                       window.location.reload();
                   }else {
                       console.log()
                       Swal.fire({
                           title: 'There is Some Thing Wrong',
                           text: data,
                           type: 'error',
                           confirmButtonClass: 'btn btn-success',
                       })
                   }
                    },
                    fail: function(xhr, textStatus, errorThrown){
                        alert('request failed');
                    }
                });
        }
                  else if (result.dismiss === Swal.DismissReason.cancel) {
                      Swal.fire({
                          title: 'Cancelled',
                          text: 'Your Data  is safe :)',
                          type: 'error',
                          confirmButtonClass: 'btn btn-success',
                      })
                  }
              })
          });
</script>

