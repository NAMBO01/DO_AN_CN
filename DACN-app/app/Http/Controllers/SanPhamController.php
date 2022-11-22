<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cur_page = 0;
        if (isset($_GET['page'])) {
            $cur_page = $_GET['page'];
        }

        $index_lay_san_pham = $cur_page * 10;
        $ds_san_pham = DB::table('bs_san_pham')
            ->orderBy('ma_san_pham', 'ASC')->skip($index_lay_san_pham)->limit(9)->get();
        $tong_so_luong = DB::table('bs_san_pham')
            ->select(DB::raw('COUNT(*) as tong_so_luong'))->first();
        //echo '<pre>',print_r($tong_so_luong),'</pre>';
        $so_trang = ceil($tong_so_luong->tong_so_luong / 10);

        $related_products = DB::table('bs_san_pham')->where('3')->get();

        return view('product')
            ->with('ds_san_pham', $ds_san_pham)
            ->with('so_trang', $so_trang)
            ->with('cur_page', $cur_page);
    }
    function san_pham_moi()
    {
        $new_product = DB::table('bs_san_pham')
            ->select(DB::raw('ma_san_pham,ten_san_pham,don_gia,gia_giam,hinh'))
            ->where('noi_bat', 1)
            ->limit(4)
            ->get();

        $t_shirt = DB::table('bs_san_pham')
            ->where('id_loai_sp', 27)
            ->limit(3)
            ->get();

        $n_shoes = DB::table('bs_san_pham')
            ->where('id_loai_sp', 24)
            ->limit(3)
            ->get();

        $n_backpack = DB::table('bs_san_pham')
            ->where('id_loai_sp', 22)
            ->limit(3)
            ->get();


        return view('index')
            ->with('new_product', $new_product)
            ->with('t_shirt', $t_shirt)
            ->with('n_shoes', $n_shoes)
            ->with('n_backpack', $n_backpack);
    }
    // phân trang bằng paginationpagination
    function pagination($current_page)
    {
        $index_lay_san_pham = $current_page * 10;
        $ds_san_pham = DB::table('bs_san_pham')
            ->orderBy('ma_san_pham', 'ASC')->skip($index_lay_san_pham)->limit(9)->get();
        $tong_so_luong = DB::table('bs_san_pham')
            ->select(DB::raw('COUNT(*) as tong_so_luong'))->first();

        $so_trang = ceil($tong_so_luong->tong_so_luong / 10);

        return response()->json([
            'ds_san_pham' => $ds_san_pham,
            'so_trang' => $so_trang
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
