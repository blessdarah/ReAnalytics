function moveToNext(t, u) {
    0 < t.value.length &&
        document.querySelector("#digit" + u + "-input").focus();
}
var count = 1,
    value = document.querySelectorAll(".two-step");
value.forEach(function (t) {
    t.addEventListener("keyup", function (t) {
        0 == count && (count = 1),
            8 === t.keyCode
                ? (5 == count && (count = 3),
                  document.querySelector("#digit" + count + "-input") &&
                      document
                          .querySelector("#digit" + count + "-input")
                          .focus(),
                  count--)
                : 0 < count &&
                  (count++,
                  document.querySelector("#digit" + count + "-input") &&
                      document
                          .querySelector("#digit" + count + "-input")
                          .focus());
    });
});
