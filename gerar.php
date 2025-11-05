<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Currículo Gerado</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { background: white; }
        .curriculo { max-width: 800px; margin: auto; padding: 40px; border: 1px solid #ccc; }
        h1 { text-align: center; color: #007bff; }
        h2 { border-bottom: 2px solid #007bff; padding-bottom: 4px; }
        .btn-print { text-align: center; margin-top: 20px; }
    </style>
</head>
<body>

<div class="curriculo">
    <h1><?= htmlspecialchars($_POST['nome']); ?></h1>
    <p><strong>Idade:</strong> <?= htmlspecialchars($_POST['idade']); ?> anos</p>
    <p><strong>Email:</strong> <?= htmlspecialchars($_POST['email']); ?></p>
    <p><strong>Telefone:</strong> <?= htmlspecialchars($_POST['telefone']); ?></p>
    <p><strong>Endereço:</strong> <?= htmlspecialchars($_POST['endereco']); ?></p>

    <h2>Formação Acadêmica</h2>
    <p><?= htmlspecialchars($_POST['curso']); ?> – <?= htmlspecialchars($_POST['instituicao']); ?> (<?= htmlspecialchars($_POST['ano']); ?>)</p>

    <h2>Experiências Profissionais</h2>
    <?php if (!empty($_POST['empresa'])): ?>
        <?php foreach ($_POST['empresa'] as $i => $empresa): ?>
            <p><strong><?= htmlspecialchars($empresa); ?></strong> - <?= htmlspecialchars($_POST['cargo'][$i]); ?> (<?= htmlspecialchars($_POST['periodo'][$i]); ?>)</p>
            <p><?= htmlspecialchars($_POST['descricao'][$i]); ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <h2>Referências Pessoais</h2>
    <?php if (!empty($_POST['ref_nome'])): ?>
        <?php foreach ($_POST['ref_nome'] as $i => $nome): ?>
            <p><?= htmlspecialchars($nome); ?> – <?= htmlspecialchars($_POST['ref_relacao'][$i]); ?> – <?= htmlspecialchars($_POST['ref_tel'][$i]); ?></p>
        <?php endforeach; ?>
    <?php endif; ?>

    <div class="btn-print">
        <button onclick="window.print()">Baixar Currículo (PDF)</button>
    </div>
</div>

</body>
</html>
