@layout('layout.skeleton')
@section('title')
Honey Money
@endsection
@section('content')
  <!-- main -->
  <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Kategoriler</h1>
  </div>
  <div class="col">
    <!--MASALARRRRRRRRRRRRRRRRRRRRR-->
    <div class="wrapper-md">
      <!-- users -->
      <div class="row">
     		@foreach($categories as $category)
     		    <div class="col-md-4">
		          <div class="panel no-border">

		            <div class="panel-heading wrapper b-b b-light">
		              <h5 class="font-thin m-t-none m-b-none text-muted">{{$category->category_name}}</h5>              
		            </div>
		            <div class="panel-footer">
		              <a href="{{URL::base()}}/category/{{$category->id}}" class="btn btn-primary btn-addon btn-sm"><i class="fa fa-plus"></i>Masa Aç</a>
		            </div>
		          </div>
		        </div>
			@endforeach
      </div>

      <!-- / users -->
    </div>
  </div>

  <div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">Tüm Masalar</h1>
  </div>
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
  <!-- / main -->
@endsection