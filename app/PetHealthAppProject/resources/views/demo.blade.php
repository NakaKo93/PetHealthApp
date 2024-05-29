<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
            
    <!-- BootstrapのCSSの読み込み -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- オリジナルなCSSの読み込み -->
        <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <!-- BootstrapのJSの読み込み -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <title>Demo</title>

<body>
<div class="menu-box flex-vert bg-menu-user-1">
        <div class="mt-2 mb-auto">
            <a class="px-3 py-2 flex-bes me-30px bg-menu-user-3 menu-selected main-shadow txt-white">
                <div class="menu-circle bg-pic-ex"></div>
                <div class="menu-info">
                    <p class="fs-4 fw-bold">あか</p>
                        <p class="fs-7">
                            <span>今日の</span>
                            <span>健康状態を</span>
                            <span>記入しましょう</span>
                        </p>
                </div>
            </a>
            <a class="px-3 py-2 flex-bes txt-gray">
                <div class="menu-circle bg-pic-ex"></div>
                <div class="menu-info">
                    <p class="fs-4 fw-bold">あお</p>
                        <p class="fs-7">
                            <span>今日の</span>
                            <span>健康状態を</span>
                            <span>記入しましょう</span>
                        </p>
                </div>
            </a>
            <a class="px-3 py-2 flex-bes txt-gray">
                <div class="menu-circle bg-pic-ex"></div>
                <div class="menu-info">
                    <p class="fs-4 fw-bold">きいろ</p>
                </div>
            </a>
        </div>
        <div class="py-2 text-center bg-menu-user-2 pe-20px">
            <a class="m-auto w-75 fs-4 text-white">
                <i class="fs-5 bi bi-plus-circle-fill"></i>
                追加
            </a>
        </div>
        <div class="flex-vert text-center bg-menu-user-3 pe-20px">
            <a class="mx-auto my-2 w-75 fs-4 text-white">会員情報</a>
            <a class="mx-auto mb-2 w-75 fs-4 text-white">ログアウト</a>
        </div>
        <div class="deco bg-main main-shadow"></div>
    </div>
    <div class="main-box flex-vert bg-main">
        <div class="radius-caontent bg-content">
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
        </div>
        <div class="m-middle radius-caontent bg-content">
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
        </div>
        <div class="radius-caontent bg-content">
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
            <p>ddddddddddddddddddddd</p>
        </div>
    </div>
    <div class="pic-box bg-white main-shadow">
        <img src="{{ asset('static/img/public_cat.png') }}" class="pic" alt="top_cat">
    </div>
</body>
</html>