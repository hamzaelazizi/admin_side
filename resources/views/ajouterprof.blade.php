@extends('layouts.admin')

@section('content')
<section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Ajouter Professeur</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <form name="form" action="{{ route('profs.store') }}" method="post" onsubmit="return validation_email()" class="form form-vertical" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">Nom</label>
                                        <input type="text" id="nom" class="form-control" name="nom" required>
                                        </div>
                                        <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">Prenom</label>
                                        <input type="text" id="prenom" class="form-control" name="prenom" required>
                                        </div>
                                           
                                    </div>
                                    <div class="col-12">
                                    <fieldset class="form-group">
                                    <label for="basicInput">Genre</label>
                                                    <select class="form-select" id="genre"name="genre" required>
                                                        <option>Homme</option>
                                                        <option>Femme</option>
                                                    </select>
                                                </fieldset>
                                    </div>
                                    <div class="col-12">
                                    <fieldset class="form-group">
                                    <label for="basicInput">Structure</label>
                                                    <select class="form-select" id="structure"name="structure" required>
                                                    @foreach($structures as $str)
                                                        <option value="{{$str->id}}">{{$str->titre}}</option>
                                                        @endforeach
                                                    </select>
                                                </fieldset>
                                    </div>
                                    <div class="col-12">
                                    <fieldset class="form-group">
                                    <label for="basicInput">Grade</label>
                                                    <select class="form-select" id="grade"name="grade" required>
                                                        <option>PES</option>
                                                        <option>PESA</option>
                                                        <option>PH</option>
                                                    </select>
                                                </fieldset>
                                    </div>
                                    <div class="col-12">
                                    <fieldset class="form-group">
                                    <label for="basicInput">Statut</label>
                                                    <select class="form-select" id="statut"name="statut" required>
                                                        <option>Permanent</option>
                                                        <option>Non Permanent</option>
                                                    </select>
                                                </fieldset>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">Email</label>
                                        <input type="email" id="email" class="form-control" name="email" required>
                                        </div>

                                        <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">Etablissement</label>
                                        <input type="text" id="etablissement" class="form-control" name="etablissement" required>
                                        </div>
                                    
                                    
                                    <div class="col-12">
                                    <div class="form-file">
                                    <label for="basicInput">Image:</label>
                                                <input type="file" class="form-file-input" id="image" name="image" accept="image/*" required>
                                                
                                            </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Ajouter</button>
                                        
                                    </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>

                <script type="text/javascript">
  
                  function validation_email(){
                    var email = document.forms["form"]["email"]; 
                    var emails = ["a" @foreach($structures as $str) @foreach($str->Membres as $mbr) ,"{{$mbr->email}}" @endforeach @endforeach ];

                    for (var i = 0; i < emails.length; i++) {
        if (emails[i].toLowerCase() === email.value.toLowerCase()) {

            alert("Email deja utilisé."); 
              email.focus();
            return false;

        }
    }
        return true;
                  }
                </script>

@endsection