@extends('layouts.master')

@section('page-title', 'Edit Permission')
@section('breadcrumb', 'Edit Permission')

@section('content')
<div class="card card-flush">
    <div class="card-header">
        <div class="card-title">
            <h2>Edit Permission</h2>
        </div>
    </div>
    <div class="card-body pt-0">
        <form action="{{ route('permissions.update', $permission->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-10">
                <label class="form-label required">Name</label>
                <input type="text" name="name" class="form-control form-control-solid @error('name') is-invalid @enderror" value="{{ old('name', $permission->name) }}" placeholder="Enter permission name" required />
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-10">
                <label class="form-label required">Slug</label>
                <input type="text" name="slug" class="form-control form-control-solid @error('slug') is-invalid @enderror" value="{{ old('slug', $permission->slug) }}" placeholder="e.g., create-user, edit-user" required />
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-text">Use lowercase letters, numbers, and hyphens only (e.g., create-user)</div>
            </div>
            <div class="mb-10">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control form-control-solid @error('description') is-invalid @enderror" rows="3" placeholder="Enter permission description">{{ old('description', $permission->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-end gap-3">
                <a href="{{ route('permissions.index') }}" class="btn btn-light">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Permission</button>
            </div>
        </form>
    </div>
</div>
@endsection

