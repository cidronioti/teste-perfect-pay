
# Setup Docker Para Rodar o projeto

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/cidronioti/teste-perfect-pay.git
```

```sh
cd teste-perfect-pay/
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_ROOT=/var/www/teste-perfect-pay
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=teste_perfect_pay_db
DB_USERNAME=perfectpay
DB_PASSWORD=2swHtKgrbyfn3dy

BROADCAST_DRIVER=log
CACHE_DRIVER=redis
FILESYSTEM_DISK=public
QUEUE_CONNECTION=t_redis
QUEUE_OPTIONS="--queue=${REDIS_QUEUE} --tries=3"
SESSION_DRIVER=redis
SESSION_LIFETIME=120

SYS_USER=
SYS_UID=

INI_FILE=local.ini
NGINX_CONF_FILE=local.conf
DB_ROOT_PASSWORD=2swHtKgrbyfn3dy

MYSQL_CONF=my.cnf

SAAS_API_KEY=
SAAS_BASE_URL=https://sandbox.asaas.com/api/v3
```

Você precisa preencher essas variáveis com o nome de seu usuário linux e id
```sh
SYS_USER
SYS_UID
```

pra pegar seu id de usuário no linux execute no temirnal
```sh
id -u
```
Essa variavel do .env é referente a chave de api da Asaas sandbox você tabém precisa gerar e add
```sh
SAAS_API_KEY
```

Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost](http://localhost)
