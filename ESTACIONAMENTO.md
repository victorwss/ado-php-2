# Sistema de estacionamento

Campos da tabela `reserva`:

* `chave` - `INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT`
* `numero_vaga` - `INTEGER NOT NULL`
* `chave_veiculo` - `INTEGER NOT NULL`
* `chave_condutor` - `INTEGER NOT NULL`
* `entrada` - `REAL NOT NULL` - Mas isso daqui é uma data/hora. O SQLite armazena datas e horários como `REAL`.`
* `saida` - `REAL NOT NULL` - Mas isso daqui é uma data/hora. O SQLite armazena datas e horários como `REAL`.`

Campos da tabela `vaga`:

* `numero` - `INTEGER NOT NULL PRIMARY KEY` - Não tem `AUTOINCREMENT` neste.
* `tipo` - `TEXT NOT NULL` - Pode ser `M` se for vaga para motos ou `C` se for vaga para carro de passeio.

Insira todas as vagas de número 1 até... Até o número de vagas que vocês acham que cabem no estacionamento.

Campos na tabela `veiculo`:

* `chave` - `INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT`
* `marca` - `TEXT NOT NULL`
* `modelo` - `TEXT NOT NULL`
* `placa` - `TEXT UNIQUE NOT NULL`
* `cor` - `TEXT NOT NULL`
* `tipo` - `TEXT NOT NULL` - Pode ser `M` se for vaga para motos ou `C` se for vaga para carro de passeio.

Campos da tabela `condutor`:

* `chave` - `INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT`
* `nome` - `TEXT NOT NULL`
* `identificacao` - `TEXT UNIQUE NOT NULL` - Normalmente é o CPF. Para estrangeiros, pode ser número do passaporte, RNE, CRNM ou outro documento similar.
* `telefone` - `TEXT UNIQUE NOT NULL`

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* O campo `identificacao` de `condutor` deve ser limitado a 25 caracteres. Apenas 11 são usados para os CPFs.
* O campo `telefone` de `condutor` deve ser limitado a 20 caracteres. Apenas 11 são usados para números brasileiros.
* O campo `placa` de `veiculo` deve ser limitado em 7 caracteres e não pode estar em branco.
* Os campos `marca`, `modelo` e `cor` de `veiculo` devem ser limitados em até 50 caracteres e não podem estar em branco.
* O campo `nome` de `condutor` deve ser limitado em 200 caracteres e não pode estar em branco.

E essas restrições de chave estrangeira:

* O campo `numero_vaga` da tabela `reserva` é chave estrangeira para o campo `numero` da tabela `vaga`.
* O campo `chave_veiculo` da tabela `reserva` é chave estrangeira para o campo `chave` da tabela `veiculo`.
* O campo `chave_condutor` da tabela `reserva` é chave estrangeira para o campo `chave` da tabela `condutor`.

Há ainda mais uma restrição de consistência:

* Carros de passeio só podem utilizar vagas destinadas a carros de passeio e motos só podem utilizar vagas destinadas a motos.

Aqui há 3 tabelas principais, mas foquem na tabela de `reserva`. Para as tabelas de `condutor` e `veiculo`, deixem dados já pré-cadastrados. No entanto, todas essas informações deverão ser listadas na hora em que as vagas forem listadas.

Note que o veículo e o condutor são cadastrados separados, não há relacionamento direto de condutor para veículo. O veículo e o condutor só são conhecidos juntos quando uma reserva é realizada. Isso acontece porque um veículo pode ter sido conduzido por várias pessoas diferentes em diferentes ocasiões. Por exemplo, quando o veículo pertence a uma frota de uma empresa e há vários motoristas atuando na empresa, ou quando o veículo é alugado, ou quando ele pode ser usado por mais de um proprietário, tal como um casal e os filhos maiores de idade.

Dê uma olhada [aqui](https://www.sqlitetutorial.net/sqlite-date/) em como lidar com datas no SQLite.