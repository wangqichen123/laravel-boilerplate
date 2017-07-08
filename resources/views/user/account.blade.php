@extends('layouts.frontend')

@section('title', trans('labels.user.titles.account'))

@section('content')
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#profile" role="tab">@lang('labels.user.profile')</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#edit" role="tab">@lang('labels.user.edit_profile')</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#password" role="tab">@lang('labels.user.change_password')</a>
        </li>

        @if (config('account.can_delete'))
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#delete" role="tab">@lang('labels.user.delete')</a>
        </li>
        @endif
    </ul>

    <div class="tab-content">

        <div role="tabpanel" class="tab-pane" id="profile">
            @include('user.account.profile')
        </div>

        <div role="tabpanel" class="tab-pane" id="edit">
            @include('user.account.edit')
        </div>

        <div role="tabpanel" class="tab-pane" id="password">
            @include('user.account.password')
        </div>

        @if (config('account.can_delete'))
        <div role="tabpanel" class="tab-pane" id="delete">
            @include('user.account.delete')
        </div>
        @endif

    </div>
@endsection
