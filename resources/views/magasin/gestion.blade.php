@extends('templates.menu')
@include('leformdebg')

@section('content')

    <style>
        .col-md-8 .radio-inline {
            width: 275px;
        }

        .position_absolute {
            position: fixed;
        z-index: 999;
        bottom: 0;
        width: 100%;
        height: 50px;
        background-color: white;
        -webkit-box-shadow: 0px 2px 19px -1px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 2px 19px -1px rgba(0,0,0,0.75);
        box-shadow: 0px 2px 19px -1px rgba(0,0,0,0.75);
        }

        .btn_fixed {
            height: 40px!important;
            margin-top: 5px!important;
        }

        form{
            margin-bottom: 50px;
        }

        .panel-body {padding: 0}

        .un_coiffeur {
            border: 1px solid #c3c3c3;
            height: 200px;
            text-align: center;
            box-sizing: border-box;
            margin: 10px;
        }
    </style>



    <div class="panel-body">
        <form class="form-horizontal" method="POST"  action="{{ route('magasin.store') }}">
            {{ csrf_field() }}

            <h1 style="text-align: center; margin-bottom:75px;">Gestion de votre boutique</h1>
            <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nom de la boutique</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="nom" placeholder="{{$magasin->nom}}" value=" {{$magasin->nom}}" required autofocus>
                    @if ($errors->has('nom'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nom') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Numéro de télèphone</label>

                <div class="col-md-6">
                    <input id="tel" type="text" class="form-control" name="tel" placeholder="{{ $magasin->tel  }}" value="{{ $magasin->tel  }}" required>

                    @if ($errors->has('tel'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Adresse de la boutique</label>

                <div class="col-md-6">
                    <input id="tel" type="text" class="form-control" name="adresse" placeholder="{{ $magasin->adresse }}" value="{{ $magasin->adresse }}" required>

                    @if ($errors->has('adresse'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group ">
                <label for="email" class="col-md-4 control-label">Logo de la boutique</label>

                <div class="col-md-6">
                    <input type="file" name="logo" value="default.png" class="form-control" />


                </div>
            </div>



            <div class="form-group{{ $errors->has('cp') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Code Postale de la boutique</label>

                <div class="col-md-6">
                    <input id="tel" type="text" class="form-control" name="cp" placeholder="{{ $magasin->cp }}" value="{{ $magasin->cp }}" required>

                    @if ($errors->has('cp'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('cp') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Type de client</label>

                <div class="col-md-6">

                    <label class="radio-inline"><input type="radio" name="type" value="mixte">Mixte</label>
                    <label class="radio-inline"><input type="radio" name="type" value="femme">Femme</label>
                    <label class="radio-inline"><input type="radio" name="type" value="homme">Homme</label>


                    @if ($errors->has('type'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="col-md-12" style="margin-top: 25px; margin-bottom: 50px;">
            <h3 style="text-align: center;">Vos coiffeurs</h3>

                <div class="col-md-8 col-md-offset-2 ">
                    <div class="col-md-3 un_coiffeur">
                        <div class="col-md-12 ">
                            <h4>Nom du coiffeur</h4>
                        </div>
                    </div>




                </div>


            </div>

            <div class="col-md-12" style="margin-top: 25px; margin-bottom: 50px;">
                <h3 style="text-align: center;">Vos services</h3>

                <div class="col-md-8 col-md-offset-2 ">
                    <div class="col-md-3 un_coiffeur">
                        <div class="col-md-12 ">
                            <h4>Service</h4>
                        </div>
                    </div>




                </div>


            </div>

            <br/>
            <h3 style="text-align: center; margin-bottom: 45px; margin-top: 45px;">Horraire de la boutique</h3>
            <hr/>
            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Lundi :</label>
                <div class="col-md-8">
                    <label class="radio-inline"><input type="time" name="lundi_m_o" value="mixte"><label style="margin-left: 10px;">Ouverture Matin</label></label>
                    <label class="radio-inline"><input type="time" name="lundi_m_f" value="mixte"><label style="margin-left: 10px;">Fermeture Matin</label></label>
                    <br/>
                    <label class="radio-inline"><input type="time" name="lundi_a_o" value="mixte"><label style="margin-left: 10px;">Ouverture Après-midi</label></label>
                    <label class="radio-inline"><input type="time" name="lundi_a_f" value="mixte"><label style="margin-left: 10px;">Fermeture Après-midi</label></label>
                    <label class="radio-inline"><input type="radio" name="lundi_f" value="fermer">fermer</label>
                </div>
            </div>
<hr/>
            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Mardi :</label>

                <div class="col-md-8">
                    <label class="radio-inline"><input type="time" name="mardi_m_o" value="mixte"><label style="margin-left: 10px;">Ouverture Matin</label></label>
                    <label class="radio-inline"><input type="time" name="mardi_m_f" value="mixte"><label style="margin-left: 10px;">Fermeture Matin</label></label>
                    <br/>
                    <label class="radio-inline"><input type="time" name="mardi_a_o" value="mixte"><label style="margin-left: 10px;">Ouverture Après-midi</label></label>
                    <label class="radio-inline"><input type="time" name="mardi_a_f" value="mixte"><label style="margin-left: 10px;">Fermeture Après-midi</label></label>
                    <label class="radio-inline"><input type="radio" name="mardi_f" value="fermer">fermer</label>
                </div>
            </div>
            <hr/>
            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Lundi :</label>

                <div class="col-md-8">
                    <label class="radio-inline"><input type="time" name="mercredi_m_o" value="mixte"><label style="margin-left: 10px;">Ouverture Matin</label></label>
                    <label class="radio-inline"><input type="time" name="mercredi_m_f" value="mixte"><label style="margin-left: 10px;">Fermeture Matin</label></label>
                    <br/>
                    <label class="radio-inline"><input type="time" name="mercredi_a_o" value="mixte"><label style="margin-left: 10px;">Ouverture Après-midi</label></label>
                    <label class="radio-inline"><input type="time" name="mercredi_a_f" value="mixte"><label style="margin-left: 10px;">Fermeture Après-midi</label></label>
                    <label class="radio-inline"><input type="radio" name="mercredi_f" value="fermer">fermer</label>
                </div>
            </div>
            <hr/>
            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Lundi :</label>

                <div class="col-md-8">
                    <label class="radio-inline"><input type="time" name="jeudi_m_o" value="mixte"><label style="margin-left: 10px;">Ouverture Matin</label></label>
                    <label class="radio-inline"><input type="time" name="jeudi_m_f" value="mixte"><label style="margin-left: 10px;">Fermeture Matin</label></label>
                    <br/>
                    <label class="radio-inline"><input type="time" name="jeudi_a_o" value="mixte"><label style="margin-left: 10px;">Ouverture Après-midi</label></label>
                    <label class="radio-inline"><input type="time" name="jeudi_a_f" value="mixte"><label style="margin-left: 10px;">Fermeture Après-midi</label></label>
                    <label class="radio-inline"><input type="radio" name="jeudi_f" value="fermer">fermer</label>
                </div>
            </div>
            <hr/>
            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Lundi :</label>
                <div class="col-md-8">
                    <label class="radio-inline"><input type="time" name="vendredi_m_o" value="mixte"><label style="margin-left: 10px;">Ouverture Matin</label></label>
                    <label class="radio-inline"><input type="time" name="vendredi_m_f" value="mixte"><label style="margin-left: 10px;">Fermeture Matin</label></label>
                    <br/>
                    <label class="radio-inline"><input type="time" name="vendredi_a_o" value="mixte"><label style="margin-left: 10px;">Ouverture Après-midi</label></label>
                    <label class="radio-inline"><input type="time" name="vendredi_a_f" value="mixte"><label style="margin-left: 10px;">Fermeture Après-midi</label></label>
                    <label class="radio-inline"><input type="radio" name="vendredi_f" value="fermer">fermer</label>
                </div>
            </div>
            <hr/>
            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Lundi :</label>
                <div class="col-md-8">
                    <label class="radio-inline"><input type="time" name="samedi_m_o" value="mixte"><label style="margin-left: 10px;">Ouverture Matin</label></label>
                    <label class="radio-inline"><input type="time" name="samedi_m_f" value="mixte"><label style="margin-left: 10px;">Fermeture Matin</label></label>
                    <br/>
                    <label class="radio-inline"><input type="time" name="samedi_a_o" value="mixte"><label style="margin-left: 10px;">Ouverture Après-midi</label></label>
                    <label class="radio-inline"><input type="time" name="samedi_a_f" value="mixte"><label style="margin-left: 10px;">Fermeture Après-midi</label></label>
                    <label class="radio-inline"><input type="radio" name="samedi_f" value="fermer">fermer</label>
                </div>
            </div>
            <hr/>
            <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">Lundi :</label>
                <div class="col-md-8">
                    <label class="radio-inline"><input type="time" name="dimanche_m_o" value="mixte"><label style="margin-left: 10px;">Ouverture Matin</label></label>
                    <label class="radio-inline"><input type="time" name="dimanche_m_f" value="mixte"><label style="margin-left: 10px;">Fermeture Matin</label></label>
                    <br/>
                    <label class="radio-inline"><input type="time" name="dimanche_a_o" value="mixte"><label style="margin-left: 10px;">Ouverture Après-midi</label></label>
                    <label class="radio-inline"><input type="time" name="dimanche_a_f" value="mixte"><label style="margin-left: 10px;">Fermeture Après-midi</label></label>
                    <label class="radio-inline"><input type="radio" name="dimanche_f" value="fermer">fermer</label>
                </div>
            </div>

            <hr/>
            <div class="position_absolute">
                <div class="form-group">
                    <div class="col-md-2 col-md-offset-4">
                        <button type="submit" class="btn btn-primary btn_fixed">
                            Sauvegarder votre boutique
                        </button>
                    </div>
                    <a style="color: white!important; background-color: #2579a9;" class="btn btn-primary btn_fixed" href="#">Ajouter un coiffeur</a>
                    <a style="color: white!important; background-color: #2579a9;" class="btn btn-primary btn_fixed" href="#">Ajouter un service</a>
                </div>
            </div>
        </form>
    </div>

@endsection
