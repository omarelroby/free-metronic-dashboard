@extends('layouts.master')

@section('page-title', 'Dashboard')
@section('breadcrumb', 'Dashboard')

@section('content')
<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
        <div class="card card-flush h-md-50 mb-xl-10">
            <div class="card-header pt-5">
                <div class="card-title d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ \App\Models\Item::count() }}</span>
                    </div>
                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Total Items</span>
                </div>
            </div>
            <div class="card-body pt-2 pb-4 d-flex align-items-end">
                <div class="d-flex align-items-center pt-2">
                    <span class="badge bg-light-success text-success">
                        <i class="bi bi-arrow-up"></i>
                        Active
                    </span>
                    <span class="text-gray-400 fw-semibold fs-6 ps-2">All Items</span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
        <div class="card card-flush h-md-50 mb-xl-10">
            <div class="card-header pt-5">
                <div class="card-title d-flex flex-column">
                    <div class="d-flex align-items-center">
                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">{{ \App\Models\Item::where('status', 'active')->count() }}</span>
                    </div>
                    <span class="text-gray-400 pt-1 fw-semibold fs-6">Active Items</span>
                </div>
            </div>
            <div class="card-body pt-2 pb-4 d-flex align-items-end">
                <div class="d-flex align-items-center pt-2">
                    <span class="badge bg-light-success text-success">
                        <i class="bi bi-arrow-up"></i>
                        Active
                    </span>
                    <span class="text-gray-400 fw-semibold fs-6 ps-2">Status</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row g-5 g-xl-10">
    <div class="col-xl-12">
        <div class="card card-flush h-xl-100">
            <div class="card-header pt-7">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">Quick Actions</span>
                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Manage your items</span>
                </h3>
            </div>
            <div class="card-body pt-6">
                <div class="row g-5">
                    <div class="col-md-6">
                        <a href="{{ route('items.index') }}" class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C; background-image:url('https://preview.keenthemes.com/metronic9/demo1/assets/media/misc/tape.svg')">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">View Items</span>
                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Browse all items</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('items.create') }}" class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #7239EA; background-image:url('https://preview.keenthemes.com/metronic9/demo1/assets/media/misc/tape.svg')">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">Create Item</span>
                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Add new item</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

