function move_events(action) {
  const $ul = $("#event-list");
  let top = parseInt($ul.css("margin-top"));
  if (isNaN(top)) {
    top = 0;
  }

  if (action === "up") {
    top = top - 85 + "px";
  } else {
    top = top + 85 + "px";
  }

  console.log("moviending", action, top, $ul.length);
  $ul.css("margin-top", top);
}

$(".site .left-column  .events .scroll.up").click(function () {
  move_events("up");
});

$(".site .left-column  .events .scroll.down").click(function () {
  move_events("down");
});
