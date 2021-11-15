@extends('template.layout')

@section('title-block') Контакты @endsection

@section('content')


    <div class="container text-center">
        <div class="row">
            <div class="col">
                <a href="https://vk.com/adamanq">
                    <img src="https://cdn-icons.flaticon.com/png/512/3938/premium/3938067.png?token=exp=1637004079~hmac=445f2f52a4bcc5e1008fc1da331d4a23" width="150" height="150"/>
                </a>
            </div>
            <div class="col">
                <a href="https://www.instagram.com/adamancry/?hl=ru">
                    <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" width="150" height="150"/>
                </a>
            </div>
            <div class="col">
                <a href="https://github.com/Adamanr">
                    <img src="https://cdn-icons.flaticon.com/png/512/3291/premium/3291695.png?token=exp=1637004100~hmac=5970311e01ae11b063cb776229a4ba83" width="150" height="150"/>
                </a>
            </div>
        </div>
    </div><br><hr>

    <h1 class="display-2">Форма для поддержания проекта</h1>
    <form class="needs-validation fs-2" novalidate>
        <div class="form-row d-flex">
            <div class="col-md-4 mb-3">
                <label for="validationCustom01">Имя</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                <div class="valid-feedback">
                    Всё хорошо!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustom02">Фамилия</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                <div class="valid-feedback">
                    Всё хорошо!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationCustomUsername">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Email" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                        Пожалуйста, введите ник.
                    </div>
                </div>
            </div>
        </div>
        <div class="form-row d-flex">
            <div class="col-md-6 mb-3">
                <label for="validationCustom03">Город</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                <div class="invalid-feedback">
                    Пожалуйста, введите реальный город
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom04">State</label>
                <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                <div class="invalid-feedback">
                    Please provide a valid state.
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
            </div>
        </div>
        <label>Опишите, что вас больше всего волнует в нынешней экологии</label>
        <textarea class="form-control"></textarea>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Я согласен с правилами
                </label>
                <div class="invalid-feedback">
                    Я не согласен с правилами
                </div>
            </div>
        </div>
        <button class="btn btn-primary text-white" type="submit">Отправить форму</button>
    </form>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
@endsection
