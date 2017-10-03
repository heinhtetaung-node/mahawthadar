@extends('admin.layout')

@section('styles')
@parent
<!-- your custom css here -->
<style type="text/css">
.alert-success{
  display: block;
  background: #efefef;
  color: green;
}
</style>
@endsection

@section('content')
<?php
$category_id = (isset($_GET['category_id']))? $_GET['category_id'] : '';
$sub_category_id = (isset($_GET['sub_category_id']))? $_GET['sub_category_id'] : '';
?>
<div id="content" class="bodylayout"><!-- second common-->
	<div class="well">
		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-list-ul"></i> Timetable List</h1>
			</div>	
		</div>


		<div class="row">
			<form action="{{ route('admin.timetable.search') }}" method="GET" role="form">
				<div class="form-group col-md-3">
				    <div class="input-group">
				        <input type="text" class="form-control" name="search"
				            placeholder="Search" value="{{ (isset($_GET['search']))? $_GET['search'] : '' }}"> 
				        </span>
				    </div>
				</div>
				<div class="form-group col-md-3">
			    	<select id="ctr_parent_id" class="form-control" name="category_id">
                        <option value="">Select Category</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                	<select id="ctr_sub_id" class="form-control" name="sub_category_id">
                        <option value="">Select Sub Category</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                	<input type="submit" value="Search" name="Search" class="btn btn-success"> 
                </div>
			</form>			
			
			<div class="col-md-6">
								
			</div>
			 <!-- for success message -->
            @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
             @endif
			<table class="table table-striped table-bordered table-hover"> 
				<thead>
					<tr>
						<td width="40px;">ID</td>
						<td>Day</td>
						<td>1</td>
						<td>2</td>
						<td>3</td>
						<td>4</td>
						<td>5</td>

					</tr>					
				</thead>
				<tbody>
					@foreach($timetable as $t)			
					<tr>
						<td>{{$t->id}}</td>
						<td>
							{{$t->title}}
						</td>
						<td>{{$t->custom_field1}}</td>
						<td>{{$t->custom_field2}}</td>
						<td>{{$t->custom_field3}}</td>
						<td>{{$t->custom_field4}}</td>
						<td>{{$t->custom_field5}}</td>					

					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<input type="hidden" id="ctr_tocken" value="{{ csrf_token() }}" /> 
</div>
@endsection

@section('scripts')
@parent

<script type="text/javascript" src="{{ asset('js/getsubfrommain.js') }}"></script>

@endsection