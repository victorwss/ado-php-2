# Sistema de biblioteca

Campos na tabela `livro`:

* `chave` - `INTEGER PRIMARY KEY NOT NULL AUTOINCREMENT`
* `titulo` - `TEXT NOT NULL`
* `isbn` - `TEXT UNIQUE NOT NULL`
* `ano_publicacao` - `INTEGER NOT NULL`
* `editora` - `TEXT NOT NULL`
* `autoria` - `TEXT NOT NULL` - Isso normalmente é o nome do autor, mas pode haver mais do que um autor ou o autor ser uma entidade.
* `edicao` - `INTEGER NOT NULL`
* `paginas` - `INTEGER NOT NULL`
* `largura_mm` - `INTEGER NOT NULL` - O valor da largura deve estar em milímetros.
* `altura_mm` - `INTEGER NOT NULL` - O valor da altura deve estar em milímetros.

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* Os campos `edicao`, `paginas`, `largura_mm` e `altura_mm` devem ser números maiores que zero.
* O campo `ano_publicacao` deve ser maior ou igual a 1500.
* Os campos de texto devem ser limitados em até 200 caracteres e não podem estar em branco.
