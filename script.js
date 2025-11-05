// Calcular idade automaticamente
document.getElementById("nascimento").addEventListener("change", function() {
    const nasc = new Date(this.value);
    const hoje = new Date();
    let idade = hoje.getFullYear() - nasc.getFullYear();
    const m = hoje.getMonth() - nasc.getMonth();
    if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) {
        idade--;
    }
    document.getElementById("idade").value = idade;
});

// Adicionar experiências dinamicamente
$(document).ready(function() {
    $("#addExp").click(function() {
        $("#experiencias").append(`
            <div class="exp-item">
                <input type="text" name="empresa[]" placeholder="Empresa">
                <input type="text" name="cargo[]" placeholder="Cargo">
                <input type="text" name="periodo[]" placeholder="Período">
                <textarea name="descricao[]" placeholder="Descrição das atividades"></textarea>
            </div>
        `);
    });

    $("#addRef").click(function() {
        $("#referencias").append(`
            <div class="ref-item">
                <input type="text" name="ref_nome[]" placeholder="Nome">
                <input type="text" name="ref_tel[]" placeholder="Telefone">
                <input type="text" name="ref_relacao[]" placeholder="Relação">
            </div>
        `);
    });
});
