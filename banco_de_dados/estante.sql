-- Cria o banco de dados chamado 'estante'
CREATE DATABASE estante;

-- Seleciona o banco de dados 'estante' para usar nas operações seguintes
USE estante;

-- Cria a tabela 'Usuarios'
CREATE TABLE Usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único do usuário (chave primária, autoincrementa)
    email VARCHAR(255) UNIQUE NOT NULL, -- E-mail do usuário (único e não nulo)
    senha VARCHAR(255) NOT NULL, -- Senha do usuário (não nula)
    foto_perfil LONGBLOB, -- Caminho ou URL da foto de perfil do usuário
    nome VARCHAR(255) -- Nome do usuário
);

-- Cria a tabela 'Livros'
CREATE TABLE Livros (
    id_livro INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único do livro (chave primária, autoincrementa)
    titulo VARCHAR(255) NOT NULL, -- Título do livro (não nulo)
    autor VARCHAR(255) NOT NULL, -- Autor do livro (não nulo)
    sinopse TEXT, -- Sinopse do livro
    categoria VARCHAR(255), -- categoria do livro
    capa VARCHAR(255) LONGBLOB  -- Caminho ou URL da imagem da capa do livro
);

-- Cria a tabela 'Categorias'
CREATE TABLE Categorias (
    id_categoria INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único da categoria (chave primária, autoincrementa)
    nome_categoria VARCHAR(255) NOT NULL -- Nome da categoria (não nulo)
);

-- Cria a tabela 'Livros_Categorias' para o relacionamento muitos-para-muitos entre livros e categorias
CREATE TABLE Livros_Categorias (
    id_livro INT, -- Identificador do livro (chave estrangeira)
    id_categoria INT, -- Identificador da categoria (chave estrangeira)
    PRIMARY KEY (id_livro, id_categoria), -- Chave primária composta das colunas id_livro e id_categoria
    FOREIGN KEY (id_livro) REFERENCES Livros(id_livro) , -- Chave estrangeira referenciando 'Livros'
    FOREIGN KEY (id_categoria) REFERENCES Categorias(id_categoria), -- Chave estrangeira referenciando 'Categorias'
);

-- Cria a tabela 'Favoritos' para armazenar os livros favoritados pelos usuários
CREATE TABLE Favoritos (
    id_favorito INT AUTO_INCREMENT PRIMARY KEY, -- Identificador único do favorito (chave primária, autoincrementa)
    id_usuario INT, -- Identificador do usuário que favoritou o livro (chave estrangeira)
    id_livro INT, -- Identificador do livro que foi favoritado (chave estrangeira)
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id_usuario), -- Chave estrangeira referenciando 'Usuarios'
    FOREIGN KEY (id_livro) REFERENCES Livros(id_livro) -- Chave estrangeira referenciando 'Livros'
);
INSERT INTO estante (titulo, autor, sinopse, categoria, capa) VALUES ('Antes de Partir','Charlie Donlea','As pessoas que amamos ficam conosco para sempre... às vezes de maneiras surpreendentes. Um ano depois do avião em que o marido viajava desaparecer no oceano Pacífico, Abby Gamble ainda tenta superar a dor da perda. O relacionamento entre ela e Ben era incondicional, profundo, e se fortaleceu ainda mais ao terem de lidar com uma tragédia anos atrás. Abby sabia que Ben iria querer que ela seguisse em frente. Seu primeiro passo foi entrar de cabeça no trabalho, dedicando-se a sua empresa de cosméticos... até que ela conhece Joel, um médico cujo passado é tão repleto de cicatrizes quanto o dela. Joel nunca se perdoou por uma decisão que tomou ainda na infância, que resultou numa fatalidade. Esse evento o fez direcionar todas as suas escolhas de futuro para se redimir do passado. Quando conhece Abby, ele decide se dar uma nova chance, mas Abby ainda resiste à ideia de deixar a história com Ben para trás. No entanto, desde que o avião caiu, Ben busca uma maneira de voltar para Abby. De alguma forma, ele precisa reencontrar a esposa novamente.','Romance',''),

('Armadilhas do Amor','Christina Lauren','Relacionamentos são parecidos com casas: sem um bom alicerce, desmoronam” Carey Duncan é o braço direito e superassistente do famoso casal de design e reforma de casas, Melissa e Rusty Tripp. Em dez anos, ela os ajudou a construir um verdadeiro império, e agora estão à beira do estrelato, com um novo programa de TV e o lançamento de um livro. Há apenas um problema: o casal favorito das câ¬meras não se suporta. James McCann é um gênio dos números e foi contratado por Rus¬ty como engenheiro para as obras de reformas, mas o trabalho não é nada do que ele pensou. E o desafio que surge é outro: tanto ele quan¬to Carey devem fazer uma turnê com os Tripp e evitar que tudo vá pelos ares. Afinal, nenhum deles pode se dar ao luxo de desistir. Carey precisa do emprego e os produtores prometeram a James o melhor cargo da sua vida se conseguirem manter o casal no caminho certo por mais algumas semanas. Uma tarefa que parece impossível... Enquanto viajam com os Tripp, Carey e James prometem tra¬balhar em conjunto para manter os segredos dos chefes ocultos e os empregos seguros. Mas eles vão passando muito tempo juntos e... se entre os Tripp só rolam brigas e confusão, entre Carey e James as faíscas não param de surgir.','Romance',''),

