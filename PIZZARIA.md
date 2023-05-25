# Sistema de pizzaria

Campos da tabela `sabor_pizza`:

* `chave` - `INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT`
* `nome` - `TEXT NOT NULL`
* `ingredientes` - `TEXT NOT NULL`
* `preco_sem_borda` - `INTEGER NOT NULL` - O valor é expresso em centavos. Para mostrar na tela depois, divida por 100.
* `preco_borda_recheada` - `INTEGER NOT NULL` - O valor é expresso em centavos. Para mostrar na tela depois, divida por 100.
* `doce` - ÌNTEGER NOT NULL`

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* O campo `doce` só admite os valores 0 ou 1.
