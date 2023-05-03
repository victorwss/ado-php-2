# Sistema de hotel

Campos na tabela `quarto`:

* `numero` - `INTEGER PRIMARY NOT NULL` - Não tem `AUTOINCREMENT` neste.
* `camas_solteiro` - `INTEGER NOT NULL`
* `camas_casal` - `INTEGER NOT NULL`
* `area_m2` - `INTEGER NOT NULL` - O valor deve estar em metros quadrados.
* `reservado` - `INTEGER NOT NULL`
* `valor_diaria` - `INTEGER NOT NULL` - O valor é expresso em centavos. Para mostrar na tela depois, divida por 100.

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* Os campos `numero`, `area_m2` e `valor_diaria` devem ser números maiores que zero.
* Os campos `camas_solteiro` e `camas_casal` não podem ser negativos.
* A soma dos campos `camas_solteiro` e `camas_casal` deve ser maior que zero.
* O campo `reservado` só admite os valores 0 ou 1.
