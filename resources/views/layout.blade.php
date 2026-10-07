<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes · Laboratorio de pruebas</title>
    <style>
        :root{font-family:Arial,sans-serif;color:#182c3b;background:#f3f6f8}
        *{box-sizing:border-box}body{margin:0}header{background:#153a50;color:white;padding:23px 44px;display:flex;justify-content:space-between;align-items:center}
        header strong{font-size:23px}header span{font-size:16px;color:#c7dfe9}main{max-width:1000px;margin:42px auto;background:white;border:1px solid #dce4e9;padding:36px 40px}
        h1{font-size:32px;margin:0 0 10px}h2{font-size:20px}p{color:#536675;font-size:18px;line-height:1.5}.actions{display:flex;align-items:center;gap:12px;margin:26px 0}
        a{color:#116c87;text-decoration:none}a:hover{text-decoration:underline}.button,button{background:#126f89;color:white;display:inline-block;border:0;padding:13px 20px;font-size:17px;font-weight:600;border-radius:4px;cursor:pointer;text-decoration:none}
        .secondary{background:#e9f1f5;color:#234557}.danger{background:#fff0ec;color:#ae432c;padding:9px 14px}.small{font-size:16px;padding:9px 14px}table{width:100%;border-collapse:collapse;margin-top:24px}th{text-align:left;background:#edf4f7;padding:16px;color:#335365;font-size:16px}td{border-bottom:1px solid #e4ebef;padding:17px 16px;font-size:18px}.row-actions{display:flex;gap:13px;align-items:center}.row-actions form{margin:0}.field{margin:24px 0}label{display:block;font-weight:600;font-size:18px;margin-bottom:9px}input{width:100%;padding:13px;font-size:19px;border:1px solid #a9bac5;border-radius:4px}.form{max-width:660px}.error{color:#a73126;font-size:17px;margin:9px 0 0}.notice{background:#fff1ed;border-left:4px solid #ba4a36;padding:15px 18px;margin:25px 0;color:#923122}.detail{margin:26px 0;padding:24px;background:#f3f7f9;font-size:22px;line-height:1.7}.detail strong{display:block;font-size:16px;color:#617b8b}.footer{color:#738895;font-size:14px;margin-top:34px;border-top:1px solid #e4ebef;padding-top:16px}
    </style>
</head>
<body>
    <header><strong>Clientes</strong><span>Laboratorio de pruebas · Laravel 12</span></header>
    <main>
        @yield('content')
        <div class="footer">Ejemplo didáctico · Datos ficticios</div>
    </main>
</body>
</html>
