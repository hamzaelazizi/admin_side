@extends('layouts.admin')

@section('content')



<h1>{{$prof->name}}</h1>

                   <?php  
                   echo $structure;
                   ?>

                   @foreach($membres as $mbr)
                   <h1>{{$mbr->prenom}}</h1>
                   @endforeach


                    



@endsection