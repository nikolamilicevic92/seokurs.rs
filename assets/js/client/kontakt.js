
const form = document.querySelector('form');

interceptFormSubmit(form, function(data) {
	form.reset();
	alert('Vaša poruka je poslata');
	_post(data.url, data.body)
		.then(res => csrf(res.csrf));
});

function interceptFormSubmit(form, callback) {
	form.addEventListener('submit', ev => {
		ev.preventDefault()
		const url = form.getAttribute('action')
		const method = form.getAttribute('method')
		const inputs = form.querySelectorAll('[name]');
		let body = {}
		for(let j = 0; j < inputs.length; j++) {
			const input = inputs[j]
			body[input.getAttribute('name')] = input.value;
		}
		callback({url, method, body})
	})
}