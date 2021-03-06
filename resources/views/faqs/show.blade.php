@extends('dashboard')

@section('content')

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Faq Create</div>

                    <div class="card-body">



                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                                <div class="col-md-6">
                                    {{ $faq['title'] }}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">Content</label>

                                <div class="col-md-6">
                                    {{ $faq['content'] }}
                                </div>
                            </div>


                        <a class="btn btn-primary" href="{{ route('faqs.edit', $faq['faq_id']) }}" role="button">수정하기</a>

                        <form method="POST" action="{{ route('faqs.destroy', $faq['faq_id']) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                삭제
                            </button>
                        </form>
                    </div>
                </div>
            </div>

@endsection
