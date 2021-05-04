 $('.editServiceBtn').on('click', function() {
     var ServiceId = $(this).attr('data-Serviceid');
     $.ajax({
         type: 'get',
         url: url + '/services/' + ServiceId + '/edit',
         success: function(data) {
             $('.requestServiceData').html(data);
         }
     });
 });

 /*** Open Deleting Category  Modal ***/
 $('.ServiceDelete').on('click', function() {
     var ServiceId = $(this).attr('data-Serviceid');
     $('#deleteServiceBtn').val(ServiceId);
 });

 /*** Deleting Category  ***/
 $('#deleteServiceBtn').on('click', function() {
     var ServiceId = $(this).val();
     $.ajax({
         type: 'post',
         url: url + '/services/' + ServiceId,
         data: { id: ServiceId, _token: token, _method: 'DELETE' },
         success: function(data) {
             // $("#deleteCatModal").modal("hide");
             $("#target_" + ServiceId).hide();

             $('#message').html(data);
             swal({
                 icon: "success",
                 text: "Service Deleted Successfuly!",
                 icon: 'success'
             });
         },

     });
 });

 /*** Open Deleting Category  Modal ***/
 $('.delete_portfolio_image').on('click', function() {
     var portfolioID = $(this).attr('data-portfolioID');
     swal({
             title: "Do you want to delete this Portfolio Image?",
             text: "Once deleted, you will not be able to recover this Portfolio Image!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
         })
         .then((willDelete) => {
             if (willDelete) {
                 $.ajax({
                     type: 'post',
                     url: url + '/portfolio_image_delete/' + portfolioID,
                     data: { id: portfolioID, _token: token },
                     success: function(data) {
                         // $("#deleteCatModal").modal("hide");
                         $("#target_" + portfolioID).hide();

                         $('#message').html(data);
                         swal({
                             icon: "success",
                             text: "Portfolio Image Deleted Successfuly!",
                             icon: 'success'
                         });
                     },

                 });
             }
         });
     //  $('#deletePortfolioBtn').val(portfolioID);
 });

 /*** Deleting Category  ***/
 //  $('#deletePortfolioBtn').on('click', function() {
 //      var portfolioID = $(this).val();
 //      $.ajax({
 //          type: 'post',
 //          url: url + '/portfolio_image_delete/' + portfolioID,
 //          data: { id: portfolioID, _token: token },
 //          success: function(data) {
 //              // $("#deleteCatModal").modal("hide");
 //              $("#target_" + portfolioID).hide();

 //              $('#message').html(data);
 //              swal({
 //                  icon: "success",
 //                  text: "Image Deleted Successfuly!",
 //                  icon: 'success'
 //              });
 //          },

 //      });
 //  });

 // open edit categoory modal
 $('.editCatBtn').on('click', function() {
     var catID = $(this).data('catid');
     $.ajax({
         type: 'get',
         url: url + '/dashboard/categories/' + catID + '/edit',
         success: function(data) {
             $('.requestCatData').html(data);

         }
     });
 });

 /*** Open Deleting Category  Modal ***/
 $('.catDelete').on('click', function() {
     var catID = $(this).data('catid');

     $('#deleteCatBtn').val(catID);
 });

 /*** Deleting Category  ***/
 $('#deleteCatBtn').on('click', function() {
     var catID = $(this).val();
     $.ajax({
         type: 'post',
         url: url + '/dashboard/categories/' + catID,
         data: { id: catID, _token: token, _method: 'DELETE' },
         success: function(data) {
             $("#target_" + catID).hide();
             $("#deleteCatModal .close").click();
             swal({
                 icon: "success",
                 text: "Category Deleted Successfuly!",
                 icon: 'success'
             });
         },


     });
 });