@extends('layouts.app')

@section('content')
<div class="bg-white shadow p-8 mb-4">
    <div class="text-orange-dark font-light mb-8 bg-orange-lightest -mx-8 -mt-8">
        <h4 class="title text-orange-dark font-light text-2xl p-4 flex justify-between">
            <span class="flex-1">Add new team</span>
        </h4>
    </div>
    <form method="POST" action="{{{ route('team.store') }}}">
        {{ csrf_field() }}
        @include('team.partials.form')
        <button class="button is-primary is-outlined" type="submit">Create new team</button>
        <a class="button" href="{{{ route('profile.show') }}}">Cancel</a>
    </form>
</div>
@endsection
