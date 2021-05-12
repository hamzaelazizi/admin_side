@extends('layouts.admin')

@section('content')


                        @csrf

<div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            
                            
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class='breadcrumb-header'>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ajouter Professseur Permanent</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajouter Professseur Permanent</h4>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="basicInput">Nom</label>
                                        <input type="text" class="form-control" id="Nom"
                                            placeholder="Nom">
                                    </div>

                                    <div class="form-group">
                                        <label for="basicInput">Prenom</label>
                                        <input type="text" class="form-control" id="Prenom"
                                            placeholder="Prenom">
                                    </div>

                                    <div class="form-group">
                                        <label for="basicInput">Email</label>
                                        <input type="text" class="form-control" id="Email"
                                            placeholder="Email">
                                    </div>

                                    
                                </div>
                                <div class="col-md-6">

                                <fieldset class="form-group">
                                    <label for="basicInput">Genre</label>
                                                    <select class="form-select" id="Genre">
                                                        <option>Homme</option>
                                                        <option>Femme</option>
                                                    </select>
                                                </fieldset>

                                <fieldset class="form-group">
                                    <label for="basicInput">Grade</label>
                                                    <select class="form-select" id="Grade">
                                                        <option>PESA</option>
                                                        <option>PH</option>
                                                        <option>PES</option>
                                                    </select>
                                                </fieldset>
                                    <div class="form-group">
                                        <label for="basicInput">Password</label>
                                        <input type="text" class="form-control" id="password"
                                            placeholder="password">
                                    </div>

                                    
                                
                                </div>
                                <div class="form-file">
                                    <label for="basicInput">Photo:</label>
                                                <input type="file" class="form-file-input" id="Image" accept="image/*">
                                                <label class="form-file-label" for="customFile">
                                                    <span class="form-file-text">Choose image...</span>
                                                    <span class="form-file-button">Browse</span>
                                                </label>
                                            </div>

                                <div class="col-12 d-flex justify-content-end">
                                
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    
                            </div>
                        </div>
                    </div>
                </div>
                </section>

</form>

@endsection