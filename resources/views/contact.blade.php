@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h1>Contact Us</h1>

        <div class="row">
            <div class="col-6">
                <ul>
                    <li>Name</li>
                    <li>Email</li>
                    <li>Message</li>
                </ul>
            </div>
            <div class="col-6">
                <h2>Contact us</h2>
                <form action="{{ route('form-contact') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label">Message</label>
                        <textarea type="text" id="message" name="message" rows="5" class="form-control">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection