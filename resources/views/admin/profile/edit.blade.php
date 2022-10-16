{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- profile.blade.phpの@yield('title')に'profileの編集画面'を埋め込む --}}
@section('title', 'Profileの編集画面')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Profile編集画面</h2>
            </div>
        </div>
    </div>
@endsection
