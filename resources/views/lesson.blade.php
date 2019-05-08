@extends('layouts.home')

@section('sidebar')
    <p class="lead">{{ $lesson->course->title }}</p>

    <div class="list-group">
        @foreach ($lesson->course->publishedLessons as $list_lesson)
            <a href="{{ route('lessons.show', [$list_lesson->course_id, $list_lesson->slug]) }}" class="list-group-item"
                @if ($list_lesson->id == $lesson->id) style="font-weight: bold" @endif>{{ $loop->iteration }}. {{ $list_lesson->title }}</a>
        @endforeach


    </div>
@endsection

@section('main')

    <h2>{{ $lesson->title }}</h2>


{{--         @if(session('message'))
            <div class="alert alert-info">{{session('message')}}</div>
            <br>
        @endif --}}
            {{-- {!! $lesson->full_text !!} --}}



        @if ($test_exists)
            <hr />

            <form onSubmit="" action="{{ route('lessons.test', [$lesson->slug]) }}" method="post">
                {{ csrf_field() }}

                @foreach ($lesson->test->questions as $question)
                    <b><strong>{{ $loop->iteration }}. {{ $question->question }}</strong></b>
                    <br />
                    @foreach ($question->options as $option)
                        <input id="option1" type="radio" name="questions[{{ $question->id }}]" value="{{ $option->id }}" class="form-radio" 
                             <?php 
                                if ($option->correct == 1)
                                    echo "checked";
                            ?>
                          />
                        <label for="option1">{{ $option->option_text }}</label><br />

{{--                     @if ($option->correct == 1)
                        <p id="my_id">{!! $option->option_text  !!}</p>
                    @endif --}}
                    @endforeach
                    <br />
                     {{--  <button for='option1'>
                        <span>Đáp án</span>
                      </button> --}}
                      {{-- <button>Đáp án</button> --}}
                @endforeach

                {{-- <input type="submit" value=" Submit " /> --}}
            </form>
            <hr />
        @endif

    @if ($previous_lesson)
        <p><a href="{{ route('lessons.show', [$previous_lesson->course_id, $previous_lesson->slug]) }}"><< {{ $previous_lesson->title }}</a></p>
    @endif
    @if ($next_lesson)
        <p><a href="{{ route('lessons.show', [$next_lesson->course_id, $next_lesson->slug]) }}">{{ $next_lesson->title }} >></a></p>
    @endif

@endsection