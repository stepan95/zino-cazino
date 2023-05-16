@extends($activeTemplate.'layouts.master')
@section('content')

    <section class="pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="game-details-right">
                        <iframe style="width: 100%; height: 400px;" src="https://int.apiforb2b.com/games/{{ $slug }}?operator_id={{ env('SLOTS_OPERATOR_ID') }}&user_id={{ $user->id }}&auth_token={{ $user->mobile }}&currency=USD&language=en&home_url=https://zino-game.com/">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content section--bg">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">@lang('Game Rule')</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">@lang('Close')</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style-lib')

@endpush
@push('script-lib')

@endpush
@push('style')
    <style type="text/css">
        .coins {
            cursor: pointer;
        }

        .op {
            opacity: 0.5;
        }

        .opc {
            opacity: 0.3;
        }

        .fly {
            height: 554px;
        }

        .none {
            display: none;
        }

        #game .row {
            margin-top: 18px;
        }

        .show {
            height: 100%;
            width: 100%;
            overflow-y: scroll;
            opacity: 1;
        }

        .hide {
            height: 0%;
            width: 0%;
            overflow-y: hidden;
            overflow-x: hidden;
            opacity: 0;
        }

        .pool-05 img {
            transform: rotate(-36deg);
        }

        .game-details-left {
            position: relative;
            overflow: hidden;
        }
    </style>
@endpush
@push('script')

@endpush
