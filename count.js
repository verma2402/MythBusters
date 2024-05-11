let countDown ;
let countdownDisplay = document.getElementById("countdown");

function stop() {
    clearInterval(countDown);

}


// Additional functions (like gentext, hexColor, Counter) remain unchanged



function resetCountdown(){
    clearInterval(countDown);
    countdownDisplay.innerHTML="";
}

let currentSentence;
function gentext(){
    var sentence =  [{ text: 'All sugar is bad for you.', type: 'myth' },
    { text: 'Breakfast is the most important meal of the day', type: 'myth' },
    { text: 'Drinking lots of water flushes out toxins', type: 'myth' },
    { text: 'Eating sugar causes diabetes', type: 'myth' },
    { text: 'Mixing bleach and ammonia creates a powerful cleaning agent', type: 'myth' },
    { text: 'Organic food is always healthier than conventionally grown food', type: 'myth' },
    { text: 'Natural remedies are always safer than pharmaceutical drugs', type: 'myth' },
    { text: 'Reading in dim light damages your eyes', type: 'myth' },
    { text: 'Spending more money on healthcare guarantees better care.', type: 'myth' },
    { text: 'You can cure a cold by sweating it out', type: 'myth' },
    { text: 'Spot reduction (burning fat in specific areas) is possible through exercise', type: 'myth' },
    { text: 'Financial advisors can benefit people at all income levels.', type: 'fact' },
    { text: 'Many actively managed funds do not consistently outperform the market.', type: 'fact' },
    { text: 'There is no age to start investing.', type: 'fact' },
    { text: 'Investing often provides higher returns than savings accounts over the long term.', type: 'fact' },
    { text: 'You should pay off all your debt before investing.', type: 'fact' },
    { text: 'More megapixels do not necessarily mean better picture quality.', type: 'fact' }];
    // Add more sentences as needed
    //['All sugar is bad for you. ',
    //                 'Breakfast is the most important meal of the day',
    //             'Drinking lots of water flushes out toxins',
    //             'Eating sugar causes diabetes',
    //             'Mixing bleach and ammonia creates a powerful cleaning agent',
    //             'Organic food is always healthier than conventionally grown food',
    //             'Natural remedies are always safer than pharmaceutical drugs',
    //             'Reading in dim light damages your eyes',
    //             'Spending more money on healthcare guarantees better care.',
    //             'You can cure a cold by sweating it out',
    //             'Spot reduction (burning fat in specific areas) is possible through exercise',
    //             'Reading in dim light damages your eyes',
    //             'You need to "sweat out" a fever.',
    //             'All fats are bad for you.',
    //             'Eating spicy food causes ulcers.',
    //             'Financial advisors can benefit people at all income levels.',
    //             'Many actively managed funds do not consistently outperform the market.',
    //             'There is no age to start investing.',
    //             'Investing often provides higher returns than savings accounts over the long term.',
    //             'You should pay off all your debt before investing.',
    //             'All cloud storage is secure.',
    //             'Macs are immune to viruses and malware.','More megapixels do not necessarily mean better picture quality.',


    //             'Self-driving cars are right around the corner.',
    //             'Multitasking can actually reduce productivity and increase errors.',
    //             'Deepfakes can be detected using advanced analytical tools and techniques.',
    //             'Competition is bad for business.',
    //             'Formal meetings are always necessary for effective communication.',
    //             'You can start a business with a small budget.',


    //             'Eating breakfast is essential for everyone.',
    //             'Nuclear power is too dangerous.',
    //             'Deforestation is not a big deal, trees will grow back.',


    //             'Teachers dont need ongoing professional development.'
    //            ];

    var para = document.querySelector("h4");
    currentSentence =sentence[Math.floor(Math.random()*sentence.length)];
    para.innerHTML= currentSentence.text;
   
}

function MythClick() {
  if (currentSentence.type === 'myth') {
    alert("Correct! The displayed sentence is a myth.");
  } else {
    alert("Incorrect. The displayed sentence is a fact.");
  }
}

function FactClick() {
  if (currentSentence.type === 'fact') {
    alert("Correct! The displayed sentence is a fact.");
  } else {
    alert("Incorrect. The displayed sentence is a myth.");
  }
}

function hexColor() {
    let dig = "0123456789ABCDEF";
    let color = "#";
    for (let i = 0; i < 6; i++) {
      let random = Math.floor(Math.random() * 16);
      color += dig[random];
    }
    return color;
  }
  


let Cooldown; // Interval handle for clearing
let remainingTime = 20; // Default countdown time or could be set dynamically

function Counter() {
    const $counter = document.getElementById("counter");
    const $poster = $counter.children[0];

    function Draw() {
        $poster.textContent = remainingTime;
        const color = hexColor();
        $counter.style.setProperty("--bg-counter", color);
        $counter.animate([{ width: "0", height: "0", fontSize: "0" }, {}], 1000);
    }

    // Clear any existing intervals to ensure no overlaps
    if (Cooldown) clearInterval(Cooldown); 

    Cooldown = setInterval(() => {
        Draw();
        remainingTime -= 1;
        if (remainingTime < 0) {
            $counter.animate([{ opacity: 0 }], { duration: 2000, fill: "forwards" });
            clearInterval(Cooldown);
        }
    }, 1000);
}

function stop() {
    if (Cooldown) {
        clearInterval(Cooldown);
        console.log("Countdown paused at " + remainingTime + " seconds"); // Optional: Output to console
    }
}

function resume() {
    Counter(); // Simply call Counter to resume
}

// Assume hexColor function is defined elsewhere as provided earlier
