@extends('layouts.author.master')

@section('title')
    {{ __('Business Category')  }}
@endsection

@section('main_content')
    <div class="erp-table-section">
        <div class="container-fluid">
            <div class="table-header">
                <h4>{{__(' Category')}}</h4>
                @can('business-categories-create')
                    <a href="{{ route('author.business-categories.create') }}" class="add-order-btn rounded-2 {{ Route::is('author.business-categories.create') ? 'active' : '' }}"><i class="fas fa-plus-circle"></i> {{ __('Add New Category') }}</a>
                @endcan
            </div>
            <div class="table-top-form daily-transaction-between-wrapper">
                <form class="searchForm" action="{{ route('author.business-categories.index') }}" method="get">
                    <div class="grid-3">
                        <select class="form-control" name="per_page">
                            <option value="30">@lang('Per Page- 10')</option>
                            <option value="25">@lang('Per Page- 25')</option>
                            <option value="50">@lang('Per Page- 50')</option>
                            <option value="100">@lang('Per Page- 100')</option>
                        </select>
                        <div class="table-search">
                            <input class="form-control searchInput" type="text" placeholder="Search..."
                                   value="{{ request('search') }}">
                            <button type="submit"><i class="far fa-search" aria-hidden="true"></i></button>
                            <button type="button" class="text-danger clearSearchInput d-none"><i class="far fa-times"
                                                                                                 aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="table-top-btn-group">
                    <ul>
                        <li><a href="#"><img src="{{ asset('assets/img/icon/xl.svg') }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('assets/img/icon/csv.svg') }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('assets/img/icon/pdf.svg') }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('assets/img/icon/print.svg') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="responsive-table rounded-image">
                <table class="table" id="erp-table">
                    <thead>
                    <tr>
                        <th class="w-60">
                            <div class="d-flex align-items-center gap-3">
                                <input type="checkbox" class="selectAllCheckbox">
                                <i class="fal fa-trash-alt delete-selected"></i>
                            </div>
                        </th>
                        <th>{{__('SL.')}}</th>
                        <th>{{__('Name')}}</th>
                        <th>{{__('Description')}}</th>
                        <th>{{__('Status')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                    </thead>
                    <tbody class="searchResults">
                    @include('author.business-categories.datas')
                    </tbody>
                </table>
            </div>
            <div class="mt-3">
                {{ $business_categories->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>

    <div class="modal fade" id="category-view-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">{{ __('Category View') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="personal-info">
                        <div class="row align-items-center mt-3">
                            <div class="col-md-4"><p>{{ __('Name') }}</p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p id="category_view_name"></p></div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-md-4"><p>{{ __('Description') }}</p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p id="category_view_description"></p></div>
                        </div>
                        <div class="row align-items-center mt-3">
                            <div class="col-md-4"><p>{{ __('Status') }}</p></div>
                            <div class="col-1">
                                <p>:</p>
                            </div>
                            <div class="col-md-7"><p id="category_view_status"></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('modal')
    @include('author.components.multi-delete-modal')
@endpush

@push('js')
    <script src="{{ asset('assets/js/custom/custom.js') }}"></script>
@endpush