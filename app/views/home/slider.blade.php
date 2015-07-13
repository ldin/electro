<div id="carousel-example-generic" class="carousel slide col-xs-12 col-md-6 col-md-offset-3" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">

    @if(!empty($slides))
      @foreach ($slides as $key => $slide)
          <li data-target="#carousel-example-generic" data-slide-to="{{$key}}" class="{{ ($key==0)?'active':'' }}"></li>
      @endforeach
    @endif

  </ol>

  <!-- Wrapper for slides -->

  <div class="carousel-inner" role="listbox">

    @if(!empty($slides))
      @foreach ($slides as $key => $slide)

        <div class="item {{ ($key==0)?'active':'' }}">
          <p class="title"> {{ $slide->name }}</p>
          <div class="block-item">
            {{ HTML::image( (!empty($slide->image))?$slide->image:'/img/slide-default.png', '') }}
            <div class="carousel-caption">
                {{ $slide->text }}
            </div>
          </div>
          <div>
            {{ HTML::link($slide->link, $slide->button, ['class'=>'btn-slide col-xs-12 col-md-6 col-md-offset-3'] ) }}
          </div>
        </div> <!-- /.item -->

      @endforeach
    @endif


  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
