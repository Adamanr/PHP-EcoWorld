@extends('template.layout')

@section('title-block') Загрязнение @endsection

@section('content')
    <li class="container">
        <div class="row">
            <div class="col">
                <img src="https://cdn.pixabay.com/photo/2012/10/22/19/57/deforestation-62486_960_720.jpg" width="90%"/>
            </div>
            <div class="col">
                <p class="fs-3">
                    Проблема вырубки лесов является одной из самых острых экологических проблем на планете. Ее влияние на экологию трудно переоценить. Не зря ведь деревья называют легкими Земли. Они в целом составляют единую экосистему, которая влияет на жизнь различных видов флоры, фауны, на почву, атмосферу, водный режим. Многие люди даже и не догадываются, к какой катастрофе приведет вырубка лесов, если не прекратить ее.                </p>
            </div>
        </div><hr>

        <p class="display-6">            Проблема вырубки лесов
        </p>
        <p class="fs-4">
            В данный момент проблема вырубки деревьев актуальна для всех континентов земли, однако наиболее остро эта проблема стоит в странах Западной Европы, Южной Америки, Азии. Интенсивное уничтожение лесов приводит к проблеме обезлесивания. Территория, освобожденная от деревьев, превращается в бедный ландшафт, становится непригодной для жизни.

            Чтобы понять, насколько близка катастрофа, следует обратить внимание на ряд фактов:
        <ul class="fs-4">
            <li>более половины тропических лесов мира уже уничтожено, а для их восстановления потребуются сотник лет;</li>
            <li>сейчас только 30% суши занято лесами;</li>
            <li>регулярная вырубка деревьев приводит к повышению в атмосфере окиси углерода на 6-12 %;</li>
            <li>каждую минуту исчезает территория леса, которая по размерам равняется нескольким футбольным полям.</li>
        </ul>
        </p><hr>
        <h1 class="display-6">Если вы тоже заботитесь об окружающей среде, то оставьте пожалуйста отзыв о том, как можно улучшить её</h1>
        <br>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Форма отзыва
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div><br>
                            <fieldset class="form-group">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Как вы оцениваете степень загрязнения</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Приемлимо
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Плохо
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
                                            <label class="form-check-label" for="gridRadios3">
                                                Ужасно
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset><br>
                            <div class="form-group row">
                                <div class="col-sm-2">Вы хотите подписаться на рассылку?</div>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                                        <label class="form-check-label" for="gridCheck1">
                                            Да
                                        </label>
                                    </div>
                                </div>
                            </div><br>
                            <button type="submit" class="btn btn-primary w-25">Отправить</button>
                        </form><br>                    </div>
                </div>
            </div><br>

@endsection
