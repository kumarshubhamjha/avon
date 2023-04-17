@extends($sc_templatePath.'.layout')

@section('block_main')
<section class="myprofile-pg py-60">
    <div class="container">
      <div class="row">
        <div class="col-md-3 left-section">
          @include($sc_templatePath.'.account.nav_customer')
        </div>
        <div class="col-md-9 right-section">
            @section('block_main_profile')
            @show
        </div>
      </div>
    </div>
</section>
@endsection