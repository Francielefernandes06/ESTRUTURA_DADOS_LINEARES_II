
---

# 📚 Estruturas de Dados Lineares II em PHP  

Este projeto implementa diversas estruturas de dados lineares em PHP, com foco na organização e manipulação eficiente de informações. Cada estrutura é implementada usando conceitos de **Orientação a Objetos**, proporcionando flexibilidade e reutilização de código.  

---

## 🚀 Funcionalidades  
O projeto inclui as seguintes estruturas de dados:  

1. **Fila (Queue)**  
   - **FIFO (First In, First Out)**: O primeiro elemento a entrar é o primeiro a sair.  
   - **Operações**: Enfileirar (`enqueue`), Desenfileirar (`dequeue`) e Visualizar o estado atual.  

2. **Pilha (Stack)**  
   - **LIFO (Last In, First Out)**: O último elemento a entrar é o primeiro a sair.  
   - **Operações**: Empilhar (`push`), Desempilhar (`pop`) e Visualizar o estado atual.  

3. **Lista Duplamente Encadeada**  
   - Cada nó contém ponteiros para o próximo e o anterior, permitindo navegação bidirecional.  
   - **Operações**: Inserção no início e no fim, Remoção e Visualização do estado atual.  

4. **Lista Simplesmente Encadeada**  
   - Cada nó contém um ponteiro apenas para o próximo elemento.  
   - **Operações**: Inserção, Remoção e Visualização do estado atual.  

5. **Lista de Prioridade**  
   - Cada elemento possui uma prioridade associada, e a remoção é feita com base na prioridade.  
   - **Operações**: Inserção com prioridade, Remoção do elemento de maior prioridade e Visualização do estado atual.  

---

## 🛠️ Tecnologias Utilizadas  
- **PHP** 8.x  
- Estruturas de Dados Lineares  
- Orientação a Objetos  

---

## 📂 Estrutura do Projeto  
```
|-- lista/
|   |-- ListaDePrioridade.php          
|   |-- mainListaDePrioridade.php      
|   |-- ListaDuplamenteEncadeada.php
|   |-- mainListaDuplamenteEncadeada.php
|   |-- ListaDuplamente.php
|   |-- mainListaDuplamente.php
|   |-- ListaSimplesmenteEncadeada.php 
|-- pilha/
|   |-- Pilha.php                    
|   |-- mainPilha.php                    
|-- fila/
|   |-- Fila.php 
|   |-- mainFila.php 
|-- index.php
|-- Processo.php  
|-- NoComDuplaLigacao.php                            
|-- NoComUnicaLigacao.php                            
|-- README.md                         
```

---ListaDuplamente

## 📘 Como Utilizar  
1. **Pré-requisitos:**  
   - PHP 8.x instalado na máquina.  
2. **Clone o repositório:**  
```bash
git clone https://github.com/Francielefernandes06/ESTRUTURA_DADOS_LINEARES_II
cd ESTRUTURA_DADOS_LINEARES_II
```
3. **Execute o projeto:**  
```bash
php index.php
```

---


## ⚙️ Como Funciona  
- **Fila (Queue)**: Utiliza o conceito de FIFO, onde o primeiro a entrar é o primeiro a sair.  
- **Pilha (Stack)**: Utiliza o conceito de LIFO, onde o último a entrar é o primeiro a sair.  
- **Lista Duplamente Encadeada**: Cada nó possui ponteiros para o próximo e o anterior, permitindo navegação bidirecional.  
- **Lista Simplesmente Encadeada**: Cada nó contém um ponteiro apenas para o próximo elemento
- **Lista de Prioridade**: Cada elemento possui uma prioridade associada, e a remoção é feita com base na prioridade.


---

## ✅ Status do Projeto  
 
- 🟢 Fila (Queue)
- 🟢 Pilha (Stack)
- 🟢 Lista de Prioridade
- 🟢 Lista Duplamente Encadeada
- 🟢 Lista Simplesmente Encadeada

---

