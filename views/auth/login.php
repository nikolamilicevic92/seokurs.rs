@extends(default)

@include(redirect-information)

<form style="width:350px;margin:0 auto;padding-top:50px;" action="{{LOGIN_URI}}" method="post">
  <div class="form-group">
    <label for="email">Email</label>
    <input 
      type="email" class="form-control" id="email" 
      name="email" autocomplete required
    >
  </div>
  <div class="form-group">
    <label for="password">Lozinka</label>
    <input 
      type="password" class="form-control" id="password" 
      name="password" autocomplete required
    >
  </div>
  <div class="form-group">
    <input type="checkbox" id="remember_me" name="remember_me">
    <label for="remember_me">Zapamti me</label>
  </div>
  <div class="form-group clearfix">
    {!! csrfFormField() !!}
    <a 
      style="text-decoration:none;margin-top:5px;"
      href="{{PASSWORD_RESET_URI}}" class="text-primary float-left" >
      Zaboravili ste lozinku?
    </a>
    <input type="submit" class="btn btn-primary float-right" value="Uloguj se">
  </div>
  <div>
    <a 
      style="text-decoration:none;margin-top:5px;"
      href="{{REGISTER_URI}}" class="text-primary">
      Nemate nalog? Registrujte se ovde
    </a>
  </div>
</form>