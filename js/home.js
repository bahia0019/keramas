const reviewBloom = function() {
  const e = document.querySelector(".review"),
    o = new TimelineMax({ paused: !0 })
  o.to(e, 2.5, {
    position: "absolute",
    backgroundColor: "#eee",
    width: 500,
    right: 0,
    left: 0,
    transform: "translateX(50%) scale(1.25)",
    borderRadius: 10
  }),
    e.addEventListener("mouseenter", function() {
      o.play(0)
    }),
    e.addEventListener("mouseleave", function() {
      o.reverse(0)
    })
}
reviewBloom()
