gsap.registerPlugin(ScrollTrigger);

gsap.utils.toArray(".floating").forEach(el => {
  gsap.fromTo(el,
    { opacity: 0, y: 120, rotate: -10 },
    {
      opacity: 1,
      y: 0,
      rotate: 5,
      scrollTrigger: {
        trigger: el.closest(".scene"),
        start: "top 70%",
      }
    }
  );

gsap.to(el, {
  y: "+=14",
  rotate: "+=2",
  duration: 7,
  repeat: -1,
  yoyo: true,
  ease: "sine.inOut"
});


gsap.from(".philosophy-content, .timeline-block, .team", {
  opacity: 0,
  y: 60,
  stagger: 0.2,
  scrollTrigger: {
    trigger: ".scene",
    start: "top 75%"
  }
});

});
