## Flib

Está é uma aplicação que buscar ser uma gerenciadora para as bibliotecas. Suas funções:

- **Cadastro de livros**
- **Cadastro de clientes**
- **Registro de locações**

## Requisitos:

- **PHP 8.3.1**
- **MySql 8.0.35**
- **Composer  2.6.6**
- **Node.JS 20.11**
- **Laravel 5.2.1**

## Configuração:
Após ter instalado todos requisitos, é necessario estar ativando algumas extensões no arquivo **php.ini** para o laravel funcionar corretamente. Entre na pasta onde você instalou o php, abra o arquivo "php.ini" no editor de sua preferência e ative as seguintes extensões:

- **extension=fileinfo**
- **extension=pdo_mysql**
- **extension=mysqli**
  
## Configuração do banco:
No editor de sua preferência abra o projeto e entre no arquivo **.env**.

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/558bdf09-68e6-4331-9c0f-7b4f50a42b94)

Mude as variaveis DB_USERNAME e DB_PASSWORD para a forma que você cadastrou na instalação do Mysql.

## Migrate:
Abra um prompt de comando dentro da pasta do projeto. Ex:

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/e8b46c86-e6b4-4c79-a06c-bc87dd948371)

Escreva o seguinte comando:
**php artisan migrate**

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/add0eae3-4c63-4163-9d2e-88c195608c5f)

Irá perguntar se você deseja criar um novo banco, escreva "yes" e aperte enter.

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/9830e8b7-a580-409f-94a9-fc4e86f4e111)

Quando estiver concluido, vai aparecer dessa forma.

Agora é possivel utilizar o site.

## Rodando o site:
Abra dois prompts de comando dentro da pasta do site e escreva os seguintes comandos:

**php artisan serve**

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/9f60f2a4-d379-4e54-95f0-8edd55f7912b)

**npm run dev**

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/9df01bca-53be-44dd-9841-ea16377c23c5)

Dara os seguintes resultados:

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/2faa0a9a-d6d8-4455-829c-30df7bb5f9fd)


![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/e156312c-4bd6-4050-8a49-ab7812687119)

para abrir o site acesse http://127.0.0.1:8000 no navegador de sua preferência ou de ctrl + click no link gerado ao rodar "php artisan serve".

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/6caebc06-75db-4d4d-89f9-1d012253e390)

## Telas

**Login**

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/e307ba44-3874-4a58-bc0a-cc4005a34283)

**Home**

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/535ba713-a5be-43d6-bdcc-9adabe4bf2f8)

**Clientes**

![image](https://github.com/lucas-araujo20/lucas-araujo20/assets/146901361/ce41fe93-7c06-4c40-ba27-a977094f9094)

**Livros**

**Espero que tenha ficado claro, bom proveito do site:)**
