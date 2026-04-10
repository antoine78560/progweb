let questions = [
    {
        text: "Le T-Rex est un carnivore ?",
        answer: true
    },
    {
        text: "Le Tricératops était un carnivore ?",
        answer: false
    },
    {
        text: "Le Ptéranodon était un reptile volant ?",
        answer: true
    },
    {
        text: "Les dinosaures se sont-ils éteints il y a 66 millions d'années ?",
        answer: true
    }
];

let index = 0;
let score = 0;

function loadQuestion() {
    document.getElementById("question").textContent = questions[index].text;
    document.getElementById("result").textContent = "";
}

function answer(userAnswer) {
    let result = document.getElementById("result");

    if (userAnswer === questions[index].answer) {
        result.textContent = "✅ Bonne réponse !";
        score++;
    } else {
        result.textContent = "❌ Mauvaise réponse !";
    }

    // attendre puis passer à la question suivante
    setTimeout(() => {
        index++;

        if (index < questions.length) {
            loadQuestion();
        } else {
            document.getElementById("question").textContent = "🎉 Quiz terminé !";
            document.getElementById("result").textContent =
                "Ton score : " + score + " / " + questions.length;

            document.getElementById("buttons").style.display = "none";
        }
    }, 1000);
}
function resetQuiz() {
    etape = 1;
    score = 0;

    document.getElementById("question").textContent =
        questions[0].texte;

    document.getElementById("resultat").textContent = "";
    document.getElementById("score").textContent = "Score : 0";

    document.getElementById("buttons").style.display = "block";
}
// charger première question
loadQuestion();

