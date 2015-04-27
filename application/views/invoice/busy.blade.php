@layout('layout.skeleton')

@section('title')
	Masalar
@endsection
@section('content')
    <div class="col">
    <div class="wrapper-md">
      <!-- users -->
      <div class="row">
 		    <div class="col-sm-8">
 
                  <div class="wrapper-md">
                      <div class="row containerhall">
                        @foreach($category as $cat)
                        <div class="col-xs-4" id="eatables" data-catid="{{$cat->id}}">
                          <div class="panel b-a">
                            <div class="panel-heading no-border bg-primary">          
                              <span class="text-lt">{{$cat->getDescriptions->name}}</span>
                            </div>
                            <div class="item m-l-n-xxs m-r-n-xxs">
                              <div class="bottom wrapper bg-gd-dk text-white">            
                                <div class="text-u-c h3 m-b-sm text-info-lter">{{$cat->getDescriptions->name}}</div>
                              </div>
                              <img src="{{URL::base()}}/{{$cat->getDescriptions->image}}" class="img-full">
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                  </div>

        </div>

        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading wrapper b-b b-light">
                <h5 class="font-thin m-t-none m-b-none text-muted"><b>{{$table->table_name}}</b></h5>              
            </div>
            <div class="panel-body scrollable">
              <ul class="list-group no-radius">
                @foreach($inv as $res)
                <li class="list-group-item">
                  <span class="pull-right">{{$res->total_qty_prize}} TL</span>
                  <span class="label bg-info">{{$res->quantity}}</span>
                  {{$res->product}}
                </li>
                @endforeach

              </ul>
            </div>
            <footer class="panel-footer bg-info text-center no-padder">
              <div class="row no-gutter">
                <div class="col-xs-6">
                  <div class="wrapper">
                    <?php 
                      $diff = dateDiffCust($invoice->status_opened,date("Y-m-d H:i:s"));
                    ?>
                    <span class="m-b-xs h3 block text-white">{{$diff}}</span>
                    <small class="text-muted">Açılış Zamanı</small>
                  </div>
                </div>
                <div class="col-xs-6 dk">
                  <div class="wrapper">
                    <span class="m-b-xs h3 block text-white">{{$total}} TL</span>
                    <small class="text-muted">Toplam</small>
                  </div>
                </div>
              </div>
            </footer>
          </div>
          <button class="btn btn-primary btn-addon btn-lg"><i class="fa fa-plus"></i>Ödeme Al</button>
        </div>
      </div>
    </div>
  </div>
@endsection