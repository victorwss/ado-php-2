# Objetivo

Desenvolva um CRUD utilizando o SQLite como banco de dados (assim fica mais fácil de testar).

# Etapas

## 1. Escolha uma das tabelas abaixo para desenvolver o CRUD:

### a. Tabelas `LIVRO` num sistema de biblioteca.

Campos na tabela `LIVRO`:

* `CHAVE` - `INTEGER PRIMARY KEY NOT NULL AUTOINCREMENT`
* `TITULO` - `TEXT NOT NULL`
* `ANO_PUBLICACAO` - `INTEGER NOT NULL`
* `EDITORA` - `TEXT NOT NULL`
* `AUTORIA` - `TEXT NOT NULL` - Isso normalmente é o nome do autor, mas pode haver mais do que um autor ou o autor ser uma entidade. Mesmo se houverem vários autores.
* `EDICAO` - `INTEGER NOT NULL`
* `PAGINAS` - `INTEGER NOT NULL`
* `LARGURA_MM` - `INTEGER NOT NULL` - O valor da largura deve estar em milímetros.
* `ALTURA_MM` - `INTEGER NOT NULL` - O valor da altura deve estar em milímetros.

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* Os campos `EDICAO`, `PAGINAS`, `LARGURA_MM` e `ALTURA_MM` devem ser números maiores que zero.
* O campo `ANO_PUBLICACAO` deve ser maior ou igual a 1500.
* Os campos texto devem ser limitados em até 1000 caracteres e não podem estar em branco.

### b. Tabela `VEICULO` num sistema de uma transportadora.

Campos na tabela `VEICULO`:

* `CHAVE` - `INTEGER PRIMARY NOT NULL AUTOINCREMENT`
* `MARCA` - `TEXT NOT NULL`
* `MODELO` - `TEXT NOT NULL`
* `ANO` - `INTEGER NOT NULL`
* `PLACA` - `TEXT UNIQUE NOT NULL`
* `COR` - `TEXT NOT NULL`
* `TIPO` - `TEXT NOT NULL`

Há uma tabela adicional `TIPO_VEICULO` com apenas um campo:

* `TIPO` - `TEXT PRIMARY KEY NOT NULL`

Insira os valores `Motocicleta`, `Carro`, `Caminhão`, `Furgão`, `Caminhonete` nesta tabela.

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* O campo `ANO` deve ser maior ou igual a 1900.

E essa restrição de chave estrangeira:

* O campo `TIPO` da tabela `VEICULO` é chave estrangeira para o campo `TIPO` da tabela `TIPO_VEICULO`.

### c. Tabela `QUARTO` num sistema de hotelaria.

Campos na tabela `QUARTO`:

* `NUMERO` - `INTEGER PRIMARY NOT NULL` - Não tem `AUTOINCREMENT` neste.
* `CAMAS_SOLTEIRO` - `INTEGER NOT NULL`
* `CAMAS_CASAL` - `INTEGER NOT NULL`
* `AREA_MM2` - `INTEGER NOT NULL` - O valor deve estar em metros quadrados.
* `RESERVADO` - `INTEGER NOT NULL`
* `VALOR_DIARIA` - `INTEGER NOT NULL` - O valor é expresso em centavos. Para mostrar na tela depois, divida por 100.

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* Os campos `NUMERO`, `AREA_MM2` e `VALOR_DIARIA` devem ser números maiores que zero.
* Os campos `CAMAS_SOLTEIRO` e `CAMAS_CASAL` não podem ser negativos.
* A soma dos campos `CAMAS_SOLTEIRO` e `CAMAS_CASAL` deve ser maior que zero.
* O campo `RESERVADO` só admite os valores 0 ou 1.

### d. Tabela `PESSOA` num sistema de paquera online.

