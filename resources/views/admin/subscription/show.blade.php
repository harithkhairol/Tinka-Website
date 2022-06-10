@extends('admin.layouts.app', ['title' => 'Subscription'])

@section('content')
    @include('admin.layouts.headers.generic')

    <div class="container-fluid mt--9">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Subscription Details</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin.subscription.index') }}" class="btn btn-sm btn-primary">Back</a>
                                <a href="{{ route('admin.subscription.edit', $subscription->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 mt-4 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase ls-1 mb-1">Plan</h6>
                                <h2 class="mb-0">Package Desription</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <dl class="dl-horizontal">
                            <dt>Category</dt>
                            <dd class="text-uppercase">{!! str_replace("-", " ", $subscription->plan->category) !!}</dd>
                            <dt>Package Name</dt>
                            <dd>{{ $subscription->plan->name }}</dd>
                            <dt>Description</dt>
                            <dd>{{ $subscription->plan->description }}</dd>
                            <dt>Subject Offered</dt>
                            <dd>{{ $subscription->plan->subject }}</dd>
                            <dt>Minimum Subject</dt>
                            <dd>{{ $subscription->plan->minumum_subject }}</dd>
                            <dt>Maximum Subject</dt>
                            <dd>{{ $subscription->plan->maximum_subject }}</dd>
                            <dt>Fee</dt>
                            <dd>RM {{ number_format($subscription->plan->price,2) }}</dd>
                            <dt>Signup Fee</dt>
                            <dd>RM {!! number_format($subscription->plan->signup_fee,2) !!}</dd>
                            <dt>Exam Fee</dt>
                            <dd>RM {!! number_format($subscription->plan->exam_fee,2) !!}</dd>
                            <dt>Status</dt>
                            <dd>{!! $subscription->plan->is_active == 1 ? '<label class="badge badge-success">Active</label>' : '<label class="label label-danger">Inactive</label>' !!}</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mt-4 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Payment</h6>
                                <h2 class="mb-0">Payment Details</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <dl class="dl-horizontal">
                            <dt>Invoice #</dt>
                            <dd>{{ $subscription->payment->billplz_id }}</dd>
                            <dt>Received On</dt>
                            <dd>{{ $subscription->payment->created_at }}</dd>
                            <dt>Amount Paid</dt>
                            <dd>RM {!! number_format($subscription->payment->amount,2) !!}</dd>
                            <dt>Description</dt>
                            <dd>{{ $subscription->payment->description }}</dd>
                            <dt>Status</dt>
                            <dd>{!! $subscription->payment->paid == true ? '<label class="badge badge-success">Paid</label>' : '<label class="label label-danger">Unpaid</label>' !!}</dd>
                            <dt>Action</dt>
                            <dd>
                                <a href="{{ $subscription->payment->url }}" class="btn btn-sm btn-primary" target="_blank">View Invoice</a>
                                <a href="{{ route('admin.subscription.downgrade', $subscription->id) }}" class="btn btn-sm btn-secondary">Upgrade/Downgrade</a>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mt-4 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Subscription</h6>
                                <h2 class="mb-0">Subscription Details</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <dl class="dl-horizontal">
                            <dt>Student Name</dt>
                            <dd>{{ $subscription->student_name }}</dd>
                            <dt>Subject Registered</dt>
                            <dd>{!! $subscription->subjects !!}</dd>
                            <dt>Last update</dt>
                            <dd>{!! $subscription->updated_at !!}</dd>
                        </dl>
                    </div>
                </div>

                <div class="card shadow mt-3">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">User</h6>
                                <h2 class="mb-0">User Details</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <dl class="dl-horizontal">
                            <dt>Name</dt>
                            <dd>{{ $subscription->user->name }}</dd>
                            <dt>E-mail Address</dt>
                            <dd>{!! $subscription->user->email !!}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 mt-4 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase ls-1 mb-1">Payment</h6>
                                <h2 class="mb-0">Renewal</h2>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Invoice #</th>
                                    <th>Amount</th>
                                    <th>Created At</th>
                                    <th>Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($renewal as $data)
                                <tr>
                                    <td>{{ $data['billplz_id'] }}</td>
                                    <td>{{ $data['amount'] }}</td>
                                    <td>{{ $data['created_at'] }}</td>
                                    <td>{{ $data['status'] }}</td>
                                    <td>
                                        @if($data['status'] != 'delete')
                                        <a class="btn btn-sm btn-primary" href="{{ $data->url }}">View</a> 
                                        <a class="btn btn-sm btn-danger" href="#" onclick="ConfirmDelete('{{ $data['billplz_id'] }}');">Delete</a>
                                        @else
                                        N/A
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.footers.auth')
    </div>
@endsection

@push('js')
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function ConfirmDelete(billplz_id)
    {
        var x = confirm("Are you sure you want to delete this invoice?");
        if (x)
            $.ajax({
            type:'POST',
                url:'/admin/delete_invoice',
                data: 'billplz_id=' + billplz_id,
                success:function(msg){
                    console.log(msg);
                    alert(msg);
                }
            });
        else
            event.preventDefault();
    }
</script>
@endpush