<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body style="height: 100vh">
    <div class="w-100 h-100 d-flex flex-column">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @if (Route::has('teacher.register'))
                                <a href="{{ route('teacher.register') }}" class="nav-link">Become Instructor</a>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                                                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!--end_navbar-->

        <div class="w-100 align-content-stretch d-flex flex-row justify-content-center align-items-center"
            style="flex-grow: 1; background-image: url(https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);background-position: center;background-repeat: no-repeat;background-size: cover">
            <h1 class="w-75 h-50 display-3 text-center d-flex flex-column justify-content-center align-items-center text-white p-1 px-5"
                style="background-color: #00000096">Learning
                is
                what
                got us this
                far and what will take us
                wherever we're
                going.
                <button type="button" class="btn btn-outline-info btn-lg mt-3">Enroll A Course Now</button>
            </h1>
        </div>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ex quidem, accusantium quia sunt exercitationem
        obcaecati voluptatem quis itaque dolore culpa esse sit odio possimus iste eos. Odio dicta quisquam quae quo
        neque. Laborum at, eum repellendus accusamus saepe natus accusantium voluptates quia, similique adipisci odio
        ullam laboriosam possimus aspernatur dignissimos facere iste. Repudiandae voluptate harum officia nam sit
        expedita suscipit architecto qui necessitatibus quibusdam, autem ad, dolor unde recusandae laborum? Dolor
        cupiditate maxime facere. Expedita tenetur voluptas libero sint saepe? Commodi animi harum fugiat necessitatibus
        adipisci magni voluptas voluptatum, sunt, quibusdam similique cum temporibus libero obcaecati quasi ea iure
        facilis dolore minima, unde omnis sed praesentium! Neque ex sint nemo exercitationem! Quas dolor consequuntur
        ipsa magni illum eum accusantium? Eligendi cumque tempore reprehenderit ea aut, incidunt unde nam non dolorem
        ipsa libero magnam, omnis praesentium, placeat eum dolores sit sunt sed soluta. Libero minus necessitatibus
        corporis rem earum cum et voluptatibus quas. Ab laudantium adipisci, molestias tenetur, nobis nostrum rerum
        necessitatibus fugiat quasi cum explicabo. Aspernatur aperiam itaque vel eum voluptatem magni. Alias, laborum
        eligendi voluptates laboriosam ea dicta id molestias? Blanditiis eaque magni molestiae obcaecati non
        necessitatibus officiis quibusdam facilis dicta beatae, repellat eveniet asperiores consequatur expedita quidem
        vero explicabo excepturi provident mollitia labore. Maiores, voluptatem ducimus nisi laboriosam facere, iure nam
        pariatur modi laborum nostrum eligendi quidem neque reiciendis maxime aliquid ipsa ipsum libero velit,
        voluptatibus tempora at repellat. Sequi minus quo accusamus aut cumque sapiente voluptas corrupti architecto id
        exercitationem delectus quaerat non eligendi numquam, possimus dolorum asperiores voluptates. Eveniet quasi
        ipsam quia soluta vel exercitationem provident minima temporibus maxime inventore quo obcaecati numquam eum
        perspiciatis at fugit rem cumque facere ipsum iusto quibusdam assumenda adipisci, blanditiis vitae. Commodi
        deleniti, accusantium asperiores officia culpa voluptas saepe modi a nemo, velit illum minus impedit iste natus
        sed. Voluptatibus dolore fugit molestias placeat nemo et sequi? Suscipit recusandae quisquam corporis excepturi
        numquam eligendi molestias, repudiandae iure ab eius pariatur, reprehenderit earum. Beatae, laborum est.
        Distinctio ipsam quidem delectus temporibus unde beatae tempora praesentium deleniti repudiandae, porro
        assumenda veniam sit, hic adipisci quod natus tempore fugiat, iste est qui eius? Atque modi neque alias ex
        deserunt. Pariatur, doloribus reiciendis cumque illum nobis ab, at dolorem consectetur cum saepe ipsam esse
        laudantium ullam quidem dolore. Error fuga quisquam deleniti qui libero magnam inventore dolore. Nisi nulla
        quia, cum dolorem, aliquam dolore deserunt nam alias iure expedita rerum eligendi incidunt, harum voluptate
        nihil laborum ipsa. Architecto, explicabo totam possimus, distinctio deserunt unde dicta aut porro rerum vitae
        ab quas? Neque ut aliquam quam voluptate odio excepturi nihil. Libero eius similique quia, sint quod quibusdam
        quas praesentium, totam maiores officia minus. Rerum, recusandae officiis nulla error assumenda aliquid nobis
        excepturi quibusdam possimus repudiandae consequuntur reprehenderit ab amet quaerat officia ipsa reiciendis eos
        voluptatum, dolorem at vitae. Vitae modi adipisci ratione fugit consequuntur enim quae quia corrupti consequatur
        architecto natus pariatur explicabo nostrum, ducimus eos, ex molestias, impedit cum voluptates ut accusamus
        quibusdam id placeat. Ea incidunt ipsam repellendus ad, sequi quidem officia. Facilis itaque placeat a voluptate
        expedita architecto vitae, laborum eaque fugiat libero doloremque necessitatibus quaerat asperiores quidem
        provident officiis explicabo suscipit totam iure temporibus voluptatem! Consectetur necessitatibus repudiandae
        quae, culpa iste numquam, assumenda asperiores molestias sequi voluptate, ratione labore ea odit debitis
        corrupti iusto! Commodi labore tempora corrupti excepturi sit veritatis consequuntur optio, odit architecto
        error, quam repellat ab. Blanditiis non beatae sequi ab perferendis consectetur a veniam esse nostrum eum
        expedita cumque tempora, debitis exercitationem iste veritatis dolore nobis corrupti praesentium, excepturi
        tempore. Ad praesentium odio, fuga harum, tenetur dicta nam porro exercitationem facere iste officia placeat.
        Harum nobis, amet magnam nihil dolor fugiat, nulla deserunt officiis dicta quia odit alias illo facere dolorum
        ad expedita laborum maiores quo perferendis est reiciendis quis deleniti necessitatibus repellat! Totam
        reprehenderit accusamus aliquam, tempore expedita officiis ex reiciendis, doloremque suscipit commodi quasi sunt
        ut deserunt odit modi in vel sequi quo minima dicta. Nemo magni repellendus suscipit, illo dignissimos fugiat,
        ex pariatur sit accusantium voluptates debitis repellat distinctio quae praesentium architecto doloribus hic ad
        assumenda voluptatibus, alias quo aliquid officiis error beatae. Accusamus dignissimos cupiditate impedit odit.
        Beatae, facere, placeat doloribus vero, nam quaerat quisquam officiis culpa accusamus iusto repellendus aut.
        Inventore consequatur placeat cum quam perspiciatis maiores itaque natus ducimus vero incidunt quas dolor
        dolorum accusamus vel asperiores, velit nobis, debitis illum explicabo aspernatur. Aliquid porro nesciunt culpa
        amet natus. Vel error debitis deleniti commodi harum aut quam a, consequatur suscipit maiores voluptates.
        Ratione ipsa quibusdam fugiat incidunt obcaecati saepe unde atque voluptas, similique natus illum! Minima
        explicabo id iusto non et libero molestiae vero labore molestias quibusdam, laudantium exercitationem nam ipsum
        iste aperiam similique quae dicta error quo in natus aliquid, dolorum ipsam adipisci. Quo porro asperiores minus
        nihil perferendis. Nostrum labore nisi porro aliquam perferendis quibusdam consectetur exercitationem obcaecati
        incidunt iure, quia inventore? Delectus, quod voluptatibus excepturi, quos iusto dolor voluptatem beatae
        officiis iste nostrum ratione expedita accusamus, possimus temporibus soluta. Totam neque alias vel, at nam
        mollitia. Odit soluta eligendi magni, quia deserunt quidem fugiat facilis dolorum corporis explicabo neque
        tenetur ipsum nobis doloremque dicta similique ratione expedita illo aliquid hic aperiam eum? Eligendi molestiae
        officiis quam! Nesciunt similique eum animi quas, sint, placeat reiciendis laborum tempore deserunt porro
        quisquam, dolorem quo officiis. Voluptate distinctio at vitae voluptatem reprehenderit quisquam ex. Cupiditate
        voluptas fugit enim nihil vitae, dolores soluta molestias doloribus, porro minima odit. Similique ex distinctio
        fuga reiciendis saepe dolores enim explicabo hic? Dignissimos iure, alias optio tenetur rerum iste libero,
        assumenda numquam quasi facere ullam! Recusandae est ipsa quod saepe, beatae reprehenderit aut suscipit veniam
        unde libero ipsum, eligendi, deleniti vero in. Tempora velit suscipit maxime ex obcaecati? Sapiente quis
        eligendi quo libero, ullam nulla nobis magni impedit excepturi vel, consequatur totam. Tempora, nam saepe,
        exercitationem at tenetur impedit nesciunt commodi necessitatibus nihil voluptatibus molestiae aliquid rerum
        eveniet molestias dicta architecto, quasi porro quam perspiciatis voluptates natus. Aliquam fuga maiores
        corporis beatae dolorem, aut velit ea eveniet, incidunt commodi quae accusantium recusandae quaerat dolor, vel
        delectus.</p>

</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>
