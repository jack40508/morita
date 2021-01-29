@extends('backside.layouts.app')

@section('content')
    <h1 class="mb-3">{{ $page->name }}予定表</h1>

    <div class="row">
        <div class="col-md-3">
            <h2>現在画像</h2>
            <img src="/img/banner/banner_{{ $page->now_bannerimage->id }}.jpg" alt="now_banner" class="img-banner-list-big">
        </div>
        <div class="col-md-3 offset-md-1 mt-5 mt-md-0">
            <h2>ベーシック画像</h2>
            <img src="/img/banner/banner_{{ $page->basic_bannerimage->id }}.jpg" alt="basic_banner" class="img-banner-list-big">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <h2>予定表</h2>
        </div>
        <div class="col-md-10">
            <table class="table mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="th-image">画像</th>
                        <th scope="col">変更日</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($page->reserve_bannerimages as $reserve_bannerimage)
                        <tr>
                            <td>
                                <img src="/img/banner/banner_{{ $reserve_bannerimage->id }}.jpg" alt="basic_banner" class="img-banner-list-small">
                            </td>
                            <td class="text-center text-md-left">
                                {{ $reserve_bannerimage->pivot->start_at }}
                                @if($reserve_bannerimage->pivot->end_at != '2119-12-31')
                                    <br>
                                        <p class="mb-0 d-md-block d-none">　　　|</p>
                                        <p class="mb-0 d-md-none">|</p>
                                    {{ $reserve_bannerimage->pivot->end_at }}
                                @endif
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger mt-1 mt-md-0 w-100" data-toggle="modal" data-target="#cancelModal{{ $reserve_bannerimage->pivot->id }}">
                                    <small class="mb-0 d-md-none">キャンセル</small>
                                    <p class="mb-0 d-md-block d-none">キャンセル</p>
                                </button>
                                <!-- Modal -->
                                @include('backside.page.layouts.modal_cancel_check')
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection