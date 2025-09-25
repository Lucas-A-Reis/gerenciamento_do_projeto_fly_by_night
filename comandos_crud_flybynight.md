## Comandos para o projeto Flybynight

```sql
INSERT INTO fornecedores (nome) VALUES ('Eletrônicos Tabajara');
```
```sql
INSERT INTO fornecedores (nome) VALUES 
('Games ABCD');
('Supermercado Tem de Tudo');
('Livraria Demais da Conta');
```
## inserindo produtos

```sql
INSERT INTO produtos (nome, descricao, preco, quantidade, fornecedor_id)
VALUES(
    'Smartphone Galaxy S23',
    'Equipamento com sistema android e câmera full HD',
    1599.50,
    20,
    1
);

INSERT INTO produto (nome, descricao, preco, quantidade, fornecedor_id)
VALUES(
    'TV LED',
    'Tela de 50 polegadas, 4k, 4 entradas HDMI e etc e tal',
    3420,
    12,
    1
);

INSERT INTO produto (nome, descricao, preco, quantidade, fornecedor_id)
VALUES(
    'Senhor dos Anéis: As Duas Torres',
    'Volume 2 da triologia Senhor dos Anéis',
    80.99,
    100,
    4
);

INSERT INTO lojas (nome) VALUES 
('Casas Bahia'), 
('Shopping Zona Leste'), 
('Bazar das coisas'), 
('Americanas');
```
## inserindo estoque de produtos para cada loja

```sql
INSERT INTO lojas_produtos (loja_id, produto_id, estoque) VALUES
(4, 2, 500),
(4, 3, 30),
(1, 2, 10),
(4, 1, 5);
```

## atualizando registros

```sql
UPDATE fornecedores SET nome = 'Distribuidora XYZ' WHERE id = 3;

UPDATE produto SET preco = 2600.6, quantidade = 15 WHERE id = 1;

UPDATE produto SET preco = 125 WHERE fornecedor_id = 4;

UPDATE lojas_produtos SET estoque = 7 WHERE loja_id = 4 AND produto_id = 1;
```

## deletando registros

```sql
DELETE FROM produto WHERE id = 13;
```

## realizando consulta para visualização de dados

```sql
-- Count() FROM conta quantos registros há em uma tabela
-- * significa todas as linhas da tabela
SELECT COUNT(*) FROM produto;
-- DISTINCT COUNT(*) conta registros diferentes, ignorando linhas repetidas
-- Exibir atributos específicos de uma determinada tabela:
SELECT nome, preco, quantidade FROM produto;
-- Colocando uma condição:
SELECT nome, preco, quantidade FROM produto
WHERE preco > 1000;

-- Exibir somente o nome e a descrição dos produtos do fornecedor Livraria Demais da Conta
SELECT nome, descricao FROM produto
WHERE fornecedor_id = 4;
```