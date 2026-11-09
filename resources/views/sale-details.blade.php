@extends('layout')

@section('content')

<div class="invoice">
<div class="container">

    <h3 style="text-align:center">Al Dukkan | الدكان</h3>
    <h4 style="text-align:center">فاتورة مبيعات</h4>

    <h4>العملية #{{ $sale->id }}</h4>

    <p><strong>الاجمالي: </strong>{{ $sale->total }} ج.س </p>
    <p><strong>التاريخ: </strong> {{ $sale->created_at }}</p>

    <hr>

    <h4>العناصر</h4>

    <table class="table table-bordered ">
        <thead>
            <tr>
                <th>المنتجات</th>
                <th>الكمية</th>
                <th>السعر</th>
                <th>الاجمالي</th>
            </tr>
        </thead>

        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ \App\Models\Product::find($item->product_id)->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}ج.س </td>
                    <td>{{ $item->quantity * $item->price }} ج.س </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h5 style="text-align:left;"> الاجمالي النهائي:{{ $sale->total }} ج.س </h5>
    <p style="text-align:center; margin-top:20px">شكرا لتعاملكم معنا</p>
    <div class="no-print mt-3">
    <button onclick="window.print()" class="btn btn-success mb-3" style="margin-top:5px">طباعة</button>
    <a href="/sales" class="btn btn-secondary mb-3" style="margin-top:5px">رجوع←</a>
    </div>
</div>
</div>
<style>
    .invoice{
        width:700px;
        margin: 30px auto;
    }
    .container{
        max-width:900px;
    }
    @media print {
        .sidebar,
        .navbar,
        .btn {
            display:none !important;
        }
        body {
            background: white !important;
            margin:0;
            padding:0;
        }
        .container {
            width: 100%;
            margin: 0;
        }
        .invoice{
            width: 75%;
            margin:auto;
        }
    }
</style>
@endsection