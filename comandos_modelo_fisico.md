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
