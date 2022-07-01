
# TiSaúde Desafio

Este desáfio foi realizado para a vaga de desenvolvedor PHP Pleno na empresa TiSaúde. Para o desenvolvimento foi urilizado a linguagem de programação **PHP na versão 8.0
.2**, o framework **Laravel na versão 9** e o **banco de dados MySQL**.

## Passo a Passo
1. Clone o repositório;
2. Rode no terminal o comando <em>composer install</em>;
3. Rode no terminal o comando <em>cp .env.example .env</em>;
4. No arquivo .env configure o banco de dados;
5. Rode no terminal o comando <em>php artisan key:generate</em>;
6. Rode no terminal o comando <em>php artisan migrate:fresh --seed</em>;
7. Rode no terminal o comando <em>php artisan jwt:secret</em>;
8. Rode no terminal o comando <em>php artisan serve</em>;
9. Importe o documento json exportado pelo Insominia.
