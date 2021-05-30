@extends('layouts.admin')

@section('content')
<section id="basic-vertical-layouts">
                    <div class="row match-height">
                        <div class="col-10 mx-auto">
                        <div class="card">
                            <div class="card-header">
                            <h4 class="card-title">Modifier les coefficients </h4>
                            </div>
                            <div class="card-content">
                            <div class="card-body">
                                <form action="/coeffs/{{ $coeff->id }}" method="post" class="form form-vertical" enctype="multipart/form-data" >
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="form-body">
                                    <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">coefficient conference</label>
                                        <input type="number" id="conference" class="form-control" name="conference" value="{{$coeff->conference}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">coefficient ouvrage</label>
                                        <input type="number" id="ouvrage" class="form-control" name="ouvrage" value="{{$coeff->ouvrage}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">coefficient chapitre</label>
                                        <input type="number" id="chapter" class="form-control" name="chapter" value="{{$coeff->chapter}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">coefficient article indexé</label>
                                        <input type="number" id="article_index" class="form-control" name="article_index" value="{{$coeff->article_index}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">coefficient article non indexé</label>
                                        <input type="number" id="article" class="form-control" name="article" value="{{$coeff->article}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">coefficient doctorat</label>
                                        <input type="number" id="doctorat" class="form-control" name="doctorat" value="{{$coeff->doctorat}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">coefficient brevet</label>
                                        <input type="number" id="brevet" class="form-control" name="brevet" value="{{$coeff->brevet}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">coefficient manifestation nationale ou internationale</label>
                                        <input type="number" id="manifestation_nat" class="form-control" name="manifestation_nat" value="{{$coeff->manifestation_nat}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">coefficient manifestation locale ou regionale</label>
                                        <input type="number" id="manifestation_reg" class="form-control" name="manifestation_reg" value="{{$coeff->manifestation_reg}}" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="first-name-vertical">coefficient nombre de membres</label>
                                        <input type="number" id="membre_per" class="form-control" name="membre_per" value="{{$coeff->membre_per}}" required>
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