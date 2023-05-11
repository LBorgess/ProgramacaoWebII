# Formulários

É o elemento utilizado para oferecer recursos de interatividade com os usuários, disponibilizando recursos em páginas web, permitindo dar origem ao preenchimento e o envio de dados para outras páginas e banco de dados.

O elemento `<form>` ifentifica os limites de um formulário dentro de uma página. Cada form representa uma estrutura única. Pode-se ter vários forms em uma única página, desde que devidamente agrupados.

Exemplo no arquivo `formulario.html`

## Propriedade *action*

Para que o conteúdo de um formulário seja processado, as informações deve ser repassadas para outra página, que geralmente é escrita em PHP, Java entre outras linguagens.

Na propriedade `action` deverá ser identificado o nome do arquivo que receberá estes dados, quando não se sabe para qual arquivo seja enviado, está propriedade pode ficar sem preenchimento. 

Exemplo no arquivo `formulario_cadastro.html`

## Propriedade *name*

A propriedade `name` é de suma importante para validação e controle
dos dados. Esta propriedade é imprescindível constar praticamente em
todos os elementos de um formulário, pois é através dela que
identificamos os campos para posteriormente realizarmos a leitura
utilizando alguma linguagem de programação, inclusive o formulário.

Exemplo no arquivo `formulario_name.html`

## Propriedade *method*

Para envio do conteúdo é preciso definir o método http que será
utilizado para a transação dos dados. A propriedade method aceita dois valores: **get** e **post**:

- GET: É utilizado quando os dados do formulário não tem a necessidade de ficar oculto ao usuário, pois as informações são visualizadas na URL quando o *submit* é acionado. Exemplo em `formulario_get.html`

- POST: Usando quando o formulário remete dados que devem ser ocultos e principalemnte enviados para banco de dados, sendo assim, as informações não será visualizadas na URL.. Exemplo em `formulario_post.html`