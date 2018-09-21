
//Updating answer correctness when checkbox changes
$('.answer-correctness').on('change', checkbox => {
  const isCorrect = checkbox.dom().checked ? 1 : 0;
  _put('/answer/' + checkbox.attr('data-id'), { correct : isCorrect })
    .then(res => updateCSRF(res.csrf));
});

//Updating answer text 300ms after the input
$('.answer-text').on('input', input => {
  _put('/answer/' + input.attr('data-id'), { answer : input.value() })
    .then(res => updateCSRF(res.csrf));
}, 300);

//Updating question text 300ms after the input
$('.question-text').on('input', input => {
  _put('/question/' + input.attr('data-id'), { question : input.value() })
    .then(res => updateCSRF(res.csrf));
}, 300);

//Updating test title 300ms after the input
$('#testTitle').on('input', input => {
  _put('/test/' + input.attr('data-id'), { title : input.value() })
    .then(res => updateCSRF(res.csrf));
}, 300);

//Updating test duration 300ms after the input
$('#testDuration').on('input', input => {
  _put('/test/' + input.attr('data-id'), { duration : input.value() })
    .then(res => updateCSRF(res.csrf));
}, 300);

$('.delete-answer').on('click', button => {
  _delete('/answer/' + button.attr('data-id'))
    .then(res => {
        updateCSRF(res.csrf)
        //Removing the answer from the DOM
        $('#answer-' + button.attr('data-id')).die();
    })
})

//Response will send new csrf, we'll update the old one with it in order
//to be able to send additioinal requests without reloading the page
function updateCSRF(csrf) {
  $('head>meta[name="csrf"]').attr('value', csrf);
  $('input[name="_csrf"]').value(csrf);
}