# Sistema de paquera

Campos da tabela `imovel`:

* `chave` - `INTEGER PRIMARY NOT NULL AUTOINCREMENT`
* `area_construida_m2`
* `area_total_m2`
* `quartos`
* `banheiros`
* `numero_piso`
* `logradouro` - `TEXT NOT NULL`
* `bairro` - `TEXT NOT NULL`
* `cep`
* `numero` - `TEXT NOT NULL`
* `complemento` - `TEXT NOT NULL`
* `cidade` - `TEXT NOT NULL`
* `sigla_estado` - `TEXT NOT NULL`
* `preco_venda`
* `mensalidade_aluguel`
* `situacao` - `TEXT NOT NULL`

Há uma tabela adicional `estado` com apenas um campo:

* `sigla` - `TEXT PRIMARY KEY NOT NULL`

Insira as siglas das 27 unidades federativas brasileiras nesta tabela.

Há outra tabela adicional `situacoes` com apenas um campo:

* `situacao` - `TEXT PRIMARY KEY NOT NULL`

Insira os valores `alugar`, `vender`, `alugar ou vender`, `alugado`, `vendido`, `cancelado` nesta tabela.