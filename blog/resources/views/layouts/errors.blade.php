@if(count($errors))
<div class="row">
  <div class="col s12">
    <div class="card red darken-4">
      <div class="card-content white-text">
        <p>
         @foreach($errors->all() as $error)
         {{$error}}
         @endforeach
       </p>
     </div>
   </div>
 </div>
</div>
@endif