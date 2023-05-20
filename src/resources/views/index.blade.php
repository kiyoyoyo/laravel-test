@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
  <header class="header">
    <h2>お問い合せ</h2>
  </header>
  
  <main>
    <div class="contact-form__content">
      <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <!--名前-->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="fullname" value="{{ old('fullname') }}" />
            </div>
            <div class="form__input--text-name">
              <span class="form__input--text-name-a">例）山田太郎</span>
            </div>
            <div class="form__error">
              @error('fullname')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <!--性別-->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-g">
              <input type="radio" name="gender" value="1"{{ old('gender','男性') == '男性' ? 'checked' : '' }} index="1" checked />男性
              <input type="radio" name="gender" value="2"{{ old('gender') == '女性' ? 'checked' : '' }} index="2" />女性
              <span class="form__error">
                @error('gender')
                {{ $message }}
                @enderror
              </span>
            </div>
            <div class="form__error">
              @error('gender')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <!--メールアドレス-->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-e">
              <input type="email" name="email" value="{{ old('email') }}"/>
              <span class="form__error">
                @error('email')
                {{ $message }}
                @enderror
              </span>
            </div>
            <div class="form__input--text-name">
              <p class="form__input--text-name-e">例）test@example.com</p>
            </div>
            <div class="form__error">
              @error('email')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <!--郵便番号-->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-e">
              <span class="form__input--text-a">〒</span>
              <input type="text" pattern="^[0-9\-]+$" name="postcode" value="{{ old('postcode') }}"/>
              <span class="form__error">
                @error('postcode')
                {{ $message }}
                @enderror
              </span>
            </div>
            <div class="form__input--text-name">
              <p class="form__input--text-name-p">例）123-456</p>
            </div>
            <div class="form__error">
              @error('postcode')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <!--住所-->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-e">
              <input type="text" name="address" value="{{ old('address') }}"/>
              <span class="form__error">
                @error('address')
                {{ $message }}
                @enderror
              </span>
            </div>
            <div class="form__input--text-name">
              <p class="form__input--text-name-p">例）東京都渋谷区千駄ヶ谷1-2-3</p>
            </div>
            <div class="form__error">
              @error('address')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <!--建物名-->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-e">
              <input type="text" name="building_name" value="{{ old('building_name') }}"/>
            </div>
            <div class="form__input--text-name">
              <p class="form__input--text-name-p">例）千駄ヶ谷マンション101</p>
            </div>
            <div class="form__error">
              @error('building_name')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <!--ご意見-->
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text-b">
              <input type="text" name="opinion" maxlength="120" value="{{ old('opinion') }}"/>
              <span class="form__error">
                @error('opinion')
                {{ $message }}
                @enderror
              </span>
            </div>
            <div class="form__error">
              @error('opinion')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
    </div>
  </main>
@endsection