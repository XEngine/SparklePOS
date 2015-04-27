@if($iscat)
@foreach($categories as $cat)
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
@else
@foreach($products as $product)
<div class="col-xs-4" id="eatables" data-catid="{{$product->id}}">
  <div class="panel b-a">
    <div class="panel-heading no-border bg-primary">          
      <span class="text-lt">{{$product->product}}</span>
    </div>
    <div class="item m-l-n-xxs m-r-n-xxs">
      <div class="bottom wrapper bg-gd-dk text-white">            
        <div class="text-u-c h3 m-b-sm text-info-lter">{{$product->price}}</div>
      </div>
      <img src="{{URL::base()}}/{{$product->image}}" class="img-full">
    </div>
  </div>
</div>
@endforeach
@endif
