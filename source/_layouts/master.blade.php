<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body>
    <section>
        <header>
            <nav> 
              <a href="https://www.babybaby.in/"><img src="https://user-images.githubusercontent.com/88181976/156891750-a471988e-cd60-4bbb-b080-c5739e9a7ab7.png" alt="BabyBaby" width="90" height="30"></a>
            </nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        <footer>
         <small><center>
             <a href="https://www.facebook.com/babybaby.in">Facebook</a>
             &nbsp&nbsp
             <a href="https://www.instagram.com/babybaby.in">Instagram</a>
             &nbsp&nbsp
             <a href="https://www.babybaby.in/contact/">Contact us</a>
             <br>
             &copy; BabyBaby
        </center></small>
        </footer>
    </section>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @includeWhen($page->production, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
</body>
</html>
