
const accordions = $('.accordion');


accordions.each(accordion => {
  initSliding(accordion);
  initDescription(accordion);
});

function initSliding(accordion) {
  const toggle = accordion.get('.accordion-toggle');
  const content = accordion.get('.accordion-content');
  toggle.on('click', toggle => {
    if(content.hasClass('collapsed')) {
      content.removeClass('collapsed');
      content.css({maxHeight: content.dom().scrollHeight + 'px'})
      toggle.removeClass('closed');
      toggle.addClass('opened')
    } else {
      content.addClass('collapsed');
      content.css({maxHeight: null})
      toggle.addClass('closed');
      toggle.removeClass('opened')
    }
  })
}

function initDescription(accordion) {
  const options = accordion.get('li');
  const descriptions = accordion.get('.content-description > div');
  const content = accordion.get('.accordion-content');
  options.each((option, i) => {
    option.on('click', () => {
      descriptions.each((description, j) => {
        if(i != j) {
          description.css({display: 'none'});
        } else {
          description.css({display: 'block'});
        }
      })
      content.css({maxHeight: content.dom().scrollHeight + 'px'})
    })
  })
}

const contactSpecific = $('#contactSpecific');
const subject = $('#subject');
const title = $('#formTitle');

function showForm(type) {
  subject.value(type);
  title.text(type);
  contactSpecific.css({display: 'block'});
}

function hideForm() {
  contactSpecific.css({display: 'none'});
}


const forms = document.querySelectorAll('.wrapper form');

for(let form of forms) {
  interceptFormSubmit(form, function(data) {
    form.reset();
    alert('Vaša poruka je poslata');
    _post(data.url, data.body)
      .then(res => csrf(res.csrf));
  });
}


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