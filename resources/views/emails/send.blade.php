<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            color: #333;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #28D859;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .info {
            margin: 20px 0;
            padding: 10px;
            border: 1px solid #d0d0d0;
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            color: #777;
            font-size: 0.9em;
        }
        .highlight {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
          <h1 style="margin: 0; color: #28D859;">Novo Contato</h1>
        </div>
        
        @if(!empty($data['category']))
            <p>Você recebeu um novo contato referente à {{ $data['category'] }}:</p>
        @endif

        <div class="info">
            @if(!empty($data['company_name']))
                <p><strong>Nome da Empresa:</strong> <span class="highlight">{{ $data['company_name'] }}</span></p>
            @endif

            @if(isset($data['cnpj']))
                <p><strong>CNPJ:</strong> <span class="highlight">{{ $data['cnpj'] }}</span></p>
            @elseif(isset($data['cpf']))
                <p><strong>CPF:</strong> <span class="highlight">{{ $data['cpf'] }}</span></p>
                <p><strong>Data de Nascimento:</strong> <span class="highlight">{{ $data['birth_date'] }}</span></p>
            @endif

            <p><strong>Nome:</strong> <span class="highlight">{{ $data['user_name'] }}</span></p>
            <p><strong>E-mail:</strong> <span class="highlight">{{ $data['user_email'] }}</span></p>
            <p><strong>Telefone:</strong> <span class="highlight">{{ $data['user_phone'] ?? 'Não informado' }}</span></p>
        </div>
        <div class="footer">
          <p>Este é um e-mail automático. Por favor, não responda.</p>
        </div>
    </div>
</body>
</html>
