# Projeto Aula Fácil
Projeto beta do aulafacil
# Instalação (ambiente windows)
1. Baixar Xampp control panel (neste link:<a href="https://www.apachefriends.org/xampp-files/5.6.23/xampp-win32-5.6.23-0-VC11-installer.exe"> Xampp 32 bit </a>)
2. Baixar este projeto
3. Descompactar este projeto dentro da pasta htdocs localizado em C:\xampp\htdocs
4. Abrir o arquivo url.php dentro do projeto em aula-facil/config/url/url.php
5. Editar as linhas abaixo
<br>
```php
const URL_BASE = 'http://127.0.0.1/projetos/aulafacil-new/';
const URL_BASE_INTERNAL = 'C:/xampp/htdocs/projetos/aulafacil-new/';
```
<br>
por
```php
const URL_BASE = 'http://127.0.0.1/aula-facil/';
const URL_BASE_INTERNAL = 'C:/xampp/htdocs/aula-facil/';
```
<br>
Isso vai especificar o caminho correto do projeto referente a sua máquina.
<br>
6- Após isso acessar http://127.0.0.1/aula-facil/ e visualizar o projeto.