@extends('template.layout')

@section('title-block') Главная страница @endsection

@section('content')

    <div class="main-block">
    </div>

    <br>
    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">Мировая</strong>
                    <h3 class="mb-0">Загрязнение</h3>
                    <div class="mb-1 text-muted">Nov 12</div>
                    <p class="card-text mb-auto">Это проблема, что настигает человечество с каждым годом всё больше и больше</p>
                    <a href="{{route('pollution')}}" class="stretched-link">Прочитать подробнее</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="https://cdn.pixabay.com/photo/2014/04/17/23/26/environmental-protection-326923_960_720.jpg"  width="250" height="210" class="opacity-75">

                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Локальная</strong>
                    <h3 class="mb-0">Вырубка лесов</h3>
                    <div class="mb-1 text-muted">Nov 15</div>
                    <p class="mb-auto">это серьёзная экологическая проблема, таящая в себе опасность для всего мира..</p>
                    <a href="{{route('cutting_down')}}" class="stretched-link">Прочитать подробнее</a>
                </div>
                <div class="col-auto d-none d-lg-block bg-white ">
                    <img src="https://cdn.pixabay.com/photo/2021/10/13/23/22/logs-6707746_960_720.jpg" width="250" height="210" class="opacity-75">
                </div>
            </div>
        </div>
    </div>
    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Новости проекта
            </h3>

            <article class="blog-post">
                <h2 class="blog-post-title"><span style="color:green;">Эко</span><span style="color:red;">Мир</span></h2>
                <p class="blog-post-meta">Ноябрь 15, 2021 by <a href="https://vk.com/adamanq">Артём</a></p>

                <p><span style="color:green;">Эко</span><span style="color:red;">Мир</span> — экологическая общественная организация, основанная в 2019 году в Челябинске. Сегодня подразделения существуют в Москве, Нижнем Новгороде, Новокузнецке и т.д.
                    <ul>
                        <li>Придерживается принципов глубокой экологии, биоцентризма и ненасилия.</li>
                        <li>Стремится к прекращению нарушений прав человека и считает, что права на здоровую окружающую среду и достоверную информацию являются фундаментальными правами каждого человека.</li>
                        <li>Действует с целью решения экологических проблем и привлечения населения к активной гражданской и природоохранной деятельности через организацию экологических кампаний, прямых ненасильственных акций, а также направляет свои усилия на распространение достоверной информации и экологическое образование.</li>
                        <li>Заявляет: у нас нет прав на компромиссы в защите Матери-Земли, по крайней мере, потому, что эта Земля — единственная, на которой мы можем жить!</li>
                    </ul>
                </p>
                    <hr>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h2 class="display-6">Сочинения</h2>
                <blockquote class="blockquote">
                    <p>"Природа - наш дом"</p>
                </blockquote>
                <p>Все живые существа, в том числе, люди, живут в большом доме, имя которому - природа. Природа порождает жизнь на Земле, она многообразна на всём протяжении меридиана - от Крайнего Севера до тропических лесов.

                    Леса - основное богатство планеты. Когда заходишь в лес, то видишь все прелести природы: дыхание ветра игриво треплет кроны деревьев, пение птиц ласкает слух неповторимыми сочетаниями звуков, наполняет пространство жизнью. Солнечные лучи преломляются сквозь капельки утренней росы, отражаются от лепестков полевых цветов гаммой красных, жёлтых, фиолетовых оттенков. Словно воздушные цветы, бабочки порхают с одного соцветия на другое.</p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>
                <p>And this is an ordered list:</p>
                <ol>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ol>
                <p>And this is a definition list:</p>
                <dl>
                    <dt>HyperText Markup Language (HTML)</dt>
                    <dd>The language used to describe and define the content of a Web page</dd>
                    <dt>Cascading Style Sheets (CSS)</dt>
                    <dd>Used to describe the appearance of Web content</dd>
                    <dt>JavaScript (JS)</dt>
                    <dd>The programming language used to build advanced Web sites and applications</dd>
                </dl>
                <h2>Inline HTML elements</h2>
                <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.</p>
                <ul>
                    <li><strong>To bold text</strong>, use <code class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
                    <li><em>To italicize text</em>, use <code class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
                    <li>Abbreviations, like <abbr title="HyperText Markup Langage">HTML</abbr> should use <code class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.</li>
                    <li>Citations, like <cite>— Mark Otto</cite>, should use <code class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
                    <li><del>Deleted</del> text should use <code class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and <ins>inserted</ins> text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
                    <li>Superscript <sup>text</sup> uses <code class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.</li>
                </ul>
                <p>Most of these elements are styled by browsers with few modifications on our part.</p>
                <h2>Heading</h2>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h3>Sub-heading</h3>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <pre><code>Example code block</code></pre>
                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
            </article>

            <article class="blog-post">
                <h2 class="blog-post-title">Another blog post</h2>
                <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

                <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <blockquote>
                    <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
                </blockquote>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h3>Example table</h3>
                <p>And don't forget about tables in these posts:</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Upvotes</th>
                        <th>Downvotes</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Alice</td>
                        <td>10</td>
                        <td>11</td>
                    </tr>
                    <tr>
                        <td>Bob</td>
                        <td>4</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Charlie</td>
                        <td>7</td>
                        <td>9</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <td>Totals</td>
                        <td>21</td>
                        <td>23</td>
                    </tr>
                    </tfoot>
                </table>

                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
            </article>

            <article class="blog-post">
                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

                <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>
                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
            </article>

            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled">Newer</a>
            </nav>

        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <div class="p-4 bg-light rounded">
                    <h4 class="fst-italic">Ещё</h4>
                    <p class="mb-0">В этом блоке вы найдёте архив новостей за некоторые месяца + соц.сети создателя сайта</p>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Архив новостей</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">Октябрь 2021</a></li>
                        <li><a href="#">Ноябрь 2021</a></li>
                        <li><a href="#">Декабрь 2021</a></li>
                    </ol>
                </div>

                <div class="p-4">
                    <h4 class="fst-italic">Профили создателя</h4>
                    <ol class="list-unstyled">
                        <li><a href="https://github.com/Adamanr">GitHub</a></li>
                        <li><a href="https://vk.com/adamanq">VK</a></li>
                        <li><a href="https://www.instagram.com/adamancry/?hl=ru">Inst</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
