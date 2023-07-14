# Estruturas de controle
## Expressão `if`

Uma das expressões mais utilizadas em qualquer linguagem de programação, pois basicamente na maioria das vezes, temos que realizar comparações, que devem resultar verdadeiro ou falso. Sintaxe: 
```php
if($expressao){
	// comando(s)
}
```

O(s) `comando` só será executado caso o resultado da expressão for verdadeira. 
Exemplo: `if.php`

## Expressão `if-else`

A expressão `if` trata apenas se a condição for verdadeira. Neste caso, pode-se tratar o resultador da condição falsa, usando `else`.  Ou seja, se o valor testado na condição `if`, senão, executa os comandos do `else`.
Exemplo: `if-else.php`

## Expressão `elseif`

A expressão `if-else` funciona muito bem quando a situação é "um ou outro", ou seja, somente dois resultados são permitidos, a expressão `elseif` permite identificar novas possibilidades na sequência de testes.
Exemplo: `elseif.php`

## Expressão `switch`

Pode ser utilizada como uma variante da combinação `if-elseif-else`,  é utilizado quando existe um grande número de valores para serem avaliados. Um exemplo de aplicação é programas com um menu de opções, onde o usuário informa a opção desejada e somente as instruções relacionadas ao bloco de comandos daquela opção é executada. Sintaxe:

```php
switch($expressao){
	case 1:
	// comandos
	break;
	case 2:
	// comandos
	break;
	default:
	// comandos
	break;
}
```
A instrução `default`é usada quando não encontra nenhum `case`como valor da opção desejada.
Exemplo: `switch.php`
