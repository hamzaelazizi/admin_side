@extends('layouts.admin')

@section('content')

<!-- Striped rows start -->
<div class="row" id="table-striped">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{$structure->titre}}</h4>
              </div>
              <div class="card-content">
                <div class="card-body">

                </div>
                <!-- table striped -->
                <div class="table-responsive">
                
                  <table class="table table-striped mb-0">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Nombre</th>
                        <th>Note</th>

                      </tr>
                    </thead>
                    <tbody>

                      <tr>
                        <td class="text-bold-500"><h4>Manifestation Nationale ou internationale</h4>  </td>
                        <td class="text-bold-500"><h4>{{$nombre->manifestation_nat}}</h4></td>
                        <td class="text-bold-500"><h4>{{number_format($nombre->manifestation_nat * $coef->manifestation_nat)}}</h4></td>
                      </tr>

                      <tr>
                        <td class="text-bold-500"><h4>Manifestation Locale ou Regionale</h4></td>
                        <td class="text-bold-500"><h4>{{$nombre->manifestation_reg}}</h4></td>
                        <td class="text-bold-500"><h4>{{number_format($nombre->manifestation_reg * $coef->manifestation_reg)}}</h4></td>
                      </tr>

                      <tr>
                        <td class="text-bold-500"><h4>Conference</h4></td>
                        <td class="text-bold-500"><h4>{{$nombre->conference}}</h4></td>
                        <td class="text-bold-500"><h4>{{number_format($nombre->conference * $coef->conference)}}</h4></td>
                      </tr>

                      <tr>
                        <td class="text-bold-500"><h4>Ouvrage</h4></td>
                        <td class="text-bold-500"><h4>{{$nombre->ouvrage}}</h4></td>
                        <td class="text-bold-500"><h4>{{number_format($nombre->ouvrage * $coef->ouvrage)}}</h4></td>
                      </tr>

                      <tr>
                        <td class="text-bold-500"><h4>Chapitre</h4></td>
                        <td class="text-bold-500"><h4>{{$nombre->chapter}}</h4></td>
                        <td class="text-bold-500"><h4>{{number_format($nombre->chapter * $coef->chapter)}}</h4></td>
                      </tr>

                      <tr>
                        <td class="text-bold-500"><h4>Article Indexé</h4></td>
                        <td class="text-bold-500"><h4>{{$nombre->article_index}}</h4></td>
                        <td class="text-bold-500"><h4>{{number_format($nombre->article_index * $coef->article_index)}}</h4></td>
                      </tr>

                      <tr>
                        <td class="text-bold-500"><h4>Article Non Indexé</h4></td>
                        <td class="text-bold-500"><h4>{{$nombre->article}}</h4></td>
                        <td class="text-bold-500"><h4>{{number_format($nombre->article * $coef->article)}}</h4></td>
                      </tr>

                      <tr>
                        <td class="text-bold-500"><h4>Brevet</h4></td>
                        <td class="text-bold-500"><h4>{{$nombre->brevet}}</h4></td>
                        <td class="text-bold-500"><h4>{{number_format($nombre->brevet * $coef->brevet)}}</h4></td>
                      </tr>

                      <tr>
                        <td class="text-bold-500"><h4>Doctorat</h4></td>
                        <td class="text-bold-500"><h4>{{$nombre->doctorat}}</h4></td>
                        <td class="text-bold-500"><h4>{{number_format($nombre->doctorat * $coef->doctorat)}}</h4></td>
                      </tr>

                      <tr>
                        <td class="text-bold-500"><h4>Nombre de Membres</h4></td>
                        <td class="text-bold-500"><h4>{{$nombre->membre_per}}</h4></td>
                        <td class="text-bold-500"><h4>{{number_format($nombre->membre_per * $coef->membre_per)}}</h4></td>
                      </tr>

                      <tr>
                        <td class="text-bold-500"><h4>Total</h4></td>
                        <td class="text-bold-500"><h4></h4></td>
                        <td class="text-bold-500"><h4>{{$structure->Note->note}}</h4></td>
                      </tr>
                      
                    </tbody>
                  </table>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Striped rows end -->
@endsection