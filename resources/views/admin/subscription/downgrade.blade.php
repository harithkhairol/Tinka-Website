@extends('admin.layouts.app', ['title' => 'Subscription'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Upgrade/Downgrade Subscription for {{ $subscription['student_name'] }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.subscription.index') }}"> Back</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-9">
                                <div class="row">
                                    @foreach($plan as $data)
                                    <div class="col-md-6 col-sm-12 col-lg-4">
                                        <div class="card mb-3">
                                            <img class="card-img-top" src="{{ asset('assets/img/portfolio/'.$data['id'].'.png') }}" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $data['name'] }}</h5>
                                                <p class="card-text">{{ $data['description'] }}<br>
                                                Price: RM {{ $data['price'] }}/subject<br>
                                                Renewal: Every {{ $data['invoice_period'].' '.$data['invoice_interval'] }}</p>
                                                <a href="#" class="btn btn-primary downgrade" id="{{ $data['id'] }}" data-toggle="modal" data-target="#downgrade" data-id="{{ $data['id'] }}" data-plan="{{ $data['name'] }}" data-description="{{ $data['description'] }}">Choose</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-3">
                                <h3>Current Plan</h3>
                                <h2>{{ $subscription->plan->name }}</h2>
                                <p>{{ $subscription->plan->description }}</p>
                                <h3>Subscription details</h3>
                                <ul>
                                <li>Price: RM {{ $subscription->plan->price }}/subject</li>
                                <li>Renewal: Every {{ $subscription->plan->invoice_period.' '.$subscription->plan->invoice_interval }}</li>
                                </ul>
                                <?php $subject = explode(',', $subscription['subjects']); ?>
                                @foreach($subject as $key => $value)
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="subject-{{ $key }}" checked disabled="" value="{{ $value }}">
                                <label class="custom-control-label" for="subject-{{ $key }}">{{ $value }}</label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layouts.footers.auth')
    </div>
    <div class="modal fade" id="downgrade" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
            
                <div class="modal-header">
                    <h3 class="modal-title" id="modal-title-default">Plan : <span id="plan"></span></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p id="description"></p>
                    <form action="{{ route('admin.subscription.update', $subscription['id']) }}" method="post" class="" name="downgrade">
                    @csrf
                    <div class="form-group mb-2">
                        <label>Student Name</label>
                        <input type="text" name="student_name" value="{{ $subscription['student_name'] }}" class="form-control" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label>Subjects</label>
                    <?php $subject = explode(',', $data['subjects']); ?>
                      @foreach($subject as $key => $value)
                      <div class="form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="subject-{{ $key }}" name="subjects[]" onclick="checkBoxLimit()" value="{{ $value }}">
                        <label class="form-check-label" for="subject-{{ $key }}" name="subjects[]">{{ $value }}</label>
                      </div>
                      @endforeach
                  </div>
                  <input type="hidden" name="plan_id" value="" id="plan_id">
                </div>
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    </form>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button> 
                </div>
                
            </div>
        </div>
    </div>
@endsection

@push('js')
<script type="text/javascript">
function checkBoxLimit() {
  var checkBoxGroup = document.forms['downgrade']['subjects[]'];     
  var max_sub = {{ $data['maximum_subject'] }};
  var min_sub = {{ $data['minimum_subject'] }};
  for (var i = 0; i < checkBoxGroup.length; i++) {
    checkBoxGroup[i].onclick = function() {
      var checkedcount = 0;
      for (var i = 0; i < checkBoxGroup.length; i++) {
        checkedcount += (checkBoxGroup[i].checked) ? 1 : 0;
      }
      if (checkedcount < min_sub) {
        alert("You must select minimum of " + min_sub + " subject.");
      }
      if (checkedcount > max_sub) {
        alert("You can select maximum of " + max_sub + " subject.");
        this.checked = false;
      }
    }
  }
}

$('.downgrade').each(function(){
    $(this).click(function(){
        $('#plan').text($(this).data('plan'));
        $('#plan_id').val($(this).data('id'));
        $('#description').text($(this).data('description'));
    });
});
</script>
@endpush
