<section id="exhibiton" class="exhibiton_section mr-5 ml-5">
  <h1 class="text-center maincolor">Exhibiton Timeline</h1>
  <div class="d-flex justify-content-center">
	  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		  @foreach($years as $key=>$year)
			  <li class="nav-item">
			    <a class="nav-link {{$key == 0 ? 'active':''}}" id="pills-home-tab" data-toggle="pill" href="#pills-{{$key}}" role="tab" aria-controls="pills-{{$key}}" aria-selected="{{$key == 0 ? 'true':'false'}}">{{$year->year}}</a>
			  </li>
		  @endforeach
	  </ul>

	</div>
 	 <div class="tab-content" id="myTabContent">
	  	@foreach($years as $key=>$year)
		  <div class="tab-pane fade {{$key == 0 ? 'show active':''}}" id="pills-{{$key}}" role="tabpanel" aria-labelledby="pills-{{$key}}-tab">
		  	@foreach($year->yearExhibationCategories as $k=>$exbcategory)
	  			<div class="row exb-item mt-2">
		  			<div class="col-3 text-center">
		  				{{$exbcategory->title}}
		  			</div>
		  			<div class="col-6">
		  				{!! $exbcategory->description !!}
		  			</div>
		  			<div class="col-3 d-flex align-items-center">
	  					@if($exbcategory->type == 'epost')
		  					<a href="/exhibition/epost/{{$exbcategory->id}}" class="btn btn-md btn-warning">
		  						VIEW EXHIBITION HERE
		  					</a>
	  					@elseif($exbcategory->type == 'evideo')
		  					<a href="https://unsplash.it/1200/768.jpg?image=250" data-toggle="lightbox" data-max-width="600" class="btn btn-md btn-warning">
							    VIEW VIDEO HERE
							</a>
	  					@else
	  						<a href="#" class="btn btn-md btn-warning">
		  						VIEW EXHIBITION HERE
		  					</a>
	  					@endif
		  				
		  			</div>
		  		</div>
		  	@endforeach
		  </div>
	  	@endforeach
	  </div>
</section>