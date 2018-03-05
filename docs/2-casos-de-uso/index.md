# Casos de uso

## 1. Diagrama de casos de uso

**Instruções do professor**: Insira abaixo o diagrama com os casos de uso do seu sistema. A imagem abaixo é somente um exemplo.

![Caso de uso principal](CASO-DE-USO-HOME.png)

## 2. Especificação dos casos de uso

**Instruções do professor**: Para cada caso de uso, criar as tabelas com a especificação do caso de uso. Siga o exemplo dado abaixo:

### 2.1. Caso de uso **BUSCAR DELEGACIAS PRÓXIMAS**

| Campo          | Informação        |
|---|---|
| Identificador: | UC01              |
| Nome:          | Buscar delegacias |
| Atores:        | Interessado em saber localização das delegacias  |
| Sumário:       | Busca delegacias próximas de sua localização |

| Fluxo Principal |
|---|
| 1) Usuário clica na opção de buscar delegacias. |
| 2) O sistema recupera as informações de localização através da API do Google.               |
| 3) Usuário aplica os filtros necessários, se deseja as delegacias comuns, somente para mulheres ou todas.|
| 4) O sistema apresenta as delegacias de acordo com o filtro mais próximas de seu localização. |

| Fluxo Alternativo (2a): O sistema não encontra a localização. |
|---|
| 1) O sistema informa que não conseguiu recuperar as informações de localização. |
| 2) Sistema informa que talvez o usuario tenha que permitir ao site que obtenha sua localização. |
| 3) Usuário checa se a opção está ativada. |
| 4) Volta ao passo (2) do fluxo principal. |

### 2.2. Caso de uso **ENVIAR MENSAGEM SOS**

| Campo          | Informação        |
|---|---|
| Identificador: | UC02              |
| Nome:          | Enviar mensagem SOS |
| Atores:        | Vitima do ataque  |
| Sumário:       | Envia email de socorro |

| Fluxo Principal |
|---|
| 1) Usuário clica na opção de enviar mensagem de socorro. |
| 2) O sistema apresenta um formulário com as informações a serem preenchidas.        |
| 3) Usuário preenche os campos com suas informações e o email de quem quer que recebe a mensagem.|
| 4) O sistema envia a mensagem de socorro ao contato e apresenta uma mensagem de concluido com sucesso. |

| Fluxo Alternativo (2a): O sistema não consegue enviar o email. |
|---|
| 1) O sistema informa que não conseguiu enviar o email. |
| 2) Sistema informa que talvez o email do destinatário esteja incorreto. |
| 3) Usuário checa se a email está correto. |
| 4) Volta ao passo (2) do fluxo principal. |


### 2.1. Caso de uso **REGISTRAR CHAMADO**

| Campo          | Informação        |
|---|---|
| Identificador: | UC01              |
| Nome:          | Registrar chamado |
| Atores:        | Membro do Help Desk |
| Sumário:       | Registra um novo chamado no sistema |

| Fluxo Principal |
|---|
| 1) O membro do help desk seleciona a opção **Registro de novo chamado** e informa o CPF do cliente. |
| 2) O sistema recupera as informações do cliente pelo CPF.                   |
| 3) O sistema apresenta as informações do cliente e o formulário para o registro do chamado. |
| 4) O membro do help desk informa o tipo de chamado e preenche o campo descrição com o relato do cliente. |
| 5) O sistema registra o chamado e informa que a operação foi bem-sucedida. |

| Fluxo Alternativo (2a): O sistema não encontra as informações do cliente pelo CPF. |
|---|
| 1) O sistema informa que não conseguiu recuperar as informações pelo CPF e apresenta a opção de cadastrar o cliente. |
| 2) O membro do help desk preenche o formulário de cadastro do cliente. |
| 3) O sistema registra os dados do cliente. |
| 4) Volta ao passo (3) do fluxo principal. |

**Instruções do professor**: As tabelas acima mostram um exemplo de especificação de **um único caso de uso**. Lembre-se de especificar cada um dos casos de uso.


