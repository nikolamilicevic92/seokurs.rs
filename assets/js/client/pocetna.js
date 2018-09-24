(function() {
  
const form = $('form');

interceptFormSubmit(form, function(data) {
  form.dom().reset();
  alert('Uspešno ste se pretplatili');
  _post(data.url, data.body)
    .then(res => csrf(res.csrf));
});


function interceptFormSubmit(form, callback) {
	form.on('submit', (form, event) => {
		event.preventDefault()
		const url = form.attr('action')
		const method = form.attr('method')
		const inputs = form.get('[name]');
    let body = {}
    inputs.each(input => {
      body[input.attr('name')] = input.value();
    })
		callback({url, method, body})
	})
}
  
})()