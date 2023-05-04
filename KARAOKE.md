# Sistema de karaokê

Campos da tabela `musica`:

* `chave` - `INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT`
* `titulo` - `TEXT NOT NULL`
* `compositores` - `TEXT NOT NULL`
* `cantores_banda` - `TEXT NOT NULL`
* `ano_lancamento` - `INTEGER NOT NULL`
* `versao` - `TEXT` (pode ser `NULL`) - Pode ser `acústico`, `ao vivo`, `oficial`, enfim, algo que sirva para diferenciar quando houverem múltiplas versões da música. Na maioria dos casos, fica como `NULL`.
* `com_restricoes` - `INTEGER NOT NULL` - Indica se a letra da música pode ser imprópria para alguns tipos de audiência.
* `estilo` - `TEXT NOT NULL`

Há uma tabela adicional `estilo_musica` com apenas um campo:

* `nome` - `TEXT NOT NULL PRIMARY KEY`

Insira os valores `sertanejo`, `axé`, `rock`, `mpb`, `romântica`, `marchinha`, `country`, `pop`, `forró`, `gospel`, `jazz`, `rap`, `reggae`, `soul`, `hip hop`, `infantil`, `clássica`, `folclórico`, `pagode` e `techno`.

Não insira o valor `funk`, porque esse tipo de lixo não pode ser classificado como música. Além disso, se o sistema aceitasse tocar esse tipo de porcaria, certamente iria estragar as caixas de som.

Há ainda as seguintes restrições a serem modeladas com `CHECK`:

* O campo `ano_lancamento` só deve conter valores maiores ou iguais a 1700.
* Os campos `titulo`, `compositores` e `cantores_banda` devem ter pelo menos 5 e no máximo 500 caracteres.
* O campo `versao`, quando presente, deve ter entre 5 e 50 caracteres.
* O campo `com_restricoes` só aceita os valores 0 e 1.

E essa restrição de chave estrangeira:

* O campo `estilo` da tabela `musica` é chave estrangeira para o campo `nome` da tabela `estilo_musica`.
