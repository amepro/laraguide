<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
<form method="post" action="/inscription" class="section">

    {{csrf_field()}}

    <div class="field">
        <label class="label">Adress e-mail</label>
        <div class="control">
            <input name="email" value="{{old('email')}}"  class="input is-primary" type="email" placeholder="Email">
        </div>
        @if($errors->has('email'))
            <p class="help is-danger">{{$errors->first('email')}}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Mot de passe</label>
        <div class="control">
            <input name="password"   class="input is-primary" type="password" placeholder="Mot de passe">
        </div>
        @if($errors->has('password'))
            <p class="help is-danger">{{$errors->first('password')}}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Mot de passe Confirmation</label>
        <div class="control">
            <input name="password_confirmation"   class="input is-primary" type="password" placeholder="Mot de passe (Confirmation)">
        </div>
        @if($errors->has('password_confirmation'))
            <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
        @endif
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">M'inscrire</button>
        </div>
    </div>
</form>
</body>
</html>

