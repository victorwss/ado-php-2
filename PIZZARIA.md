# Sistema de pizzaria

Campos da tabela `sabor_pizza`:

* `chave` - `INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT`
* `nome` - `TEXT NOT NULL`
* `ingredientes` - `TEXT NOT NULL`
* `dt_inclusao` - `REAL NOT NULL` - Mas isso daqui é uma data. O SQLite armazena datas como `REAL`.
* `dt_alteracao` - `REAL NOT NULL` - Mas isso daqui é uma data. O SQLite armazena datas como `REAL`.
* `preco_sem_borda` - `INTEGER NOT NULL` - O valor é expresso em centavos. Para mostrar na tela depois, divida por 100.
* `preco_borda_recheada` - `INTEGER NOT NULL` - O valor é expresso em centavos. Para mostrar na tela depois, divida por 100.
* `doce` - ÌNTEGER NOT NULL`

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* O campo `dt_inclusao` deve ser preenchido no momento do `INSERT` e nunca mais alterado.
* O campo `dt_alteracao` deve ser preenchido em todos os momentos onde ocorrerem um `INSERT` ou um `UPDATE`.
* O campo `doce` só admite os valores 0 ou 1.

Dê uma olhada [aqui](https://www.sqlitetutorial.net/sqlite-date/) em como lidar com datas no SQLite.
