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