# Blog da Ana ✍

Um blog simples e funcional desenvolvido com **Laravel** e o motor de templates **Blade**, que permite a publicação de postagens categorizadas, gerenciamento de conteúdo via painel administrativo, e recursos de autenticação de usuários.

## Funcionalidades

### Geral:
- Página principal com exibição de postagens.
- Visualização de postagens por **categoria**.
- Visualização de postagens por **autor**.

### Área Administrativa (com AdminLTE):
- Cadastro, edição, visualização e exclusão de **postagens**.
- Gerenciamento completo de **categorias**.
- Criação de **usuários** e autenticação.
- Edição de **perfil** e **alteração de senha**.

## Tecnologias

- [Laravel](https://laravel.com/) (Blade Templates)
- [AdminLTE](https://adminlte.io/) para o painel administrativo
- MySQL / 
- HTML5, CSS3, JavaScript

##  Pré-requisito:
- Xampp (https://www.apachefriends.org/)
- Mysql Workbench (https://dev.mysql.com/downloads/workbench/)
- Git (https://git-scm.com/)
- GitHub Desktop (https://desktop.github.com/)
- Composer (https://getcomposer.org/download/)
- Visual Studio Code (https://code.visualstudio.com/)
- Instalar no Visual Studio Code a extensão Laravel Extension Pack (https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-extension-pack)
- Instalar no Visual Studio Code a extensão Material Icon Theme (https://marketplace.visualstudio.com/items?itemName=PKief.material-icon-theme)
- Node (https://nodejs.org/) OBS.: Não esqueça de reiniciar o computador

## Como executar o projeto

1) Clonar o repositório do GitHub
Vá até o projeto no GitHub que deseja clonar e clique no botão verde escrito "<> Code" em seguida vai abrir um submenu e você deve clicar em "Open with GitHub Desktop". O GitHub Desktop vai abrir, em sua máquina, perguntando onde deve clonar o repositório. Clone no diretório "c:/xampp/htdocs/"

2) Abra o projeto no Visual Studio Code
   
4) Crie o arquivo .env com base no arquivo .env.example
Abra o terminal e execute o código entre aspas "copy .env.example .env"

5) Mude o nome do banco no arquivo .env
Altere esta parte do código para ficar igual esta abaixo.
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=blog
- DB_USERNAME=root
- DB_PASSWORD=

5) Instale as depedências
Abra o terminal e execute o código entre aspas "composer install"

6) Gere a APP_KEY (chave de criptografia)
Abra o terminal e execute o código entre aspas "php artisan key:generate"

7) Rode as migrations (criação das tabelas)
Abra o terminal e execute o código entre aspas "php artisan migrate"

8) Rode os SEEDs (inserção dos dados nas tabelas)
Abra o terminal e execute o código entre aspas "php artisan db:seed"
