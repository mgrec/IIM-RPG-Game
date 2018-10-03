/** CHOOSE CLASS APP.JS **/

$(document).ready(function () {
   if ($('.website-choose-class').length > 0){

       $('.btn-choose').on('click', function () {

           // color btn
           $('.btn-choose').removeClass('active');
           $(this).addClass('active');

           // get class id
           var _id = $(this).data('id');
           $('.input-class').val(_id);
       });

   }
});