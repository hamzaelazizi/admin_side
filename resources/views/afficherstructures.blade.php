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
                                        <th>Éditer</th>
                                        <th>Supprimer</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($structures as $str)
                                    <tr>
                                        <td><div class="avatar me-1">
                                    <img src="storage/Logo/{{ $str->Logo }}" alt="" srcset="">
                                </div></td>
                                        <td>{{$str->titre}}</td>
                                        <td>{{$str->type}}</td>
                                        <td><?php 
                                        if($str->prof_id != 0){echo $str->Prof->name;}
                                        else{
                                            echo '<a href="#"><span class="badge bg-success">Définir le responsable</span></a>';
                                        }
                                        ?>
                                        </td>
                                        <td><a href="#"><span class="badge bg-success">Éditer</span></a></td>
                                        <td><a href="#"><span class="badge bg-danger">Supprimer</span></a></td>
                                        
                                    </tr>
                   
                                @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>

@endsection

