# Referência de comandos SQL para modelagem física

## Projeto: Fly by Night - Gerenciamento de Estoque
```sql
CREATE DATABASE flybynight_lucasaguiar CHARACTER SET utf8mb4;
```

```sql
CREATE TABLE fornecedores(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
);
```
```sql
    CREATE TABLE lojas(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(100) NOT NULL
    );
```
```sql
    CREATE TABLE produto(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        nome VARCHAR(100) NOT NULL,
        descricao TEXT,
        preco DECIMAL(10,2),
        quantidade INT NOT NULL,
        -- Na linha abaixo cria-se o campo "fornecedor_id" --
        fornecedor_id INT NOT NULL,
        -- Agora, com o comando "FOREIGN KEY", transforma-se o campo "forncedor_id" numa chave estrangeira. E "fornecedor_id" faz referência ao campo "id", da tabela "fornecedores" --
        FOREIGN KEY (fornecedor_id) REFERENCES fornecedores(id)
    );
```
```sql

```
