let coins = document.getElementById("coins");
coins.style.position = "absolute";
coins.style.top = "0";
coins.style.width = "100%";
coins.style.height = "100vh";
coins.style.zIndex = "-1";
for (let i = 0; i < 10; i++) {
  let randomNumberSize = Math.floor(Math.random() * 60) + 20;
  let randomAnimation = Math.floor(Math.random() * 10) + 5;
  var img = document.createElement("img");
  img.setAttribute("src", "pictures/coin.png");
  img.setAttribute("class", i);
  styling = img.style;
  styling.left = `${i * 9.5}%`;
  styling.position = "absolute";

  styling.width = `${randomNumberSize}px`;
  styling.animation = `coins ${randomAnimation}s linear infinite`;
  coins.appendChild(img);
}
