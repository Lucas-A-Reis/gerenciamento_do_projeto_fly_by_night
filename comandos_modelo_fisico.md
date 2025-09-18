# Referência de comandos SQL para modelagem física

## Projeto: Fly by Night - Gerenciamento de Estoque
```sql
CREATE DATABASE flybynight_lucasaguiar CHARACTER SET utf8mb4;
```

```sql
CREATE TABLE fornecedores(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL
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
    CREATE TABLE lojas_produtos(
        loja_id INT NOT NULL,
        produto_id INT NOT NULL,
        estoque INT NOT NULL,

        -- criando uma chave primária composta --
        PRIMARY KEY(loja_id, produto_id),
        -- se na tabela de lojas uma loja for excluída, aqui na tabela lojas-produtos todos os registros de estoque desta loja excluída também serão excluídos --
        FOREIGN KEY (loja_id) REFERENCES lojas(id) ON DELETE CASCADE,
        -- Se um produto está sendo usado em um registro de estoque, não podemos permitir a exclusão [este já é o padrão]
        FOREIGN KEY (produto_id) REFERENCES produto(id) ON DELETE RESTRICT
    );
```
