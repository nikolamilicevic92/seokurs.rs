
const editables = $('.content-description > div');

const initialData = {};

editables.each(editable => {
  const title = editable.get('h3').text();
  const description = editable.get('p').text();
  const id = editable.attr('data-id');
  initialData[id] = { title, description }
})

$('#updateSeoOptimizacija').on('click', () => {
  const updateData = {};
  editables.each(editable => {
    const title = editable.get('h3').text();
    const description = editable.get('p').text();
    const id = editable.attr('data-id');
    if(initialData[id].title !== title || initialData[id].description !== description) {
      updateData[id] = title + '||' + description;
    }
  })
  _put('/seo-optimizacija/*', updateData, false)
    .then(res => {
      if(res.trim() !== '') {
        alert('Something went wrong, check console for more info');
        console.log(res);
      } else {
        window.location.reload();
      }
    })
});

//Deleting one record from the accordions
function remove(id) {
  _delete('/seo-optimizacija/' + id, {}, false)
    .then(res => {
      if(res.trim() !== '') {
        alert('Something went wrong, check console for more info');
        console.log(res);
      } else {
        window.location.reload();
      }
    })
}
