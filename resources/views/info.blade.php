@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center" style="font-family: 'Raleway', sans-serif; font-weight: bold;"><u>House Info</u></h2>
    <div class="row">        
        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-striped table-condensed cf">
                <thead class="cf">
                    <tr>

                        <th class="numeric">Title</th>
                        <th class="numeric">Content</th>
                        <th class="numeric">Creator</th>
                        <th class="numeric">Edit</th>
                        <th class="numeric">Delete</th>
                  
                        
                    </tr>
                </thead>
                
                
                <tbody>
                    

                    @foreach ($info as $i)
                    <tr>
                        <td data-title="Title">{{ $i->title }}</td>
                        <td data-title="Content">{{ $i->body }}</td>
                        <td data-title="Creator">{{ $i->creator }}</td>
                        <td data-title="Edit">{!! Html::linkRoute('info.edit', 'Edit', array($i->id), ['class' => 'btn btn-success btn-block']) !!}</td>
                        <td data-title="Delete">{!! Form::open(['route' => ['info.destroy', $i->id], 'method' => 'DELETE']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                            {!! Form::close() !!}</td>
                    </tr>
                    @endforeach
                

                </tbody>
               
            
            </table>
        </div>
    </div>
</div>
@endsection
