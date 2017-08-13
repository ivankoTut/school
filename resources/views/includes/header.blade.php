<header id="header">
    <h1 id="logo"><a href="{{route('index')}}">{{config('app.name')}}</a></h1>
    <nav id="nav">
        <ul>
            <li class="current"><a href="{{route('index')}}">Главная</a></li>
            <li class="submenu">
                <a href="{{route('index')}}">Обучающимся</a>
                <ul>
                    <li><a href="">6 класс</a></li>
                    <li><a href="">7 класс</a></li>
                    <li><a href="">8 класс</a></li>
                    <li><a href="">9 класс</a></li>
                    <li><a href="">10 класс</a></li>
                    <li><a href="">11 класс</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="{{route('index')}}">Методическая копилка</a>
                <ul>
                    <li><a href="">Классные работы</a></li>
                    <li><a href="">Внекласные работы</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="{{route('index')}}">Готовимся к ГИА</a>
                <ul>
                    <li><a href="">9 класс</a></li>
                    <li><a href="">11 класс</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="{{route('index')}}">Еще</a>
                <ul>
                    <li><a href="">Наши достижения</a></li>
                    <li><a href="">Педагогическая деятельность</a></li>
                    <li><a href="">Классному руководителю</a></li>
                    <li><a href="">Фото</a></li>
                    <li><a href="">Конкурсы</a></li>
                    <li><a href="">Олимпиады</a></li>
                    <li><a href="">Задать вопрос</a></li>
                </ul>
            </li>
            <li><a href="#" class="button special">Sign Up</a></li>
        </ul>
    </nav>
</header>