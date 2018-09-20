(function() {

const sections = $('.section');

if(sections) {
  sections.each(section => {
    section.get('.update-section').on('click', () => {
      const id = section.attr('data-id');
      const title = section.get('h2').text();
      _put('/section/' + id, { title : title }, false)
        .then(res => onAjaxDone(res))
    })
  })
}


})();

function deleteVideo(id) {
  _delete('/video/' + id, {}, false)
    .then(res => onAjaxDone(res))
}

function onAjaxDone(res) {
  if(res.trim() != '') {
    alert('Something went wrong, check console for more info');
    console.log(res);
  } else {
    window.location.reload();
  }
}