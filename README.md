 🛍️ Marketplace Connector API

[![PHP 8.3](https://img.shields.io/badge/PHP-8.3-777BB4?logo=php)](https://www.php.net/releases/8.3/en.php)
[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?logo=laravel)](https://laravel.com)
[![License](https://img.shields.io/github/license/HenriqueCCicero/marketplace-connector)](LICENSE)
[![Sail](https://img.shields.io/badge/Development-Sail-38B2AC)](https://laravel.com/docs/sail)

Sistema de integração entre marketplaces e HUBs para gestão de anúncios, utilizando Clean Architecture e padrões de design avançados.

## ✨ Funcionalidades Principais

- Integração bidirecional de anúncios com marketplaces
- Gestão de estados com padrão State Machine
- Processamento assíncrono de jobs com Laravel Horizon
- Monitoramento completo com Laravel Telescope
- Arquitetura limpa e desacoplada

## Postman - Rotas
- [Postman](https://www.postman.com/docking-module-cosmologist-72562827/marketplace-connector/overview) : Acesse o postman localmente para testar os endpoints


## ⚙️ Pré-requisitos

- Docker Engine ([Instalação](https://docs.docker.com/engine/install/))
- Docker Compose v2+ ([Instalação](https://docs.docker.com/compose/install/))
- PHP 8.3 ([Guia](https://www.php.net/releases/8.3/en.php))
- Composer ([Download](https://getcomposer.org/download/))

## 🚀 Primeiros Passos

### Clone o repositório 
```bash
git clone git@github.com:https://github.com/HenriqueCCicero/marketplace-connector.git

# Acesse a pasta
cd marketplace-connector

# Instalar dependências
composer install

# Configurar ambiente
cp .env.example .env

# Configurar alias (adicionar ao seu .bashrc/zshrc)
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

# Inicializar containers
sail up -d

# Instalar dependências frontend (se necessário)
sail npm install

# Configurar aplicação
sail artisan key:generate
sail artisan migrate

# Iniciar horizon
sail artisan horizon
