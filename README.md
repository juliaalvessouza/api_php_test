# Projeto de Blog com Autenticação JWT e Jobs em Laravel

Este é um projeto de blog com funcionalidades básicas como gerenciamento de posts, categorias, tags e comentários, implementado em **Laravel**. O projeto inclui **autenticação via JWT** para garantir a segurança das rotas e a execução de **jobs em segundo plano** para realizar tarefas como envio de e-mails.

## Funcionalidades

- Autenticação de usuários com JWT.
- CRUD de **Posts**, **Categorias**, **Tags** e **Comentários**.
- **Job** para envio de notificações após criação de um post.
- Proteção das rotas por **middleware JWT**.

## Tecnologias Utilizadas

- **Laravel** 8.x
- **JWT** para autenticação
- **MySQL** (ou outro banco de dados configurado)
- **PHP 8.x**
- **Jobs** e **Fila** para execução assíncrona

## Instalação

### 1. Clone o Repositório

Clone o repositório para o seu ambiente local:

```bash
git clone https://github.com/juliaalvessouza/api_php_test.git
cd api_php_test
