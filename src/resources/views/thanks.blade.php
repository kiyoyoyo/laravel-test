@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
  <main>
    <div class="thanks__content">
      <div class="thanks__heading">
        <h2>ご意見いただきありがとうございました。</h2>
      </div>
      <div class="re-top">
        <a href="http://localhost/" class="re-topB">トップページへ</a>
      </div>
    </div>
  </main>
@endsection