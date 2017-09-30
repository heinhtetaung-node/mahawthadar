@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')
<!-- ################################################################################################ -->
<div class="nextfooter">
   <div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 

     <div id="content" class="three_quarter first"> 
      <ul class="nospace listing">
        @foreach($posts as $post)
        <li class="clear">
          <div class="imgl borderedbox">
            <a href="{{ route('history.show',$post->id) }}">
              <img src="{{ asset('upload/posts/' . $post->feature_photo) }}" alt="" style="width: 120px; height: 120px;">
            </a>
          </div>
          <a href="{{ route('history.show',$post->id) }}">{{$post->title}}</a>
          <br>
          <time datetime="2045-04-06T08:15+00:00">{{$post->created_at->toFormattedDateString()}}</time><br><br>
          <p>{{$post->short_description}}</p>
        </li>
        @endforeach
      </ul> 
      {{$posts->render()}} 
      
    </div>  
  <!-- ################################################################################################ -->
    <div class="one_quarter sidebar"> 
    <h6>Campus Life</h6>
        <nav class="sdb_holder">
          <ul>
            <li><a href="news.php">News Activity</a></li>
            <li><a href="news.php">Student Life</a></li>
            <li><a href="news.php">Sports</a></li>
            <li><a href="news.php">Health Care</a></li>
            <li><a href="news.php">Food</a></li>
          </ul>
        </nav>
    </div>
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <!-- <main class="container clear">  -->
     <div class="clear"></div>
     <div class="founder">
      <h2 class="title">တည္ေထာင္အုပ္ခ်ဳပ္သူမ်ား (Founders)</h2>
      <div id="portfolio">
        <ul class="nospace clear">
          <li class="one_half first">
            <article><img class="borderedbox" src="images/demo/portfolio/8.jpeg" alt="">
              <h2>ဥကၠဌ</h2>
              <p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
              <!-- <p class="right"><a href="#">Read More Here &raquo;</a></p> -->
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/demo/portfolio/6.jpeg" alt="">
              <h2>နာယက</h2>
              <p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
            </article>
          </li>
          <li class="one_half first">
            <article><img class="borderedbox" src="images/demo/portfolio/9.jpeg" alt="">
              <h2>ေက်ာင္းအုပ္ၾကီး</h2>
              <p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
            </article>
          </li>
          <li class="one_half">
            <article><img class="borderedbox" src="images/demo/portfolio/1.png" alt="">
              <h2>Metridiculis conseque quis</h2>
              <p>Orciinterdum condimenterdum nullamcorper elit nam curabitur laoreet met praesenean et iaculum. Metridiculis conseque quis iaculum aenean nunc aenean quis nam nis dui.</p>
            </article>
          </li>
        </ul>
        </div>
      </div> 
      <!-- ################################################################################################ -->
      <!-- <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav> -->
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div> 
<!-- ################################################################################################ -->
@endsection

@section('scripts')
@parent
<!-- your custom script here -->
@endsection