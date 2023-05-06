CREATE TABLE tipo_tarja (
  cor TEXT NOT NULL PRIMARY KEY
);

INSERT INTO tipo_tarja (cor) VALUES ('preta'), ('vermelha');

CREATE TABLE tipo_medicamento (
  tipo TEXT NOT NULL PRIMARY KEY
);

INSERT INTO tipo_medicamento (tipo) VALUES 
  ('Pílula'), 
  ('Comprimido'), 
  ('Líquido bebível'), 
  ('Injetável'), 
  ('Pomada'), 
  ('Pastilha'), 
  ('Inalável'), 
  ('Bombinha'), 
  ('Xampú');

CREATE TABLE tipo_unidade_medida (
  sigla TEXT NOT NULL PRIMARY KEY
);

INSERT INTO tipo_unidade_medida (sigla) VALUES ('g'), ('mg'), ('mcg'), ('ml');

CREATE TABLE medicamento (
  chave INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
  nome_comum TEXT NOT NULL CHECK(length(nome_comum) >= 5 AND length(nome_comum) <= 200),
  nome_substancia TEXT NOT NULL CHECK(length(nome_substancia) >= 5 AND length(nome_substancia) <= 200),
  tarja TEXT NOT NULL REFERENCES tipo_tarja(cor),
  preco INTEGER NOT NULL CHECK(preco > 0),
  tipo TEXT NOT NULL REFERENCES tipo_medicamento(tipo),
  qtd_por_caixa REAL NOT NULL CHECK(qtd_por_caixa > 0),
  unidade_medida TEXT NOT NULL REFERENCES tipo_unidade_medida(sigla),
  fabricante TEXT NOT NULL CHECK(length(fabricante) >= 5 AND length(fabricante) <= 200)
);
