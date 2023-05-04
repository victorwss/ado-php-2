# Sistema de paquera

Campos da tabela `pessoa`:

* `chave` - `INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT`
* `login` - `TEXT UNIQUE NOT NULL`
* `dt_nascimento` - `REAL NOT NULL`
* `url_foto` - `TEXT` (pode ser NULL)
* `interesse_homens` - `INTEGER NOT NULL`
* `interesse_mulheres` - `INTEGER NOT NULL`
* `sexo` - `TEXT NOT NULL`

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* Os campos `interesse_homens` e `interesse_mulheres` só admitem os valores 0 ou 1.
* O campo `sexo` só admite os valores 'M' ou 'F'.
* O campo `dt_nascimento` só admite datas válidas.
* O campo `url_foto`, caso não seja `NULL`, deve ter no mínimo 10 caratecters.

Dê uma olhada [aqui](https://www.sqlitetutorial.net/sqlite-date/) em como lidar com datas no SQLite.