* `CHAVE` - `INTEGER PRIMARY NOT NULL AUTOINCREMENT`
* `LOGIN` - `TEXT UNIQUE NOT NULL`
* `DT_NASCIMENTO` - `REAL NOT NULL`
* `URL_FOTO` - `TEXT` (pode ser NULL)
* `INTERESSE_HOMENS` - `INTEGER NOT NULL`
* `INTERESSE_MULHERES` - `INTEGER NOT NULL`
* `SEXO` - `TEXT NOT NULL`

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* Os campos `INTERESSE_HOMENS` e `INTERESSE_MULHERES` só admitem os valores 0 ou 1.
* O campo `SEXO` só admite os valores 'M' ou 'F'.
* O campo `DT_NASCIMENTO` só admite datas válidas. Dê uma olhada [aqui](https://www.sqlitetutorial.net/sqlite-date/) em como lidar com datas no SQLite.
* O campo `URL_FOTO`, caso não seja NULL, deve ter no mínimo 10 caratecters.

Dê uma olhada [aqui](https://www.sqlitetutorial.net/sqlite-date/) em como lidar com datas no SQLite.

## 2. Desenvolva as seguintes telas para o seu pequeno sistema:

### a. Banco de dados.

Crie o banco de dados conforme descrito pela alternativa que você descreveu e salve o script de criação de banco de dados num arquivo `bd.sql`.

Esse arquivo deve ter todas as instruções `CREATE TABLE` necessárias para a criação do banco de dados, bem como quaisquer outras instruções que forem necessárias.

A nota será dada da seguinte forma, julgada pelo conteúdo do arquivo `bd.sql`:

* 12% da nota é pela definição correta da(s) tabela(s), incluindo os tipos dos campos e restrições `UNIQUE` e `NOT NULL`.
* 6% pela definição das restrições de integridade (`CHECK` e chave estrangeira).

No total, isso soma 18% da nota.

### b. Crie um arquivo PHP que seja responsável pelas operações no banco de dados.

Ele deve ter as seguintes funções:

A página com as funções do banco de dados deve estar num arquivo `operacoes.php`.

* Uma função para listar todos os livros / veículos / quartos / pessoas.
* Uma função para inserir os dados do livro / veículo / quarto / pessoa.
* Uma função para, a partir da respectiva chave, alterar os dados do livro / veículo / quarto / pessoa.
* Uma função para, a partir da respectiva chave, excluir os dados do livro / veículo / quarto / pessoa.
* Uma função para, a partir da respectiva chave, ler os dados de um livro / veículo / quarto / pessoa.

A implementação correta de cada uma destas vale 6% da nota, sendo que 1% de cada é a correta participação da função na transação.

No caso do sistema de quartos, a função de inserção e de alteração é a mesma. Use o comando `REPLACE` do SQLite. Neste caso, essa funcionalidade passa a valer 14% da nota.

Outros 4% são atribuídos para a função que realiza a abertura correta da conexão. Este deve estar num arquivo seperado `conectar.php` se você julgar melhor.

Vulnerabilidade de injeção de SQL dá uma penalidade -2% em cada um desses itens onde isso aparecer.

No total, isso soma 34% da nota.

### c. Listagem de todos os livros / veículos / quartos / pessoa.

A página de listagem deve estar num arquivo `listar.php`.

A lista deve ser feita numa tabela com uma coluna para cada campo. Coloque também numa coluna extra, um botão para ir para a tela de edição.

No final da tabela, coloque também um link para a página de inserção.

A página deve ser acessível por meio de GET.

Essa parte tem um peso de 10% da nota. Sendo:
* 5% para a montagem correta da tabela.
* 1% pelo correto gerenciamento de transações. (1% = tudo certo, 0% = nada ou não funciona).
* 1% para realizar a pesquisa no banco de dados corretamente utilizando o arquivo desenvolvido na parte b.
* 1% para a presença correta do link para a página de inserção.
* 1% para a ausência de erros de validação de HTML.
* 1% por garantir que a página só responde a GETs e nunca a POSTs.

### d. Páginas de inserção e de alteração.

A página de inserção e alteração devem estar no mesmo arquivo `cadastrar.php`.

Se o acesso for por GET e não houver chave na URL, trata-se de uma inserção. Se houver chave na URL é uma alteração.

No caso dos livros / veículos e pessoas, Se o acesso for por POST, realize o `INSERT` no banco de dados se a chave não estiver presente ou o `UPDATE` se estiver presente.

No caso dos quartos, realize sempre um comando `REPLACE` (que é a forma abriviada de `INSERT OR REPLACE`), que combina a ideia do `INSERT` e do `UPDATE` num comando só.

A página deve conter um formulário para inserir todos os dados, campo a campo. Campos `AUTOINCREMENT` não devem estar presentes na inserção e não devem ser editáveis na alteração.

O formulário deve fazer o envio via POST.

Antes de tentar realizar a inserção, certifique-se (no lado do PHP) que todos os dados inseridos estão corretos de acordo com as regras definidas para cada um.
Se não estiverem, devolva o mesmo formulário com uma mensagem de erro e mantenha os dados informados preenchidos tal como foram preenchidos.

Caso trate-se de uma alteração, coloque um botão para exclusão, que faz POST numa URL diferente efetuando a exclusão e redirecionando para a página de listagem, após a confirmação do usuário.

Caso a inclusão ou alteração sejam bem sucedidas, redirecione à página de listagem.

Essa parte tem um peso de 28% da nota. Sendo:
* 10% pela correta validação de todos os campos no PHP.
* 4% pela correta montagem do formulário na inserção.
* 4% pela correta montagem do formulário na alteração.
* 2% pelo correto gerenciamento de transações. (2% = tudo certo, 1% = parcial, 0% = nada ou não funciona).
* 2% por garantir que os GETs e POSTs funcionem como esperado, além de separar a inserção e a alteração onde devem ser separados.
* 2% por chamar a função de inserção e alteração corretamente conforme o caso.
* 1% por mostrar o botão de exclusão e o formulário correspondente corretamente apenas na página de alteração.
* 1% para a ausência de erros de validação de HTML.
* 1% pela confirmação do usuário na exclusão.
* 1% por redirecionar para a tela de listagem após confirmada a inclusão ou alteração.

### e. Arquivo PHP de exclusão.

Esse arquivo deve se chamar `excluir.php` e deve responder a POSTs realizados a partir do botão de exclusão na página de alteração.

Isso corresponde a 5% da nota. Sendo:
* 1% pelo correto gerenciamento de transações. (1% = tudo certo, 0% = nada ou não funciona).
* 1% por garantir que a página só responde a GETs e nunca a POSTs.
* 2% por realizar a exclusão corretamente.
* 1% por redirecionar para a tela de listagem após confirmada a exclusão.

### f. Entrega

Coloque o nome de todos os integrantes num arquivo `README.MD` e coloque também as observações que achar pertinente para a correção do projeto.

Convide o professor para o seu projeto no GitHub.

Isso vale 5% da nota distribuídos assim:

* 2% pelo `README.MD` com o nome dos alunos.
* 3% pela presença de todos os arquivos `bd.sql`, `conectar.php`, `operacoes.php`, `listar.php`, `cadastrar.php` e `excluir.php` e nada mais além do que eles.

# Tem correção automática?

Não. Pelas seguintes razões:

* Fazer correção automática disso tudo é bem difícil e o professor iria levar um tempão para criar os scripts para fazer isso.
* Poucas coisas no mundo real de desenvolvimento têm correção automática e vocês tem que estar preparados para isso.
* Para o professor desenvolver a correção automática seria tão complicado que corrigir um por um manualmente acaba sendo mais fácil e mais rápido.
* JavaScript não tem acesso direto ao banco de dados, e embora isso não impossibilite a correção automática, deixa ela bem mais complicada.
* Não consegui pensar em uma forma de fazer isso sem que a resposta para todos os problemas do enunciado estivesse de alguma forma presente dentro do teste.
* Eu até tentei fazer. Depois de umas 2 horas cheguei a conclusão de que não há forma viável de fazer isso.
* O ADO 1 que era algo muito mais simples do que isso já tinham testes supercomplicados. Imagine o que seria o teste disto.
