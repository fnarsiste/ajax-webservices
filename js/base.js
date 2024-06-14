let messageResponse = "";

function finalize(state) {
   $('#js-from-entry').find('button').prop('disabled', false).html('Ajouter la nouvelle entrée');
   $('#js-from-entry')
      .find('input, select').val('')
      .find('#first_name').focus();
   if (state) {
      $('.alert-success').show().html(messageResponse);
      list();
   } else {
      $('.alert-danger').show().html(messageResponse);
   }
   setTimeout(() => {
      $('.alert').hide();
   }, 3000);
}

function list() {
   const $elt = $('#js-directory tbody');
   $.ajax({
      url: 'core/processing.php?action=list',
      method: 'GET',
      dataType: 'json',
      success: function(response) {
         console.log(response);
         $elt.html(response.html);
      },
      error: function(err) {
         console.error(err);
         $elt.html(`<tr><td colspan="7"><div class="text-center">${err.responseText}</div></td></tr>`)
      }
   })
}

$(document).ready(function() {
   console.log("Ready for use...");
   $('.alert').hide();
   list();

   $('#js-from-entry').on('submit', function(e) {
      e.preventDefault();
      $(this).find('button').prop('disabled', true).html('patientez...');
      const formData = $(this).serialize();
      console.log(formData);
      $.ajax({
         url: 'core/processing.php',
         method: 'POST',
         data: formData,
         dataType: 'json',
         success: function(response) {
            console.log(response);
            messageResponse = response.message;
            //finalize(true);
         },
         error: function(err) {
            messageResponse = err.responseText;
            //finalize(false);
         }
      })

   })
})