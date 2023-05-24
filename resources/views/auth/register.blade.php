@extends ('template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <center>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            <div class="card">
                <div class="card-header">{{ __('Inscription') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" placeholder="Nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" placeholder="Prenom"  class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="Situation" class="col-md-4 col-form-label text-md-end">{{ __('Situation') }}</label>

                            <div class="col-md-6">
                            <select class="form-control @error('Situation') is-invalid @enderror" required name="Situation" id="Situation">
                            <option value="">--Choisir une situation--</option>
                            <option type="text" name="Situation" value="Adherent">Adhérent</option>
                            <option type="text" name="Situation" value="Personnel">Personnel</option>
                            </select>

                                @error('situation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="adresse" class="col-md-4 col-form-label text-md-end">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" placeholder="Adresse"  class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="CP" class="col-md-4 col-form-label text-md-end">{{ __('Code Postal') }}</label>

                            <div class="col-md-6">
                                <input id="CP" type="text" placeholder="Code Postal" class="form-control @error('CP') is-invalid @enderror" name="CP" value="{{ old('CP') }}" required autocomplete="CP" autofocus>

                                @error('CP')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="courriel" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="courriel" placeholder="exemple@exemple.com" type="email" class="form-control @error('courriel') is-invalid @enderror" name="courriel" value="{{ old('courriel') }}" required autocomplete="courriel">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="telephone" class="col-md-4 col-form-label text-md-end">{{ __('Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="telephone" placeholder="Numéro de téléphone" type="richtext" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone">

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="idC" title=" Catégorie 1 : 8 ans 
 Catégorie 3 : 10 ans 
 Catégorie 5 : 13 ans "
                                            class="col-md-4 col-form-label text-md-end">{{ __('Catégorie âge') }}</label>

                            <div class="col-md-6">
                                
                                
                                <select id="idC" type="text" class="form-control @error('idC') is-invalid @enderror" name="idC" value="{{ old('idC') }}" required autocomplete="idC">
                                    <option value="">--Choisir une catégorie--</option>
                                    <option value="1">Catégorie 1 <em>(min : 8ans)</em></option>
                                    <option value="3">Catégorie 3 (min : 10ans)</option>
                                    <option value="5">Catégorie 5 (min : 13ans)</option>
                                </select>

                                @error('idC')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmation du mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Valider') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</center>
    </div>
</div>
@endsection
