# Sistema de transportadora

Campos na tabela `veiculo`:

* `chave` - `INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT`
* `marca` - `TEXT NOT NULL`
* `modelo` - `TEXT NOT NULL`
* `ano` - `INTEGER NOT NULL`
* `placa` - `TEXT UNIQUE NOT NULL`
* `cor` - `TEXT NOT NULL`
* `tipo` - `TEXT NOT NULL`

Há uma tabela adicional `tipo_veiculo` com apenas um campo:

* `tipo` - `TEXT NOT NULL PRIMARY KEY`

Insira os valores `Motocicleta`, `Carro`, `Caminhão`, `Furgão`, `Caminhonete` e `Ônibus` nesta tabela.

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* O campo `ano` deve ser maior ou igual a 1900.
* O campo `placa` deve ser limitado em 7 caracteres e não pode estar em branco.
* Os demais campos de texto devem ser limitados em até 50 caracteres e não podem estar em branco.

E essa restrição de chave estrangeira:

* O campo `tipo` da tabela `veiculo` é chave estrangeira para o campo `tipo` da tabela `tipo_veiculo`.
