<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos Online</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js" defer></script>
</head>
<body>

<header>
    <h1>Gerador de Currículos Online</h1>
    <nav>
        <a href="#form">Formulário</a> |
        <a href="#">Visualizar Currículo</a>
    </nav>
</header>

<main>
    <section id="form">
        <h2>Preencha seus dados</h2>

        <form action="gerar.php" method="POST" target="_blank">
            <h3>Dados Pessoais</h3>
            <label>Nome completo:</label>
            <input type="text" name="nome" required>

            <label>Data de nascimento:</label>
            <input type="date" id="nascimento" name="nascimento" required>

            <label>Idade:</label>
            <input type="text" id="idade" name="idade" required>

            <label>E-mail:</label>
            <input type="email" name="email" required>

            <label>Telefone:</label>
            <input type="text" name="telefone" required>

            <label>Endereço:</label>
            <input type="text" name="endereco">

            <h3>Formação Acadêmica</h3>
            <input type="text" name="curso" placeholder="Curso">
            <input type="text" name="instituicao" placeholder="Instituição">
            <input type="text" name="ano" placeholder="Ano de conclusão">

            <h3>Experiências Profissionais</h3>
            <div id="experiencias">
                <div class="exp-item">
                    <input type="text" name="empresa[]" placeholder="Empresa">
                    <input type="text" name="cargo[]" placeholder="Cargo">
                    <input type="text" name="periodo[]" placeholder="Período">
                    <textarea name="descricao[]" placeholder="Descrição das atividades"></textarea>
                </div>
            </div>
            <button type="button" id="addExp">+ Adicionar Experiência</button>

            <h3>Referências Pessoais</h3>
            <div id="referencias">
                <div class="ref-item">
                    <input type="text" name="ref_nome[]" placeholder="Nome">
                    <input type="text" name="ref_tel[]" placeholder="Telefone">
                    <input type="text" name="ref_relacao[]" placeholder="Relação">
                </div>
            </div>
            <button type="button" id="addRef">+ Adicionar Referência</button>

            <div class="botoes">
                <button type="submit">Gerar Currículo</button>
                <button type="reset">Limpar Campos</button>
            </div>
        </form>
    </section>
</main>

<footer>
    <p>© 2025 – Desenvolvido por João Lucas | Projeto APO UNIPAR</p>
</footer>

</body>
</html>