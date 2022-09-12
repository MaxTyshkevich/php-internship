const maxAvaible = 3;

let $checkbox = $('input[type="checkbox"]');

$checkbox.each(function () {
  console.log("this", this);

  $(this).on("click", function (e) {
    let checkedlength = $(`input:checkbox:checked`).length;
    console.log(checkedlength);

    return maxAvaible >= checkedlength ? true : e.preventDefault();
  });
});
console.log($checkbox);

/* **************** 3 ****************** */

$("#userWidth").on("input", changeBox);
$("#userHeight").on("input", changeBox);

function changeBox() {
  let value = Number(this.value);
  let prop = this.name;
  $(".box")[prop](value);
}

/* **************** 4 ****************** */

$("#input-4").on("input", showCountSumb);

function showCountSumb(e) {
  let currentCount = $(this).val().length;

  console.log(this.maxLength);
  $("#show-4").html(`осталось : ${this.maxLength - currentCount} `);
}

/* **************** 5 ****************** */

let colors = ["#3454", "#3454", "#3454"];

let text = $("#task-5").text();

makePaintText(text);

function makePaintText(test) {
  let array = test.split("");

  let lastColor = "";
  let result = array.map((letter) => {
    let randomColor = generateColor();

    while (lastColor === randomColor) {
      randomColor = generateColor();
    }

    return letter.match(/\s/)
      ? letter
      : `<span style="color: ${randomColor};">${letter}</span>`;
  });
  $("#task-5").html(result);
}

function generateColor() {
  return "#" + parseInt(Math.random() * 1000000);
}
