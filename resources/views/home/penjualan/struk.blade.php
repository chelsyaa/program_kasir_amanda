<!DOCTYPE html>
<html lang="id">
<head>
    <body onload="window.print()">
        
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK STRUK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 300px; /* Sesuaikan dengan lebar printer thermal */
            margin: 0 auto;
        }
        .receipt {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }
        .receipt .header {
            font-size: 18px;
            font-weight: bold;
        }
        .receipt .content {
            margin: 10px 0;
        }
        .receipt .footer {
            margin-top: 10px;
            font-size: 14px;
        }
        .receipt .item {
            display: flex;
            justify-content: space-between;
        }
        .receipt .item-name {
            flex: 2;
        }
        .receipt .item-total {
            flex: 1;
            text-align: right;
        }
        .receipt .separator {
            border-top: 1px dashed #000;
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <div class="header">
            Cafe Celestyal<br>
            Jl. Kopo No. 123<br>
            Telp: 012-3456789
        </div>
        <div class="content">
            <div class="item">
                <span class="item-name">Ramen</span>
                <span class="item-total">50000</span>
            </div>
            
            <div class="separator"></div>
            <div class="item">
                <span class="item-name">Subtotal</span>
                <span class="item-total">30000</span>
            </div>
            <div class="item">
                <span class="item-name">PPN (10%)</span>
                <span class="item-total">3000</span>
            </div>
            <div class="separator"></div>
            <div class="item">
                <span class="item-name">Total</span>
                <span class="item-total">33000</span>
            </div>
        </div>
        <div class="footer">
            Terima kasih atas kunjungan Anda!
        </div>
    </div>
</body>   
</body>
</html