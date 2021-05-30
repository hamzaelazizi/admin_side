@extends('layouts.admin')

@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    
                                    
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Les membres
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Email</th>
                                        <th>Fonction</th>
                                        <th>Structure</th>
                                        <th>Profil</th>
                                        <th>Éditer</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($membres as $mbr)
                                    <tr>
                                        
                                        <td>{{$mbr->nom}}</td>
                                        <td>{{$mbr->prenom}}</td>
                                        <td>{{$mbr->email}}</td>
                                        <td>{{$mbr->fonction}}</td>
                                        <td>{{$mbr->Structure->titre}}</td>
                                        <td><a href="#"><span class="badge bg-success">Voir</span></a>
                                        </td>
                                        <td><a href="#"><span class="badge bg-success">Éditer</span></a></td>
                                        <td><a href="#"><span class="badge bg-success">Supprimer</span></a>
                                    </tr>
                   
                                @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

            <script type="text/javascript">
  
  function confirmer(){
    var res = confirm("Êtes-vous sûr de vouloir supprimer la structure ?");
    if(res){
        return true;
    }
    return false;
}
                </script>

@endsection

