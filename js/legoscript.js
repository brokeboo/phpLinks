//function joon(){
//var p = document.getElementById("plate").getContext("2d");

// Рисуем линию
//p.beginPath();
//p.lineWidth = "5";
//p.strokeStyle = "rgb(255, 228, 196)";

//p.moveTo(20, 20);
//p.lineTo(100, 100);
//p.lineTo(150, 60);

//p.stroke();
//}
function joonista(){
    var p = document.getElementById("plate").getContext("2d");
    // Прямоугольник - шорты
    p.fillStyle = "rgb(0, 0, 139)";
    p.fillRect(120, 80, 60, 15); // x, y, width, height
    // Прямоугольник - на шортах
    p.fillStyle = "white";
    p.fillRect(120, 75, 60, 5); // x, y, width, height
    // Прямоугольник - тело
    p.fillStyle = "rgb(255, 228, 196)";
    p.fillRect(120, 40, 60, 45); // x, y, width, height
    // Прямоугольник - нога 1
    p.fillStyle = "rgb(255, 228, 196)";
    p.fillRect(120, 90, 20, 45); // x, y, width, height
    // Прямоугольник - нога 2
    p.fillStyle = "rgb(255, 228, 196)";
    p.fillRect(160, 90, 20, 45); // x, y, width, height
    // Прямоугольник - рука 1
    p.fillStyle = "rgb(255,228,196)";
    p.fillRect(100, 40, 20, 40); // x, y, width, height
    // Прямоугольник - рука 2
    p.fillStyle = "rgb(255,228,196)";
    p.fillRect(180, 40, 20, 40); // x, y, width, height
    // Круг - голова
    p.beginPath();
    p.arc(150, 25, 15, 0, 2 * Math.PI, true); // x, y, radius,
    p.fillStyle = "rgb(255, 228, 196)";
    p.fill();
    // Прямоугольник - бровь 1
    p.fillStyle = "black";
    p.fillRect(151, 20, 10, 2); // x, y, width, height
    // Прямоугольник - бровь 2
    p.fillStyle = "black";
    p.fillRect(137, 20, 10, 2); // x, y, width, height
    // Круг - глаз1
    p.beginPath();
    p.arc(155, 25, 2, 0, 2 * Math.PI, true); // x, y, radius,
    p.fillStyle = "black";
    p.fill();
    // Круг - глаз2
    p.beginPath();
    p.arc(145, 25, 2, 0, 2 * Math.PI, true); // x, y, radius,
    p.fillStyle = "black";
    p.fill();
}
function shorts(){
    var p = document.getElementById("plate").getContext("2d");
    // Прямоугольник - шорты
    p.fillStyle = "rgb(0, 0, 139)";
    p.fillRect(120, 80, 60, 15); // x, y, width, height
    // Прямоугольник - на шортах
    p.fillStyle = "white";
    p.fillRect(120, 75, 60, 5); // x, y, width, height
}
function brows(){
    var p = document.getElementById("plate").getContext("2d");
    // Прямоугольник - бровь 1
    p.fillStyle = "black";
    p.fillRect(151, 20, 10, 2); // x, y, width, height
    // Прямоугольник - бровь 2
    p.fillStyle = "black";
    p.fillRect(137, 20, 10, 2); // x, y, width, height
}
function telo(){
    var p = document.getElementById("plate").getContext("2d");
    // Прямоугольник - тело
    p.fillStyle = "rgb(255, 228, 196)";
    p.fillRect(120, 40, 60, 45); // x, y, width, height
}
function legs(){
    var p = document.getElementById("plate").getContext("2d");
    // Прямоугольник - нога 1
    p.fillStyle = "rgb(255, 228, 196)";
    p.fillRect(120, 90, 20, 45); // x, y, width, height
    // Прямоугольник - нога 2
    p.fillStyle = "rgb(255, 228, 196)";
    p.fillRect(160, 90, 20, 45); // x, y, width, height
}
function hands(){
    var p = document.getElementById("plate").getContext("2d");
    // Прямоугольник - рука 1
    p.fillStyle = "rgb(255,228,196)";
    p.fillRect(100, 40, 20, 40); // x, y, width, height
    // Прямоугольник - рука 2
    p.fillStyle = "rgb(255,228,196)";
    p.fillRect(180, 40, 20, 40); // x, y, width, height
}
function golova(){
    var p = document.getElementById("plate").getContext("2d");

    // Круг - голова
    p.beginPath();
    p.arc(150, 25, 15, 0, 2 * Math.PI, true); // x, y, radius,
    p.fillStyle = "rgb(255, 228, 196)";
    p.fill();
}
function eyes(){
    var p = document.getElementById("plate").getContext("2d");

    // Круг - глаз1
    p.beginPath();
    p.arc(155, 25, 2, 0, 2 * Math.PI, true); // x, y, radius,
    p.fillStyle = "black";
    p.fill();
    // Круг - глаз2
    p.beginPath();
    p.arc(145, 25, 2, 0, 2 * Math.PI, true); // x, y, radius,
    p.fillStyle = "black";
    p.fill();
}
function kustuta(){
    var p = document.getElementById("plate").getContext("2d");

    p.clearRect(0, 0, 1000, 1000);
}