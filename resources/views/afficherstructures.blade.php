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
                            Les structures
                        </div>
                        <div class="card-body">
                            <table class='table table-striped' id="table1">
                                <thead>
                                    <tr>
                                        <th>Logo</th>
                                        <th>Titre</th>
                                        <th>Type</th>
                                        <th>Responsable</th>
                                        <th>Voir</th>
                                        <th>Éditer</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($structures as $str)
                                    <tr>
                                        <td>
                                        <div class="avatar avatar-xl rounded-circle">
                                    <img src="storage/Logo/{{ $str->Logo }}" alt="" srcset="">
                                </div></td>
                                        <td>{{$str->titre}}</td>
                                        <td>{{$str->type}}</td>
                                        <td>
                                        <form action="{{ url('/structedit') }}" method="post" >
                                            @csrf
                                        <?php 
                                        if($str->prof_id != 0){echo $str->Prof->name;}
                                        else{
                                            echo '
                                                    <button type="submit" name="submit" id="submit" value="'.$str->id.'" class="badge bg-secondary">Définir le responsable</button>
                                                    ';
                                        }
                                        ?>
                                        </form>
                                        </td>
                                        <td><a href="#"><span class="badge bg-secondary">Voir</span></a>
                                        </td>
                                        <td><form action="{{ url('/structedit') }}" method="post" >
                                @csrf
                                        <button type="submit" name="submit" id="submit" value="{{$str->id}}" class="badge bg-secondary">Éditer</button>
                                        </form></td>
                                        <td><form action="{{ url('/structsupp') }}" method="post" onsubmit="return confirmer()" >
                                @csrf
                                        <button type="submit" name="submit" id="submit" value="{{$str->id}}" class="badge bg-danger">Supprimer</button>
                                        </form></td>
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

