<html>
	<head>
	
	</head>
	
	<body>
		<h4>Configurando usuário</h4>
		<ul>
			<li>git config --list</li>
			<li>git config --global user.name "Exemplo"</li>
			<li>git config --global user.email "exemplo@email.com"</li>
		</ul>
		<h4>Criando um repositório local</h4>
		<ul>
			<li>git init</li>
			<li>Cria sempre com a branch master, a branch master é a ramificação principal do projeto.</li>
			<li>A branch master contem a versão final do software, a partir dela surgirão outras ramificações.</li>
		</ul>
		
		<h4>Adicionando alterações</h4>
		<ul>
			<li>git status -> Mostra o estado de um determinado arquivo</li>
			<li>git add nomearquivo.exemplo -> Adiciona um arquivo ao rastreio do git</li>
			<li>git add . ou git add --all ou git add -A -> Adiciona todos os arquivos do projeto.</li>
			<li></li>
		</ul>
		
		<h4>Salvando alteraçãoes</h4>
		<ul>
			<li>git commit vai salvar uma nova versão no banco de dados local do git</li>
			<li>git commit -m Para adicionar um comentário.</li>
			<li></li>
		</ul>
		
		<h4>Existem 3 estados do git<h4>
		<ul>
			<li>Untracked -> não mapeados aindas pelo git</li>
			<li>Stage area -> adicionados, preparados, etc</li>
			<li>Commitado-> Salvos.</li>
		</ul>
		
		<h4>Visualizando alterações</h4>
		<ul>
			<li>git diff para visualizar as diferenças no ambiente de trabalho, e a versão estável.</li>
			<li>git diff nomearquivo.txt para visualizar no arquivo especifico.</li>
		</ul>
	</body>
</html>