('Uma longa caminhada até a água','Linda Sue Park','O livro narra duas histórias, em diferentes épocas, de dois jovens nascidos no Sudão: Salva Dut, um menino que passou sua infância fugindo da guerra, na década de 1980, e que consegue se refugiar nos Estados Unidos; e Nya, uma menina que em 2008 ainda precisa caminhar horas e horas todos os dias até a lagoa para buscar água para sua família. Com uma mensagem de esperança: que até mesmo num país cheio de problemas, sobreviventes determinados podem encontrar o futuro pelo qual anseiam','ficção',''),

('O Batalhão Maldito',' Sven Hassel','O 999 era um batalhão amaldiçoado. Ali se encontrava a escória do Exército Nazista: uma legião de marginais formada por criminosos degenerados, sádicos psicopatas e covardes cruéis. Uma forma especial de tortura aperfeiçoada pelo Reich destruía o que restava de suas almas até transformá-los em fanáticos do regime. Um bando de chacais famintos atirados numa sangrenta cruzada de exterminação. O ódio e o terror eram os seus deuses - e a morte sua amante. Quem formava o 999 estava além de qualquer esperança de salvação. Eram todos feras impiedosas e a morte seu único futuro...','Ficção',''),


('Saberes Pedagogicos e Atividade','Selma Garrido Pimenta','Este livro expõe ao debate algumas pesquisas na área da pedagogia. Os temas abordados colaboram para dotar os professores de perspectivas de análise que os ajudem a compreender os contextos histórico/sociais/organizacionais nos quais se dá sua atividade docente.','Didáticos',''),

('Formacao Docente e Profissional','Francisco Imbernon','O professor deve ter um papel mais ativo no planejamento e reformulação de estratégias e programas educacionais, para educar na vida e para a vida.','Didáticos',''),

('Formacao Permanente do Professor','Francisco Imbernon','O contexto político e social é um elemento imprescindível na formação e chega a condicionar sua natureza. A formação não pode ser desvinculada do conceito de formação docente, da situação trabalhista e da carreira docente, das instituições educacionais, do ensino, da análise do atual alunado e da infância e adolescência nas diversas etapas em uma escolarização total da população. Deve ser, portanto, necessariamente unida ao contexto de trabalho. Este livro desenvolve um conceito de uma nova formação permanente do professorado, baseado num clima de colaboração, numa organização escolar minimamente estável, capaz de apoiar a formação, e na aceitação da diversidade entre os professores, uma diversidade que exige uma contextualização. Destina-se a estudantes, professores e formadores do professorado, e a todos que desejam informa-se sobre as novas tendências da formação docente.','Didáticos',''),

('Um Deus Muito Humano','Frei Betto','De revolucionário a libertador; de mago a carismático; de profeta a fundador de uma Igreja: não importa como o encaremos, é indiscutível que Jesus Cristo marcou a nossa história como nenhum outro homem. O inconsciente coletivo do Ocidente gira muito em torno dessa figura enigmática, que surgiu como líder de um grupo dissidente do judaísmo, foi perseguido e morto na cruz, para então dar origem à religião que transformou o mundo para sempre. Frei Betto faz uma reflexão contemporânea para mostrar que Cristo é um Deus que se assemelha a nós, humanos, em tudo, exceto no egoísmo. Ele continua a ser o nosso paradigma de ser humano, sobretudo por ter centrado sua mensagem no amor e assegurado, com sua ressureição, que a vida tem mais força que a morte.','Religioso',''),

('A Conspiração de Gênesis 6','Gary Wayne','Há gigantes entre nós, passando amplamente despercebidos, com a intenção de executar um plano secreto para escravizar toda a humanidade. Eles podem não se parecer com gigantes hoje, mas suas linhagens remontam aos Nephilim — a prole de anjos que se acasalaram com mulheres humanas — descritos em Gênesis 6, quando gigantes vagavam pela terra. Gary Wayne, autor de The Genesis 6 Conspiracy: How Secret Societies and the Descendants of Giants Plan to Enslave Humankind, detalha o papel dos Nephilim modernos no plano de Satanás de instalar o Anticristo no Fim dos Dias. Quando Deus expulsou o anjo Lúcifer e seus seguidores do céu, Lúcifer pôs em ação um esquema para garantir que os Nephilim sobrevivessem. Por quê? Porque das linhagens desses Nephilim o Anticristo virá. Para manter seu plano vivo, Satanás alistou a lealdade de sociedades secretas como os maçons, os templários e os rosacruzes para conspirar no ensino de uma teologia e uma história do mundo que é contrária à bíblica. Esta Conspiração de Gênesis 6 marcha em direção à Grande Tribulação, quando a lealdade da Geração Terminal - esta geração - será testada. A Bíblia, junto com muitas outras fontes antigas, registra claramente a existência de gigantes. Wayne fornece citações abundantes de muitos membros da sociedade, junto com extensas referências bíblicas, outras referências religiosas e material histórico para reforçar sua contenção. O que ele descobre irá surpreendê-lo - e irá desafiá-lo a se preparar para o cumprimento das promessas de Deus.','Religioso',''),

('666 - O Limiar do Inferno','Jay Anson','O casal Keith e Jennifer volta pra casa após curtas férias e, atrás de seu quintal percebe uma casa que não estava lá antes: um casarão vitoriano que foi transportado até lá enquanto viajavam. Acontece que a casa não é necessariamente abençoada: ao investigá-la, Keith descobre que o antigo morador assassinou a amante e o cunhado lá dentro. Mas a casa causa certas sensações estranhas nele, justificadas conforme o desenrolar da história. Uma série de acontecimentos estranhos se inicia.','Suspense e Terror','')
