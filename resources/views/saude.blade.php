<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apliacação Saúde</title>
</head>
<body>
    <main>
        <div>
            <h1>Aplicação Saúde - Cálculo IMC</h1>
            <p>Esta aplicação realiza o calculo do IMC de uma pessoa informando 
                sua classificação com relação a este cálculo.</p>   
        </div>
        <div>
            <form action="{{url('/imc')}}" method ="get">
                <label id="lnome" for="nome">Nome</label>
                <input type="text" name="nome" placeholder="informe seu nome." required>
                <br/>
                <label id="ldatanascimento" for="datanascimento">Data de nascimento</label>
                <input type="date" name="datanascimento" placeholder="informe a data de nascimento." required>
                <br/>
                <label id="lpeso" for="peso">Peso</label>
                <input type="number" step="0.01" name="peso" placeholder="informe seu peso." required>
                <br/>
                <label id="laltura" for="altura">Altura</label>
                <input type="number" step="0.01" name="altura" placeholder="informe a sua altura" required>
                <br/>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>
</body>
</html>