const maxAvaible = 3;

let $checkbox = $('input[type="checkbox"]');

$checkbox.each(function () {
  $(this).on("click", function (e) {
    let checkedlength = $(`input:checkbox:checked`).length;

    return maxAvaible >= checkedlength ? true : e.preventDefault();
  });
});

/* **************** 2 ****************** */

$("a").each(function (index, elem) {
  console.dir(elem);
  if (location.hostname !== elem.hostname || elem.hostname.length) {
    $(elem).attr("target", "_blank");
  }
});

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
  let maxLength = $(this).data("maxlength");
  let diff = maxLength - currentCount;

  let result =
    diff === 0
      ? ""
      : diff > 0
      ? `осталось : ${maxLength - currentCount} символов`
      : `перешли ${currentCount - maxLength} символов`;

  $("#show-4").html(result);
}

/* **************** 5 ****************** */

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
