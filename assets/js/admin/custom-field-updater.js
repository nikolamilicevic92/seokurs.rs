(function(){

const editables = $('[contenteditable="true"]');

if(editables) {
  
  const initialData = {};

  //Scraping initial data to compare with update data later in order to update only differences
  editables.each(editable => {
    initialData[editable.attr('data-id')] = editable.text();
  })

  $('#updateCustomFields').on('click', () => {
    const updateData = {};
    editables.each(editable => {
      if(initialData[editable.attr('data-id')] != editable.text()) {
        updateData[editable.attr('data-id')] = editable.text();
      }
    })
    _put('/custom-field', updateData, false)
      .then(res => {
        if(res.trim() != '') {
          alert('Something went wrong, check console for more info');
          console.log(res);
        } else {
          window.location.reload()
        }
      });
  })
}

})();