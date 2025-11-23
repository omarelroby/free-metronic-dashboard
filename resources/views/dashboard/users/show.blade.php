@extends('layouts.master')

@section('page-title', 'User Details')
@section('breadcrumb', 'User Details')

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>User Details</h2>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary me-3">
                            <i class="ki-duotone ki-pencil fs-2"></i>
                            Edit User
                        </a>
                        <a href="{{ route('users.index') }}" class="btn btn-light">Back to List</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="fw-semibold fs-6 mb-2">Name</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-control form-control-solid">{{ $user->name }}</div>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="fw-semibold fs-6 mb-2">Email</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-control form-control-solid">{{ $user->email }}</div>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="fw-semibold fs-6 mb-2">Permissions</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-control form-control-solid">
                        @if($user->permissions->count() > 0)
                            <div class="d-flex flex-wrap gap-2">
                                @foreach($user->permissions as $permission)
                                    <span class="badge badge-light-primary">
                                        <span class="fw-bold">{{ $permission->name }}</span>
                                        <span class="text-gray-500 fs-7 ms-1">({{ $permission->slug }})</span>
                                    </span>
                                @endforeach
                            </div>
                        @else
                            <span class="text-gray-400">No permissions assigned</span>
                        @endif
                    </div>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="fw-semibold fs-6 mb-2">Created At</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-control form-control-solid">{{ $user->created_at->format('M d, Y H:i') }}</div>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
                <!--begin::Input group-->
                <div class="fv-row mb-7">
                    <!--begin::Label-->
                    <label class="fw-semibold fs-6 mb-2">Updated At</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <div class="form-control form-control-solid">{{ $user->updated_at->format('M d, Y H:i') }}</div>
                    <!--end::Input-->
                </div>
                <!--end::Input group-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content container-->
</div>
@endsection

