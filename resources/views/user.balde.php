<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f8;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .card {
            max-width: 420px;
            width: 100%;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 16px 35px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .card img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            display: block;
        }
        .card-body {
            padding: 24px;
        }
        .card-body h1 {
            margin: 0 0 12px;
            font-size: 26px;
        }
        .card-body p {
            margin: 8px 0;
            line-height: 1.5;
        }
        .info {
            background: #f9fafb;
            padding: 14px 16px;
            border-radius: 12px;
            margin-top: 18px;
        }
        .info span {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }
        .actions {
            text-align: center;
            padding: 18px;
            border-top: 1px solid #eee;
        }
        .actions button {
            background: #1976d2;
            color: #fff;
            border: none;
            border-radius: 999px;
            padding: 12px 24px;
            font-size: 16px;
            cursor: pointer;
            transition: background .2s ease;
        }
        .actions button:hover {
            background: #135fa6;
        }
        .empty-state {
            text-align: center;
            padding: 80px 24px;
        }
    </style>
</head>
<body>
    @if(isset($id) && count($id) > 0)
        <div class="card">
            <img id="userPhoto" src="" alt="Foto do usuário">
            <div class="card-body">
                <h1 id="userName"></h1>
                <p id="userDescription"></p>
                <div class="info">
                    <span><strong>E-mail:</strong> <span id="userEmail"></span></span>
                    <span><strong>Telefone:</strong> <span id="userPhone"></span></span>
                    <span><strong>Cidade:</strong> <span id="userCity"></span></span>
                </div>
            </div>
            <div class="actions">
                <button id="nextBtn" type="button">Próximo</button>
            </div>
        </div>
    @else
        <div class="card empty-state">
            <h1>Sem usuários</h1>
            <p>Não há usuários para exibir no momento.</p>
        </div>
    @endif
</body>
</html>
