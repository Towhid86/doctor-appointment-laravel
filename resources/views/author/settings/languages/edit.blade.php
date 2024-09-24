@extends('layouts.author.master')

@section('title')
    {{ __('Tutorial') }}
@endsection

@section('main_content')
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="table-header">
                <h4>{{ __('Edit Tutorial') }}</h4>
                @can('language-settings-read')
                <a href="{{ route('author.language-settings.index') }}" class="add-order-btn rounded-2 {{ Route::is('author.language-settings.create') ? 'active' : '' }}"><i class="far fa-list" aria-hidden="true"></i> {{ __('Tutorial List') }}</a>
                @endcan
            </div>
            <div class="order-form-section">
                <form action="{{ route('author.language-settings.update', $language->id) }}" method="post" enctype="multipart/form-data"
                      class="ajaxform_instant_reload">
                    @csrf
                    @method('put')
                    <div class="add-suplier-modal-wrapper">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Flag</label>
                                <div class="upload-img-v2">
                                    <label class="upload-v4 image-height">
                                        <div class="img-wrp">
                                            <img src="{{ Storage::url($language->flag) ?? asset('assets/images/icons/upload-icon.svg') }}" alt="user" id="profile-img">
                                        </div>
                                        <input type="file" name="flag" class="d-none" onchange="document.getElementById('img').src = window.URL.createObjectURL(this.files[0])" accept="image/*">
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="col-lg-12 mt-2">
                                    <label>{{('Name')}}</label>
                                    <input type="text" name="name" value="{{ $language->name }}" required class="form-control" placeholder="Language Name">
                                </div>
                                <div class="col-lg-12 mt-2">
                                    <label>{{('Short Name')}}</label>
                                    <input type="text" name="alias" value="{{ $language->alias }}" required class="form-control" placeholder="Language Short Name">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-2">
                                <label>{{ __('Direction') }}</label>
                                <div class="gpt-up-down-arrow position-relative">
                                    <select name="direction" class="form-control select-dropdown">
                                        <option value="ltl">{{ __('LTL') }}</option>
                                        <option value="rtl">{{ __('RTL') }}</option>
                                    </select>
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-2">
                                <label>{{__('Status')}}</label>
                                <div class="form-control d-flex justify-content-between align-items-center radio-switcher">
                                    <p class="dynamic-text">{{ __('Active') }}</p>
                                    <label class="switch m-0">
                                        <input type="checkbox" name="status" class="change-text" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="button-group text-center mt-5">
                                    <a type="reset" class="theme-btn border-btn m-2">{{ __('Cancel') }}</a>
                                    <button class="theme-btn m-2 submit-btn">{{__('Save')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
