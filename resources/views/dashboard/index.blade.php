@extends('layouts.app')
@section('page_title', $page['page_title'])
@section('content')
    <div class="content mt-3">
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Customer</div>
                            <div class="stat-digit count">{{ $allclient }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="fa fa-cart-plus text-success border-success
                        "></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Items</div>
                            <div class="stat-digit count">{{ $allitems}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div> <!-- .content -->
</div>
@endsection