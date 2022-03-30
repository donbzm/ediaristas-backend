## Projeto sistema administrativo da plataforma E-Diaristas

Desenvolvido no curso multi-stack da Treinaweb

### Instalando o projeto

#### Clonar o Repositório

```
git clone https://github.com/donbzm/ediaristas-backend.git

```

#### Instalar as dependências

```
composer install
```

Ou em ambiente de desenvolvimento

```
composer update
```

#### Criar arquivo de configurações de ambiente

Copiar o arquivo de exemplo `.env.exemple` para `.env` na raiz do projeto
Configurar os detalhes da aplicação e conexão com o Banco de Dados

#### Criar a estrutura no banco de dados

```
php artisan migrate
```

#### Criar o usuário admin

```
php artisan db:seed
```

Usuário criado: admin@admin.com
Senha: admin

#### Iniciar o servidor de desenvolvimento

```
php artisan serve
```
