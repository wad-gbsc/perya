@extends('pages.index')

@section('content')

<!-- STATIC MEDIA IMAGE -->
{{-- <div style="background-image: url(images/colorfued_bg.jpg); background-repeat: no-repeat; background-position:50% 0; background-size: cover;" data-stellar-background-ratio="0.5">
  <div class="container sm-content-cont text-center js-height-fullscr" > --}}
<div style="background-image: url(images/bg2.jpg); background-repeat: no-repeat; background-position:50% 0; background-size: cover;" >
  <div class="container sm-content-cont text-center " >
    <div style="padding-top:13%" >

      <!-- OPACITY container -->
      <div >

        <!-- LAYER NR. 1 -->
        <div class="font-white light-72-wide sm-mb-15 sm-mt-40" >
        <img class="wow fadeInLeft" src="images/cf_name1.png" style="height: 80%; width: 80%" alt="img">
        </div>

        <br>
        <!-- LAYER NR. 2 -->
        <div class="font-white norm-16-wide sm-mb-50">
        <img class="wow fadeInRight" src="images/guide2.png" style="height: auto; width: auto" alt="img">
        </div>
        <br><br>

        <!-- LAYER NR. 3 -->
          <div class="row">
            <div class="col-md-4">  
             
            </div>
            {{-- <div class="col-md-2">  
              <a href="/"><img alt="googleplay" src="images/googleplay.png"></a> --}}
            </div>
            <div class="col-md-2">  
              {{-- <a href="/"><img alt="windows" src="images/windows.png"></a> --}}
            </div>
            <div class="col-md-4">  
           
            </div>
          </div>

          <br><br>

      </div>

    </div>
  </div>
</div>

<!-- STATIC MEDIA IMAGE -->

{{--  --}}
@stop