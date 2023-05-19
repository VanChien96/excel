<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\YourExport;


class OrderController extends Controller
{
    public function order()
    {
        return view('search', ['order' => '']);
    }

    public function search()
    {
        return view(
            'search',
            [
                'orders' => []
            ]
        );
    }
    public function searchMethod(Request $request)
    {
        $request->validate([
            'h3' => [
                'nullable',
                'max: 6',
            ],
            'h4' => [
                'nullable',
                'string',
                'regex:/^[\p{Han}\p{Hiragana}\p{Katakana}\p{Latin}\s]+$/u',
                function ($attribute, $value, $fail) {
                    $fullSizeLength = mb_strlen(preg_replace('/[^\x{3000}-\x{30FF}\x{4E00}-\x{9FAF}\s]/u', '', $value), 'UTF-8');
                    $halfSizeLength = mb_strlen(preg_replace('/[^\x01-\x7E\s]/', '', $value), 'UTF-8') * 2; // nhân 2 vì mỗi ký tự half-size chỉ tính 0.5
                    if ($fullSizeLength > 90 || $halfSizeLength > 180) {
                        $fail('Chiều dài chuỗi không được vượt quá 90 ký tự full-size hoặc 180 ký tự half-size.');
                    }
                },
            ],
            'h5' => [
                'nullable',
                'string',
                'regex:/^[\p{Katakana}\s]+$/u',
                function ($attribute, $value, $fail) {
                    $fullSizeLength = mb_strlen(preg_replace('/[^\x{3000}-\x{30FF}\s]/u', '', $value), 'UTF-8');
                    $halfSizeLength = mb_strlen(preg_replace('/[^\xEF\xBD\xA1-\xEF\xBE\x9F\s]/', '', $value), 'UTF-8') * 2;
                    if ($fullSizeLength > 140 || $halfSizeLength > 280) {
                        $fail('Chiều dài chuỗi không được vượt quá 140 ký tự full-size hoặc 280 ký tự half-size.');
                    }
                },
            ],
            'h6' => [
                'nullable',
                'max:400'
            ],
            'h7' => [
                'nullable',
                'string',
                'max:10',
            ],
        ]);


        $data = array_filter($request->all(), function ($value, $key) {
            return (!is_null($value) && ($key != 'select') && ($key != 'page'));
        }, ARRAY_FILTER_USE_BOTH);

        $key = array_keys($data);
        $value = array_values($data);
        // dd($key);
        switch (count($data)) {
            case 1:
                $orders = Order::where("$key[0]", 'like', "%$value[0]%")
                    ->orderBy('納入先コード')
                    ->paginate($request->select)
                    ->withQueryString();
                break;
            case 2:
                $orders = Order::where("$key[0]", 'like', "%$value[0]%")
                    ->where("$key[1]", 'like', "%$value[1]%")
                    ->orderBy('納入先コード')
                    ->paginate($request->select)
                    ->withQueryString();
                break;
            case 3:
                $orders = Order::where("$key[0]", 'like', "%$value[0]%")
                    ->where("$key[1]", 'like', "%$value[1]%")
                    ->where("$key[2]", 'like', "%$value[2]%")
                    ->orderBy('納入先コード')
                    ->paginate($request->select)
                    ->withQueryString();
                break;
            case 4:
                $orders = Order::where("$key[0]", 'like', "%$value[0]%")
                    ->where("$key[1]", 'like', "%$value[1]%")
                    ->where("$key[2]", 'like', "%$value[2]%")
                    ->where("$key[3]", 'like', "%$value[3]%")
                    ->orderBy('納入先コード')
                    ->paginate($request->select)
                    ->withQueryString();
                break;
            case 5:
                $orders = Order::where("$key[0]", 'like', "%$value[0]%")
                    ->where("$key[1]", 'like', "%$value[1]%")
                    ->where("$key[2]", 'like', "%$value[2]%")
                    ->where("$key[3]", 'like', "%$value[3]%")
                    ->where("$key[4]", 'like', "%$value[4]%")
                    ->orderBy('納入先コード')
                    ->paginate($request->select)
                    ->withQueryString();
                break;
            default: $orders =[];
        }

        // dd($orders); 
        return view(
            'search',
            [
                'select' => $request->select,
                'orders' => $orders,
            ]
        );
    }

    public function detail(Order $order)
    {
        dd($order);
        return view('search');
    }

    public function create(){
        return view('detail');
    }


}
