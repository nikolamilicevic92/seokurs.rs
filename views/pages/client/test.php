<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf" value="{{ csrf() }}">
  <base href="/">
  <title>{{$test_data['test']->title}}</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial;
    }
    /*TEST*/
    .test-container {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 999;
      width: 100vw;
      height: 100vh;
      background-color: white;
      padding: 30px 0;
    }
    .test-container h1 {
      text-align: center;
      color: blue;
    }
    .test-container #testTitle {
      font-size: 25px;
    }
    .test-container #testTimer {
      display: block;
      float: right;
      height: 40px;
      color: orangered;
      font-size: 25px;
    }
    .test-container > div {
      max-width: 800px;
      margin: auto;
    }
    .test-container > div:first-child,
    .test-container > div:nth-last-child(2) {
      margin-bottom: 30px;
    }
    .test-container .question {
      outline: 1px solid rgb(0, 164, 214);
      padding: 10px;
      margin-bottom: 15px;
    }
    .test-container .question > div:first-child {
      margin-bottom: 15px;
    }
    .test-container .answer p {
      width: 95%;
      display: inline-block;
      padding-left: 10px;
    }
    .test-container .answer p.correct {
      color: green;
    }
    .test-container .answer p.incorrect {
      color: red;
    }
    .test-container button {
      padding: 3px;
      width: 100px;
      cursor: pointer;
      float: right;
    }
  </style>
</head>
<body>

  <div class="test-container">
    
  </div>

  <script src="assets/js/core/framework.js"></script>
  <script>

    const rawData = '{!! json_encode($data["test_data"]) !!}';
    const data = JSON.parse(rawData);

    if(data) {

    let duration = data.test.duration;
    const testTimer = make('span', timeToString(duration));
    const btnContainer = make('div.clearfix');
    const btn = make('button', 'Kraj');
    btn.on('click', () => checkTestCorrectness());
    btnContainer.append(btn);

    generateTestHTML(data);

    let interval = setInterval(() => {
      testTimer.text(timeToString(--duration));
      if(duration == 0) {
        clearInterval(interval);
        checkTestCorrectness();
      }
    }, 1000)

    
    function checkTestCorrectness() {

      clearInterval(interval);

      const questions = $('.question');
      
      let done = 0;
      const goal = 80; //Percentage needed to pass the test
      
      questions.each((question, i) => {
        const answers = question.get('.answer');
        let resolved = false;
        done++;
        answers.each((answer, j) => {
          const checked = answer.get('input').dom().checked;
          const correct = data.questions[i].answers[j].correct == "1";
          const paragraph = answer.get('p');
          if(correct) {
            paragraph.addClass('correct');
          } else if(checked) {
            paragraph.addClass('incorrect');
          }
          if(!resolved) {
            if((!correct && checked) || (correct && !checked)) {
              resolved = true;
              done--;
            }
          }
        })
      })


      btnContainer.remove(btn);
      const percentage = (done / data.questions.length) * 100;
      window.scrollTo(0, 0);
      testTimer.text(`Urađeno ${percentage}%`);
      if(percentage < goal) {
        alert('Više sreće drugi put!');
      } else {
        onTestDone();
      }
    }

    function generateTestHTML(data) {
      const container = $('.test-container');
      const header = make('div.clearfix');
      const testTitle = make('span', data.test.title);
      testTitle.attr('id', 'testTitle');
      testTimer.attr('id', 'testTimer');
      header.append(testTitle);
      header.append(testTimer);
      container.append(header);
      data.questions.forEach((question, i) => {
        container.append(generateQuestionHTML(question, i));
      });
      container.append(btnContainer);
    }

  function generateQuestionHTML(question, i) {
    const container = make('div.question');
    let div = make('div');
    div.html(`<p>${i+1}. ${question.question}</p>`);
    container.append(div);
    question.answers.forEach(answer => {
      div = make('div.answer');
      div.html(`<input type="checkbox"><p>${answer.answer}</p>`);
      container.append(div);
    });
    return container;
  }

  function timeToString(time) {
    let min = parseInt(time / 60);
    let sec = time % 60;
    if(min < 10) min = '0' + min;
    if(sec < 10) sec = '0' + sec;
    return min + ':' + sec;
  }

  function onTestDone() {
    _post('/test-user', { id_test : data.test.id }, false)
      .then(res => {
        if(res.trim() != '') {
          alert('Something went wrong, check console for more info');
          console.log(res);
        } else {
          alert('Čestitamo, uspešno ste uradili test')
        }
        
      })
  }

  } else {
    $('.test-container').append(make('h1', 'Test je već urađen'));
  }
  </script>
</body>
</html>