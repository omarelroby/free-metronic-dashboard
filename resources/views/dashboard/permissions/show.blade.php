@extends('layouts.master')

@section('page-title', 'Permission Details')
@section('breadcrumb', 'Permission Details')

@section('content')
<div class="card card-flush">
    <div class="card-header">
        <div class="card-title">
            <h2>Permission Details</h2>
        </div>
        <div class="card-toolbar">
            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-primary">
                <i class="ki-duotone ki-pencil fs-2"></i>
                Edit Permission
            </a>
        </div>
    </div>
    <div class="card-body pt-0">
        <div class="mb-10">
            <label class="form-label fw-bold">Name</label>
            <div class="form-control form-control-solid">{{ $permission->name }}</div>
        </div>
        <div class="mb-10">
            <label class="form-label fw-bold">Slug</label>
            <div class="form-control form-control-solid">
                <span class="badge badge-light-info">{{ $permission->slug }}</span>
            </div>
        </div>
        <div class="mb-10">
            <label class="form-label fw-bold">Description</label>
            <div class="form-control form-control-solid">{{ $permission->description ?? 'N/A' }}</div>
        </div>
        <div class="mb-10">
            <label class="form-label fw-bold">Created At</label>
            <div class="form-control form-control-solid">{{ $permission->created_at->format('M d, Y H:i') }}</div>
        </div>
        <div class="mb-10">
            <label class="form-label fw-bold">Updated At</label>
            <div class="form-control form-control-solid">{{ $permission->updated_at->format('M d, Y H:i') }}</div>
        </div>
        <div class="d-flex justify-content-end gap-3">
            <a href="{{ route('permissions.index') }}" class="btn btn-light">Back to List</a>
        </div>
    </div>
</div>
@endsection

