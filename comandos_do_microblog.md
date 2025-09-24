# Coamandos para o projeto Microblog

## Modelagem conceitual

## Criar o banco de dados
```sql
CREATE DATABASE microblog CHARACTER SET utf8mb4;
```
## Criar a tabela usuários
```sql
CREATE TABLE usuarios (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    tipo ENUM('admin', 'editor') NOT NULL
);
```
## Criar a tabela notícias
```sql
CREATE TABLE noticiais (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    resumo TEXT,
    imagem VARCHAR(50),
    datadodia DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    usuario_id INT NOT NULL,
    FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
);
```