# Sistema de imobiliária

Campos da tabela `imovel`:

* `chave` - `INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT`
* `area_construida_m2` - `INTEGER NOT NULL` - O valor deve estar em metros quadrados.
* `area_total_m2` - `INTEGER NOT NULL` - O valor deve estar em metros quadrados.
* `quartos` - `INTEGER NOT NULL`
* `banheiros` - `INTEGER NOT NULL`
* `numero_piso` - `INTEGER` (pode ser `NULL` caso isso não se aplique).
* `logradouro` - `TEXT NOT NULL` - Inclui número, rua, complemento, bairro, cidade, etc tudo num só campo.
* `preco_venda` - `INTEGER NOT NULL` - O valor é expresso em centavos. Para mostrar na tela depois, divida por 100.
* `mensalidade_aluguel` - `INTEGER NOT NULL` - O valor é expresso em centavos. Para mostrar na tela depois, divida por 100.
* `situacao` - `TEXT NOT NULL`
* `tipo` - `TEXT NOT NULL`

Há uma outra tabela adicional `situacao_imovel` com apenas um campo:

* `situacao` - `TEXT PRIMARY KEY NOT NULL`

Insira os valores `alugar`, `vender`, `alugar ou vender`, `alugado`, `vendido` e `cancelado` nesta tabela.

E há uma segunda tabela adicional `tipo_imovel` com apenas um campo:

* `tipo_imovel` - `TEXT PRIMARY KEY NOT NULL`

Insira os valores `casa`, `sobrado`, `loja`, `apartamento`, `prédio`, `terreno` e `escritório` nesta tabela.

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* Nenhum campo numérico pode ter valor negativo.
* O campo `area_construida_m2` não pode ser maior que `area_total_m2`.
* O campo `logradouro` deve ter no mínimo 10 caracteres e no máximo 1000 caracteres.

E essas restrições de chave estrangeira:

* O campo `tipo` da tabela `imovel` é chave estrangeira para o campo `tipo` da tabela `tipo_imovel`.
* O campo `situacao` da tabela `imovel` é chave estrangeira para o campo `situacao` da tabela `situacao_imovel`.
