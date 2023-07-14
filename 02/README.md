# Sintaxe básica do PHP
O PHP tem um sintaxe muito simples, que facilita a organização dos programas a serem desenvolvidos. Outro ponto é que os códigos em PHP são embutidos no HTML, facilitando muito a análise de possíveis erros nos programas desenvolvidos. 
Todo código PHP fica dentro de uma tag especial dele, para diferenciar do HTML 
``` php
<?php 
// código PHP aqui 
?> 
```
Também pode-se misturar isso com o HTML normalmente. O que for da tag PHP será executado pelo servidor. O que não for, vai ser enviado para o navegador.
``` php
<h1> HTML Aqui </h1>
<?php 
// código PHP aqui 
?> 
<p> Mais HTML </p>
```
- Exemplo para acessar o ano atual, é uma função que tem como argumento o formato da saída, pode-se fazer da seguinte forma:
``` php
<?php 
print date('Y'); 
?> 
```
## Separação das instruções
- Em PHP, todo comando deve terminar com ponto-e-vírgula;

## Comentários
O comentário de linha pode começar com `#` ou com `//` e termina no final da linha ou com a tab de fechamento `?`, e o comentário de múltiplas linhas começa com `/*` e termina com `*/`
Exemplo: `teste_comentario.php`

## Tipos de dados
O PHP tem um conjunto amplo de dados, dentre eles, os tipos mais comuns, **boolean, integer, float, string ** e **array**

- **Boolean** : Suporta apenas dois valores, *true* e *false*;
- **Integer** : Representa qualquer número inteiro;
- **Float** : Representa qualquer número com casa decimal;
- **String** : Representa uma sequência de caracteres tratados como um grupo (arryas), delimitados por aspas simples ou duplas.

## Tipos de dados compostos
Permitem múltiplos itens do mesmo tipo agregador em uma única entidade administrativa.

- **Array** : É formalmente definida como uma coleção indexada de valores de dados;
- **Objetos** : Conceito central da programação orientada a objetos, o qual deve ser explicitamente declarado e instanciado na programação.

---
## Type Casting

Ao indicarmos um operador de tipo antes da variável a ser impressa, podemos modificar seu tipo inicial.

| Operadores   | Conversão   |
|:------------:|:-----------:|
| (array)      | Array       |
| (bool) ou (boolean) | Boolean |
| (int) ou (integer) | Integer |
| (object) | Object |
| (real) ou (double) ou (float) | Float |
| (string) | String |

**Exemplo:**
```php
$valor = (double)968 // $valor = 97.0
$custo = (int)23.53  // $custo = 23
```
## Exibindo dados no navegador
O PHP oferece diversas formas para exibir informações no navegador, são exemplo:

- `print()`: Imprime dados para o navegador, retornando uma resposta se conseguiu exibir ou não;
- `echo()` : Também imprime dados para o navegador, porém sem retorno de sucesso;
- `printf()`: Permite utilizar texto estático e dinâmico armazenado dentro de variáveis, usando formatação de casas decimais por exemplo;
- `sprintf()`: É o mesmo do `printf()`, mas sua saída é para uma variável.

Exemplo: `print.php`

## Tabela de padrões
-   `%`  - Um caractere por cento. Não é requerido nenhum argumento.
-   `b`  - O argumento é tratado com um inteiro, e mostrado como um binário.
-   `c`  - O argumento é tratado como um inteiro, e mostrado como o caractere ASCII correspondente.
-   `d`  - O argumento é tratado como um inteiro, e mostrado como um número decimal com sinal.
-   `e`  - o argumento é tratado como notação científica (e.g. 1.2e+2). O especificador de precisão indica o número de dígitos depois do ponto decimal desde o PHP 5.2.1. Em versões anteriores, ele pegava o número de dígitos significantes (ou menos).
-   `u`  - O argumento é tratado com um inteiro, e mostrado como um número decimal sem sinal.
-   `f`  - O argumento é tratado como um float, e mostrado como um número de ponto flutuante (do locale).
-   `F`  - o argumento é tratado como um float, e mostrado como um número de ponto flutuante (não usado o locale). Disponível desde o PHP 4.3.10 e PHP 5.0.3.
-   `o`  - O argumento é tratado com um inteiro, e mostrado como un número octal.
-   `s`  - O argumento é tratado e mostrado como uma string.
-   `x`  - O argumento é tratado como um inteiro, e mostrado como um número hexadecimal (com as letras minúsculas).
-   `X`  - O argumento é tratado como um inteiro, e mostrado como um número hexadecimal (com as letras maiúsculas).

## Identificação das variáveis
O PHP considera as variáveis automaticamente dependendo das circunstâncias nas quais estão referenciadas, ou seja, identifica seu tipo de acordo com o valor atribuída de forma dinâmica.
Exemplo: `tipos.php`

## Variáveis
Uma variável começa com o símbolo de dólar `$`, que é então seguido pelo seu nome, o qual deverá começar com uma letra ou um *underscore* e pode ser números, letras e underscore.

- PHP é *case sensitive*, ou seja, letras maiúsculas e minúsculas são diferentes;
- Ao contrário de outras linguagens, em PHP não é necessário declarar as variáveis que serão usadas, nem seu tipo;

## Escopo das variáveis
Podemos declarar as variáveis em qualquer lugar no script PHP, mas a sua localização influencia no domínio em que pode ser acessado, esse domínio é conhecido como escopo.

### Variáveis locais
- São aquelas declaradas dentro do *script* ou das funções;
Exemplo: `local.php`

### Parâmetros da função
- São declaradas depois do nome da função e entre parênteses.
Exemplo: `parametro.php`

### Variáveis globais
- Podem ser acessadas em qualquer parte do sistema.
Exemplo: `global.php`

### Variáveis estáticas
- Supondo uma variável declarada dentro de uma função, quando esta função é fechada a variável não perde o seu valor;
Exemplo: `estatica.php`

### Variáveis super globais
- São nativas e sempre estão disponível em todos os escopos.
- Não há necessidade de fazer a declaração para acessá-las;
- São variáveis super globais:
`$GLOBALS`, `$_SERVER`, `$_GET`, `$_POST`,`$_FILES`,`$_COOKIE`, `$_SESSION`, `$_REQUEST` e `$_ENV`
Exemplo: `globais.php`

### Constantes
- É um identificador para um valor único, ou seja, esse valor não pode ser mudado durante a execução. Utilizando boas práticas, as constantes são declaradas sempre em maiúsculas. A função `define()` registra uma constante a partir de um nome.
Exemplo: `constante.php`