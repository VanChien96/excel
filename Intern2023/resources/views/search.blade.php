<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    @include('layouts.header')
    <main>
        <section class="content">
            @include('layouts.nav')
            <div class="detail">
                <div class="detail_h1">
                    <p class="detail_h1-content">納入先一覧</p>
                </div>
                <div class="detail_h2">
                    <p class="detail_h2-content">検索条件</p>
                </div>
                <form action={{ route('order.searchMethod') }} method="GET">
                    <div class="conditions">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="conditions_up">
                            <div class="conditions_detail">
                                <label class="conditions_detail-title" for="納入先コード">納入先コード</label>
                                <input type="text" name="納入先コード" id="納入先コード" class="conditions_detail-content"
                                    value="{{ request()->input('納入先コード') }}">
                            </div>
                            <div class="conditions_detail">
                                <label class="conditions_detail-title" for="納入先名">納入先名</label>
                                <input type="text" lang="ja" name="納入先名" id="納入先名"
                                    class="conditions_detail-content" value="{{ request()->input('納入先名') }}">
                            </div>

                            <div class="conditions_detail">
                                <label class="conditions_detail-title" for="フリガナ">フリガナ</label>
                                <input type="text" name="フリガナ" id="フリガナ" class="conditions_detail-content"
                                    value="{{ request()->input('フリガナ') }}">
                            </div>
                            <div class="conditions_detail  conditions_detail-h6">
                                <label class="conditions_detail-title" for="住所">住所</label>
                                <input type="text" name="住所" id="住所" class="conditions_detail-content"
                                    value="{{ request()->input('住所') }}">
                            </div>
                            <div class="conditions_detail">
                                <label class="conditions_detail-title" for="電話番号">電話番号</label>
                                <input type="text" name="電話番号" id="電話番号" class="conditions_detail-content"
                                    value="{{ request()->input('電話番号') }}">
                            </div>
                        </div>
                        <div class="conditions_down">
                            <div class="conditions_detail conditions_detail-marginR">
                                <label class="conditions_detail-title" for="納入先分類１">納入先分類１</label>
                                <select name="納入先分類１" id="納入先分類１" class="conditions_detail-content">
                                    @switch(request()->input('納入先分類１'))
                                        @case('VietNam')
                                            <option value=""></option>
                                            <option value="VietNam" selected>VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Japan')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan" selected>Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Korea')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea" selected>Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Indonesia')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia" selected>Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Brubay')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay" selected>Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Philipin')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin" selected>Philipin</option>
                                        @break

                                        @default
                                            <option value="" selected></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                    @endswitch
                                </select>
                            </div>
                            <div class="conditions_detail conditions_detail-marginR">
                                <label class="conditions_detail-title" for="納入先分類２">納入先分類２</label>
                                <select name="納入先分類２" id="納入先分類２" class="conditions_detail-content">
                                    @switch(request()->input('納入先分類２'))
                                        @case('VietNam')
                                            <option value=""></option>
                                            <option value="VietNam" selected>VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Japan')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan" selected>Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Korea')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea" selected>Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Indonesia')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia" selected>Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Brubay')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay" selected>Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Philipin')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin" selected>Philipin</option>
                                        @break

                                        @default
                                            <option value="" selected></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                    @endswitch
                                </select>
                            </div>
                            <div class="conditions_detail conditions_detail-marginR">
                                <label class="conditions_detail-title" for="納入先分類３">納入先分類３</label>
                                <select name="納入先分類３" id="納入先分類３" class="conditions_detail-content">
                                    @switch(request()->input('納入先分類３'))
                                        @case('VietNam')
                                            <option value=""></option>
                                            <option value="VietNam" selected>VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Japan')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan" selected>Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Korea')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea" selected>Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Indonesia')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia" selected>Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Brubay')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay" selected>Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                        @break

                                        @case('Philipin')
                                            <option value=""></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin" selected>Philipin</option>
                                        @break

                                        @default
                                            <option value="" selected></option>
                                            <option value="VietNam">VietNam</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Korea">Korea</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Brubay">Brubay</option>
                                            <option value="Philipin">Philipin</option>
                                    @endswitch
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="resul">
                        <div class="resul_lineUp">
                            <div class="resul_quantity">
                                @if (!empty($orders))
                                    <select name="select" id="quantity" class="resul_quantity-select">
                                        @if ($select == 100)
                                            <option value="10">10 件</option>
                                            <option value="50">50 件</option>
                                            <option value="100" selected>100 件</option>
                                        @elseif($select == 50)
                                            <option value="10">10 件</option>
                                            <option value="50" selected>50 件</option>
                                            <option value="100">100 件</option>
                                        @else
                                            <option value="10" selected>10 件</option>
                                            <option value="50">50 件</option>
                                            <option value="100">100 件</option>
                                        @endif
                                    </select>
                                @else
                                    <select name="select" id="quantity" class="resul_quantity-select">
                                        <option value="10" selected>10件</option>
                                        <option value="50">50件</option>
                                        <option value="100">100件</option>
                                    </select>
                                @endif
                            </div>
                            <button class="perform_btn perform_btn-search" id="btnSearch">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                </form>
                <div class="resul_list">
                    <table class="resul_list-table">
                        <thead>
                            <tr class="resul_list-title resul_list-tr ">
                                <th class="resul_list-th resul_list-d4">
                                    <div class="resul_list-content">
                                        <p class="resul_list-thContent">納入先コード</p>
                                        <button class="resul_list-revesie">
                                            <i class="fa-solid fa-up-down resul_list-icon"></i>
                                        </button>
                                    </div>
                                </th>
                                <th class="resul_list-th resul_list-d5">
                                    <div class="resul_list-content">
                                        <p class="resul_list-thContent">納入先名</p>
                                        <button class="resul_list-revesie">
                                            <i class="fa-solid fa-up-down resul_list-icon"></i>
                                        </button>
                                    </div>
                                </th>
                                <th class="resul_list-th resul_list-d6">
                                    <div class="resul_list-content">
                                        <p class="resul_list-thContent">フリガナ</p>
                                        <button class="resul_list-revesie">
                                            <i class="fa-solid fa-up-down resul_list-icon"></i>
                                        </button>
                                    </div>
                                </th>
                                <th class="resul_list-th resul_list-d7">
                                    <div class="resul_list-content">
                                        <p class="resul_list-thContent">住所</p>
                                        <button class="resul_list-revesie">
                                            <i class="fa-solid fa-up-down resul_list-icon"></i>
                                        </button>
                                    </div>
                                </th>
                                <th class="resul_list-th resul_list-d8">
                                    <div class="resul_list-content">
                                        <p class="resul_list-thContent">電話番号</p>
                                        <button class="resul_list-revesie">
                                            <i class="fa-solid fa-up-down resul_list-icon"></i>
                                        </button>
                                    </div>
                                </th>
                                <th class="resul_list-th resul_list-d9">
                                    <div class="resul_list-content">
                                        <p class="resul_list-thContent">納入先分類１</p>
                                        <button class="resul_list-revesie">
                                            <i class="fa-solid fa-up-down resul_list-icon"></i>
                                        </button>
                                    </div>
                                </th>
                                <th class="resul_list-th resul_list-d10">
                                    <div class="resul_list-content">
                                        <p class="resul_list-thContent">納入先分類２</p>
                                        <button class="resul_list-revesie">
                                            <i class="fa-solid fa-up-down resul_list-icon"></i>
                                        </button>
                                    </div>
                                </th>
                                <th class="resul_list-th resul_list-d11">
                                    <div class="resul_list-content">
                                        <p class="resul_list-thContent">納入先分類３</p>
                                        <button class="resul_list-revesie">
                                            <i class="fa-solid fa-up-down resul_list-icon"></i>
                                        </button>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        @if (!empty($orders))
                            {{ $orders->links() }}
                            <tbody>
                                @forelse ($orders as $order)
                                    <tr data-href="{{ route('order.detail', $order->id) }}">
                                        <td class="resul_list-td">
                                            <p class="resul_list-tdContent">{{ $order->納入先コード }}
                                            </p>
                                        </td>
                                        <td class="resul_list-td">
                                            <p class="resul_list-tdContent">{{ $order->納入先名 }}</p>
                                        </td>
                                        <td class="resul_list-td">
                                            <p class="resul_list-tdContent">{{ $order->フリガナ }}</p>
                                        </td>
                                        <td class="resul_list-td">
                                            <p class="resul_list-tdContent">{{ $order->住所 }}</p>
                                        </td>
                                        <td class="resul_list-td">
                                            <p class="resul_list-tdContent">{{ $order->電話番号 }}</p>
                                        </td>
                                        <td class="resul_list-td">
                                            <p class="resul_list-tdContent">{{ $order->納入先分類１ }}
                                            </p>
                                        </td>
                                        <td class="resul_list-td">
                                            <p class="resul_list-tdContent">{{ $order->納入先分類２ }}
                                            </p>
                                        </td>
                                        <td class="resul_list-td">
                                            <p class="resul_list-tdContent">{{ $order->納入先分類３ }}
                                            </p>
                                        </td>
                                    </tr>
                            </tbody>
                        @empty
                            @for ($i = 1; $i <= 10; $i++)
                                <tr>
                                    <td class="resul_list-td">
                                        <p class="resul_list-tdContent"></p>
                                    </td>
                                    <td class="resul_list-td">
                                        <p class="resul_list-tdContent"></p>
                                    </td>
                                    <td class="resul_list-td">
                                        <p class="resul_list-tdContent"></p>
                                    </td>
                                    <td class="resul_list-td">
                                        <p class="resul_list-tdContent"></p>
                                    </td>
                                    <td class="resul_list-td">
                                        <p class="resul_list-tdContent"></p>
                                    </td>
                                    <td class="resul_list-td">
                                        <p class="resul_list-tdContent"></p>
                                    </td>
                                    <td class="resul_list-td">
                                        <p class="resul_list-tdContent"></p>
                                    </td>
                                    <td class="resul_list-td">
                                        <p class="resul_list-tdContent"></p>
                                    </td>
                                </tr>
                            @endfor
                        @endforelse
                        @endif
                    </table>
                </div>
            </div>
            </div>
        </section>

        <section class="action">
            <div class="back">
                <button class="back_btn" id="back_btn" onclick="history.back()">
                    <i class="fa-solid fa-chevron-left back_btn-icon"></i>
                    <span class="back_btn-title">戻る</span>
                </button>
            </div>
            <div class="perform">
                <button class="perform_btn perform_btn-poiter" id='btnCreate'>
                    <a href={{ route('order.detail') }} class="perform_btn-create">新規追加</a>
                </button>
                <button class="perform_btn perform_btn-poiter" id="btnClear">
                    クリア
                </button>
                <button class="perform_btn" id="btnExcel" id='btnClear'>
                    EXCEL
                </button>
                <button class="perform_btn perform_btn-bg" id="btnSearch" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/index.js') }}"></script>

</body>

</html>
