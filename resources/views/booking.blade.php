@extends('layouts.app')

@section('title')
   - @lang('navbar.booking')
@endsection

@section('content')

    <section class="section section_booking">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-8">
                    <h1>Reserva</h1>
                    <br>
                    <div class="form-group">

                        {!! Form::open(['method' => 'POST', 'route' => trans('navbar.booking.send.alias'), 'class' => 'form']) !!}

                        <div class="row">
                            <div class="col-12">
                                {!! Field::date('date', \Carbon\Carbon::now(), ['required', 'label' => '']) !!}
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    {!! Field::select('hour', trans('options.hours'), 0, ['required', 'empty' => false, 'label' => '']) !!}
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    {!! Field::select('persons', trans('options.persons'), 1, ['required', 'empty' => false, 'label' => '']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Field::text('full_name', null, ['ph' => trans('content.fullName'), 'required', 'label' => '']) !!}
                        </div>

                        <div class="form-group">
                            {!! Field::email('email', null, ['ph' => trans('content.email'), 'required', 'label' => '']) !!}
                        </div>

                        <div class="form-group">
                            {!! Field::tel('phone', null, ['ph' => trans('content.phone'), 'label' => '']) !!}
                        </div>

                        <div class="form-group">
                            {!! Field::textarea('comment', null, ['ph' => trans('content.comments'), 'rows' => '2', 'label' => '']) !!}
                        </div>

                        {!! RecaptchaV3::field('secure_book') !!}

                        <button id="booking" type="submit"
                                class="btn btn-outline-wine float-right btn-booking g-recaptcha">
                            @lang('content.booking')</button>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection