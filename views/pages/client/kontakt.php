@extends(default)

 
 <div class="wrapper">
  <div class="contact clearfix">
    
    <div class="info">
      <span id="mail-icon"></span>
      <p>Potrebne su Vam dodatne informacije?</p>
      <p>Kontaktirajte nas putem elektronske pošte, odgovorićemo Vam u najkraćem mogućem roku.</p>
    </div>

    <form action="kontakt" method="post">
      <h1>Kontaktirajte nas</h1>
      <div class="form-group">
        <label for="poruka">Poruka</label>
        <textarea name="poruka" id="poruka" class="form-control" rows="10" required></textarea>
      </div>
      <div class="form-group">
        <label for="ime_i_prezime">Ime i prezime</label>
        <label for="email">E-mail</label>
        <input type="text" name="ime_i_prezime" class="form-control inline" id="ime_i_prezime" required>
        <input type="email" name="email" class="form-control inline" id="email" required>
      </div>
      <div class="clearfix">
        <input type="hidden" name="predmet" value="Kontakt">
        <input type="reset" value="Otkaži" class="btn cancel">
        <input type="submit" value="Pošalji" class="btn btn-lg btn-danger float-right">
      </div>
    </form>
  </div>
</div>