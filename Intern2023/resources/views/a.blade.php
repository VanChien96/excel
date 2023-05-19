<div class="">
    {{$orders->links()}}   
</div>
<table class="resul_list-table">
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

        @foreach ($orders as $order)
        <tr>
            <td class="resul_list-td">
                <p class="resul_list-tdContent">{{$order->delivery_destination_code}}</p>
            </td>
            <td class="resul_list-td">
                <p class="resul_list-tdContent">{{$order->destination}}</p>
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
        @endforeach



</table>