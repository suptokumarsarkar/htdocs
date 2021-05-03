@extends("layout.app")
@section("title","Notifications | School management software")
@section("active","notifications")
@section("content")
<style>
.page-content .grid > article{
  grid-column: 1 / -1 !important;
    margin-top: 60px;
flex-direction: column;
}
</style>
 <article>



<div class="search" style="width: 100%; padding: 2%; overflow: hidden">
	<div class="rk" style="float: right; align-items: center;">
		Search <input type="search" id="snod410" autocomplete="off" onkeyup="load_notifications(1)" style="padding: 10px; border: 1px solid #ccc; outline: none;" placeholder="Search">
	</div>
	<div class="dk">
<input type="hidden" value="{{ csrf_token() }}" id="token">
	</div>
</div>
<div class="all_notifications" style="width: 100%">
	
</div>



 </article>
@endsection

@section("script")

  <script src="{{ asset('/public/js/admin.js?'.rand()) }}"></script>
<script>
	$(document).ready(function() {
		load_notifications(1);
	});
	function dp_fun(page){
		load_notifications(page);

	}
</script>
<style>
	
.moce10 {
  padding: 10px;
  margin: 10px;
  border: 1px solid #ccc;
}
.moce10.new_one {
  background: #e6f8ff;
}
.moce10 .btn {
  float: right;
}
</style>
@endsection