<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Portfólio Dev</title>
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <div class="logo">GUILHERME</div>
            <ul>
                <li><a href="?page=home">Início</a></li>
                <li><a href="#">Experiência</a></li>
                <li><a href="#">Habilidades</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <main class="hero">
        <div class="intro">
            <img src="public/img/496770075_18025460666679604_6447041668048996684_n.jpg" style ="border-radius: 50%; width: 200px; height: 200px; object-fit: cover;" alt="Foto de Guilherme Lourenço">
            <h1>Olá,<br>Sou <span class="highlight">Guilherme</span>,</h1>
            <h2><span class="highlight2">Engenheiro de Software</span></h2>
            <p>Crio experiências digitais modernas e responsivas.<br>Vamos construir algo incrível juntos!</p>
            <div class="buttons">
                <a href="https://wa.me/5562991503073" class="btn-primary">Contato</a>
                <a href="public/uploads/currículo Guilherme 2025.pdf" download="public/uploads/currículo Guilherme 2025.pdf" class="btn-secondary">Baixar Currículo ↓</a>
            </div>
            <div class="social">
                <a href="https://github.com/guilhermelorec"><img src="public/img/25231.png" alt="GitHub"></a>
                <a href="https://www.linkedin.com/in/guilherme-louren%C3%A7o-355161275/"><img src="public/img/174857.png" alt="LinkedIn"></a>
            </div>
        </div>

        <div class="code-box">
<pre><code>
const coder = {
    name: "Guilherme",
    skills: ["PHP", "Java", "Python", "Postgresql", "Angular"],
    hardWorker: true,
    problemSolver: true,
    quickLearner: true,
    hireable: function() {
        return this.hardWorker && this.problemSolver && this.skills.length >= 5;
    }
};
</code></pre>
        </div>
    </main>
</body>
</html>
