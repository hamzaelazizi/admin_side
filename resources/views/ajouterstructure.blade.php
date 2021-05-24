@extends('layouts.admin')

@section('content')
<section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Ajouter Structure</h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <form action="{{ route('structures.store') }}" method="post" class="form form-vertical" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">Titre</label>
                                        <input type="text" id="titre" class="form-control" name="titre" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <fieldset class="form-group">
                                    <label for="basicInput">Type</label>
                                                    <select class="form-select" id="type"name="type" required>
                                                        <option>Équipe</option>
                                                        <option>Laboratoire</option>
                                                    </select>
                                                </fieldset>
                                    </div>
                                    <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description
                                            </label>
                                        <textarea class="form-control" id="Description" name="Description" rows="3" required></textarea>
                                    </div>
                                    </div>
                                    
                                    <div class="col-12">
                                    <div class="form-file">
                                    <label for="basicInput">Logo:</label>
                                                <input type="file" class="form-file-input" id="Logo" name="Logo" accept="image/*" required>
                                                
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

@endsection