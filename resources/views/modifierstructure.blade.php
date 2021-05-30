@extends('layouts.admin')

@section('content')
<section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Modifier la structure {{$structure->titre}}</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <form action="/structures/{{ $structure->id }}" method="post" class="form form-vertical" enctype="multipart/form-data" >
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="form-body">
                                    <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">Titre</label>
                                        <input type="text" id="titre" class="form-control" name="titre" value="{{$structure->titre}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <fieldset class="form-group">
                                    <label for="basicInput">Type</label>
                                                    <select class="form-select" id="type"name="type" required>
                                                        
                                                        @if ($structure->type === "Équipe")
                                                        <option>Équipe</option>
                                                        <option>Laboratoire</option>

                                                        @else
                                                        <option>Laboratoire</option>
                                                        <option>Équipe</option>
                                                        @endif
                                                        
                                                        
                                                    </select>
                                                </fieldset>
                                    </div>
                                    <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description
                                            </label>
                                        <textarea class="form-control" id="Description" name="Description" rows="3" value="{{$structure->Description}}" required>{{$structure->Description}}</textarea>
                                    </div>
                                    </div>
                                    
                                    <div class="col-12">
                                    <fieldset class="form-group">
                                    <label for="basicInput">Responsable</label>
                                                    <select class="form-select" id="responsable_id" name="responsable_id" required>
                                                    @if ($structure->prof_id === 0)
                                                    <option value="0">aucun</option>
                                                    @else
                                                    <option value="{{$structure->Prof->id}}">{{$structure->Prof->name}}</option>
                                                    @endif

                                                    @foreach($membres as $mbr)  
                                                    @if ($mbr->Structure->id === $structure->id)
                                                    @if ($mbr->Prof->id === $structure->prof_id)
                                                    @else
                                                    <option value="{{$mbr->Prof->id}}">{{$mbr->Prof->name}}</option>
                                                    @endif
                                                    @endif
                                                    @endforeach 
                                                    @if ($structure->prof_id === 0)
                                                    @else
                                                    <option value="0">aucun</option>
                                                    @endif

                                                    </select>
                                                </fieldset>
                                    </div>

                                    <div class="col-12">
                                    <div class="form-file">
                                    <label for="basicInput">Logo:</label>
                                                <input type="file" class="form-file-input" id="Logo" name="Logo" accept="image/*" >
                                                
                                            </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Modifier</button>
                                        
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

@endsection