@extends('template.layout')

@section('title-block') Загрязнение @endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="https://cdn.pixabay.com/photo/2017/09/08/18/20/garbage-2729608_960_720.jpg" width="90%"/>
            </div>
            <div class="col">
                <p class="fs-3">
                    С младших классов нас учат, что человек и природа едины, что нельзя отделить одно от другого. Мы познаем развитие нашей планеты, особенности ее строения и устройства. Эти сферы влияют на наше благополучие: атмосфера, почва, вода Земли — это, пожалуй, самые главные составляющие нормальной жизни человека. Но почему тогда каждый год загрязнение окружающей среды идет все дальше и выходит на все большие масштабы? Давайте рассмотрим основные проблемы окружающей среды.
                </p>
            </div>
        </div><hr>

        <p class="display-6">Загрязнение окружающей среды, под которой понимаются также природная среда и биосфера</p>
        <p class="fs-5"> — это повышенное содержание в ней физических, химических или биологических реагентов, не характерных для данной среды, занесенных извне, наличие которых приводит к негативным последствиям.


            Ученые уже несколько десятилетий подряд бьют тревогу о близкой экологической катастрофе. Проведенные исследования в разных областях приводят к выводу, что мы уже сталкиваемся с глобальными изменениями климата и внешней среды под воздействием деятельности человека. Загрязнение океанов из-за утечек нефти и нефтепродуктов, а также мусора дошло до огромных масштабов, что влияет на сокращение популяций многих видов животных и экосистему в целом. Растущее число машин каждый год приводит к большому выбросу углекислого газа в атмосферу, что, в свою очередь, ведет к осушению земли, обильным осадкам на материках, уменьшению количества кислорода в воздухе. Некоторые страны уже вынуждены привозить воду и даже покупать консервированный воздух, поскольку производство испортило окружающую среду в стране. Многие люди уже осознали опасность и весьма чутко реагируют на негативные изменения в природе и основные экологические проблемы, но мы всё еще воспринимаем возможность катастрофы, как нечто несбыточное и далекое. Так ли это на самом деле или угроза близка и немедленно нужно что-то предпринять — давайте разбираться.
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
