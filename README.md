# DesafioTecnico
Desafio 1:
1. Escreva um algoritmo para encontrar os números faltantes de um array:
Input : array(1,2,3,6,7,8);
Output : array([3] => 4, [4] => 5);
2. Escreva um algoritmo para encontrar três números consecutivos de um array que
somados o resultado é igual a zero:
Input : array(-1,0,1,2,-1,-4);
Output : array([0] => -1 + 0 + 1 = 0);0
3. Escreva um algoritmo para encontrar três números consecutivos de um array que
somados o resultado é igual a um outro número fornecido:
Input : (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16));
Output : array(
[0] => 2 + 7 + 7 = 16,
[1] => 7 + 1 + 8 = 16
);

4. Escreva um algoritmo para encontrar um único número de um array que não se
repita duas vezes:
Input : array(5, 3, 4, 3, 4);
Output : array
(
[0] => 5,
[1] => 3,
[2] => 4,
[3] => 3,
[4] => 4,
);
Single Number: 5
5. Escreva um algoritmo para encontrar um único número de um array onde cada
número repete três vezes, exceto um:
Input : array(5, 3, 4, 3, 5, 5, 3);
Output : array
(
[0] => 5,
[1] => 3,
[2] => 4,
[3] => 3,
[4] => 5,
[5] => 5,
[6] => 3,
);
Single Number: 4

6. Escreva um algoritmo que receba um numero e que apartir deste numero construa
um array com a sequencia fibonacci e com o numero de elementos sendo o
informado:
Input : 6;
Output : array (1, 1, 2, 3, 5, 8);

Desafio 2:
Criar um sistema web que permita consultar um endereço via cep, armazenar este registro
e demonstrar os registros armazenados.
a busca do endereço deve ser realizada em javascript via requisição para a api
disponibilizada no site https://viacep.com.br/
Os dados podem ser armazenados em qualquer formato.
Dentre as opções de ordenação devem conter as opções crescente e decrescente dos
campos cidade, bairro e estado.
