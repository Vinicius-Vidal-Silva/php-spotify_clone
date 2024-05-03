document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll(".carousel-container .carousel img");
    let timer;

    images.forEach(image => {
        image.addEventListener("mouseover", function() {
            timer = setTimeout(() => {
                const artist = image.alt; // Obtém o nome do artista da imagem
                const audio = new Audio(`../music/${artist}.mp3`); // Cria o elemento de áudio com o caminho da música

                // Define o tempo de início da música de acordo com o artista
                switch (artist) {
                    case "AnaCastela":
                        audio.currentTime = 43;
                        break;
                    case "Gorillaz":
                        audio.currentTime = 82;
                        break;
                    case "NelsonNed":
                        audio.currentTime = 52;
                        break;
                    case "Paramore":
                        audio.currentTime = 35;
                        break;
                    case "ParalamasDoSucesso":
                        audio.currentTime = 20;
                        break;
                    case "RedHotChiliPeppers":
                        audio.currentTime = 90;
                        break;
                    case "OsTravessos":
                        audio.currentTime = 72;
                        break;
                    case "ACDC":
                        audio.currentTime = 26;
                        break;
                    case "CPM22":
                        audio.currentTime = 61;
                        break;
                    case "PinkFloyd":
                        audio.currentTime = 179;
                }

                audio.play(); // Inicia a reprodução da música

                // Define um tempo limite para a reprodução da música (10 segundos neste caso)
                setTimeout(() => {
                    audio.pause(); // Pausa a reprodução da música após 10 segundos
                }, 10000);
            }, 4000); // Tempo de espera para iniciar a reprodução da música (4 segundos)
        });

        image.addEventListener("mouseout", function() {
            clearTimeout(timer); // Cancela o temporizador se o mouse sair da imagem antes dos 4 segundos
        });
    });
});