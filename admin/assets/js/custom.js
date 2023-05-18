$(document).ready(function () {
  $(".delete_product_btn").click(function (e) {
    e.preventDefault();
    var id = $(this).val();
    // alert(id);
    // sweet alert
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-success",
                cancelButton: "btn btn-danger",
            },
            buttonsStyling: false,
            });

            swalWithBootstrapButtons
            .fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true,
            })
            .then((result) => {
                if (result.isConfirmed) {
                 $.ajax({
                    method:"POST",
                    url:'code.php',
                    data:{
                      'product_id':id,
                      'delete_product_btn': true,
                    },
                    success: function(response){
                        // console.log(response);
                        if(response == 200 )
                        {
                            Swal.fire(
                                'Success  ?',
                                'Product delete successfully!',
                                'success'
                              );
                              $("#product_table").load(location.href + "#product_table");
                              location.reload();
                        } else if(response == 500){
                              Swal.fire(
                                'Error ?',
                                'Product delete successfully!',
                                'error'
                              );
                        }
                    }

                 });
                }
            });
    //end
  });
});
