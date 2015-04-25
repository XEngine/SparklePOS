@layout('layout.skeleton')

@section('title')
	Masalar
@endsection
@section('content')
    <div class="col">
    <!--MASALARRRRRRRRRRRRRRRRRRRRR-->
    <div class="wrapper-md">
      <!-- users -->
      <div class="row">
     		@foreach($tables as $table)
     			<?php $active = $table->table_active ? 'btn-danger' : 'btn-primary'; ?>
     		    <div class="col-md-4">
		          <div class="panel bg-gd panel-default">

		            <div class="panel-heading wrapper b-b b-light">
		              <h5 class="font-thin m-t-none m-b-none text-muted">{{$table->table_name}}</h5>              
		            </div>
		            <div class="panel-footer">
		              <a href="{{URL::base()}}/table/{{$table->table_slug}}" class="btn {{$active}} btn-addon btn-sm"><i class="fa fa-plus"></i>@if($table->table_active) Masaya Git @else Masa Aç @endif</a>
		            </div>
		          </div>
		        </div>
			@endforeach
      </div>

      <!-- / users -->
    </div>
  </div>
@endsection