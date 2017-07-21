@extends('setup.master') @section('title', 'Page Title') @section('content')
<div class="row form-setup">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        <form role="form" action="#" method="post" class="f1">

            <h3>@lang('setup.setup_app')</h3>
            <div class="f1-steps">
                <div class="f1-progress">
                    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                </div>
                <div class="f1-step active">
                    <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                    <p>@lang('setup.general')</p>
                </div>
                <div class="f1-step">
                    <div class="f1-step-icon"><i class="fa fa-database" aria-hidden="true"></i></div>
                    <p>@lang('setup.database')</p>
                </div>
                <div class="f1-step">
                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    <p>@lang('setup.account')</p>
                </div>
            </div>

            <fieldset>
                <div class="form-group">
                    <label class="sr-only" for="f1-facebook">@lang('setup.name',['name'=>'AAA'])</label>
                    <input type="text" name="f1-facebook" placeholder="@lang('setup.name') " class="f1-facebook form-control" id="f1-facebook">
                </div>
                <div class="form-group">
                    <label for="f1-twitter">@lang('setup.lang'):</label>
                    <select name="" id="" class="form-control">
                        <option>English</option>
                        <option>Tiếng Việt</option>
                    </select>
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-next">Next</button>
                    
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    <label class="sr-only" for="f1-first-name">DB HOST</label>
                    <input type="text" name="f1-first-name" placeholder="@lang('setup.host')..." class="f1-first-name form-control" id="f1-first-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">DATABASE NAME</label>
                    <input type="text" name="f1-last-name" placeholder="@lang('setup.dbname')..." class="f1-last-name form-control" id="f1-last-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-about-yourself">USERNAME</label>
                    <input type="text" name="f1-last-name" placeholder="@lang('setup.username') ..." class="f1-last-name form-control" id="f1-last-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-about-yourself">PASSWORD</label>
                    <input type="text" name="f1-last-name" placeholder="@lang('setup.password') ..." class="f1-last-name form-control" id="f1-last-name">
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">@lang('setup.connect')</button>
                </div>
            </fieldset>

            <fieldset>
                <div class="form-group">
                    <label class="sr-only" for="f1-email">Email</label>
                    <input type="text" name="f1-email" placeholder="Email..." class="f1-email form-control" id="f1-email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-password">Password</label>
                    <input type="password" name="f1-password" placeholder="@lang('setup.password')..." class="f1-password form-control" id="f1-password">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                    <input type="password" name="f1-repeat-password" placeholder="@lang('setup.re_password')" class="f1-repeat-password form-control"
                        id="f1-repeat-password">
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </div>
            </fieldset>

        </form>
    </div>
</div>
@endsection