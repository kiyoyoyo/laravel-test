@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/system.css') }}">
@endsection

@section('content')
  <header class="header">
    <h2>管理システム</h2>
  </header>

  <main>

    <div class="system__content">
      <form class="form" action="/system" method="get">
        @csrf
        <div class="form-group">
          <div class="form__name">
            <span class="form__name-a">お名前</span>
            <input class="form__name-input" type="text" name="fullname" value="{{ old('fullname') }}">
          </div>
          <div class="system-form__gender">
            <span class="form__gender-a">性別</span>
            <input class="system-form__gender-input" type="radio" name="gender" value="1,2"checked>全て
            <input class="system-form__gender-input" type="radio" name="gender" value="1">男性
            <input class="system-form__gender-input" type="radio" name="gender" value="2">女性
          </div>
        </div>
        <div class="system-form__day">
          <span class="form__day-a">日付
          </span>
          <input class="system-form__day-input" type="date" name="day_a" value="{{ old('day_a') }}">  ~ <input class="system-form__day-input" type="date" name="day_b" value="{{ old('day_b') }}">
        </div>
        <div class="system-form__email">
          <span class="form__email-a">メールアドレス</span>
          <input class="system-form__email-input" type="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="system-form__button">
          <div class="system-form__button-a">
            <button class="system-form__button-submit" type="submit">検索</button>
          </div>
          <div class="reset">
            <a href="/system">リセット</a>
          </div>
        </div>
      </form>

      <div class="system-table">
        <table class="system-table__inner">
          <tr class="system-table__row">
            <th class="system-table__header">ID</th>
            <th class="system-table__header">お名前</th>
            <th class="system-table__header">性別</th>
            <th class="system-table__header">メールアドレス</th>
            <th class="system-table__header">ご意見</th>
            <th class="system-table__header"></th>
          </tr>
          @foreach ($contact as $contacts)
          <tr class="system-table__row">
            <form class="delete-form" action="/system" method="post">
              @method('DELETE')
              @csrf
              <?php
                $number = $contacts["gender"];
                if ($number == 1) {
                  $number = "男性";
                } else {
                  $number = "女性";
                }
                ?>
              <td class="system-table__item">
                <div class="delete-form__item">
                  <input class="delete-form__item-input" type="text" name="system-form" value="{{ $contacts->id }}" readonly>
                </div>
              </td>
              <td class="system-table__item">
                <div class="delete-form__item">
                  <input class="delete-form__item-input" type="text" name="system-form" value="{{ $contacts->fullname }}" readonly>
                </div>
              </td>
              <td class="system-table__item">
                <div class="delete-form__item">
                  <input class="delete-form__item-input" type="text" name="system-form" value="{{ $number }}" readonly>
                </div>
              </td>
              <td class="system-table__item">
                <div class="delete-form__item">
                  <input class="delete-form__item-input" type="text" name="system-form" value="{{ $contacts->email }}" readonly>
                </div>
              </td>
              <td class="system-table__item">
                <div class="delete-form__item">
                  <input class="delete-form__item-input" type="text" name="system-form" value="{{ $contacts->opinion }}" readonly>
                </div>
              </td>
              <td class="system-table__item">
                <input type="hidden" name="id" value="{{ $contacts['id'] }}">
                <button class="delete-form__button-submit" type="submit">削除</button>
              </td>
            </form>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </main>
@endsection

