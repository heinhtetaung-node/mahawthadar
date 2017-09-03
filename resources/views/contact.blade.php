@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
<style type="text/css">
  .alert-danger{
  display: block;
  background: #eee;
}
</style>
@endsection

@section('content')

<!-- ################################################################################################ -->
<div class="nextfooter">
   <div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 

     <div id="content" class="three_quarter first"> 
     <div id="comments">
          <h2>Contact Form</h2>
          <!-- for valaditor -->
          @if ( count( $errors ) > 0 )
            <div class=" alert-danger">
                @foreach ($errors->all() as $error)
                    *{{ $error }}*<br>        
                @endforeach
            </div>
          @endif
          <form action="/contact" method="post">
          {{csrf_field()}}

            <div>
              <label for="name">Name <span>*</span></label>
              <input type="text" name="name" id="name" value="" size="22">
            </div>
            <div>
              <label for="email">Email <span>*</span></label>
              <input type="text" name="email" id="email" value="" size="22">
            </div>
            <div class="block clear">
              <label for="comment">Your Comment <span>*</span></label>
              <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
            </div>
            <div>
              <input name="submit" type="submit" value="Submit Form">
              &nbsp;
              <input name="reset" type="reset" value="Reset Form">
            </div>
          </form>
      </div>
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