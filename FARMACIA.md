# Sistema de farmácia

Campos da tabela `medicamento`:

* `chave` - `INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT`
* `nome_comum` - `TEXT NOT NULL`
* `nome_substancia` - `TEXT NOT NULL`
* `tarja` - `TEXT NOT NULL` (preta ou vermelha)
* `preco` - `INTEGER NOT NULL` - O valor é expresso em centavos. Para mostrar na tela depois, divida por 100.
* `tipo` - `TEXT NOT NULL` (pílula, comprimido, líquido bebível, injetável, pomada, pastilha, inalável, bombinha)
* `qtd_por_caixa` - `REAL NOT NULL`
* `unidade_medida` - `TEXT NOT NULL`
* `fabricante` - `TEXT NOT NULL`

Há uma tabela adicional `tipo_tarja` com apenas um campo:

* `cor` - `TEXT NOT NULL PRIMARY KEY`

Insira os valores `preta` e `vermelha` nesta tabela.

Há uma segunda tabela adicional `tipo_medicamento` com apenas um campo:

* `tipo` - `TEXT NOT NULL PRIMARY KEY`

Insira os valores `Pílula`, `Comprimido`, `Líquido bebível`, `Injetável`, `Pomada`, `Pastilha`, `Inalável`, `Bombinha` e `Xampú` nesta tabela.

Há uma terceira tabela adicional `tipo_unidade_medida` com apenas um campo:

* `sigla` - `TEXT NOT NULL PRIMARY KEY`

Insira os valores `g`, `mg`, `mcg` e `ml`.

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* Nenhum campo numérico pode ter valor zero ou negativo.
* Os campos `nome_comum`, `nome_substancia` e `fabricante` devem ter pelo menos 5 e no máximo 200 caracteres.

E essas restrições de chave estrangeira:

* O campo `tipo` da tabela `medicamento` é chave estrangeira para o campo `tipo` da tabela `tipo_medicamento`.
* O campo `unidade_medida` da tabela `medicamento` é chave estrangeira para o campo `sigla` da tabela `tipo_unidade_medida`.
