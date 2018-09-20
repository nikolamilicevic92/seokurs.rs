<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf" value="{{ csrf() }}">
  <base href="/">
  <link rel="stylesheet" href="assets/css/core/framework.css">
  <script src="assets/js/core/framework.js"></script>
  <title>{{$test->title}}</title>
</head>
<body>
  
  <div style="width:800px;margin:auto;padding-top:30px;">
    <div class="title">
      <div class="form-group">
        <label for="testTitle">Naslov testa</label>
        <input 
          class="form-control inline" id="testTitle" data-id="{{$test->id}}"
          type="text" value="{{$test->title}}"
        >
        <label for="testDuration">Trajanje testa (sec)</label>
        <input 
          type="number" value="{{$test->duration}}" id="testDuration"
          title="Duration in seconds" class="form-control inline mb-10" data-id="{{$test->id}}"
        >
      </div>
    </div>
    <div class="add-question">
      <form class="clearfix" action="/question" method="post">
        <div class="form-group">
          <textarea class="question-text form-control" name="question" required></textarea>
        </div>
        <input type="hidden" name="id_test" value="{{$test->id}}">
        {!! csrfFormField() !!}
        <input class="btn btn-primary" type="submit" value="Dodaj pitanje">
      </form>
    </div>
    @foreach($test->questions as $index => $question)
    <div class="question" id="question-{{$question->id}}" style="margin:20px 0;">
      <div class="clearfix" style="margin-bottom:10px;">
        <span>{{ ($index + 1) . '. Pitanje' }}</span>
        <!-- Form for deleting a question -->
        <form class="delete-question float-right" action="/question/{{$section->id}}" method="POST">
          {!! csrfFormField() !!}
          <input type="hidden" name="_method" value="DELETE">
          <input type="submit" class="btn btn-danger" value="Obriši">
        </form>
      </div>
      <div style="margin-bottom:10px;">
        <textarea class="question-text form-control" data-id="{{$question->id}}">{{$question->question}}</textarea>
      </div>
      @foreach($question->answers as $answer)
      <div class="answers">
        <div class="answer" id="answer-{{$answer->id}}">
          <div class="clearfix">
            <button data-id="{{$answer->id}}" class="delete-answer btn btn-danger float-right mb-10">Obriši</button>
          </div>
          <div class="form-group">
            <input
              style="vertical-align:top;" 
              class="answer-correctness" data-id="{{$answer->id}}"
              type="checkbox" {{ $answer->correct ? 'checked' : '' }}
            >
            <textarea data-id="{{$answer->id}}" class="answer-text form-control inline" style="width:775px;">{{$answer->answer}}</textarea>
          </div>
        </div>
      </div>
      @endforeach
      <div class="add-answer">
        <form class="clearfix" action="/answer" method="post">
          <div class="form-group">
            <input type="checkbox" name="correct" style="vertical-align:top;">
            <textarea style="width:775px;" class="answer-text form-control inline" name="answer" required></textarea>
          </div>
          {!! csrfFormField() !!}
          <input type="hidden" name="id_question" value="{{$question->id}}">
          <input type="hidden" name="id_test" value="{{$test->id}}">
          <input class="btn btn-primary" style="margin-left:22px;" type="submit" value="Dodaj odgovor">
        </form>
      </div>
    </div>
    @endforeach
  </div>

  <script src="assets/js/admin/test.js"></script>
</body>
</html>