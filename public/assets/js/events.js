const events = {
  slider: {
    timer: 0,
    seconds: 15,
    items: {
      height: 90,
    },
    stop: () => {
      if (events.slider.timer) {
        setTimeout(events.slider.timer);
      }
    },
    checkBrandLogoState: () => {
      return new Promise((resolve, reject) => {
        setTimeout(async () => {
          const $img = $("#brand-logo img");
          if ($img.length > 0) {
            if ($img.complete && $img.naturalWidth > 0) {
              resolve();
              return;
            }
            if ($img.error) {
              reject($img.error);
              return;
            }
          }
          try {
            await events.slider.onBrandLoads();
            resolve();
          } catch (err) {
            reject();
          }
        }, 100);
      });
    },
    reconfigure: () => {
      events.slider.stop();
      return new Promise(async (resolve, reject) => {
        try {
          await events.slider.checkBrandLogoState();
        } catch (err) {
          //Do nothing atm.
        }
        setTimeout(() => {
          const $ul = $("#event-list");
          const $brand = $("#brand-logo");
          if ($ul.length < 1) {
            return;
          }
          const $wrapper = $ul.parent();
          const $events = $wrapper.parent();

          const leftSideHeight = $events.parent().height();
          let availableHeight = leftSideHeight - $brand.outerHeight();

          let qty = Math.floor(availableHeight / events.slider.items.height);
          if (qty < 1) {
            qty = 1;
          }
          availableHeight = qty * events.slider.items.height;
          console.log("showing ", qty, availableHeight);
          setTimeout(() => {
            $wrapper.css("height", availableHeight + "px");
            $wrapper.css("opacity", "1");
            $ul.css("margin-top", 0);
            resolve();
            events.slider.play(false);
          }, 100);
        }, 100);
      });
    },
    play: (now = true) => {
      if (now !== false) {
        const $ul = $("#event-list");
        //Cant take ul or their size is lower than container.
        if ($ul.length < 1 || $ul.parent().height() >= $ul.height()) {
          return;
        }
        const movement = events.slider.items.height;
        let current = parseInt($ul.css("margin-top"));
        if (isNaN(current)) {
          current = 0;
        }
        if (current < 0) {
          current = current * -1;
        }
        let next = current + movement;
        if (next >= $ul.outerHeight()) {
          next = 0;
        } else {
          next = next * -1;
        }
        $ul.css("margin-top", next + "px");
      }
      events.slider.stop();
      setTimeout(() => {
        events.slider.play();
      }, events.slider.seconds * 1000);
    },
  },
};
$(window).resize(() => {
  events.slider.reconfigure();
});

$(document).ready(() => {
  events.slider.reconfigure();
});
