<header id="header">
    <h1 id="logo"><a href="{{route('index')}}">{{config('app.name')}}</a></h1>
    <nav id="nav">
        <ul>
            <li class="current"><a href="{{route('index')}}" data-turbolinks="true">Главная</a></li>
            <li class="submenu">
                <a href="{{route('student.index')}}">Обучающимся</a>
                <ul>
                    <li><a href="{{route('student.cat', [ 'cat' => 1 ])}}">6 класс</a></li>
                    <li><a href="{{route('student.cat', [ 'cat' => 2 ])}}">7 класс</a></li>
                    <li><a href="{{route('student.cat', [ 'cat' => 5 ])}}">8 класс</a></li>
                    <li><a href="{{route('student.cat', [ 'cat' => 6 ])}}">9 класс</a></li>
                    <li><a href="{{route('student.cat', [ 'cat' => 7 ])}}">10 класс</a></li>
                    <li><a href="{{route('student.cat', [ 'cat' => 8 ])}}">11 класс</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="{{route('methodology.index')}}" data-turbolinks="true">Методическая копилка</a>
                <ul>
                    <li class="submenu">
                        <a href="{{route('methodology.cat',[ 'cat' => 3 ])}}">Классные работы</a>

                        <ul>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 3, 'sub' => 1 ])}}">6 класс</a>
                            </li>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 3, 'sub' => 2 ])}}">7 класс</a>
                            </li>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 3, 'sub' => 3 ])}}">8 класс</a>
                            </li>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 3, 'sub' => 4 ])}}">9 класс</a>
                            </li>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 3, 'sub' => 5 ])}}">10 класс</a>
                            </li>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 3, 'sub' => 6 ])}}">11 класс</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="{{route('methodology.cat',[ 'cat' => 4 ])}}">Внекласные работы</a>

                        <ul>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 4, 'sub' => 1 ])}}">6 класс</a>
                            </li>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 4, 'sub' => 2 ])}}">7 класс</a>
                            </li>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 4, 'sub' => 3 ])}}">8 класс</a>
                            </li>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 4, 'sub' => 4 ])}}">9 класс</a>
                            </li>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 4, 'sub' => 5 ])}}">10 класс</a>
                            </li>
                            <li>
                                <a href="{{route('methodology.cat.sub', [ 'cat' => 4, 'sub' => 6 ])}}">11 класс</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="{{route('gia.index')}}">Готовимся к ГИА</a>
                <ul>
                    <li><a href="{{route('gia.cat', [ 'cat' => 6 ])}}">9 класс</a></li>
                    <li><a href="{{route('gia.cat', [ 'cat' => 8 ])}}">11 класс</a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="#">Еще</a>
                <ul>
                    <li><a href="{{route('progress.index')}}">Наши достижения</a></li>
                    <li><a href="{{route('teacher.index')}}">Педагогическая деятельность</a></li>
                    <li><a href="{{route('class-teacher.index')}}">Классному руководителю</a></li>
                    <li><a href="{{route('photo.index')}}">Фото</a></li>
                    <li><a href="{{route('contest.index')}}">Конкурсы</a></li>
                    <li><a href="{{route('olympics.index')}}">Олимпиады</a></li>
                    <li><a href="{{route('support.index')}}">Задать вопрос</a></li>
                </ul>
            </li>
            <li><a href="#" class="button special">Sign Up</a></li>
        </ul>
    </nav>
</header>