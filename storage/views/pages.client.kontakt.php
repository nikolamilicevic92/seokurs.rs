<?php //This view extends default layout ?>

 
 <div class="wrapper">
  <div class="contact clearfix">
    
    <div class="info">
      <span id="mail-icon"></span>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, assumenda nobis.</p>
    </div>

    <form action="kontakt" method="post">
      <h1>Kontaktirajte nas</h1>
      <div class="form-group">
        <label for="poruka">Poruka</label>
        <textarea name="poruka" id="poruka" class="form-control" rows="10" required>Hi, I need a quote for the finance messenger project. The idea is very simple - you can chat with friends and banks same as you chat with people, plus you can do all basic internet banking commands right in chat.</textarea>
      </div>
      <div class="form-group">
        <label for="ime_i_prezime">Ime i prezime</label>
        <label for="email">Email</label>
        <input type="text" name="ime_i_prezime" class="form-control inline" id="ime_i_prezime" required>
        <input type="email" name="email" class="form-control inline" id="email" required>
      </div>
      <div class="clearfix">
        <input type="hidden" name="predmet" value="Kontakt">
        <input type="reset" value="Oktaži" class="btn cancel">
        <input type="submit" value="Pošalji" class="btn btn-lg btn-danger float-right">
      </div>
    </form>
  </div>
</div>