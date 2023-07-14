# Expressões e operadores

Uma expressão é algo representando uma ação em particular de um operando e um ou mais operadores. Todas as instruções / linhas de código que envolvem algum valor, pode-se definir como expressões e operadores são sinais. Operandos, são as entradas de uma expressão, ou seja, as variáveis que contém os dados.

```php
$ano++   // $ano é um operando
$soma = $n1 e $n2 // São operandos
```

## Operadores aritméticos

-   `+`  - Adição;
-   `-`  - Subtração;
-   `*`  - Multiplicação;
-   `/`  - Divisão;
-   `%`  - Resto da divisão  

Em relação a string, o PHP possui um único operador, que é o operador de concatenação `.`
```php
$valor = 10
echo "O valor é " . $valor;
```

## Operadores de atribuição

-   `=`  - Atribuição simples;
-   `+=`  - Atribuição com adição;
-   `-=`  - Atribuição com subtração;
-   `*=`  - Atribuição com multiplicação;
-   `/=`  - Atribuição com divisão;
-   `%=`  - Atribuição com módulo;  
-   `.=`  - Atribuição com concatenação;

O único operador de atribuição do PHP é `=`. Este quando combinado com os operadores aritméticos e de uma string, pode reduzir o tamanho do código.
```php
$curso = 7;
$curso += 2;
echo $curso;
```

## Operadores de Incremento/Decremento 

Podem ser utilizados de duas formas:
- O incremento de uma variável soma uma unidade à uma variável e armazena o resultado na mesma;
- O decremento subtraí uma variável em uma unidade;
- Quando utilizado antes, retornar o valor da variável antes de incrementá-la ou decrementá-la;
- Quando utilizado depois, retornar o valor da variável já incrementando ou decrementando.

## Operadores lógicos
Os operadores lógicos trabalham com os valores completos, utilizando `true`ou `false`.

-   `and`  - "e" lógico;
-   `or`    - "ou" lógico;
-   `!`      - Negação / Inversão;
-   `&&`    - "e" lógico;
-   `||`    - "ou" lógico;

## Operadores de comparação
Os operadores de comparação são usados para comparar dois valores

-   `==`  - igual a;
-   `!=`    - diferente de;
-   `<>`      - diferente de;
-   `<`    - menor que;
-   `>`    - maior que;
-   `<=`    - menor ou igual a;
-   `>=`    - maior ou igual a;
