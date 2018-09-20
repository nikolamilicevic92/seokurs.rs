
const pages = $('.page');
const initialData = {};

pages.each(page => {
  const id = page.attr('data-id');
  const title = page.get('.title').value();
  const keywords = page.get('.keywords').value();
  const description = page.get('.description').value();
  initialData[id] = title + '||' + keywords + '||' + description;
});

$('.btn-primary').on('click', () => {
  const updateData = {};
  pages.each(page => {
    const id = page.attr('data-id');
    const title = page.get('.title').value();
    const keywords = page.get('.keywords').value();
    const description = page.get('.description').value();
    const data = title + '||' + keywords + '||' + description;
    if(data !== initialData[id]) {
      updateData[id] = data;
    }
  });
  _put('/pages', updateData, false)
    .then(res => {
      if(res.trim() != '') {
        alert('Something went wrong, check console for more info');
        console.log(res);
      } else {
        window.location.reload();
      }
    })
})


