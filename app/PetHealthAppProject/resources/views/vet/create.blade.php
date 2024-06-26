<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!-- BootstrapのCSSの読み込み -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- オリジナルなCSSの読み込み -->
        <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <!-- BootstrapのJSの読み込み -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <title>Vet Create</title>
</head>
<body class="bg-main">
    @include('header.vet.pre')
    <div class="main-shadow pre-main-box flex-vert bg-main">
        <div class="mx-auto mb-auto">
            <h1 class="txt-vet-M fw-bold display-4 text-center">獣医師<br>新規会員登録</h1>
        </div>
        <form class="flex-vert mx-auto w-75 h-75" action="{{ route('vet.create-process') }}" method="POST">
            @csrf
            <div class="mt-auto">
                <label for="name" class="mb-1 fs-6 txt-vet-S">氏名</label>
                <input type="text" id="name" name="name" value="{{ old('name', '') }}" class="px-2 w-100 fs-5 input_vet_field txt-gray">
                @if ($errors->has('name'))
                    @foreach($errors->get('name') as $message)
                        <p class="txt-error"> {{ $message }} </p>
                    @endforeach
                @endif
            </div>
            <div class="mt-3">
                <label for="email" class="mb-1 fs-6 txt-vet-S">メールアドレス</label>
                <input type="email" id="email" name="email" value="{{ old('email', '') }}" class="px-2 w-100 fs-5 input_vet_field txt-gray">
                @if ($errors->has('email'))
                    @foreach($errors->get('email') as $message)
                        <p class="txt-error"> {{ $message }} </p>
                    @endforeach
                @endif
            </div>
            <div class="mt-3">
                <label for="password" class="mb-1 fs-6 txt-vet-S">パスワード</label>
                <input type="password" id="password" name="password" value="{{ old('password', '') }}" class="px-2 fs-5 w-100 input_vet_field txt-gray">
                @if ($errors->has('password'))
                    @foreach($errors->get('password') as $message)
                        <p class="txt-error"> {{ $message }} </p>
                    @endforeach
                @endif
            </div>
            <div class="mt-3">
                <label for="one_word" class="mb-1 fs-6 txt-vet-S">一言</label>
                <textarea id="one_word" name="one_word" class="px-2 w-100 fs-5 input_vet_field txt-gray">{{ old('one_word', '') }}</textarea>
                @if ($errors->has('one_word'))
                    @foreach($errors->get('one_word') as $message)
                        <p class="txt-error"> {{ $message }} </p>
                    @endforeach
                @endif
            </div>
            <div class="mt-auto text-center">
                @if (session('errorMessages'))
                    <p class="mb-2 txt-error" >{{ session('errorMessages') }}</p>
                @endif
                <button class="py-1 fs-4 rounded-3 btn-vet-action" type="submit">新規登録</button>
            </div>
        </form>
        <div class="mx-auto mt-3">
            <p class="mb-1 fs-6 txt-accent-S text-center">登録済みの方</p>
            <a class="py-1 fs-4 rounded-3 btn-accent-action" href="{{ route('vet.login') }}">ログイン</a>
        </div>
    </div>
    <div class="pre-pic-box bg-white main-shadow">
        <img src="{{ asset('static/img/public_cat.png') }}" class="pic" alt="top_cat">
    </div>
</body>
</html>